@component('mail::message')
# Someone wants to contact you

From {{ $data->from }}

Message:

{{ $data->message }}

<br>
{{ config('app.name') }}
@endcomponent
