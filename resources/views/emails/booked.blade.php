@component('mail::message')
# We have received your booking

Hello {{ $data['name'] }},

You have successfully booked <b>{{ $data['product_name'] }}</b>

We will be in contact with you shortly, you can browse our other products by clicking the link below.

@component('mail::button', ['url' => url('/')])
Browse Products
@endcomponent

Thank You,<br>
{{ setting('site-name') }}
@endcomponent
