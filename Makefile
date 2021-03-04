ifneq (,$(wildcard ./.env))
    include .env
    export
endif

service = app

COMMIT := $$(git rev-parse --short HEAD)
IMAGE := ${APP_NAMESPACE}/${APP_ID}:${COMMIT}

build:
	IMAGE=${IMAGE} docker-compose -f docker-compose.yml -f docker-compose.dev.yml build app

up:
	IMAGE=${IMAGE} docker-compose -f docker-compose.yml -f docker-compose.dev.yml up --build

down:
	IMAGE=${IMAGE} docker-compose -f docker-compose.yml -f docker-compose.dev.yml down

it:
	docker exec -it ${APP_ID}-$(service) bash

deploy:
	IMAGE=${IMAGE} docker-compose -f docker-compose.yml -f docker-compose.prod.yml config | docker stack deploy -c - ${APP_ID}

stop:
	docker stack rm ${APP_ID}

log:
	docker service logs -f ${APP_ID}_$(service)
