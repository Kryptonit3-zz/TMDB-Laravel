# TMDB-Laravel
A TMDB API wrapper for Laravel.

How this differs from other packages? Allows for searching with ease.

Installation
`composer require kryptonit3/tmdb-laravel:dev-master`

Set environment variables:

~~~
TMDB_API=YOUR-TMDB-API-KEY
TMDB_LANG=en
~~~

Note: `TMDB_LANG` only required when not using english (es, en, fr).

Add the following to your Service Providers array (config\app.php)
```php
\Kryptonit3\TMDBLaravel\TMDBServiceProvider::class,
// for older PHP versions use 'Kryptonit3\TMDBLaravel\TMDBServiceProvider',
```

Publish the config file. (not required unless you want to change some default settings, but should be set in `.env` anyways.)
~~~
php artisan vendor:publish
~~~
It will then be located in `config\kryptonit3_tmdb.php`

you may now use all of the tmdb calls with the `tmdb()` helper function from the API authors repo here: https://github.com/pixelead0/tmdb_v3-PHP-API-

Example
```php
$search = tmdb()->searchMovie('Avengers');
dd($search);
```

Results
```php
array:20 [▼
  0 => Movie {#157 ▼
    -_data: array:14 [▼
      "poster_path" => "/cezWGskPY5x7GaglTTRN4Fugfb8.jpg"
      "adult" => false
      "overview" => "When an unexpected enemy emerges and threatens global safety and security, Nick Fury, director of the international peacekeeping agency known as S.H.I.E.L.D., finds himself in need of a team to pull the world back from the brink of disaster. Spanning the globe, a daring recruitment effort begins!"
      "release_date" => "2012-05-04"
      "genre_ids" => array:3 [▶]
      "id" => 24428
      "original_title" => "The Avengers"
      "original_language" => "en"
      "title" => "The Avengers"
      "backdrop_path" => "/hbn46fQaRmlpBuUrEiFqv0GDL6Y.jpg"
      "popularity" => 6.936048
      "vote_count" => 7783
      "video" => false
      "vote_average" => 7.28
    ]
    -_tmdb: null
  }
  1 => Movie {#156 ▶}
  2 => Movie {#155 ▶}
  3 => Movie {#159 ▶}
  4 => Movie {#161 ▶}
  5 => Movie {#162 ▶}
  6 => Movie {#163 ▶}
  7 => Movie {#164 ▶}
  8 => Movie {#165 ▶}
  9 => Movie {#166 ▶}
  10 => Movie {#167 ▶}
  11 => Movie {#168 ▶}
  12 => Movie {#169 ▶}
  13 => Movie {#170 ▶}
  14 => Movie {#171 ▶}
  15 => Movie {#172 ▶}
  16 => Movie {#173 ▶}
  17 => Movie {#174 ▶}
  18 => Movie {#175 ▶}
  19 => Movie {#176 ▶}
]
```

Here are some more examples - https://github.com/pixelead0/tmdb_v3-PHP-API-#movies

Just replace the `$tmdb->` with `tmdb()->`
