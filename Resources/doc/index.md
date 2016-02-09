# Artscore Studio User Bundle

User Bundle is a Symfony 2+ bundle for create and manager users in Symfony application. This package is a part of Artscore Studio Framework.

IMPORTANT NOTICE: This bundle is still under development. Any changes will be done without prior notice to consumers of this package. Of course this code will become stable at a certain point, but for now, use at your own risk.

## Prerequisites

This version of the bundle requires :
* Symfony >=2.0, 
* [FOSUserBundle](https://github.com/FriendsOfSymfony/FOSUserBundle) ~2.0@dev,
* [artscorestudio/core-bundle](https://github.com/artscorestudio/core-bundle).

## Translations

If you wish to use default texts provided in this bundle, you have to make sure you have translator enabled in your config.

```yaml
framework:
    translator: ~
```

For more information about translations, check [Symfony documentation](http://symfony.com/doc/current/book/translation.html).

## Installation

### Step 1 : Download ASFLayoutBundle using composer

Require the bundle with composer :

```bash
$ composer require artscorestudio/user-bundle "dev-master"
```

Composer will install the bundle to your project's *vendor/artscorestudio/user-bundle* directory. It also install dependencies. 

### Step 2 : Enable the bundle

Enable the bundle in the kernel :

```php
// app/AppKernel.php

public function registerBundles()
{
	$bundles = array(
		// ...
		new ASF\UserBundle\ASFUserBundle()
		// ...
	);
}
```

### Step 3 : Update your schema

If you are using Doctrine, update your schema by running the command :
```bash
$ php app/console doctrine:schema:update --force
```

### Step 4 : Update application configuration

For use UserBundle, you must add this lines in your application's configuration according to the [FOSUserBundle Installation instruction](https://github.com/FriendsOfSymfony/FOSUserBundle/blob/master/Resources/doc/index.md).

```yaml
# app/config/config.yml

# FOS User Configuration
fos_user:
    db_driver: orm
    firewall_name: main
    user_class: ASF\UserBundle\Entity\User
```

### Step 5 : Create first user

Create your first user by running the FOSUserBundle command line tool :
```bash
php app/console fos:user:create admin me@domain.com admin
```

And promote it :
```bash
php app/console fos:user:promote admin ROLE_ADMIN
```

### Next Steps

Now you have completed the basic installation and configuration of the ASFLayoutBundle, you are ready to learn about more advanced features and usages of the bundle.

The following documents are available :
* [User Entity Manager](user-manager.md)
* [ASFUserBundle Configuration Reference](configuration.md)