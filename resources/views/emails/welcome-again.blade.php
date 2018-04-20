@component('mail::message')
# Introduction

Thanks so much for register!

@component('mail::button', ['url' => 'https://laracast.com'])
    Start Browsing
@endcomponent

@component('mail::panel', ['url' => ''])
    Some inspirational quote to go
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
