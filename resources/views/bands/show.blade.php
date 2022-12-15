@extends('lay.layout')

@section('content')
    <P class="font-mono text-blue-600">Bands infomation:</P>
    {{ $bands->name }}
    {{ $bands->genre }}
    {{ $bands->founded }}
    {{ $bands->active_till }}
@endsection
