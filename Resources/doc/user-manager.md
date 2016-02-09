# User Manager

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