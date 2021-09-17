# School homework (CRUD PHP)

## Setting up the database

Create the database and tables using the code bellow:

```sql
create database crud;

create table subscriptions(
    int primary key auto_increment,
    varchar(100),
    email varchar(100)
);
```

You can change the username, password and the database in ./connection.php file.

## Running the website

I presume that you already have XAMPP or WAMP installed.

- Run PHP and MySQL (or MariaDB) proccess.
- Past the project folder into `/opt/lampp/htdocs` if you use XAMPP on linux
- Past the project folder into `C:/xampp/htdocs` if you use XAMPP on windows
- Past the project folder into `C:/wamp/www` if you use WAMP on linux

## Disclamer

The objective of this homework is not front-end, but the back-end, so there is nothing fancy.
Also, the code is vulnerable to CSRF, but it doesn't really matter in this case.
