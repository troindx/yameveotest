COMPONENT := friends
CODE_CONTAINER := phpfpm
APP_ROOT := /app/friends

all: dev logs

dev:
	@docker-compose -p ${COMPONENT} -f ops/docker/docker-compose.yml up -d
	@sleep 2

enter:
	@./ops/scripts/enter.sh ${COMPONENT}

kill:
	@docker-compose -p ${COMPONENT} -f ops/docker/docker-compose.yml kill

nodev:
	@docker-compose -p ${COMPONENT} -f ops/docker/docker-compose.yml kill
	@docker-compose -p ${COMPONENT} -f ops/docker/docker-compose.yml rm -f
ifeq ($(IMAGES),true)
	@docker rmi ${COMPONENT}_${CODE_CONTAINER}
	@docker rmi ${COMPONENT}_${CLI_CONTAINER}

endif

deps: dependencies

dependencies:
ifeq ($(shell uname -s),Linux)
		@composer install --no-interaction
else
	 @docker exec -t $(shell docker-compose -p ${COMPONENT} -f ops/docker/docker-compose.yml ps -q ${CODE_CONTAINER}) \
	 ${APP_ROOT}/ops/scripts/operations.sh dependencies
endif

ps: status

restart: nodev dev fixtures logs

logs:
	@docker-compose -p ${COMPONENT} -f ops/docker/docker-compose.yml logs

.PHONY: test docs