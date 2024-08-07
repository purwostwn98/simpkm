FROM nginx:stable-alpine3.19-slim

ENV NGINX_ROOT=/var/www/html
ENV NGINX_FPM_HOST=localhost
ENV NGINX_FPM_PORT=9000

# Remove default configuration files
RUN rm -f /etc/nginx/conf.d/default.conf && \
    rm -f /etc/nginx/nginx.conf

# Copy custom configuration files
COPY ./docker/proxy/nginx.conf /etc/nginx/nginx.conf
COPY ./docker/proxy/fpm-template.conf /etc/nginx/fpm.tmpl
COPY ./docker/proxy/entrypoint.sh /usr/local/bin/entrypoint.sh

# Make the entrypoint script executable
RUN chmod 777 /usr/local/bin/entrypoint.sh && \
    ln -s /usr/local/bin/entrypoint.sh /

# Expose port 80
EXPOSE 80

# Set the entrypoint
ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
