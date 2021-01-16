## Symfony Blog / CV project

### Installation

```shell
symfony new blog --version=4.4.99
```

### Add required packages

```shell
composer require symfony/orm-pack
composer require annotations
composer require validator
composer require template
composer require security-bundle
composer require --dev maker-bundle
composer require form
```

### Setup database

* Edit .env file

```DATABASE_URL="mysql://root:password@127.0.0.1:3306/blog?serverVersion=MariaDB-10.4.14"```

* Create Database

```shell
php bin/console doctrine:database:create
 ```

### Dummy data

* Install fixtures

```shell
composer require --dev doctrine/doctrine-fixtures-bundle
```

* Run fixtures

```shell
php bin/console doctrine:fixtures:load
```

### Run project

* Install server

```shell
composer require server --dev
```

* Migrate database

```shell
php bin/console doctrine:migrations:migrate
```

* Run the server

```shell
php bin/console server:run
```