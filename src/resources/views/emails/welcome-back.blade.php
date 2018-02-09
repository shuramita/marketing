@extends('marketing::emails.layout')
@section('header')

        <h1>
            <a href="{{$links->home}}">Welcome Back</a>
        </h1>

@endsection
@section('body')
    <div class="body">
        <p>
            Hi [Name],
        </p>
        <p>
            Welcome back to Averspace! Its been [NumberOfDate] days since you returned.
        </p>

        <h3>Since then we have provided the following listings:</h3>

        @include('marketing::emails.partials.property')


        @include('marketing::emails.partials.preferences')
        @include('marketing::emails.partials.download')
        @include('marketing::emails.partials.feedback')
        @include('marketing::emails.partials.signature')
    </div>
@endsection