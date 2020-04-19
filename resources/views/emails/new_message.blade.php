@component('mail::message')

# New Message
---

{{ $name  }} sent a new message at <small>{{ $created_at }}</small>


> {{ $customer_message }}


{{ $email }} | {{ $phone }}


@endcomponent
