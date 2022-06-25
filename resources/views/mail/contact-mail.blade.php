@component('mail::message')
# Contact Mail

Firstname: {{ $firstname }}
Lastname: {{ $lastname }}

{{ $message }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
