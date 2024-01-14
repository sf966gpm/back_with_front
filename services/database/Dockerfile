FROM postgres:16-alpine

RUN addgroup -g 1000 maxim && adduser -u 1000 -G maxim -h /home/maxim -D maxim && addgroup maxim www-data
USER maxim