@component('mail::message')
Hello {{ $name }}!!
<br>
<h3> {{ $title }}</h3>
<br>
{{ $message }}
@component('mail::button',['url'=>'https://technorio.com'])
Click here
@endcomponent
@endcomponent


