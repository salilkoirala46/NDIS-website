# Use the official WordPress image from the Docker Hub
FROM wordpress:latest

# Copy the local WordPress files to the container
COPY . /var/www/html

# Set permissions for the copied files
RUN chown -R www-data:www-data /var/www/html

# Disable the SSL module in Apache
RUN a2dismod ssl

# Remove the default SSL site configuration if it exists
RUN rm /etc/apache2/sites-enabled/default-ssl.conf || true
RUN rm /etc/apache2/sites-available/default-ssl.conf || true

# Ensure only the default HTTP site is enabled
RUN a2ensite 000-default

# Expose port 80 for the web server (HTTP)
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
