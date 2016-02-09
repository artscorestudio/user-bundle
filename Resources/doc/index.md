# Artscore Studio User Bundle

Artscore Studio User Bundle is a Symfony 2 bundle for create and manage users in your Symfony 2 application.
This package is a part of Artscore Studio Framework.

## Prerequisites
This version of the bundle requires Symfony >=2.0, [FOSUserBundle](https://github.com/FriendsOfSymfony/FOSUserBundle) ~2.0@dev and [artscorestudio/application-bundle](https://github.com/artscorestudio/application-bundle).

## Translations
If you wish to use default texts provided in this bundle, you have to make sure you have translator enabled in your config.

```yaml
framework:
    translator: ~
```

For more information about translations, check [Symfony documentation](http://symfony.com/doc/current/book/translation.html).

## Installation

### Download the bundle via Composer

Add UserBundle by running the command :
```bash
$ composer require artscorestudio/user-bundle "dev-master"
```

Composer will install the bundle to your project's vendor/artscorestudio directory.

### Enable the bundle in your porject

Enable the bundle in the kernel :
```php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        new Asf\Bundle\UserBundle\AsfUserBundle(),
    );
}
```

## Update your schema

If you are using Doctrine, update your schema by running the command :
```bash
$ php app/console doctrine:schema:update --force
```

## Update application configuration


For use UserBundle, you must add this lines in your application's configuration according to the [FOSUserBundle Installation instruction](https://github.com/FriendsOfSymfony/FOSUserBundle/blob/master/Resources/doc/index.md).

```yaml
# app/config/config.yml

# FOS User Configuration
fos_user:
    db_driver: orm
    firewall_name: main
    user_class: Asf\Bundle\UserBundle\Entity\User
```

### Create first user

Create your first user by running the FOSUserBundle command line tool :
```bash
php app/console fos:user:create admin me@domain.com admin
```

And promote it :
```bash
php app/console fos:user:promote admin ROLE_ADMIN
```

## User Manager

The UserBundle provide a User entity manager called **asf_user.user.manager**. This entity manager allows you to centralize all actions on User entity.

Create a new instance of user :
```php
// Acme\DemoBundle\Controller\AcmeDemoController

class AcmeDemoController extends Controller
{
    public function indexAction()
    {
        $user = $this->get('asf_user.user.manager')->createInstance();
    }
}
```

By using the entity manager for create your User, you can catch a specific event called **asf.user.create**.

## Use e-mail instead of the username for authentication

If you want to use e-mail instead of username for authentication, override default User bundle configuration :

```yaml
# app/config/config.yml
asf_user:
    email_as_username: true
```

You must then specify to FOSUserBundle the attribute for authentication :

```yaml
# app/config/security.yml
security:
    providers:
        fos_userbundle:
            id: fos_user.user_provider.username_email
```

