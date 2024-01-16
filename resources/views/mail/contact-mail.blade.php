<x-mail::message>
# Contact Form Submission Notification

Dear Team,

A new contact form has been submitted with the following details:

| **Field**   | **Value**                            |
| ------------| ------------------------------------ |
| **Name**    | *{{ $request['name'] }}* |
| **Email**   | *{{ $request['email'] }}*|
| **Message** | *{{ $request['message'] }}* |

---

*Please take the necessary steps to respond to the inquiry promptly.*

---

*Generated on: {{ date('d/m/Y H:i:s') }}*


Thanks,<br>
Akira Jewellery
</x-mail::message>
