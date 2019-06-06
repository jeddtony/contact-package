@component('mail::message')
# Introduction

The body of your message.

There is a message from {{$name}}
Message:
{{$message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
