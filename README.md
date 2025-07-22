
# 🐳 PHP MySQL CRUD App (Dockerized)

This is a simple PHP CRUD (Create, Read, Update, Delete) web application built using PHP, MySQL, and Docker. The UI is styled with Bootstrap, and the database is initialized from an SQL script.

---

## 📁 Project Structure

```
project-root/
│
├── web-ui/
│   ├── index.php
│   ├── config.php
│   └── Dockerfile
│
├── DB/
│   └── aws-crud.sql
│
├── docker-compose.yml
└── .dockerignore
```

---

## 🚀 Features

- Create, view, and delete user records
- Bootstrap-based UI
- SweetAlert integration for alerts
- Fully containerized using Docker
- MySQL database initialized with sample data

---

## ⚙️ Prerequisites

- Docker
- Docker Compose

---

## 🛠️ Setup & Run

```bash
# Clone the repository
git clone https://github.com/kbimsara/Infrastructure-Design-for-php-base-web.git
cd Infrastructure-Design-for-php-base-web

# Build and run the containers
docker-compose up --build
```

Once running, access the app at:  
📍 [http://localhost:8080](http://localhost:8080)

---

## 🧪 Default Credentials

- **MySQL User:** `root`
- **MySQL Password:** `rootpass`
- **Database Name:** `aws-crud`
- **Database Host (in Docker):** `db`

These are configured in `docker-compose.yml` and used in `config.php`.

---

## 🗃️ MySQL Initialization

The file `DB/aws-crud.sql` will be automatically imported on first run.  
It creates the `users` table and inserts initial data.

---

## 🐳 Docker Details

### `web ui/Dockerfile`

```Dockerfile
FROM php:8.2-apache

RUN a2enmod rewrite
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN echo "DirectoryIndex index.php index.html" >> /etc/apache2/apache2.conf
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

COPY . /var/www/html/
WORKDIR /var/www/html/
```

---

## 🧹 Clean Up

```bash
docker-compose down
```

---

## 📄 License

This project is licensed under the MIT License.
