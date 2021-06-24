gen:
	sudo docker run --rm -v "${PWD}:/local" openapitools/openapi-generator-cli generate \
		-i /local/openapi.json \
		-g php \
		-o /local
