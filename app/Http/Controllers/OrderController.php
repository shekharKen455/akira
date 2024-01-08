<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;

include(app_path() . '/Gateway/mpgClasses.php');

use App\Gateway\mpgTransaction;
use App\Gateway\CofInfo;
use App\Gateway\mpgRequest;
use App\Gateway\mpgHttpsPost;




class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'card_number' => 'required',
            'month' => 'required',
            'year' => 'required|digits:4',
            'cvv' => 'required|digits:3'
        ]);

        $store_id = env('MONERIS_STORE_ID');
        $api_token = env('MONERIS_API_TOKEN');

        /************************* Transactional Variables ****************************/

        $type = 'purchase';
        $order_id = 'order-' . time();
        $amount = $request->sub_amount;
        $pan = $request->card_number;
        $expdate = $request->month . substr($request->year, -2);
        $crypt = '7';

        /*********************** Transactional Associative Array **********************/
        $txnArray = array(
            'type' => $type,
            'order_id' => $order_id,
            'amount' => number_format((float)$amount, 2, '.', ''),
            'pan' => $pan,
            'expdate' => $expdate,
            'crypt_type' => $crypt
        );

        /**************************** Transaction Object *****************************/

        $mpgTxn = new mpgTransaction($txnArray);

        /******************* Credential on File **********************************/

        $cof = new CofInfo();
        $cof->setPaymentIndicator("U");
        $cof->setPaymentInformation("2");
        // $cof->setIssuerId("139X3130ASCXAS9");

        $mpgTxn->setCofInfo($cof);

        /****************************** Request Object *******************************/

        $mpgRequest = new mpgRequest($mpgTxn);
        $mpgRequest->setProcCountryCode("CA"); //"US" for sending transaction to US environment
        // $mpgRequest->setTestMode(true); //false or comment out this line for production transactions

        /***************************** HTTPS Post Object *****************************/

        // Status Check Example test
        // $mpgHttpPost  = new mpgHttpsPost("store4", "yesguy", $mpgRequest);


        $mpgHttpPost = new mpgHttpsPost($store_id, $api_token, $mpgRequest);

        /******************************* Response ************************************/

        $mpgResponse = $mpgHttpPost->getMpgResponse();
        $response = $mpgResponse->responseData;

        if (!((int)$response['ResponseCode'] >= 000 && (int)$response['ResponseCode'] <= 29)) {
            return redirect()->back()->withErrors('Invalid card details!!');
        }

        $user = auth()->user();
        $reqData = $request->only([
            "first_name",
            "last_name",
            "email",
            "phone",
            "address_1",
            "address_2",
            "city",
            "state",
            "country",
            "postcode"
        ]);

        $orderData = [
            'order_id' => $order_id,
            'user_id' => $user->id,
            'notes' => $request->notes ?? null,
            'sub_amount' => $request->sub_amount,
            'total_amount' => $request->sub_amount,
            'address' => json_encode($reqData)
        ];

        $cart = Cart::where('user_id', $user->id)->get();
        if ($cart->isNotEmpty()) {
            // if ($request->has('custom_image')) {
            //     $orderData['custom_image'] = $request->file('custom_image')->store('order/custom', ['disk' => 'public']);
            // }

            $order = Order::create($orderData);
            foreach ($cart as $key => $value) {
                OrderProduct::Create([
                    'user_id' => $user->id,
                    'order_id' => $order->id,
                    'product_id' => $value->product_id,
                    'quantity' => $value->quantity,
                    'length' => $value->length ?? null,
                    'style' => $value->style ?? null,
                    'plating_color' => $value->color ?? null,
                    'custom_text' => $value->custom_text ?? null,
                    'custom_image' => $value->custom_image ?? null,
                ]);

                $value->delete();
            }
        }

        return redirect()->route('account');
    }
}
