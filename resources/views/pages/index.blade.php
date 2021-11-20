@extends('base')

@section('content')

<style>
    img {
        width: 1000px;
        padding: 20px;
    }
</style>

<body>

    <div class="welcome">
        <img src="{{ asset('welcomevisitors.jpg') }}" alt="welcomevisitor-image">
    </div>

</body>

@stop
