ifneq (,$(wildcard ./.env))
    include .env
    export
endif

COMMIT := $$(git rev-parse --short HEAD)
IMAGE := ${APP_NAMESPACE}/${APP_ID}:${COMMIT}

build:
	IMAGE=${IMAGE} docker-compose build app

up:
	IMAGE=${IMAGE} docker-compose up --build

down:
	IMAGE=${IMAGE} docker-compose down

deploy:
	IMAGE=${IMAGE} docker-compose config | docker stack deploy -c - ${APP_ID}

update:
	docker service update --force ${APP_ID}_app

stop:
	docker stack rm ${APP_ID}
