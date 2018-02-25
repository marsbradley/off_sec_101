FROM mysql:5.7

ARG MYSQL_ROOT_PASSWORD

ENV MYSQL_ROOT_PASSWORD=$MYSQL_ROOT_PASSWORD

ADD ./init/demo.sql /docker-entrypoint-initdb.d/demo.sql

EXPOSE 3306