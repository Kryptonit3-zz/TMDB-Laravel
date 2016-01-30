<?php

include('tmdb/tmdb-api.php');

if (!function_exists('TMDB')) {
    function tmdb()
    {
        $apikey = settings()->get('tmdb_api_key');
        $language = 'en';
        $tmdb = new TMDB($apikey, $language);

        return $tmdb;
    }
}
