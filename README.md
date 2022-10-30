# laravel-service-repository-maker
Generator service and repository pattern for Laravel

## Quick Start

**Step 1**: Install the package

```bash
$ composer require aksara/service-repository-maker
```

**Step 2**: Publish the "stubs" - service and repository templates.

```bash
$ php artisan vendor:publish --tag='aksara-service-repository-stubs'
```

### Make Service and Repository

**Make Service**: this will directly create a `Service` file in `app/Services` folder

```bash
$ php artisan make:service {service name}
```

**Make Repository**: this will directly create a `Service` file in `app/Repositories` folder

```bash
$ php artisan make:repository {repository name}
```

#### Sample CRUD with Service and Repositoru Pattern
[https://github.com/putuedipuspayasa/laravel-crud-with-service-and-repository-pattern](https://github.com/putuedipuspayasa/laravel-crud-with-service-and-repository-pattern)
