@extends('lay.layout')

@section('content')
    <P class="font-mono text-blue-600">Albums infomation:</P>
    {{ $albums->name }}
    {{ $albums->year }}
    {{ $albums->times_sold }}
@endsection
