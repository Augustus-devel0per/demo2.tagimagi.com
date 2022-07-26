@extends('layouts.website.site')
@section('content')
<style>
    .pl-0 + b{
        background-color: #ff0000ab;
        padding: 0.08em 0.08em;
        color: white;
        font-weight: bold;
    }
    .pl-0 + b + b{
        background-color: #ff0000ab;
        padding: 0.08em 0.08em;
        color: white;
        font-weight: bold;
    }
    .pl-0 + b + b + b{
        background-color: #ff0000ab;
        padding: 0.08em 0.08em;
        color: white;
        font-weight: bold;
    }
    .pl-0 + b + b + b + b{
        background-color: #ff0000ab;
        padding: 0.08em 0.08em;
        color: white;
        font-weight: bold;
    }
    .pl-0 + b + b + b + b + b{
        background-color: #ff0000ab;
        padding: 0.08em 0.08em;
        color: white;
        font-weight: bold;
    }
    .pl-0 + b + b + b + b + b + b{
        background-color: #ff0000ab;
        padding: 0.08em 0.08em;
        color: white;
        font-weight: bold;
    }
    .pl-0 + b + b + b + b + b + b + b{
        background-color: #ff0000ab;
        padding: 0.08em 0.08em;
        color: white;
        font-weight: bold;
    }
    .pl-0 + b + b + b + b + b + b + b + b{
        background-color: #ff0000ab;
        padding: 0.08em 0.08em;
        color: white;
        font-weight: bold;
    }
    .pl-0 + b + b + b + b + b + b + b + b + b{
        background-color: #ff0000ab;
        padding: 0.08em 0.08em;
        color: white;
        font-weight: bold;
    }
    .pl-0 + b + b + b + b + b + b + b + b + b + b{
        background-color: #ff0000ab;
        padding: 0.08em 0.08em;
        color: white;
        font-weight: bold;
    }
    .responsive-table li {
        border-radius: 3px;
        padding: 25px 30px;
        display: flex;
        justify-content: space-between;
        margin-bottom: 25px;
    }
    .responsive-table .table-header {
        background-color: #95a5a6;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 0.03em;
    }
    .responsive-table .table-row {
        background-color: #fff;
        box-shadow: 0px 0px 9px 0px rgba(0, 0, 0, 0.1);
    }
    .responsive-table .col-1 {
        flex-basis: 10%;
    }
    .responsive-table .col-2 {
        flex-basis: 40%;
    }
    .responsive-table .col-3 {
        flex-basis: 25%;
    }
    .responsive-table .col-4 {
        flex-basis: 25%;
    }
    @media all and (max-width: 767px) {
        .responsive-table .table-header {
            display: none;
        }
        .responsive-table li {
            display: block;
        }
        .responsive-table .col {
            flex-basis: 100%;
        }
        .responsive-table .col {
            display: flex;
            padding: 10px 0;
        }
        .responsive-table .col:before {
            color: #6c7a89;
            padding-right: 10px;
            content: attr(data-label);
            flex-basis: 50%;
            text-align: right;
        }
    }

    .showRecaptchaModal {
        border: 1px solid #aad;
        -webkit-border-radius: .5em;
        -moz-border-radius: .5em;
        border-radius: .5em;
        color: #00b;
        font-size: .8em;
        padding-left: .3em;
        padding-right: .3em;
        text-decoration: none;
        white-space: nowrap;
    }
    
    .center-screen {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    #pagin {
        clear: both;
        padding:0;
        /* width:250px; */
        margin:0 auto;
        list-style-type:none;
    }
    #pagin li {
        float:left;
        margin-right:10px;
    }
    #pagin li a {
        display:block;
        color:#717171;
        font:bold 11px;
        text-shadow:0px 1px white;
        padding:5px 8px;
        -webkit-border-radius:3px;
        -moz-border-radius:3px;
        border-radius:3px;
        -webkit-box-shadow:0px 1px 3px 0px rgba(0,0,0,0.35);
        -moz-box-shadow:0px 1px 3px 0px rgba(0,0,0,0.35);
        box-shadow:0px 1px 3px 0px rgba(0,0,0,0.35);
        background:#f9f9f9;
        background:-webkit-linear-gradient(top,#f9f9f9 0%,#e8e8e8 100%);
        background:-moz-linear-gradient(top,#f9f9f9 0%,#e8e8e8 100%);
        background:-o-linear-gradient(top,#f9f9f9 0%,#e8e8e8 100%);
        background:-ms-linear-gradient(top,#f9f9f9 0%,#e8e8e8 100%);
        background:linear-gradient(top,#f9f9f9 0%,#e8e8e8 100%);
        filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#f9f9f9',endColorstr='#e8e8e8',GradientType=0 );
    }
    #pagin li a.current {
        color:white;
        text-shadow:0px 1px #3f789f;
        -webkit-box-shadow:0px 1px 2px 0px rgba(0,0,0,0.8);
        -moz-box-shadow:0px 1px 2px 0px rgba(0,0,0,0.8);
        box-shadow:0px 1px 2px 0px rgba(0,0,0,0.8);
        background:#7cb9e5;
        background:-webkit-linear-gradient(top,#7cb9e5 0%,#57a1d8 100%);
        background:-moz-linear-gradient(top,#7cb9e5 0%,#57a1d8 100%);
        background:-o-linear-gradient(top,#7cb9e5 0%,#57a1d8 100%);
        background:-ms-linear-gradient(top,#7cb9e5 0%,#57a1d8 100%);
        background:linear-gradient(top,#7cb9e5 0%,#57a1d8 100%);
        filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#7cb9e5',endColorstr='#57a1d8',GradientType=0 );
    }
    #pagin li a:hover {
        -webkit-box-shadow:0px 1px 3px 0px rgba(0,0,0,0.55);
        -moz-box-shadow:0px 1px 3px 0px rgba(0,0,0,0.55);
        box-shadow:0px 1px 3px 0px rgba(0,0,0,0.55);
        background:#fff;
        background:-webkit-linear-gradient(top,#fff 0%,#e8e8e8 100%);
        background:-moz-linear-gradient(top,#fff 0%,#e8e8e8 100%);
        background:-o-linear-gradient(top,#fff 0%,#e8e8e8 100%);
        background:-ms-linear-gradient(top,#fff 0%,#e8e8e8 100%);
        background:linear-gradient(top,#fff 0%,#e8e8e8 100%);
        filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#fff',endColorstr='#e8e8e8',GradientType=0 );
    }
    #pagin li a:active,#pagin li a.current:active {
        -webkit-box-shadow:inset 0px 1px 3px 0px rgba(0,0,0,0.5),0px 1px 1px 0px rgba(255,255,255,1) !important;
        -moz-box-shadow:inset 0px 1px 3px 0px rgba(0,0,0,0.5),0px 1px 1px 0px rgba(255,255,255,1) !important;
        box-shadow:inset 0px 1px 3px 0px rgba(0,0,0,0.5),0px 1px 1px 0px rgba(255,255,255,1) !important;
    }
    #pagin li a.current:hover {
        -webkit-box-shadow:0px 1px 2px 0px rgba(0,0,0,0.9);
        -moz-box-shadow:0px 1px 2px 0px rgba(0,0,0,0.9);
        box-shadow:0px 1px 2px 0px rgba(0,0,0,0.9);
        background:#99cefc;
        background:-webkit-linear-gradient(top,#99cefc 0%,#57a1d8 100%);
        background:-moz-linear-gradient(top,#99cefc 0%,#57a1d8 100%);
        background:-o-linear-gradient(top,#99cefc 0%,#57a1d8 100%);
        background:-ms-linear-gradient(top,#99cefc 0%,#57a1d8 100%);
        background:linear-gradient(top,#99cefc 0%,#57a1d8 100%);
        filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#99cefc',endColorstr='#57a1d8',GradientType=0 );
    }

</style>

<h3 class="text-center h3">Search Results</h3>
<div class="row justify-content-md-center">
    <div class="container">
        <x-error-message></x-error-message>
        <x-flash-message></x-flash-message>
    </div>
</div>
<br>


<div class="row justify-content-md-center">
    <div class="container">
        <div class="pl-0">
        <?php $resultCounter = 0 ?>
        @isset($searchType)
            @isset($data[0])
            @if ($data[0] > 0)
            @forelse ($data[0] as $itemOne)
                <div class="card mb-3 content">
                    <div class="card-body text-left">
                        <b class="pl-0">Created:</b> {!! date('F j, Y', strtotime($itemOne['created_at'])) !!}<br>
                        <b class="pl-0">Deletes:</b> {!! date('F j, Y', strtotime($itemOne['created_at']." +10 days")) !!}<br>
                        <b style="color:blue;font-size:15px;">Profile Type:</b><b> {!! $itemOne['tag_type'] !!}</b> <br> 
                            
                        {{-- About You - Start  --}}
                        @if(!empty($itemOne['your_names']) ||
                        ($itemOne['you_are_a']) || 
                        ($itemOne['you_are']) || 
                        ($itemOne['you_are_in']) ||
                        ($itemOne['you_are_from']) ||
                        ($itemOne['you_creation_time']) ||
                        ($itemOne['you_creation_location']) ||
                        ($itemOne['you_are_interested']) ||
                        ($itemOne['you_love']) ||
                        ($itemOne['you_have_to_offer']) ||
                        ($itemOne['you_have_own']) ||
                        ($itemOne['you_are_looking']) ||
                        ($itemOne['you_are_like']))
                        <b style="color:blue;font-size:15px;">About Them:</b><br>
                        @endif
                        
                        @if(!empty($itemOne['your_names']))
                            <b class="pl-0">Their names:</b> {!! $itemOne['your_names'] = str_replace(',', ', ', $itemOne['your_names']) !!} <br>
                        @endif


                        @if(!empty($itemOne['you_are_a']))
                            <b class="pl-0">They are a/an:</b> {!! $itemOne['you_are_a'] = str_replace(',', ', ', $itemOne['you_are_a']) !!} <br>
                        @endif

                        @if(!empty($itemOne['you_are']))
                            <b class="pl-0">They are:</b> {!! $itemOne['you_are'] = str_replace(',', ', ', $itemOne['you_are']) !!} <br>
                        @endif

                        @if(!empty($itemOne['you_are_in']))
                            <b class="pl-0">They are In/on:</b> {!! $itemOne['you_are_in'] = str_replace(',', ', ', $itemOne['you_are_in']) !!} <br>
                        @endif

                        @if(!empty($itemOne['you_are_from']))
                            <b class="pl-0">They are from:</b> {!! $itemOne['you_are_from'] = str_replace(',', ', ', $itemOne['you_are_from']) !!} <br>
                        @endif

                        @if(!empty($itemOne['you_creation_time']))
                            <b class="pl-0">They birth/creation time:</b> {!! $itemOne['you_creation_time'] = str_replace(',', ', ', $itemOne['you_creation_time']) !!} <br>
                        @endif

                        @if(!empty($itemOne['you_creation_location']))
                            <b class="pl-0">They birth/creation location:</b> {!! $itemOne['you_creation_location'] = str_replace(',', ', ', $itemOne['you_creation_location']) !!} <br>
                        @endif
                        
                        @if(!empty($itemOne['you_are_interested']))
                            <b class="pl-0">They are Interested in:</b> {!! $itemOne['you_are_interested'] = str_replace(',', ', ', $itemOne['you_are_interested']) !!} <br>
                        @endif
                        
                        @if(!empty($itemOne['you_love']))
                            <b class="pl-0">They love:</b> {!! $itemOne['you_love'] = str_replace(',', ', ', $itemOne['you_love']) !!} <br>
                        @endif
                        
                        @if(!empty($itemOne['you_have_to_offer']))
                            <b class="pl-0">They have to offer:</b> {!! $itemOne['you_have_to_offer'] = str_replace(',', ', ', $itemOne['you_have_to_offer']) !!}  <br>
                        @endif
                        
                        @if(!empty($itemOne['you_have_own']))
                            <b class="pl-0">They have:</b> {!! $itemOne['you_have_own'] = str_replace(',', ', ', $itemOne['you_have_own']) !!} <br>
                        @endif
                        
                        @if(!empty($itemOne['you_are_looking']))
                            <b class="pl-0">They are looking to obtain/reach:</b> {!! $itemOne['you_are_looking'] = str_replace(',', ', ', $itemOne['you_are_looking']) !!} <br>
                        @endif
                        
                        @if(!empty($itemOne['you_are_like']))
                            <b class="pl-0">They are like/similar to:</b> {!! $itemOne['you_are_like'] = str_replace(',', ', ', $itemOne['you_are_like']) !!} <br>
                        @endif
                        {{-- About You - End  --}}

                        {{-- Looking For - Start  --}}
                        @if(!empty($itemOne['their_names']) || 
                        ($itemOne['they_are_a']) || 
                        ($itemOne['they_are']) || 
                        ($itemOne['they_are_in']) ||
                        ($itemOne['they_are_by']) ||
                        ($itemOne['they_creation_time']) ||
                        ($itemOne['they_creation_location']) ||
                        ($itemOne['they_are_interested']) ||
                        ($itemOne['they_love']) ||
                        ($itemOne['they_have_to_offer']) ||
                        ($itemOne['they_have_own']) ||
                        ($itemOne['they_are_looking_for']) ||
                        ($itemOne['they_are_like']))
                        <b style="color:blue;font-size:15px;">About Who They Are Looking For:</b><br>
                        @endif
                        
                        @if(!empty($itemOne['their_names']))
                            <b class="pl-0">Their names:</b> {!! $itemOne['their_names'] = str_replace(',', ', ', $itemOne['their_names']) !!} <br>
                        @endif

                        @if(!empty($itemOne['they_are_a']))
                            <b class="pl-0">They are a/an:</b> {!! $itemOne['they_are_a'] = str_replace(',', ', ', $itemOne['they_are_a']) !!} <br>
                        @endif
                        
                        @if(!empty($itemOne['they_are']))
                            <b class="pl-0">They are:</b> {!! $itemOne['they_are'] = str_replace(',', ', ', $itemOne['they_are']) !!} <br>
                        @endif
                        
                        @if(!empty($itemOne['they_are_in']))
                            <b class="pl-0">They are In/on:</b> {!! $itemOne['they_are_in'] = str_replace(',', ', ', $itemOne['they_are_in']) !!} <br>
                        @endif
                        
                        @if(!empty($itemOne['they_are_by']))
                            <b class="pl-0">They are from:</b> {!! $itemOne['they_are_by'] = str_replace(',', ', ', $itemOne['they_are_by']) !!} <br>
                        @endif
                        
                        @if(!empty($itemOne['they_creation_time']))
                            <b class="pl-0">Their Birth/Creation Time:</b> {!! $itemOne['they_creation_time'] = str_replace(',', ', ', $itemOne['they_creation_time']) !!} <br>
                        @endif
                        
                        @if(!empty($itemOne['they_creation_location']))
                            <b class="pl-0">Their Birth/Creation Location:</b> {!! $itemOne['they_creation_location'] = str_replace(',', ', ', $itemOne['they_creation_location']) !!} <br>
                        @endif
                        
                        @if(!empty($itemOne['they_are_interested']))
                            <b class="pl-0">They are Interested in:</b> {!! $itemOne['they_are_interested'] = str_replace(',', ', ', $itemOne['they_are_interested']) !!}  <br>
                        @endif
                        
                        @if(!empty($itemOne['they_love']))
                            <b class="pl-0">They Love:</b> {!! $itemOne['they_love'] = str_replace(',', ', ', $itemOne['they_love']) !!} <br>
                        @endif
                        
                        @if(!empty($itemOne['they_have_to_offer']))
                            <b class="pl-0">They have to offer:</b> {!! $itemOne['they_have_to_offer'] = str_replace(',', ', ', $itemOne['they_have_to_offer']) !!}  <br>
                        @endif
                        
                        @if(!empty($itemOne['they_have_own']))
                            <b class="pl-0">They have:</b> {!! $itemOne['they_have_own'] = str_replace(',', ', ', $itemOne['they_have_own']) !!} <br>
                        @endif
                        
                        @if(!empty($itemOne['they_are_looking_for']))
                            <b class="pl-0">They are looking to obtain/reach:</b> {!! $itemOne['they_are_looking_for'] = str_replace(',', ', ', $itemOne['they_are_looking_for']) !!} <br>
                        @endif
                        @if(!empty($itemOne['they_are_like']))
                            <b class="pl-0">They are like/similar to:</b> {!! $itemOne['they_are_like'] = str_replace(',', ', ', $itemOne['they_are_like']) !!} <br>
                        @endif
                        {{-- Looking For - End  --}}

                        {{-- Specific Offer - Start  --}}
                        @if(!empty($itemOne['offer_title']) ||
                        ($itemOne['offer_is_a']) ||
                        ($itemOne['offer_is']) || 
                        ($itemOne['offer_is_in']) ||
                        ($itemOne['offer_time']) ||
                        ($itemOne['offer_provides']) ||
                        ($itemOne['offer_needs']) ||
                        ($itemOne['offer_has']) ||
                        ($itemOne['offer_origin_time']) ||
                        ($itemOne['offer_is_by']) ||
                        ($itemOne['offer_is_about']) ||
                        ($itemOne['offer_is_like']) ||
                        ($itemOne['offer_is_for']) ||
                        ($itemOne['offer_is_to']))
                        <b style="color:blue;font-size:15px;">Specific Offer:</b><br>
                        @endif
                        
                        @if(!empty($itemOne['offer_title']))
                            <b class="pl-0">Offer/product title/name:</b> {!! $itemOne['offer_title'] = str_replace(',', ', ', $itemOne['offer_title']) !!} <br>
                        @endif

                        @if(!empty($itemOne['offer_is_a']))
                            <b class="pl-0">Offer is a/an:</b> {!! $itemOne['offer_is_a'] = str_replace(',', ', ', $itemOne['offer_is_a']) !!} <br>
                        @endif

                        @if(!empty($itemOne['offer_is']))
                            <b class="pl-0">Offer is:</b> {!! $itemOne['offer_is'] = str_replace(',', ', ', $itemOne['offer_is']) !!} <br>
                        @endif

                        @if(!empty($itemOne['offer_is_in']))
                            <b class="pl-0">Location of Offer:</b> {!! $itemOne['offer_is_in'] = str_replace(',', ', ', $itemOne['offer_is_in']) !!} <br>
                        @endif

                        @if(!empty($itemOne['offer_time']))
                            <b class="pl-0">Time of Offer:</b> {!! $itemOne['offer_time'] = str_replace(',', ', ', $itemOne['offer_time']) !!} <br>
                        @endif

                        @if(!empty($itemOne['offer_provides']))
                            <b class="pl-0">Offer Provides:</b> {!! $itemOne['offer_provides'] = str_replace(',', ', ', $itemOne['offer_provides']) !!} <br>
                        @endif
                        

                        @if(!empty($itemOne['offer_needs']))
                            <b class="pl-0">Offer Needs:</b> {!! $itemOne['offer_needs'] = str_replace(',', ', ', $itemOne['offer_needs']) !!} <br>
                        @endif

                        @if(!empty($itemOne['offer_has']))
                            <b class="pl-0">Offer Has:</b> {!! $itemOne['offer_has'] = str_replace(',', ', ', $itemOne['offer_has']) !!}  <br>
                        @endif

                        @if(!empty($itemOne['offer_origin_time']))
                            <b class="pl-0">Product Birth/Creation Time:</b> {!! $itemOne['offer_origin_time'] = str_replace(',', ', ', $itemOne['offer_origin_time']) !!} <br>
                        @endif

                        @if(!empty($itemOne['offer_is_by']))
                            <b class="pl-0">Offer is by:</b> {!! $itemOne['offer_is_by'] = str_replace(',', ', ', $itemOne['offer_is_by']) !!}  <br>
                        @endif

                        @if(!empty($itemOne['offer_is_about']))
                            <b class="pl-0">Offer is about:</b> {!! $itemOne['offer_is_about'] = str_replace(',', ', ', $itemOne['offer_is_about']) !!} <br>
                        @endif

                        @if(!empty($itemOne['offer_is_like']))
                            <b class="pl-0">Offer is like/similar to:</b> {!! $itemOne['offer_is_like'] = str_replace(',', ', ', $itemOne['offer_is_like']) !!} <br>
                        @endif

                        @if(!empty($itemOne['offer_is_for']))
                            <b class="pl-0">Offer is for:</b> {!! $itemOne['offer_is_for'] = str_replace(',', ', ', $itemOne['offer_is_for']) !!} <br>
                        @endif

                        @if(!empty($itemOne['offer_is_to']))
                            <b class="pl-0">Offer is to:</b> {!! $itemOne['offer_is_to'] = str_replace(',', ', ', $itemOne['offer_is_to']) !!} <br>
                        @endif
                        {{-- Specific Offer - End  --}}

                        {{-- Specific Request - Start  --}}
                        @if(!empty($itemOne['request_title']) || 
                        ($itemOne['request_is_a']) ||
                        ($itemOne['request_is']) || 
                        ($itemOne['request_is_in']) ||
                        ($itemOne['request_time']) ||
                        ($itemOne['request_provides']) ||
                        ($itemOne['request_needs']) ||
                        ($itemOne['request_has']) ||
                        ($itemOne['request_origin_time']) ||
                        ($itemOne['request_is_by']) ||
                        ($itemOne['request_is_about']) ||
                        ($itemOne['request_is_like']) ||
                        ($itemOne['request_is_for']) ||
                        ($itemOne['request_is_to']))
                        <b style="color:blue;font-size:15px;">Specific Request:</b><br>
                        @endif
                        
                        @if(!empty($itemOne['request_title']))
                            <b class="pl-0">Request/product title/name:</b> {!! $itemOne['request_title'] = str_replace(',', ', ', $itemOne['request_title']) !!} <br>
                        @endif

                        @if(!empty($itemOne['request_is_a']))
                            <b class="pl-0">Request is a/an:</b> {!! $itemOne['request_is_a'] = str_replace(',', ', ', $itemOne['request_is_a']) !!} <br>
                        @endif

                        @if(!empty($itemOne['request_is']))
                            <b class="pl-0">Request is:</b> {!! $itemOne['request_is'] = str_replace(',', ', ', $itemOne['request_is']) !!} <br>
                        @endif

                        @if(!empty($itemOne['request_is_in']))
                            <b class="pl-0">Location of Request:</b> {!! $itemOne['request_is_in'] = str_replace(',', ', ', $itemOne['request_is_in']) !!} <br>
                        @endif

                        @if(!empty($itemOne['request_time']))
                            <b class="pl-0">Time of Request:</b> {!! $itemOne['request_time'] = str_replace(',', ', ', $itemOne['request_time']) !!} <br>
                        @endif

                        @if(!empty($itemOne['request_provides']))
                            <b class="pl-0">Request Provides:</b> {!! $itemOne['request_provides'] = str_replace(',', ', ', $itemOne['request_provides']) !!} <br>
                        @endif

                        @if(!empty($itemOne['request_needs']))
                            <b class="pl-0">Request Needs:</b> {!! $itemOne['request_needs'] = str_replace(',', ', ', $itemOne['request_needs']) !!} <br>
                        @endif

                        @if(!empty($itemOne['request_has']))
                            <b class="pl-0">Request Has:</b> {!! $itemOne['request_has'] = str_replace(',', ', ', $itemOne['request_has']) !!} <br>
                        @endif

                        @if(!empty($itemOne['request_origin_time']))
                            <b class="pl-0">Birth/Creation Time of Product/Request:</b> {!! $itemOne['request_origin_time'] = str_replace(',', ', ', $itemOne['request_origin_time']) !!} <br>
                        @endif

                        @if(!empty($itemOne['request_is_by']))
                            <b class="pl-0">Request is by:</b> {!! $itemOne['request_is_by'] = str_replace(',', ', ', $itemOne['request_is_by']) !!} <br>
                        @endif

                        @if(!empty($itemOne['request_is_about']))
                            <b class="pl-0">Request is about:</b> {!! $itemOne['request_is_about'] = str_replace(',', ', ', $itemOne['request_is_about']) !!} <br>
                        @endif

                        @if(!empty($itemOne['request_is_like']))
                            <b class="pl-0">Request is like/similar to:</b> {!! $itemOne['request_is_like'] = str_replace(',', ', ', $itemOne['request_is_like']) !!} <br>
                        @endif

                        @if(!empty($itemOne['request_is_for']))
                            <b class="pl-0">Request is for:</b> {!! $itemOne['request_is_for'] = str_replace(',', ', ', $itemOne['request_is_for']) !!} <br>
                        @endif

                        @if(!empty($itemOne['request_is_to']))
                            <b class="pl-0">Request is to:</b> {!! $itemOne['request_is_to'] = str_replace(',', ', ', $itemOne['request_is_to']) !!} <br>
                        @endif
                        {{-- Specific Request - End  --}}

                        {{-- Contact Info - Start  --}}
                        <div class="contactInfo" style="display: none">
                            <b style="color:blue;font-size:15px;">Contact Info:</b><br>
                            
                            @if(!empty($itemOne['you_can_contact']))
                                <b class="pl-0">Contact/Meet me at:</b> {!! $itemOne['you_can_contact'] = str_replace(',', ', ', $itemOne['you_can_contact']) !!} <br>
                            @endif

                            @if(!empty($itemOne['you_can_contact_me_at']))
                                <b class="pl-0">Date/Time(s) to contact me:</b> {!! $itemOne['you_can_contact_me_at'] = str_replace(',', ', ', $itemOne['you_can_contact_me_at']) !!} <br>
                            @endif

                            @if(!empty($itemOne['profile_website']))
                                <b class="pl-0">{!! $itemOne['verification_code'] !!} verified at :</b> {{ $itemOne['profile_website'] = str_replace(',', ', ', $itemOne['profile_website']) }}
                            @endif
                        </div>
                        <button class="showRecaptchaModal" type="button" style="display: block">show contact info</button>
                        {{-- Contact Info - End  --}}
                    </div>
                </div>
            <?php $resultCounter++ ?>
            @empty
            <div class="card">
                <div class="card-body text-center">
                    <h3 class="h3">No Results.</h3>
                </div>
            </div>
            @endforelse
            @endif
            @endisset
        @endisset
        </div>
        <?php 
            $check = ($resultCounter % 3);
            if($check == 0){
                $pageCounter = intdiv($resultCounter, 3); 
            }else{
                $pageCounter = intdiv($resultCounter, 3)+1; 
            }
        ?>
        @if($pageCounter > 1)
        <div class="center-screen">
            <ul id="pagin">
                <?php for ($i = 1; $i <= $pageCounter; $i++) { ?>
                <li><a class="<?php if($i==1) { ?>current<?php } ?>" href="javascript:void(0)">{{ $i }}</a></li>
                <?php } ?>
            </ul>
        </div>
        @endif
    </div>
    <a href="{{ url('/search') }}" class="btn btn-primary">Back to Search Page</a>
</div>
<br>

<div class="row justify-content-md-center" style="bottom: 0;">
    <p>{{ setting()->footer_text ?? 'Copyright @ TagiMagi' }}</p>
</div>

<div class="modal fade" id="recaptchaModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div id="captcha"></div>
        </div>
      </div>
    </div>
</div>

<script>
    $(".showRecaptchaModal").click(function() {
        $("#recaptchaModal").modal("show");
        setTimeout(function() {
            createRecaptcha();
        }, 100);
    });

    function createRecaptcha() {
        grecaptcha.render("captcha", {
            sitekey: "{{ config('services.recaptcha.site_key') }}",
            callback: correctCaptcha,
            theme: "light"
        });
    }

    var correctCaptcha = function(response) {
        //alert(response);
        if(response.length != 0){
            setTimeout(function() {
                $('#recaptchaModal').modal('toggle');
                $(".showRecaptchaModal").hide();
                $(".contactInfo").show();
            }, 1000);
            
        }
    };
    
    pageSize = 3;

    showPage = function(page) {
        $(".content").hide();
        $(".content").each(function(n) {
            if (n >= pageSize * (page - 1) && n < pageSize * page)
                $(this).show();
        });        
    }
        
    showPage(1);

    $("#pagin li a").click(function() {
        $("#pagin li a").removeClass("current");
        $(this).addClass("current");
        showPage(parseInt($(this).text())) 
    });
</script>
@endsection