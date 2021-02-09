AUTHOR := riteable
PROJECT := larawire
COMMIT := $$(git rev-parse --short HEAD)
IMAGE := ${AUTHOR}/${PROJECT}:${COMMIT}

build:
	IMAGE=${IMAGE} docker-compose build app

up:
	IMAGE=${IMAGE} docker-compose up --build

down:
	IMAGE=${IMAGE} docker-compose down

deploy:
	IMAGE=${IMAGE} docker-compose config | docker stack deploy -c - ${PROJECT}

update:
	docker service update --force ${PROJECT}_app

stop:
	docker stack rm ${PROJECT}
