# NDIS Website

This repository contains the WordPress-based NDIS website, ready to be set up and run locally using Docker.

## Prerequisites

Make sure you have the following installed on your system:

- [Docker](https://docs.docker.com/get-docker/)
- [Docker Compose](https://docs.docker.com/compose/install/)

## Getting Started

Follow these steps to set up and run the WordPress site locally.

### Clone the Repository

git clone https://github.com/your-username/NDIS-website.git
cd NDIS-website

### Build and Run the Docker Containers

docker-compose up --build
http://localhost:8000

### Volumes

The docker-compose.yml file uses a named volume to persist the MySQL database data:

    db_data: Stores the MySQL database data.

### Customization

If you need to customize the WordPress installation, you can modify the files in the NDIS-website directory. Changes will be reflected in the local environment the next time you run docker-compose up --build.

### Contributing

If you find any issues or have suggestions for improvements, feel free to open an issue or submit a pull request.

### License

This project is licensed under the MIT License.
This `README.md` file provides clear instructions on how to set up, run, and contribute to the project.
