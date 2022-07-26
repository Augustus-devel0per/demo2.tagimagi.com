@extends('layouts.website.site')
@section('content')

<h2 class="text-center h2">Submit a Tag Profile</h2>

<div class="row justify-content-md-center">
    <div class="col-md-5">
        <div class="form-group">
            <select name="type" id="type" class="form-control" required >
                <option value="">Select Profile type</option>
                @isset($form['tag_type'])
                    <option value="Individual" @if($form['tag_type'] == 'Individual') selected @endif>Individual</option>
                    <option value="Couple/Trio"@if($form['tag_type'] == 'Couple/Trio') selected @endif>Couple/Trio</option>
                    <option value="Collection of People" @if($form['tag_type'] == 'Collection of People') selected @endif>Collection of People</option>
                    <option value="Everything Else" @if($form['tag_type'] == 'Everything Else') selected @endif>Everything Else</option>
                @else
                    <option value="Individual" selected>Individual</option>
                    <option value="Couple/Trio">Couple/Trio</option>
                    <option value="Collection of People">Collection of People</option>
                    <option value="Everything Else">Everything Else</option>
                @endisset

            </select>
        </div>
    </div>

</div>
<div class="row justify-content-md-center">
    <div class="container">
        <x-error-message></x-error-message>
        <x-flash-message></x-flash-message>
    </div>
</div>
<br>

<div class="row" id="individual" style="display: none">
    
    <form action="{{ route('verify.form-one') }}" method="POST">

        @csrf

    <div class="col-md-12">
        <h4 class="h4">Submit About Individual, Couple/Trio, and/or Collection of People:</h4>
    </div>

    <input type="hidden" name="tag_type" id="tag_type_individual" value="Individual" >

    <div class="form-group col-md-6">
        <input type="text" name="you_are" class="form-control" placeholder="You are:" value="{{ $form['you_are'] ?? old('you_are') }}" >
    </div><div class="col-md-6"></div>

    <div class="form-group col-md-6">
        <input type="text" name="you_are_a"  class="form-control" placeholder="You are a/an:" value="{{ $form['you_are_a'] ?? old('you_are_a') }}">
    </div><div class="col-md-6"></div>

    <div class="form-group col-md-6">
        <input type="text" name="you_are_in"  class="form-control" placeholder="You are in/on (location):" value="{{ $form['you_are_in'] ?? old('you_are_in') }}">
    </div><div class="col-md-6"></div>

    <div class="form-group col-md-6">
        <input type="text" name="you_are_from" class="form-control" placeholder="You are from:" value="{{ $form['you_are_from'] ?? old('you_are_from') }}">
    </div><div class="col-md-6"></div>            

    <div class="form-group col-md-6">
        <input type="text" name="you_are_interested" class="form-control" placeholder="You are interested in:" value="{{ $form['you_are_interested'] ?? old('you_are_interested') }}">
    </div><div class="col-md-6"></div>

    <div class="form-group col-md-6">
        <input type="text" name="you_love" class="form-control" placeholder="You love:" value="{{ $form['you_love'] ?? old('you_love') }}">
    </div><div class="col-md-6"></div>

    <div class="form-group col-md-6">
        <input type="text" name="you_have_to_offer" class="form-control" placeholder="You have to offer, give, or share:" value="{{ $form['you_have_to_offer'] ?? old('you_have_to_offer') }}">
    </div><div class="col-md-6"></div>

    <div class="form-group col-md-6">
        <input type="text" name="you_have_own" class="form-control" placeholder="You have, own, or posses:" value="{{ $form['you_have_own'] ?? old('you_have_own') }}">
    </div><div class="col-md-6"></div>

    <div class="form-group col-md-6">
        <input type="text" name="you_are_looking" class="form-control" placeholder="You are looking for:" value="{{ $form['you_are_looking'] ?? old('you_are_looking') }}">
    </div><div class="col-md-6"></div>            

    <div class="form-group col-md-6">
        <input type="text" name="you_can_contact" class="form-control" placeholder="You can contact me at:" value="{{ $form['you_can_contact'] ?? old('you_can_contact') }}">
    </div><div class="col-md-6"></div>

    <div class="form-group col-md-6">
        <input type="text" name="you_can_contact_me_at" class="form-control" placeholder="Date and Time(s) to contact me:" value="{{ $form['you_can_contact_me_at'] ?? old('you_can_contact_me_at') }}">
    </div><div class="col-md-6"></div>


    <div class="col-md-12">
        <h4 class="h4">The following describes the type of person/people you are looking for, and not yourself. You Are Looking For a Person or People who is/are:</h4>
    </div>

    <div class="form-group col-md-6">
        <input type="text" name="they_are" class="form-control" placeholder="They are:" value="{{ $form['they_are'] ?? old('they_are') }}">
    </div><div class="col-md-6"></div>

    <div class="form-group col-md-6">
        <input type="text" name="they_are_a" class="form-control" placeholder="They are a/an:" value="{{ $form['they_are_a'] ?? old('they_are_a') }}">
    </div><div class="col-md-6"></div>            

    <div class="form-group col-md-6">
        <input type="text" name="they_are_in" class="form-control" placeholder="They are in/on (location)" value="{{ $form['they_are_in'] ?? old('they_are_in') }}">
    </div><div class="col-md-6"></div>

    <div class="form-group col-md-6">
        <input type="text" name="they_are_by" class="form-control" placeholder="They are by/from:" value="{{ $form['they_are_by'] ?? old('they_are_by') }}">
    </div><div class="col-md-6"></div>

    <div class="form-group col-md-6">
        <input type="text" name="they_are_interested" class="form-control" placeholder="They are interested in:" value="{{ $form['they_are_interested'] ?? old('they_are_interested') }}">
    </div><div class="col-md-6"></div>            

    <div class="form-group col-md-6">
        <input type="text" name="they_love" class="form-control" placeholder="They love:" value="{{ $form['they_love'] ?? old('they_love') }}">
    </div><div class="col-md-6"></div>

    <div class="form-group col-md-6">
        <input type="text" name="they_have_to_offer" class="form-control" placeholder="They have to offer,give or share:" value="{{ $form['they_have_to_offer'] ?? old('they_have_to_offer') }}">
    </div><div class="col-md-6"></div>

    <div class="form-group col-md-6">
        <input type="text" name="they_have_own" class="form-control" placeholder="They have, own, or posses:" value="{{ $form['they_have_own'] ?? old('they_have_own') }}">
    </div><div class="col-md-6"></div>            

    <div class="form-group col-md-6">
        <input type="text" name="they_are_looking_for" class="form-control" placeholder="They are looking for:" value="{{ $form['they_are_looking_for'] ?? old('they_are_looking_for') }}">
    </div><div class="col-md-6"></div>

    <div class="form-group col-md-6">
        
            <button type="submit" class="btn btn-primary btn-round">Submit</button>
       
    </div><div class="col-md-6"></div>

    </form>


