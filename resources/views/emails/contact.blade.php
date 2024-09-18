<x-mail::message>
        # New {{$contact->subject}} from website

        Contact Details:
        Name: {{ $contact->name }}
        Email: {{ $contact->email }}
        Contact Number: {{ $contact->contact_no }}

         Message:
        {{ $contact->message }}

</x-mail::message>
