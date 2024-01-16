<x-mail::message>
# New Order

Hello Admin,

A new order has been placed on [Akira Jewellery]. Here are the details:

**Customer Information:**
- **Customer Name:** [{{ $billing['first_name'] . ' ' . $billing['last_name'] }}]
- **Email:** [{{ $billing['email'] }}]
- **Phone:** [{{ $billing['phone'] }}]

**Order Details:**
| Product       | Quantity | Price    |
| ------------- | -------- | -------- |

@foreach ($orders as $order)
| {{ $order['product']->name }}     | {{ $order['quantity'] }}        | ${{ $order['product']->price *  $order['quantity']}}   |
@endforeach

**Shipping Information:**
*Shipping Address:*
[{{ $billing['address_1'] }}]

**Payment Details:**
*Payment Method:*
[Moneris]

---

**Action Required:**

[Admin]({{ route('admin.order') }}) <!-- Replace '#' with the actual link or action for the admin button -->

Please click the button above to process the order and update the system accordingly.

Thank you for your prompt attention.

Best regards,
[Akira Jewellery]
</x-mail::message>
