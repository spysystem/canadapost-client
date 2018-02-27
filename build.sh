#!/usr/bin/env bash

set -e

rm -rf docs lib test


docker run \
	--user $(id -u):$(id -g) \
	--rm -v ${PWD}:/local swaggerapi/swagger-codegen-cli generate -i /local/canada-post-2.0.yaml -l php -o /local -c /local/config.json

git add docs/*
git add lib/*
git add test/*
