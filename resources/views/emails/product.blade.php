<x-mail::message>
        # New Product Response from website

        Product Response Details:
        Full Name: {{ $response->full_name }}
        Date : {{$response->date_response}}
        Email: {{ $response->email_address }}
        Contact Number: {{ $response->contact_no }}

         Message:
        {{ $response->message }}

</x-mail::message>
