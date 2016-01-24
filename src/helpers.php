<?php

include('../vendor/kryptonit3/tmdb_v3-PHP-API-/tmdb-api.php');

if (!function_exists('TMDB')) {
    function tmdb()
    {
        $apikey = config('kryptonit3_tmdb.TMDB_API');
        $language = config('kryptonit3_tmdb.TMDB_LANG');
        $tmdb = new TMDB($apikey, $language);

        return $tmdb;
    }
}