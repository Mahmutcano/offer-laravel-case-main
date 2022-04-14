@component('mail::message')
# Her Yerde Sağlık



@component('mail::button', ['url' => 'http://localhost:8000/list-offer'])
Offer List
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
