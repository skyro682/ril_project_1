<?php

namespace App\Http\Controllers;

use SpotifyWebAPI\Session;
use SpotifyWebAPI\SpotifyWebAPI;

class SpotifyController extends Controller
{

    public static function getSession()
    {
        $session = new Session(
            env('SPOTIFY_CLIENT_ID'),
            env('SPOTIFY_CLIENT_SECRET')
        );
        
        $session->requestCredentialsToken();
        $accessToken = $session->getAccessToken();
        
        return $accessToken;
    }

    public static function searchData($searchField)
    {

        $api = new SpotifyWebAPI();
        $api->setAccessToken(self::getSession());

        $data = $api->search($searchField, 'track');

        if(isset($data->tracks->items[0])) return $data->tracks->items[0]->id;
        else return false;
        
    }

    public static function getSong($trackId)
    {

        $api = new SpotifyWebAPI();
        $api->setAccessToken(self::getSession());

        $data = $api->getTrack($trackId);
        
        return $data->external_urls->spotify;
    }

}