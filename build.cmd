del /s /q docs lib test

docker run --rm -v %cd%:/local swaggerapi/swagger-codegen-cli generate -i /local/canada-post-2.0.yaml -l php -o /local -c /local/config.json

git add docs/*
git add lib/*
git add test/*
