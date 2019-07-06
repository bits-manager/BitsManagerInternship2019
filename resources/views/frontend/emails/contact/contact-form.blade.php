@component('mail::message')


#Thank you for your message
<strong>Name:</strong>{{$data['contact_name']}}

<strong>Email:</strong>{{$data['email']}}

<strong>Subject:</strong>{{$data['subject']}}

<strong>Message:</strong>{{$data['message']}}

@endcomponent