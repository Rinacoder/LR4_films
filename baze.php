<?php

require "conect.php";
global $connection;

$id = 6;

$sth = $connection -> prepare("SELECT  `film`.*, genre.genre_name FROM film
INNER JOIN genre_movie ON (film.id = genre_movie.movie_id)
INNER JOIN genre ON (genre.id = genre_movie.genre_id)
WHERE genre.id=?");
$sth->execute([$id]);
$array = $sth -> fetchALL(PDO::FETCH_ASSOC);

//$stmt = "SELECT * FROM film";




?>
<table>

<tr>
  <th>film_name</th>
  <th>poster</th>
  <th>reference_trailer</th>
  <th>release_year</th>
  <th>director</th>
  <th>genre_name</th>
</tr>

  <?php 
  for ($i = 0; $i < count($array); $i++) {
    $film_name = $array[$i]['film_name'];
    $poster = $array[$i]['poster']  ;
    $reference_trailer = $array[$i]['reference_trailer']  ;
    $release_year = $array[$i]['release_year']  ;
    $director = $array[$i]['director'] ;
    $genre_name = $array[$i]['genre_name'];
    print('<tr>
    <td>'.$film_name.'</td>
    <td>'.$poster.'</td>
    <td>'.$reference_trailer.'</td>
    <td>'.$release_year.'</td>
    <td>'.$director.'</td>
    <td>'.$genre_name.'</td>
    </tr>');
}
  ?>


</table>