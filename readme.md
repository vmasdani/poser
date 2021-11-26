# PoSer

<img src="/logo.png" width="300" />

Full-fledged point of sales & inventory system solution which contains of:

1. mobile app, tablet view (flutter 2)
2. backend server (lumen + PHP 8), server-side rendered frontend (alpine.JS)

The aim of PoSer is to practice:

1. cheap
2. rapid development
3. type & null safety in newest PHP 8 feature
4. lightweight client

## Setup

### Backend

1. Generate JWT token with the `/gen-secret` http endpoint, this allows you to get a JWT token to put in your `.env` file

```
http://localhost:8000/gen-secret
```

2. Fill your `.env` file with the correct credentials, example in `.env.example`

```
DB_HOST=127.0.0.1
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
ADMIN_PASSPHRASE=
JWT_TOKEN=
```

3. Migrate your database

```
php artisan migrate
```

4. Populate your database

```sh
# GET request in browser
http://localhost:8000/init
```

5. You are ready to go. Enter the root URL (for example `http://localhost:8000`) or spin up a dev server by using:

```
php -S 0.0.0.0:8000 -t public
```

### Frontend

1. Instal flutter, android SDK
2. Fill `.env` contents, example available in `.env.example`

```
BASE_URL=http://192.168.1.10:8000
```

3. Run

```
flutter run
```

4. Build

```
flutter build apk
```
