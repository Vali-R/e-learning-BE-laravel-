# E-Learning sph-els-vali (backend)

### Tech Stack

-   **Laravel** - _https://laravel.com/_

## Setup

1. Create `.env` file for backend and `.env.example` file for frontend

```
cp .env.example to .env
```

2. Fill up the necessary information inside `.env` and `.env.example` files
3. Run your mysql

```
sudo -S service mysql start
```

4. Migration

```
php artisan migrate
```

5. Run the seeders

```
php artisan db:seed
```

6. Start the server

```
php artisan serve
```

## Documentation

-   ERD - https://app.diagrams.net/#G1oOWZ4sriJWC01aIcjb0wLkZ4_QBsSBsC
-   Postman APIs - https://grey-firefly-150180.postman.co/workspace/e-learning~b9d71430-452d-47cc-8c64-e2b2e960bd99/documentation/22825265-53a51ce8-b099-477e-9f5d-3a6884ffae89
