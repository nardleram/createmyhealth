@extends('layouts.layout')

@section('content')

<div class="mb-10 mt-24">
    @foreach ($responses as $response)
        <p>{{ $response->name }}</p>
        <p>{{ $response->healthcare_barriers_waiting_lists }}</p>
    @endforeach
</div>

@endsection