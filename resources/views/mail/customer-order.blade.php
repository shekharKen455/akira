<x-mail::message>
    # Dear [{{ $billing['first_name'] . ' ' . $billing['last_name'] }}],

    Thank you for choosing Akira Jewellery! We're excited to inform you that your recent order has been successfully placed. Below, you'll find a summary of your purchase:

    **Billing Information:**
    - **Name:** [{{ $billing['first_name'] . ' ' . $billing['last_name'] }}]
    - **Email:** [{{ $billing['email'] }}]
    - **Phone:** [{{ $billing['phone'] }}]

    **Order Details:**
    | Product | Quantity | Price |
    | ------------- | -------- | -------- |

    @foreach ($orders as $order)
    | {{ $order['product']->name }} | {{ $order['quantity'] }} | ${{ $order['product']->price *  $order['quantity']}} |
    @endforeach

    **Shipping Information:**
    *Shipping Address:*
    [{{ $billing['address_1'] }}]

    **Payment Details:**
    *Payment Method:*
    [Moneris]

    ---

    **Action Required:**

    [Login]({{ route('login') }})
    <!-- Replace '#' with the actual link or action for the admin button -->

    We're working on processing your order swiftly. If you have any questions or need further assistance, feel free to reach out to us..

    Thank you for choosing Akira Jewellery. We appreciate your business!

    Best regards,
    [Akira Jewellery Team]
</x-mail::message>
