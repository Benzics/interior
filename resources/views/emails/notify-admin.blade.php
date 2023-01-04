@component('mail::message')
# New Booking Received

Hello Admin,
The user {{ $data['email'] }} just booked {{ $data['product_name'] }}

@component('mail::button', ['url' => url('/admin/dashboard')])
Login to dashboard
@endcomponent

{{ config('app.name') }}
@endcomponent
