# этап сборки (build stage)
FROM node:21.0-alpine
CMD tail -f /dev/null

## этап production (production-stage)
#FROM nginx:stable-alpine as production-stage
## Get NodeJS
#COPY --from=node:21.0-alpine /usr/local/bin/node /usr/local/bin
## Get npm
#COPY --from=node:21.0-alpine /usr/local/bin/npm /usr/local/bin/npm
#WORKDIR /app
##COPY --from=build-stage /app/dist /usr/share/nginx/html
#EXPOSE 80
#CMD ["nginx", "-g", "daemon off;"]