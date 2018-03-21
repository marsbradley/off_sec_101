FROM mysql:5.7

ARG MYSQL_ROOT_PASSWORD

ENV MYSQL_ROOT_PASSWORD=$MYSQL_ROOT_PASSWORD

ADD ./init/init.sql /docker-entrypoint-initdb.d/init.sql

EXPOSE 3306