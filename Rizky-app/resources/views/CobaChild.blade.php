@extends('Coba')

@section('title', 'Page title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar</p>
@endsection

@section('content')
    <p>This is my body content</p>

    @component('Alert')
        @slot('title')
            Forbidden
        @endslot

        <strong>Whoopss !</strong>
    @endcomponent
@endsection