<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tag;
use App\Models\TagProfileFormTwo;
use App\Models\TagProfileFormThree;
use DB;

class SearchController extends Controller
{
    public function highlight($searchResult, $searchInput) {
        preg_match_all('~\w+~', $searchInput, $m);
        if(!$m)
            return $searchResult;
        $re = '~\\b(' . implode('|', $m[0]) . ')\\b~';
        return preg_replace($re, '<b>$0</b>', $searchResult);
    }

    public function searchByTagTypeOrAll(Request $request){

        $data = [];
        $tag = [];
        $slug = 'Search result';
        $searchType = $request->tag_type;

        // Search keyword
        $query = Tag::query();
        $searchInput = $request->search_query;
        $string = str_replace(' ',',',$searchInput);
        $keywords = explode(',',$string);
        $keywords = str_replace(' ', '', $keywords);

        if($request->search_query == NULL){
            //$tag = Tag::get()->toArray();
            array_push($data, $tag);
        }else{
            if($request->tag_type == 'all_tags')
            {
                foreach($keywords as $key => $element) {
                    $query->orWhere('your_names', 'like', '%'.$element.'%')
                    ->orWhere('you_are_a', 'like', '%'.$element.'%')
                    ->orWhere('you_are', 'like', '%'.$element.'%')
                    ->orWhere('you_are_in', 'like', '%'.$element.'%')
                    ->orWhere('you_are_from', 'like', '%'.$element.'%')
                    ->orWhere('you_creation_time', 'like', '%'.$element.'%')
                    ->orWhere('you_creation_location', 'like', '%'.$element.'%')
                    ->orWhere('you_are_interested', 'like', '%'.$element.'%')
                    ->orWhere('you_love', 'like', '%'.$element.'%')
                    ->orWhere('you_have_to_offer', 'like', '%'.$element.'%')
                    ->orWhere('you_have_own', 'like', '%'.$element.'%')
                    ->orWhere('you_are_looking', 'like', '%'.$element.'%')
                    ->orWhere('you_are_like', 'like', '%'.$element.'%')
                    ->orWhere('their_names', 'like', '%'.$element.'%')
                    ->orWhere('they_are_a', 'like', '%'.$element.'%')
                    ->orWhere('they_are', 'like', '%'.$element.'%')
                    ->orWhere('they_are_in', 'like', '%'.$element.'%')
                    ->orWhere('they_are_by', 'like', '%'.$element.'%')
                    ->orWhere('they_creation_time', 'like', '%'.$element.'%')
                    ->orWhere('they_creation_location', 'like', '%'.$element.'%')
                    ->orWhere('they_are_interested', 'like', '%'.$element.'%')
                    ->orWhere('they_love', 'like', '%'.$element.'%')
                    ->orWhere('they_have_to_offer', 'like', '%'.$element.'%')
                    ->orWhere('they_have_own', 'like', '%'.$element.'%')
                    ->orWhere('they_are_looking_for', 'like', '%'.$element.'%')
                    ->orWhere('they_are_like', 'like', '%'.$element.'%')
                    ->orWhere('offer_title', 'like', '%'.$element.'%')
                    ->orWhere('offer_is_a', 'like', '%'.$element.'%')
                    ->orWhere('offer_is', 'like', '%'.$element.'%')
                    ->orWhere('offer_is_in', 'like', '%'.$element.'%')
                    ->orWhere('offer_time', 'like', '%'.$element.'%')
                    ->orWhere('offer_provides', 'like', '%'.$element.'%')
                    ->orWhere('offer_needs', 'like', '%'.$element.'%')
                    ->orWhere('offer_has', 'like', '%'.$element.'%')
                    ->orWhere('offer_origin_time', 'like', '%'.$element.'%')
                    ->orWhere('offer_is_by', 'like', '%'.$element.'%')
                    ->orWhere('offer_is_about', 'like', '%'.$element.'%')
                    ->orWhere('offer_is_like', 'like', '%'.$element.'%')
                    ->orWhere('offer_is_for', 'like', '%'.$element.'%')
                    ->orWhere('offer_is_to', 'like', '%'.$element.'%')
                    ->orWhere('request_title', 'like', '%'.$element.'%')
                    ->orWhere('request_is_a', 'like', '%'.$element.'%')
                    ->orWhere('request_is', 'like', '%'.$element.'%')
                    ->orWhere('request_is_in', 'like', '%'.$element.'%')
                    ->orWhere('request_time', 'like', '%'.$element.'%')
                    ->orWhere('request_provides', 'like', '%'.$element.'%')
                    ->orWhere('request_needs', 'like', '%'.$element.'%')
                    ->orWhere('request_has', 'like', '%'.$element.'%')
                    ->orWhere('request_origin_time', 'like', '%'.$element.'%')
                    ->orWhere('request_is_by', 'like', '%'.$element.'%')
                    ->orWhere('request_is_about', 'like', '%'.$element.'%')
                    ->orWhere('request_is_like', 'like', '%'.$element.'%')
                    ->orWhere('request_is_for', 'like', '%'.$element.'%')
                    ->orWhere('request_is_to', 'like', '%'.$element.'%');
                }
            }
            elseif($request->tag_type == 'all_abouts')
            {
                foreach($keywords as $key => $element) {
                    $query->orWhere('your_names', 'like', '%'.$element.'%')
                    ->orWhere('you_are_a', 'like', '%'.$element.'%')
                    ->orWhere('you_are', 'like', '%'.$element.'%')
                    ->orWhere('you_are_in', 'like', '%'.$element.'%')
                    ->orWhere('you_are_from', 'like', '%'.$element.'%')
                    ->orWhere('you_creation_time', 'like', '%'.$element.'%')
                    ->orWhere('you_creation_location', 'like', '%'.$element.'%')
                    ->orWhere('you_are_interested', 'like', '%'.$element.'%')
                    ->orWhere('you_love', 'like', '%'.$element.'%')
                    ->orWhere('you_have_to_offer', 'like', '%'.$element.'%')
                    ->orWhere('you_have_own', 'like', '%'.$element.'%')
                    ->orWhere('you_are_looking', 'like', '%'.$element.'%')
                    ->orWhere('you_are_like', 'like', '%'.$element.'%');
                }
            }
            elseif($request->tag_type == 'all_lookings')
            {
                foreach($keywords as $key => $element) {
                    $query->orWhere('their_names', 'like', '%'.$element.'%')
                    ->orWhere('they_are_a', 'like', '%'.$element.'%')
                    ->orWhere('they_are', 'like', '%'.$element.'%')
                    ->orWhere('they_are_in', 'like', '%'.$element.'%')
                    ->orWhere('they_are_by', 'like', '%'.$element.'%')
                    ->orWhere('they_creation_time', 'like', '%'.$element.'%')
                    ->orWhere('they_creation_location', 'like', '%'.$element.'%')
                    ->orWhere('they_are_interested', 'like', '%'.$element.'%')
                    ->orWhere('they_love', 'like', '%'.$element.'%')
                    ->orWhere('they_have_to_offer', 'like', '%'.$element.'%')
                    ->orWhere('they_have_own', 'like', '%'.$element.'%')
                    ->orWhere('they_are_looking_for', 'like', '%'.$element.'%')
                    ->orWhere('they_are_like', 'like', '%'.$element.'%');
                }
            }
            elseif($request->tag_type == 'all_offers_requests')
            {
                foreach($keywords as $key => $element) {
                    $query->orWhere('offer_title', 'like', '%'.$element.'%')
                    ->orWhere('offer_is_a', 'like', '%'.$element.'%')
                    ->orWhere('offer_is', 'like', '%'.$element.'%')
                    ->orWhere('offer_is_in', 'like', '%'.$element.'%')
                    ->orWhere('offer_time', 'like', '%'.$element.'%')
                    ->orWhere('offer_provides', 'like', '%'.$element.'%')
                    ->orWhere('offer_needs', 'like', '%'.$element.'%')
                    ->orWhere('offer_has', 'like', '%'.$element.'%')
                    ->orWhere('offer_origin_time', 'like', '%'.$element.'%')
                    ->orWhere('offer_is_by', 'like', '%'.$element.'%')
                    ->orWhere('offer_is_about', 'like', '%'.$element.'%')
                    ->orWhere('offer_is_like', 'like', '%'.$element.'%')
                    ->orWhere('offer_is_for', 'like', '%'.$element.'%')
                    ->orWhere('offer_is_to', 'like', '%'.$element.'%')
                    ->orWhere('request_title', 'like', '%'.$element.'%')
                    ->orWhere('request_is_a', 'like', '%'.$element.'%')
                    ->orWhere('request_is', 'like', '%'.$element.'%')
                    ->orWhere('request_is_in', 'like', '%'.$element.'%')
                    ->orWhere('request_time', 'like', '%'.$element.'%')
                    ->orWhere('request_provides', 'like', '%'.$element.'%')
                    ->orWhere('request_needs', 'like', '%'.$element.'%')
                    ->orWhere('request_has', 'like', '%'.$element.'%')
                    ->orWhere('request_origin_time', 'like', '%'.$element.'%')
                    ->orWhere('request_is_by', 'like', '%'.$element.'%')
                    ->orWhere('request_is_about', 'like', '%'.$element.'%')
                    ->orWhere('request_is_like', 'like', '%'.$element.'%')
                    ->orWhere('request_is_for', 'like', '%'.$element.'%')
                    ->orWhere('request_is_to', 'like', '%'.$element.'%');
                }
            }
            elseif($request->tag_type == 'all_offers')
            {
                foreach($keywords as $key => $element) {
                    $query->orWhere('offer_title', 'like', '%'.$element.'%')
                    ->orWhere('offer_is_a', 'like', '%'.$element.'%')
                    ->orWhere('offer_is', 'like', '%'.$element.'%')
                    ->orWhere('offer_is_in', 'like', '%'.$element.'%')
                    ->orWhere('offer_time', 'like', '%'.$element.'%')
                    ->orWhere('offer_provides', 'like', '%'.$element.'%')
                    ->orWhere('offer_needs', 'like', '%'.$element.'%')
                    ->orWhere('offer_has', 'like', '%'.$element.'%')
                    ->orWhere('offer_origin_time', 'like', '%'.$element.'%')
                    ->orWhere('offer_is_by', 'like', '%'.$element.'%')
                    ->orWhere('offer_is_about', 'like', '%'.$element.'%')
                    ->orWhere('offer_is_like', 'like', '%'.$element.'%')
                    ->orWhere('offer_is_for', 'like', '%'.$element.'%')
                    ->orWhere('offer_is_to', 'like', '%'.$element.'%');
                }
            }
            elseif($request->tag_type == 'all_requests')
            {
                foreach($keywords as $key => $element) {
                    $query->orWhere('request_title', 'like', '%'.$element.'%')
                    ->orWhere('request_is_a', 'like', '%'.$element.'%')
                    ->orWhere('request_is', 'like', '%'.$element.'%')
                    ->orWhere('request_is_in', 'like', '%'.$element.'%')
                    ->orWhere('request_time', 'like', '%'.$element.'%')
                    ->orWhere('request_provides', 'like', '%'.$element.'%')
                    ->orWhere('request_needs', 'like', '%'.$element.'%')
                    ->orWhere('request_has', 'like', '%'.$element.'%')
                    ->orWhere('request_origin_time', 'like', '%'.$element.'%')
                    ->orWhere('request_is_by', 'like', '%'.$element.'%')
                    ->orWhere('request_is_about', 'like', '%'.$element.'%')
                    ->orWhere('request_is_like', 'like', '%'.$element.'%')
                    ->orWhere('request_is_for', 'like', '%'.$element.'%')
                    ->orWhere('request_is_to', 'like', '%'.$element.'%');
                }
            }
        }
        $search = $query->get()->toArray();
        foreach($keywords as $element){
            foreach ($search as $key => $value){
                //$search[$key] = preg_replace("/($element)/i","<span class='simple-highlight'>$0</span>",$value);
                $search[$key] = preg_replace("/($element)/i","<b>$0</b>",$value);
            }
        }
        array_push($data, $search);
        //dd($data);
        return view('website.results', compact('data', 'slug', 'searchType', 'searchInput'));
    }

