FROM postgres:15-alpine

ARG TZ=UTC
ENV LANG de_DE.utf8
ENV TZ ${TZ}
ENV PGDATESTYLE="ISO, DMY"

RUN ln -snf /usr/share/zoneinfo/${TZ} /etc/localtime && \
    echo ${TZ} > /etc/timezone \

EXPOSE 5432
WORKDIR /var/www/data/database