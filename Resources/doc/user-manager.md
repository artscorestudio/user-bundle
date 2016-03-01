# User Manager

## Prerequisites

The User Entity Manager provides by this bundle is based on ASFCoreBundle Entity Manager. If you want to use the User Entity Manager provides has this, you must install ASFCoreBundle.

```bash
$ composer require artscorestudio/core-bundle
```

## Configure UserBundle for use embedded User Entity Manager

Enable ASFCoreBundle support in UserBundle like this :

```yaml
asf_user:
    enable_core_bundle: true
```

Update the entity class managed by the User Manager by your own User Entity :

### Step 1 : Create your User Entity

```php
<?php
namespace Acme\DemoBundle\Entity;

use ASF\UserBundle\Entity\User as BaseUser;

class User extends BaseUser {}
```

> Don't forget to persist it !

### Step 2 : Override the container parameter *asf_user.user_.amanger.entity.class*

The parameter *asf_user.user_.amanger.entity.class* is used by User Entity Manager class for define managed entity.

You can override this parameter in your bundle's Extension class :

```php
<?php
// Acme\DemoBundle\DependencyInjection;/AcmeDemoExtension.php
namespace Acme\DemoBundle\DependencyInjection; 

use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class AcmeDemoExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
	    $config = $this->processConfiguration($configuration, $configs);
	    $loader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
	    $loader->load('services.xml');
	    
	    $container->setParameter('asf_user.user.manager.entity.class', 'Acme\DemoBundle\Entity\User');
    }
}
```

Or in your service file :

```xml
<?xml version="1.0" ?>

<container xmlns="http://symfony.com/schema/dic/services"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd">

	<parameters>
    	<!-- User Manager -->
		<parameter key="asf_user.user.manager.entity.class">Acme\DemoBundle\Entity\User</parameter>
	</parameters>    
</container>
```

### Step 3 : Use it !

You can call User Entity Manager in your controller like this :

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

One of the advantage of this mechanism, is you can centralize the creation, deletion, etc... of an entity.

For more advanced explanations on Entity Manager, please read the documentation of [ASFCoreBundle : The embedded entity manager](https://github.com/artscorestudio/core-bundle/blob/master/Resources/doc/entity-manager.md).

## How to use UserBundle without embedded Entity Manager

If you can not use the entity manager included in this bundle, you can create an entity manager that do not depend on ASFCoreBundle. To do this, create your own entity manager and let him implement the interface ASFUserManagerInterface in this bundle.

```php
<?php
namespace Acme\DemoBundle\Entity\Manager;

use ASF\UserBundle\Entity\Manager\ASFUserManagerInterface;

class MyUserEntitiManager implements ASFUserManagerInterface
{
	/**
	 * Must return the name of the entity
	 */
	public function getClassName()
	{
	    // [...]
	}
	
	/**
	 * Must return the entity repository
	 */
	public function getRepository()
	{
	    // [...]
	}
}
