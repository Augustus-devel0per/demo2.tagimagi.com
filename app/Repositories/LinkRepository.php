<?php


namespace App\Repositories;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Exception;

class LinkRepository
{
    public function get()
    {
        $links = Link::latest()->get();
        return $links;
    }

    public function store(Request $request)
    {   

        try{

            $lastId = Link::latest()->first('id');
            $linkId = ( $lastId == null ) ? 0 : $lastId->id;
            $linkId++;
    
            $popupLink = env('APP_URL') .'link'.$linkId;

            Link::create([
                'popup_link' => $popupLink,
                'tracking_link' => $request->tracking_link,
            ]);

            return true;

        }catch(Exception $exception){

            session()->flash('alert-danger','Error while Saving Link');
            return null;

        }
    }

    public function update(Request $request,Link $link)
    {
        try{

            $link->update([
                'tracking_link' => $request->tracking_link,
            ]);

            return true;

        }catch(Exception $exception){

            session()->flash('alert-danger','Error while Updating Link');
            return null;

        }
    }

    public function delete(Link $link)
    {
        try{

            $link->delete();
            return true;

        }catch(Exception $exception){

            session()->flash('alert-danger','Error while Deleteing Link');
            return null;

        }
    }
}