</div>

<br><br>

<div class="row" id="everything-else" style="display: none">

    <form action="{{ route('verify.form-one') }}" method="POST" > 
    
    @csrf

    <div class="col-md-12">
        <h3 class="h3">Submit About Everything Else:</h3>
        <h4 class="h4">Submit Tag Profiles for Products, Things, Objects, etc. or anything that is not a Person or Collection of People:</h4>
    </div>

    <input type="hidden" name="tag_type" id="tag_type_everything" value="Everything Else">

    <div class="form-group col-md-6">
    <input type="text" name="it_is_a" class="form-control" placeholder="It is a/an, They are a/an:" value="{{ $form['it_is_a'] ?? old('it_is_a') }}">
    </div><div class="col-md-6"></div>

    <div class="form-group col-md-6">
    <input type="text" name="it_is" class="form-control" placeholder="It is, They are:" value="{{ $form['it_is'] ?? old('it_is') }}">
    </div><div class="col-md-6"></div>

    <div class="form-group col-md-6">
    <input type="text" name="it_is_in" class="form-control" placeholder="It is in/on, They are in/on (location):" value="{{ $form['it_is_in'] ?? old('it_is_in') }}">
    </div><div class="col-md-6"></div>

    <div class="form-group col-md-6">
    <input type="text" name="it_is_by" class="form-control" placeholder="It is by/from, They are by/from (origin):" value="{{ $form['it_is_by'] ?? old('it_is_by') }}">
    </div><div class="col-md-6"></div>

    <div class="form-group col-md-6">
    <input type="text" name="it_has" class="form-control" placeholder="It has/contains, They have/contain:" value="{{ $form['it_has'] ?? old('it_has') }}">
    </div><div class="col-md-6"></div>

    <div class="form-group col-md-6">
    <input type="text" name="it_is_for" class="form-control" placeholder="It is for, It offers/gives/provides:" value="{{ $form['it_is_for'] ?? old('it_is_for') }}">
    </div><div class="col-md-6"></div>

    <div class="form-group col-md-6">
    <input type="text" name="it_needs" class="form-control" placeholder="It needs or requires:" value="{{ $form['it_needs'] ?? old('it_needs') }}">
    </div><div class="col-md-6"></div>

    <div class="form-group col-md-6">
    <input type="text" name="it_is_about" class="form-control" placeholder="It is about (for content):" value="{{ $form['it_is_about'] ?? old('it_is_about') }}">
    </div><div class="col-md-6"></div>

    <div class="form-group col-md-6">
    <input type="text" name="you_can_contact" class="form-control" placeholder="You can contact it/them at:" value="{{ $form['you_can_contact'] ?? old('you_can_contact') }}">
    </div><div class="col-md-6"></div>

    <div class="form-group col-md-6">
    <input type="text" name="you_can_contact_at" class="form-control" placeholder="Date and time(s) to contact it/them:" value="{{ $form['you_can_contact_at'] ?? old('you_can_contact_at') }}">
    </div><div class="col-md-6"></div>         

    <div class="form-group col-md-6">
        <button type="submit" class="btn btn-primary btn-round">Submit</button>
    </div><div class="col-md-6"></div>    
    
</form>

</div>

<br><br>
@endsection

@section('jquery')
<script>
    $(document).ready(function(){
        
        let type = $('#type').val();
        if(type == 'Individual' || type == 'Couple/Trio' || type == 'Collection of People'){
            $('#individual').show();
            
        }else if(type == 'Everything Else'){
            $('#everything-else').show();
        }

        $('#type').change(function(){
            let type = $(this).val();
            if(type == 'Individual' || type == 'Couple/Trio' || type == 'Collection of People'){
                    $('#everything-else').hide();
                    $('#individual').show();
                    $('#tag_type_individual').val(type);

                }else if(type == 'Everything Else'){
                    $('#individual').hide();
                    $('#everything-else').show();
                    $('#tag_type_everything').val(type);
                }
        })

    })
</script>
@endsection