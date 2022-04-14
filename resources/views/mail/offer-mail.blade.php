@component('mail::message')
# Her Yerde Sağlık

<b>Your Name:</b> {{ $request->name }}<br>
<b>Your Email:</b> {{ $request->email }}<br>
<b>Your Message:</b> {{ $request->message }}<br>
<b>Your Offer Price:</b> {{ $request->price }}$<br>
<b>Your Product:</b> {{ $request->product }}<br>
<b>Your City:</b> {{ $request->city }}<br>



@component('mail::button', ['url' => $url])
Offer List
@endcomponent

<b>Message:</b> {{ $request->emailText }}<br>
<b>Acceptance Status:</b> {{ $request->offerCase }}<br>
<b>OFFER:</b> {{ $request->adminoffer }}$<br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
