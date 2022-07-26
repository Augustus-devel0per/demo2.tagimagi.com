@extends('layouts.website.site')
@section('content')

<style>
    ul li{
        padding: 3px !important;
        margin-left: 15px !important;
    }
</style>
    <h3 class="text-center h3">Please review your tag profile before submission. Tag Profiles cannot be edited after submission and automatically delete from website after 10 days</h3>
    <div class="row justify-content-md-center">
        <div class="container">
            <x-error-message></x-error-message>
            <x-flash-message></x-flash-message>
        </div>
    </div>
    <br>
    <div class="row justify-content-md-center">
        <div class="card">
            <div class="card-body text-left">
                <form action="{{ route('save.form-one') }}" method="POST">    

                    @csrf

                    <input type="hidden" name="tag_type" value="{{ $form['tag_type'] ?? '' }}">
                    <input type="hidden" name="you_are" value="{{ $form['you_are'] ?? '' }}">
                    <input type="hidden" name="you_are_in" value="{{ $form['you_are_in'] ?? '' }}">
                    <input type="hidden" name="you_are_from" value="{{ $form['you_are_from'] ?? '' }}">
                    <input type="hidden" name="you_are_interested" value="{{ $form['you_are_interested'] ?? '' }}">
                    <input type="hidden" name="you_love" value="{{ $form['you_love'] ?? '' }}">
                    <input type="hidden" name="you_have_to_offer" value="{{ $form['you_have_to_offer'] ?? '' }}">
                    <input type="hidden" name="you_have_own" value="{{ $form['you_have_own'] ?? '' }}">
                    <input type="hidden" name="you_are_looking" value="{{ $form['you_are_looking'] ?? '' }}">
                    <input type="hidden" name="you_can_contact" value="{{ $form['you_can_contact'] ?? '' }}">
                    <input type="hidden" name="you_can_contact_me_at" value="{{ $form['you_can_contact_me_at'] ?? '' }}">
                    <input type="hidden" name="they_are" value="{{ $form['they_are'] ?? '' }}">
                    <input type="hidden" name="they_are_a" value="{{ $form['they_are_a'] ?? '' }}">
                    <input type="hidden" name="they_are_in" value="{{ $form['they_are_in'] ?? '' }}">
                    <input type="hidden" name="they_are_by" value="{{ $form['they_are_by'] ?? '' }}">
                    <input type="hidden" name="they_are_interested" value="{{ $form['they_are_interested'] ?? '' }}">
                    <input type="hidden" name="they_love" value="{{ $form['they_love'] ?? '' }}">
                    <input type="hidden" name="they_have_to_offer" value="{{ $form['they_have_to_offer'] ?? '' }}">
                    <input type="hidden" name="they_have_own" value="{{ $form['they_have_own'] ?? '' }}">
                    <input type="hidden" name="they_are_looking_for" value="{{ $form['they_are_looking_for'] ?? '' }}">
                    <input type="hidden" name="it_is_a" value="{{ $form['it_is_a'] ?? '' }}">
                    <input type="hidden" name="it_is" value="{{ $form['it_is'] ?? '' }}">
                    <input type="hidden" name="it_is_in" value="{{ $form['it_is_in'] ?? '' }}">
                    <input type="hidden" name="it_is_by" value="{{ $form['it_is_by'] ?? '' }}">
                    <input type="hidden" name="it_has" value="{{ $form['it_has'] ?? '' }}">
                    <input type="hidden" name="it_is_for" value="{{ $form['it_is_for'] ?? '' }}">
                    <input type="hidden" name="it_needs" value="{{ $form['it_needs'] ?? '' }}">
                    <input type="hidden" name="it_is_about" value="{{ $form['it_is_about'] ?? '' }}">
                    <input type="hidden" name="you_can_contact" value="{{ $form['you_can_contact'] ?? '' }}">
                    <input type="hidden" name="you_can_contact_at" value="{{ $form['you_can_contact_at'] ?? '' }}">


                <blockquote class="blockquote blockquote-primary mb-0">
                    <h4 class="h4">Type: {{ $form['tag_type'] ?? '' }}</h4>
                    <div id="individual" style="display: none">
                        <ul class="list-group list-group-flush" style="color: rgb(0, 0, 0)">
                            <li class="list-group-item"><strong>About You:</strong></li>
                            <li class="list-group-item">You are : <strong>{{ $form['you_are'] ?? '' }}</strong></li>
                            <li class="list-group-item">You are a/an: <strong>{{ $form['you_are_a'] ?? '' }}</strong></li>
                            <li class="list-group-item">You are in/on: <strong>{{ $form['you_are_in'] ?? '' }}</strong></li>
                            <li class="list-group-item">You are from: <strong>{{ $form['you_are_from'] ?? '' }}</strong></li>
                            <li class="list-group-item">You are interested in: <strong>{{ $form['you_are_interested'] ?? '' }}</strong></li>
                            <li class="list-group-item">You love: <strong>{{ $form['you_love'] ?? '' }}</strong></li>
                            <li class="list-group-item">You have to offer, give, or share: <strong>{{ $form['you_have_to_offer'] ?? '' }}</strong></li>
                            <li class="list-group-item">You have, own, or possess: <strong>{{ $form['you_have_own'] ?? '' }}</strong></li>
                            <li class="list-group-item">You are looking for (to obtain or reach): <strong>{{ $form['you_are_looking'] ?? '' }}</strong></li>

                            <li class="list-group-item"><strong>About Who Your Are Looking For:</strong></li>
                            <li class="list-group-item">They are : <strong>{{ $form['they_are'] ?? '' }}</strong></li>
                            <li class="list-group-item">They are a/an: <strong>{{ $form['they_are_a'] ?? '' }}</strong></li>
                            <li class="list-group-item">They are in/on: <strong>{{ $form['they_are_in'] ?? '' }}</strong></li>
                            <li class="list-group-item">They are from: <strong>{{ $form['they_are_by'] ?? '' }}</strong></li>
                            <li class="list-group-item">They are interested in: <strong>{{ $form['they_are_interested'] ?? '' }}</strong></li>
                            <li class="list-group-item">They love: <strong>{{ $form['they_love'] ?? '' }}</strong></li>
                            <li class="list-group-item">They have to offer, give, or share: <strong>{{ $form['they_have_to_offer'] ?? '' }}</strong></li>
                            <li class="list-group-item">They have, own, or possess: <strong>{{ $form['they_have_own'] ?? '' }}</strong></li>
                            <li class="list-group-item">They are looking for (to obatain or reach): <strong>{{ $form['they_are_looking_for'] ?? '' }}</strong></li>
                            <li class="list-group-item">You can contact me at: <strong>{{ $form['you_can_contact'] ?? '' }}</strong></li>
                            <li class="list-group-item">Date and Times(s) to contact me: <strong>{{ $form['you_can_contact_me_at'] ?? '' }}</strong></li>
                        </ul>
                    </div>

                    <div id="everything-else" style="display: none">

                        <ul class="list-group list-group-flush" style="color: rgb(0, 0, 0)">
                            <li class="list-group-item"><strong>Everything else( products, items, nonpersons ):</strong></li>
                            <li class="list-group-item">About it:</li>
                            <li class="list-group-item">It is a/an: <strong>{{ $form['it_is_a'] ?? '' }}</strong></li>
                            <li class="list-group-item">It is: <strong>{{ $form['it_is'] ?? '' }}</strong></li>
                            <li class="list-group-item">It is in/on: <strong>{{ $form['it_is_in'] ?? '' }}</strong></li>
                            <li class="list-group-item">It is by/from: <strong>{{ $form['it_is_by'] ?? '' }}</strong></li>
                            <li class="list-group-item">It has/contains: <strong>{{ $form['it_has'] ?? '' }}</strong></li>
                            <li class="list-group-item">It offers, gives, or provides: <strong>{{ $form['it_is_for'] ?? '' }}</strong></li>
                            <li class="list-group-item">It needs or requires: <strong>{{ $form['it_needs'] ?? '' }}</strong></li>
                            <li class="list-group-item">It is about (for content): <strong>{{ $form['it_is_about'] ?? '' }}</strong></li>
                            <li class="list-group-item">You can contact it at: <strong>{{ $form['you_can_contact'] ?? '' }}</strong></li>
                            <li class="list-group-item">Date and Times(s) to contact it: <strong>{{ $form['you_can_contact_at'] ?? '' }}</strong></li>
                        </ul>
                    </div>

                </blockquote>

                <div class="justify-content-md-right" style="margin-left: 10px">
                    <a href="{{route('page', 'submit-a-tag-profile')}}" class="btn btn-danger btn-round">Go Back</a>
                    <button type="submit" class="btn btn-primary btn-round">Submit Data</button>
                </div>

                </form>

            </div>
        </div>
    </div>

    <br>
    <div class="row justify-content-md-center">
        <p>{{ setting()->footer_text ?? 'Copyright @ TagiMagi' }}</p>
    </div>

@endsection
@section('jquery')
<script>
    $(document).ready(function(){

        let type = "{{ $form['tag_type'] ?? '' }}";
        if(type == 'Individual' || type == 'Couple/Trio' || type == 'Collection of People'){
            $('#individual').show();
            
        }else if(type == 'Everything Else'){
            $('#everything-else').show();
        }

    });
</script>
@endsection