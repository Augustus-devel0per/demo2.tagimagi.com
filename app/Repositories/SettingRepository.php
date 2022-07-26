<?php


namespace App\Repositories;

use App\Models\Setting;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Str;

class SettingRepository
{

    public function update(Request $request,Setting $setting)
    {   

            if ($request->file('logo')) {

                if(\File::exists(public_path('images/logo/'.$setting->logo))){
                    \File::delete(public_path('images/logo/'.$setting->logo));
                }
                // $imageName = $request->logo->getClientOriginalName().'-'.time().'.'.$request->logo->extension();  
                $imageName = $request->logo->getClientOriginalName(). '-logo' .$request->logo->extension();  
                $setting->update([
                    'logo' => $imageName
                ]);
                $request->logo->move(public_path('images/logo'), $imageName);
    
            }
    
            $setting->update([
                'website_name' => $request->website_name,
                'description' => $request->description,
                'email' => $request->email,
                'footer_text' => $request->footer_text,
            ]);
            try{
    
            return true;

            
        }catch(Exception $exception){
            session()->flash('alert-danger','Error while Updating Setting');
            return null;
        }
    }
}