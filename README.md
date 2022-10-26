# FreeCodeGram

## Installation steps

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)

Alternative installation is possible without local dependencies relying on [Docker](#docker). 

### Software and tools used for this project

```
Composer Version            -     2.4.2
PHP Version                 -     8.1.5
Laravel Version             -     9.36.4
Bootstrap Version[Frontend] -     5.2
Database                    -     Sqlite db
Code Editor                 -     VSCode
```

**Install Visual Studio Code :** 

https://code.visualstudio.com/download
   

**Download Xampp :**

https://www.apachefriends.org/download.html 

**Clone the repository and paste it in htdocs folder of your XAMPP**

 ```git
   git clone https://github.com/pkini2002/FreeCodeGram.git
   cd FreeCodeGram
   ```

**Install all the dependencies using composer**

 ```bash
   composer install
   ```

- Copy `.env.example` file to `.env` on the root folder. You can type copy `.env.example .env` if using command prompt Windows or `cp .env.example .env` if using terminal, Ubuntu

- Open your .env file and change the database name `(DB_DATABASE)` to whatever you have, username `(DB_USERNAME)` and password `(DB_PASSWORD)` field correspond to your configuration.


```bash
   php artisan key:generate
```

```bash
   php artisan migrate
```

**Configure your package.json files using these commands**

```bash
    npm install
    npm run dev
    npm run build
```

It will prompt you to create a db.sqlite3 database click create and apply migrations

```bash
   php artisan migrate
```

```bash
   php artisan serve
```

- A development server `http://127.0.0.1:8000/` will be started. Run the server in any browser and ensure proper internet connection