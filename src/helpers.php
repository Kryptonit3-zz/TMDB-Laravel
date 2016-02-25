<?php

include('tmdb/tmdb-api.php');

if (!function_exists('TMDB')) {
    function tmdb()
    {
        $apikey = env('TMDB_API_KEY');
        $language = 'en';
        $tmdb = new TMDB($apikey, $language);

        return $tmdb;
    }
}
