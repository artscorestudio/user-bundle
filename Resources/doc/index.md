# Artscore Studio User Bundle

User Bundle is a Symfony 2/3 bundle for create and manage users in Symfony 2/3 application. This bundle centralize commons features around User entity managment based on FOSUserBundle for a better and faster integration of authentification in Artscore Studio Framework based projects. So, this bundle is not for a generic use (like components) but for my own needs. This package is a part of Artscore Studio Framework.

> IMPORTANT NOTICE: This bundle is still under development. Any changes will be done without prior notice to consumers of this package. Of course this code will become stable at a certain point, but for now, use at your own risk.

## Prerequisites

This version of the bundle requires :

* Symfony >=2.8 / >= 3, 
* [FOSUserBundle >= 2.0][1]
* [ASFCoreBundle ~1.0][2]
* [ASFLayoutBundle ~1.0][3]

## Translations

If you wish to use default texts provided in this bundle, you have to make sure you have translator enabled in your config.

```yaml
framework:
    translator: ~
```

For more information about translations, check [Symfony documentation][4].

## Installation

### Step 1 : Download ASFUserBundle using composer

Require the bundle with composer :

```bash
$ composer require artscorestudio/user-bundle "~1.0"
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
		new FOS\UserBundle\FOSUserBundle(),
		new ASF\UserBundle\ASFUserBundle()
		// ...
	);
}
```

### Step 3 : Update your schema

User bundle embedded a User entity according to the [FOSUserBundle documentation][5]. If you are using Doctrine, update your schema by running the command :

```bash
$ php app/console doctrine:schema:update --force
```

### Step 4 : Update application configuration

For use UserBundle, you must add this lines in your application's configuration according to the [FOSUserBundle Installation instruction][5].

```yaml
# app/config/config.yml

# FOS User Configuration
fos_user:
    db_driver: orm
    firewall_name: main
    user_class: "ASF\UserBundle\Entity\User"
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
* [User Entity Manager][6]
* [ASFUserBundle Configuration Reference][7]
* [Form Types][8]

[1]: https://packagist.org/packages/friendsofsymfony/user-bundle
[2]: https://packagist.org/packages/artscorestudio/core-bundle
[3]: https://packagist.org/packages/artscorestudio/layout-bundle
[4]: http://symfony.com/doc/current/book/translation.html
[5]: https://github.com/FriendsOfSymfony/FOSUserBundle/blob/master/Resources/doc/index.md
[6]: user-manager.md
[7]: configuration.md
[8]: form-types.md
 