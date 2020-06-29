SELECT `title`, `summary`
FROM `films`
WHERE `title` LIKE '%42%' OR `summary` LIKE '%42%'
ORDER BY `duration` ASC;