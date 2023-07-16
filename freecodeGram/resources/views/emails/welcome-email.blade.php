@component('mail::message')
# Introduction

Welcome to FreeCodeGram for developers

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks, Farhan<br>
{{ config('app.name') }}
@endcomponent
