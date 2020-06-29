SELECT film.id_genre, genre.name AS `name_genre`, film.id_distrib, distrib.name AS `name_distrib`, `title` AS `title_film`
FROM `film`
LEFT JOIN `genre` ON genre.id_genre = film.id_genre
LEFT JOIN `distrib` ON distrib.id_distrib = film.id_distrib
WHERE film.id_genre BETWEEN 4 AND 8;