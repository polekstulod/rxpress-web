# RxPress Web

## Installation Guide (Docker Setup)

1. Ensure Docker and Docker Compose are installed on your system.
2. Clone this repository:
   ```bash
   git clone https://github.com/your-repo/rxpress-web.git
   cd rxpress-web
   ```
3. Build the Docker image:

   ```bash
   docker build -t rxpress-web .
   ```

4. Run the container and connect it to the `local_projects` network:
   ```bash
   docker run -d --name rxpress-web --network local_projects -p 8080:80 rxpress-web
   ```
5. Ensure your MariaDB container is running on the same `local_projects` network.
6. Access the application at `http://localhost:8080`.

## Database Configuration

- Ensure the MariaDB container is running with the following credentials:
  - Host: `mariadb`
  - Username: `root`
  - Password: `root`
  - Database: `rxpressdb`

## Credentials

### Admin Side

- **Username**: admin
- **Password**: admin

### User Side

- **Username**: user
- **Password**: pass
