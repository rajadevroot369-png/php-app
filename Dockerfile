# Use official PHP image
FROM php:8.2-cli

# Set working directory
WORKDIR /app

# Copy all project files into container
COPY . /app

# Expose Render's port
EXPOSE 10000

# Start PHP server
CMD ["php", "-S", "0.0.0.0:10000", "-t", "."]
