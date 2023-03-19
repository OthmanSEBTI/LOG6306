import pandas as pd

dataFrame = pd.read_csv('Bigquery_repositories_results.csv')

url_repo = 'https://api.github.com/orgs/'+ organization+'/repos?page='+str(i)
request_gitapi_repos = Request(url_repos, headers={"authorization": "xxxxxxxxxxxx"})
url = urlopen(request_gitapi_repos)
data = data+json.load(url)