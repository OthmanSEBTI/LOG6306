#!/bin/bash

# List of repositories to query
repos=("linden-honey/linden-honey"
"all-of-us/workbench"
"amazeeio/lagoon"
"Artemkaaas/indy-sdk"
"aspuru-guzik-group/mission_control"
"Asqatasun/Contrast-Finder"
"bagage/batimap"
"benbromhead/cassandra-operator"
"blobor/skipass.site"
"bookbrainz/bookbrainz-site"
"BSWANG/denverdino.github.io"
"BuiltonDev/pipeline"
"byran/cyber-dojo-web" 
"cdietrich/che/graphs/contributors"
"cgi-eoss/ftep"
"cloudfoundry/diego-release"
"CogStack/CogStack-Pipeline"
"collinbarrett/FilterLists"
"CrunchyData/crunchy-containers"
"CrunchyData/crunchy-postgresql-manager"
"CrunchyData/postgres-operator"
"cyber-dojo-tools/image_builder"
"cyber-dojo-retired/storer"
"cyber-dojo/commander"
"di-unipi-socc/DockerFinder"
"drasko/mainflux"
"duderoot/generator-jhipster"
"eclipse/repairnator"
"ethereum/hive"
"gchq/stroom"
"geotrellis/geodocker-cluster"
"go-ggz/ggz"
"harvard-vpal/bridge-adaptivity"
"hexagonkt/hexagon"
"HumanExposure/factotum"
"InnovateUKGitHub/innovation-funding-service"
"instructure/straitjacket"
"ITISFoundation/osparc-lab"
"kr1sp1n/node-vault"
"kuzzleio/kuzzle"
"labsai/EDDI"
"lixiaocong/lxcCMS"
"lockss/laaws-metadataservice"
"luismayta/dotfiles"
"macarthur-lab/matchbox"
"mars-lan/datahub"
"Martin2112/trillian"
"MetaBarj0/carrier"
"mondediefr/mondedie-chat"
"muccg/rdrf"
"openpitrix/openpitrix"
"openzipkin/zipkin"
"ory/hydra"
"outlierbio/ob-pipelines"
"overture-stack/SONG"
"rackerlabs/blueflood"
"rancher/mesos-catalog"
"reportportal/service-api"
"RichardKnop/go-oauth2-server"
"robymes/OrdinglcDocker"
"scalableminds/webknossos"
"simonsdave/cloudfeaster"
"SKA-ScienceDataProcessor/integration-prototype"
"Soluto/tweek"
"stafli-org/stafli.stack.php"
"unbalancedparentheses/docker-erlang"
"eclipse-vertx/vertx-sql-client"
"xhochy/arrow")

# Loop over the list of repositories and construct the API endpoint URL for each repository's language statistics
for repo in "${repos[@]}"; do
    url="repos/$repo/languages"
    # Send the API request and parse the response as JSON
    data="$(gh api -X GET "$url")"
    # Extract the language statistics and write them to the CSV file
    echo $repo >> ./Data_collection/languages.csv
    echo "$data" >> ./Data_collection/languages.csv
done