    public function searchForm(Request $request){

        $data = [];
        $search = [];
        $keywordsCombine = [];
        $slug = 'Search result';
        $searchType = 'partial';
        $query = Tag::query();
        $searchInput = NULL;

        $tag_type = ($request->tag_type !== null) ? $request->tag_type : [];
        $your_names = ($request->your_names !== null) ? $request->your_names : null;
        $you_are_a = ($request->you_are_a !== null) ? $request->you_are_a : null;
        $you_are = ($request->you_are !== null) ? $request->you_are : null;
        $you_are_in = ($request->you_are_in !== null) ? $request->you_are_in : null;
        $you_are_from = ($request->you_are_from !== null) ? $request->you_are_from : null;
        $you_creation_time = ($request->you_creation_time !== null) ? $request->you_creation_time : null;
        $you_creation_location = ($request->you_creation_location !== null) ? $request->you_creation_location : null;
        $you_are_interested = ($request->you_are_interested !== null) ? $request->you_are_interested : null;
        $you_love = ($request->you_love !== null) ? $request->you_love : null;
        $you_have_to_offer = ($request->you_have_to_offer !== null) ? $request->you_have_to_offer : null;
        $you_have_own = ($request->you_have_own !== null) ? $request->you_have_own : null;
        $you_are_looking = ($request->you_are_looking !== null) ? $request->you_are_looking : null;
        $you_are_like = ($request->you_are_like !== null) ? $request->you_are_like : null;
        $their_names = ($request->their_names !== null) ? $request->their_names : null;
        $they_are_a = ($request->they_are_a !== null) ? $request->they_are_a : null;
        $they_are = ($request->they_are !== null) ? $request->they_are : null;
        $they_are_in = ($request->they_are_in !== null) ? $request->they_are_in : null;
        $they_are_by = ($request->they_are_by !== null) ? $request->they_are_by : null;
        $they_creation_time = ($request->they_creation_time !== null) ? $request->they_creation_time : null;
        $they_creation_location = ($request->they_creation_location !== null) ? $request->they_creation_location : null;
        $they_are_interested = ($request->they_are_interested !== null) ? $request->they_are_interested : null;
        $they_love = ($request->they_love !== null) ? $request->they_love : null;
        $they_have_to_offer = ($request->they_have_to_offer !== null) ? $request->they_have_to_offer : null;
        $they_have_own = ($request->they_have_own !== null) ? $request->they_have_own : null;
        $they_are_looking_for = ($request->they_are_looking_for !== null) ? $request->they_are_looking_for : null;
        $they_are_like = ($request->they_are_like !== null) ? $request->they_are_like : null;
        $offer_title = ($request->offer_title !== null) ? $request->offer_title : null;
        $offer_is_a = ($request->offer_is_a !== null) ? $request->offer_is_a : null;
        $offer_is = ($request->offer_is !== null) ? $request->offer_is : null;
        $offer_is_in = ($request->offer_is_in !== null) ? $request->offer_is_in : null;
        $offer_time = ($request->offer_time !== null) ? $request->offer_time : null;
        $offer_provides = ($request->offer_provides !== null) ? $request->offer_provides : null;
        $offer_needs = ($request->offer_needs !== null) ? $request->offer_needs : null;
        $offer_has = ($request->offer_has !== null) ? $request->offer_has : null;
        $offer_origin_time = ($request->offer_origin_time !== null) ? $request->offer_origin_time : null;
        $offer_is_by = ($request->offer_is_by !== null) ? $request->offer_is_by : null;
        $offer_is_about = ($request->offer_is_about !== null) ? $request->offer_is_about : null;
        $offer_is_like = ($request->offer_is_like !== null) ? $request->offer_is_like : null;
        $offer_is_for = ($request->offer_is_for !== null) ? $request->offer_is_for : null;
        $offer_is_to = ($request->offer_is_to !== null) ? $request->offer_is_to : null;
        $request_title = ($request->request_title !== null) ? $request->request_title : null;
        $request_is_a = ($request->request_is_a !== null) ? $request->request_is_a : null;
        $request_is = ($request->request_is !== null) ? $request->request_is : null;
        $request_is_in = ($request->request_is_in !== null) ? $request->request_is_in : null;
        $request_time = ($request->request_time !== null) ? $request->request_time : null;
        $request_provides = ($request->request_provides !== null) ? $request->request_provides : null;
        $request_needs = ($request->request_needs !== null) ? $request->request_needs : null;
        $request_has = ($request->request_has !== null) ? $request->request_has : null;
        $request_origin_time = ($request->request_origin_time !== null) ? $request->request_origin_time : null;
        $request_is_by = ($request->request_is_by !== null) ? $request->request_is_by : null;
        $request_is_about = ($request->request_is_about !== null) ? $request->request_is_about : null;
        $request_is_like = ($request->request_is_like !== null) ? $request->request_is_like : null;
        $request_is_for = ($request->request_is_for !== null) ? $request->request_is_for : null;
        $request_is_to = ($request->request_is_to !== null) ? $request->request_is_to : null;

        if ($request->your_names !== null) {
            $string = str_replace(' ',',',$your_names);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('your_names', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->you_are_a !== null) {
            $string = str_replace(' ',',',$you_are_a);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('you_are_a', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->you_are !== null) {
            $string = str_replace(' ',',',$you_are);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('you_are', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->you_are_in !== null) {
            $string = str_replace(' ',',',$you_are_in);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('you_are_in', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->you_are_from !== null) {
            $string = str_replace(' ',',',$you_are_from);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('you_are_from', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->you_creation_time !== null) {
            $string = str_replace(' ',',',$you_creation_time);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('you_creation_time', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->you_creation_location !== null) {
            $string = str_replace(' ',',',$you_creation_location);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('you_creation_location', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->you_are_interested !== null) {
            $string = str_replace(' ',',',$you_are_interested);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('you_are_interested', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->you_love !== null) {
            $string = str_replace(' ',',',$you_love);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('you_love', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->you_have_to_offer !== null) {
            $string = str_replace(' ',',',$you_have_to_offer);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('you_have_to_offer', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->you_have_own !== null) {
            $string = str_replace(' ',',',$you_have_own);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('you_have_own', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->you_are_looking !== null) {
            $string = str_replace(' ',',',$you_are_looking);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('you_are_looking', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->you_are_like !== null) {
            $string = str_replace(' ',',',$you_are_like);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('you_are_like', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->their_names !== null) {
            $string = str_replace(' ',',',$their_names);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('their_names', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->they_are_a !== null) {
            $string = str_replace(' ',',',$they_are_a);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('they_are_a', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->they_are !== null) {
            $string = str_replace(' ',',',$they_are);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('they_are', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->they_are_in !== null) {
            $string = str_replace(' ',',',$they_are_in);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('they_are_in', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->they_are_by !== null) {
            $string = str_replace(' ',',',$they_are_by);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('they_are_by', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->they_creation_time !== null) {
            $string = str_replace(' ',',',$they_creation_time);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('they_creation_time', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->they_creation_location !== null) {
            $string = str_replace(' ',',',$they_creation_location);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('they_creation_location', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->they_are_interested !== null) {
            $string = str_replace(' ',',',$they_are_interested);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('they_are_interested', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->they_love !== null) {
            $string = str_replace(' ',',',$they_love);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('they_love', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->they_have_to_offer !== null) {
            $string = str_replace(' ',',',$they_have_to_offer);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('they_have_to_offer', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->they_have_own !== null) {
            $string = str_replace(' ',',',$they_have_own);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('they_have_own', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->they_are_looking_for !== null) {
            $string = str_replace(' ',',',$they_are_looking_for);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('they_are_looking_for', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->they_are_like !== null) {
            $string = str_replace(' ',',',$they_are_like);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('they_are_like', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }


        if ($request->offer_title !== null) {
            $string = str_replace(' ',',',$offer_title);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('offer_title', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->offer_is_a !== null) {
            $string = str_replace(' ',',',$offer_is_a);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('offer_is_a', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->offer_is !== null) {
            $string = str_replace(' ',',',$offer_is);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('offer_is', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->offer_is_in !== null) {
            $string = str_replace(' ',',',$offer_is_in);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('offer_is_in', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->offer_time !== null) {
            $string = str_replace(' ',',',$offer_time);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('offer_time', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->offer_provides !== null) {
            $string = str_replace(' ',',',$offer_provides);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('offer_provides', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->offer_needs !== null) {
            $string = str_replace(' ',',',$offer_needs);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('offer_needs', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->offer_has !== null) {
            $string = str_replace(' ',',',$offer_has);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('offer_has', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->offer_origin_time !== null) {
            $string = str_replace(' ',',',$offer_origin_time);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('offer_origin_time', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->offer_is_by !== null) {
            $string = str_replace(' ',',',$offer_is_by);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('offer_is_by', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->offer_is_about !== null) {
            $string = str_replace(' ',',',$offer_is_about);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('offer_is_about', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }
        
        if ($request->offer_is_like !== null) {
            $string = str_replace(' ',',',$offer_is_like);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('offer_is_like', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->offer_is_for !== null) {
            $string = str_replace(' ',',',$offer_is_for);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('offer_is_for', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->offer_is_to !== null) {
            $string = str_replace(' ',',',$offer_is_to);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('offer_is_to', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }
        
         if ($request->request_title !== null) {
            $string = str_replace(' ',',',$request_is_a);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('request_title', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }


        if ($request->request_is_a !== null) {
            $string = str_replace(' ',',',$request_is_a);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('request_is_a', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->request_is !== null) {
            $string = str_replace(' ',',',$request_is);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('request_is', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->request_is_in !== null) {
            $string = str_replace(' ',',',$request_is_in);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('request_is_in', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->request_time !== null) {
            $string = str_replace(' ',',',$request_time);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('request_time', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->request_provides !== null) {
            $string = str_replace(' ',',',$request_provides);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('request_provides', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->request_needs !== null) {
            $string = str_replace(' ',',',$request_needs);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('request_needs', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->request_has !== null) {
            $string = str_replace(' ',',',$request_has);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('request_has', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->request_origin_time !== null) {
            $string = str_replace(' ',',',$request_origin_time);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('request_origin_time', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->request_is_by !== null) {
            $string = str_replace(' ',',',$request_is_by);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('request_is_by', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->request_is_about !== null) {
            $string = str_replace(' ',',',$request_is_about);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('request_is_about', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->request_is_like !== null) {
            $string = str_replace(' ',',',$request_is_like);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('request_is_like', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->request_is_for !== null) {
            $string = str_replace(' ',',',$request_is_for);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('request_is_for', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        if ($request->request_is_to !== null) {
            $string = str_replace(' ',',',$request_is_to);
            $keywords = explode(',',$string);
            $keywords = str_replace(' ', '', $keywords);
            foreach($keywords as $key => $element) {
                $query->orWhere('request_is_to', 'like', '%'.$element.'%')->whereIn('tag_type', $tag_type);
                array_push($keywordsCombine, $element);
            }
        }

        // if ($request->tag_type !== null) {
        //     $query->whereIn('tag_type', $tag_type);
        // }
        $search = $query->get()->toArray();
        
        
        if(empty($keywordsCombine)){
            foreach ($search as $key => $value){
                unset($search[$key]);
            }
        } else {
            foreach($keywordsCombine as $element){
                foreach ($search as $key => $value){
                    //$search[$key] = preg_replace("/($element)/i","<span class='simple-highlight'>$0</span>",$value);
                    $search[$key] = preg_replace("/($element)/i","<b>$0</b>",$value);
                }
            }
        }
        
        array_push($data, $search);
        //dd($data);
        return view('website.results', compact('data','slug','searchType','searchInput'));
    }
}