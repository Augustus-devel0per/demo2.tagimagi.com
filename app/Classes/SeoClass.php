<?php

namespace App\Classes;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\TwitterCard;

class SeoClass{

    public function generate_seo($title, $description, $url, $type, $image ){

        // type can be articles, profile

        SEOMeta::setTitle($title ?? 'Executives Diary');
        SEOMeta::setDescription($description ?? '');

        OpenGraph::setDescription($description ?? '');
        OpenGraph::setTitle($title);
        OpenGraph::setUrl($url ?? '');
        OpenGraph::addProperty('type', $type);

        OpenGraph::addImage();
        OpenGraph::addImage($image ?? '');
        OpenGraph::addImage(['url' => $image ?? '', 'size' => 300]);
        OpenGraph::addImage($image ?? '', ['height' => 300, 'width' => 300]);

        TwitterCard::setType($title ?? 'Executives Diary'); 
        TwitterCard::setTitle($title ?? 'Executives Diary'); 
        TwitterCard::setSite($title ?? 'Executives Diary'); 
        TwitterCard::setDescription($description ?? ''); 
        TwitterCard::setUrl($url ?? ''); 
        TwitterCard::setImage($image ?? ''); 

        JsonLd::setTitle($title ?? 'Executives Diary');
        JsonLd::setDescription($description ?? '');
        JsonLd::addImage($image ?? '');

        return true;

    }
    
}
