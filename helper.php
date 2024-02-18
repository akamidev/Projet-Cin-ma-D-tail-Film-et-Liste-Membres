<?php

function getPoster($name, $year) {
    $name = urlencode($name);
    $data = file_get_contents("https://api.themoviedb.org/3/search/movie?api_key=15d2ea6d0dc1d476efbca3eba2b9bbfb&query=$name&year=$year");
    $data = json_decode($data, 1);
    $url = "http://image.tmdb.org/t/p/w500/" . ($data['results'][0]['poster_path'] ?? '/9xjZS2rlVxm8SFx8kPC3aIGCOYQ.jpg');
    
    return $url;
}