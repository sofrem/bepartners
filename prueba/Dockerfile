FROM nginx:latest
#ARG PROXY=http://10.96.215.26:3128
#RUN export http_proxy=$PROXY && apk update && apk upgrade && apk add nginx-mod-http-headers-more
RUN semanage port -a -t http_port_t -p tcp 8080
RUN /home/rembrandt
## Copy our default nginx config
#COPY nginx/default.conf /etc/nginx/conf.d/default.conf
COPY nginx.conf /etc/opt/rh/rh-nginx112/nginx/nginx.conf

## From 'builder' stage copy over the artifacts in dist folder to default nginx public folder
#COPY --from=builder /ng-app/dist/sso-ui-okta /var/www/dist/ac-sso-ui
#COPY src/* /var/www/dist/


#RUN chown  1570060000  /var/cache/nginx/

EXPOSE 8080

#CMD ["nginx", "-g", "daemon off;"]