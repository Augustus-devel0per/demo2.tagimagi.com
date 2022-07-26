<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TagProfileFormOne;
use App\Models\TagProfileFormTwo;
use App\Models\TagProfileFormThree;
use Exception;

class TagProfileController extends Controller
{   
    public function verifyForTagProfileDataOne(Request $request){

        $validated = $request->validate([
            'you_can_contact' => 'required',
        ]);
        
        session()->flush();
        $request->session()->PUT('formdata', $_POST);
        return redirect()->route('page', 'verfiy-tag-profile');

    }

    public function SaveTagProfileDataOne(Request $request){

        try{
        
            if($request->tag_type == 'Individual' || $request->tag_type == 'Couple/Trio' || $request->tag_type == 'Collection of People'){

                $tagOne = TagProfileFormOne::create([
                    'tag_type' => $request->tag_type,
                    'you_are' => $request->you_are,
                    'you_are_a' => $request->you_are_a,
                    'you_are_in' => $request->you_are_in,
                    'you_are_from' => $request->you_are_from,
                    'you_are_interested' => $request->you_are_interested,
                    'you_love' => $request->you_love,
                    'you_have_to_offer' => $request->you_have_to_offer,
                    'you_have_own' => $request->you_have_own,
                    'you_are_looking' => $request->you_are_looking,
                    'you_can_contact' => $request->you_can_contact,
                    'you_can_contact_me_at' => $request->you_can_contact_me_at,
                ]);

                $latestId = $tagOne->id;

                TagProfileFormTwo::create([
                    'tag_profile_form_one_id' => $latestId,
                    'they_are' => $request->they_are,
                    'they_are_a' => $request->they_are_a,
                    'they_are_in' => $request->they_are_in,
                    'they_are_by' => $request->they_are_by,
                    'they_are_interested' => $request->they_are_interested,
                    'they_love' => $request->they_love,
                    'they_have_to_offer' => $request->they_have_to_offer,
                    'they_have_own' => $request->they_have_own,
                    'they_are_looking_for' => $request->they_are_looking_for
                ]);

        
            }elseif($request->tag_type == 'Everything Else'){

                $tagOne = TagProfileFormThree::create([
                    'tag_type' => $request->tag_type,
                    'it_is_a' => $request->it_is_a,
                    'it_is' => $request->it_is,
                    'it_is_in' => $request->it_is_in,
                    'it_is_by' => $request->it_is_by,
                    'it_has' => $request->it_has,
                    'it_is_for' => $request->it_is_for,
                    'it_needs' => $request->it_needs,
                    'it_is_about' => $request->it_is_about,
                    'you_can_contact' => $request->you_can_contact,
                    'you_can_contact_at' => $request->you_can_contact_at,
                ]);

            }

            session()->flush();
            session()->flash('alert-success','Your Data has been Saved');
            return redirect('/');

        }catch(Exception $exception){
        
            session()->flash('alert-danger','Error while Saving Data');
            return back();

        }

    }
    

}
