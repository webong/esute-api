@component('mail::message')
# Welcome To Esute.NG

{{ 'Hello,' }}

{{ $name }} has invited you to join

**{{ $group->name }}**

@isset($message) __{{ $message }}__ @endisset

Please use the code below to join the group on the platform.

{{ $invite_code }}

Thanks,<br />

{{ config('app.name') }}
@endcomponent
