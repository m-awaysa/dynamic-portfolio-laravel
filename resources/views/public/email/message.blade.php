@component('mail::message')
# {{$mail->mail_subject}}
From:{{$mail->mail_name}}
 {{$mail->mail_body}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
