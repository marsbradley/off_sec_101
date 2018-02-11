FROM mysql:5.7

ARG MYSQL_ROOT_PASSWORD

ENV MYSQL_ROOT_PASSWORD=$MYSQL_ROOT_PASSWORD

ADD ./init/sqli_1_init.sql /docker-entrypoint-initdb.d/init_1.sql
ADD ./init/sqli_2_init.sql /docker-entrypoint-initdb.d/init_2.sql
ADD ./init/sqli_3_init.sql /docker-entrypoint-initdb.d/init_3.sql

EXPOSE 3306