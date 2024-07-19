@extends('layout.master')
@section('content')
    <hr>
    <h3 class="font-weight-bold text-center">Welcome
        @if(session()->exists('name'))
            {{session()->get('name')}}
        @endif
    </h3>
@endsection
