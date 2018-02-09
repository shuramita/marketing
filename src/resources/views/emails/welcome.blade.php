@extends('marketing::emails.layout')
@section('header')
    <h1>
        Welcome to Averspace!
    </h1>
    <h2>
        First block-chain enabled real-estate platform in Singapore!
    </h2>
    <span class="button-white">
            <a href="{{$links->home}}">VISIT AVERSPACE</a>
    </span>
@endsection
@section('body')
    <div class="body">
        <p>
            Hi [Name],
        </p>
        <p>
            We love real estate and we love to help you find your Ideal Tenant or Buyer!
        </p>
        <p>
            With technology, our platform will help to Search and Match, Connect you with your Prospect, and complete your Rental Contract and Payments on our platform."
        </p>

        <h3>Our key features</h3>
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
            <tr>
                <td valign="top" style="width: 50px;"><img src="{{$images->icon_office_block}}"/></td>
                <td valign="top">
                    <h4>Real Estate Market Place</h4>
                    <ul>
                        <li>Property listing</li>
                        <li>Advanced search function</li>
                        <li>Property alerts</li>
                        <li>Online Direct Chat</li>
                    </ul>
                    <a href="{{$links->listing}}" class="read-more">Find out more</a>
                </td>
            </tr>
        </table>
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
            <tr>
                <td valign="top" style="width: 50px;"><img src="{{$images->icon_contract}}"/></td>
                <td valign="top">
                    <h4>Digital Rental Agreements and Electronic Signing</h4>
                    <ul>
                        <li>Intent to Rent</li>
                        <li>Tenancy Agreement</li>
                    </ul>
                    <a href="{{$links->digital}}" class="read-more">Find out more</a>
                </td>
            </tr>
        </table>
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
            <tr>
                <td valign="top" style="width: 50px;"><img src="{{$images->icon_search}}"/></td>
                <td valign="top">
                    <h4>Get Matched</h4>
                    <ul>
                        <li>Indicate your preferences to find your ideal homeowner / homeseeker!</li>
                        <li>Get pinged by us when an ideal homeowner / homeseeker joins our network!</li>
                    </ul>
                    <a href="{{$links->survey}}" class="read-more">Find out more</a>
                </td>
            </tr>
        </table>
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
            <tr>
                <td valign="top" style="width: 50px;"><img src="{{$images->icon_credit_card}}"/></td>
                <td valign="top">
                    <h4>Electronic Payment of Rental Contract</h4>
                    <ul>
                        <li>Payment of Rental Deposit and First Month Rent.</li>
                        <li>Scheduling of Regular Rental Payments against Digital Tenancy Agreements.</li>
                    </ul>
                    <a href="{{$links->payment}}" class="read-more">Find out more</a>
                </td>
            </tr>
        </table>
        @include('marketing::emails.partials.preferences')
        @include('marketing::emails.partials.signature')
    </div>
@endsection