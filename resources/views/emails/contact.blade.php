<x-mail::message>
        # New Inquiry Submission

        New Contact Inquiry. Below are the details:

        Contact Details:
        Name: {{ $contact->name }}
        Email: {{ $contact->email }}
        Contact Number: {{ $contact->contact_no }}
        Subject: {{ $contact->subject }}

         Message:
        {{ $contact->message }}

</x-mail::message>
