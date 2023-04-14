SELECT *
FROM (SELECT *
FROM `bigquery-public-data.github_repos.languages` ,UNNEST(language) as l
WHERE l.name LIKE '%Docker%' ) ,UNNEST(language) as l
WHERE (l.name LIKE 'Java')