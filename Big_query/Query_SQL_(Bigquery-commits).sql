SELECT *
FROM `bigquery-public-data.github_repos.commits` 
WHERE (message LIKE '%refactor%')
AND (message LIKE '%docker%');