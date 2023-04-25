<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        color: rgb(110, 108, 108);
        font-size: 1.1rem;
        padding: 1rem;
    }
</style>

<p>Dearest Create My Health directors,</p>

<p>{{ $request->name }} registered his/her interest in helping CMH.</p>

<p>Details:</p>

<p>Name: {{ $request->name }}</p>
<p>Email: {{ $request->email }}</p>
<p>Phone: {{ $request->phone }}</p>
@if ($request->pract)
<p>Practitioner: Yes</p>
@endif
@if ($request->volunteer)
<p>Volunteer: Yes</p>
@endif

<p>{{ $request->name }} left the following message:</p>
<span style="color: #939090;">“{!! $request->message !!}”</span>

<p>Your daahling IT team at</p>

<img style="height: 4rem" src="{{ $message->embed(base_path('public/storage/images/cmh_whole.svg')) }}" alt="">