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
```

### Setup database

* Edit .env file

```DATABASE_URL="mysql://root:password@127.0.0.1:3306/blog?serverVersion=MariaDB-10.4.14"```

* Create Database

```shell
php bin/console doctrine:database:create
 ```

### Run project

* Install server

```shell
composer require server --dev
```

* Run the server

```shell
php bin/console server:run
```