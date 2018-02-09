@extends('marketing::emails.layout')
@section('header')
    <h1>
        Key Message
    </h1>
@endsection
@section('body')
    <div class="body">
        <div class="default">
            <p>
                Hi [Name],
            </p>
            <p>
                <strong>[TenantName]</strong> has Made an Offer.
            </p>
            <p>
                View the Offer <a href="[OfferDetailURL]"> HERE </a>
            </p>
            <p>
                <i>
                    If you didn't perform this action, please contact Averspace Support <strong>+6591791978</strong> or <strong>admin@averspace.com</strong> immediately.
                </i>
            </p>
        </div>

        @include('marketing::emails.partials.feedback')
    </div>
@endsection