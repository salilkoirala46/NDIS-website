# Use the official WordPress image from the Docker Hub
FROM wordpress:latest

# Copy the local WordPress files to the container
COPY . /var/www/html

# Set permissions for the copied files
RUN chown -R www-data:www-data /var/www/html

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Expose port 80 for the web server
EXPOSE 80
