# User Manager Form Types

The UserBundle provides a collection of form types to include in your forms.

## SearchUserFormType

This form type is for search a User entity manage by this bundle. It provides an [EntityType](http://symfony.com/doc/2.8/reference/forms/types/entity.html) but it along with a Twig view for manage autocompletion based on [Select2 jQuery Plugin](https://select2.github.io/). So, if you want to use it, please install select2 in your project or [ASFLayoutBundle](https://github.com/artscorestudio/layout-bundle).

```php
<?php
namespace Acme\DemoBundle\Form\Type;

use ASF\UserBundle\Form\Type\SearchUserFormType;

class TestFormType extends AbstractType
{
    /**
	 * @param FormBuilderInterface $builder
	 * @param array $options
	 */
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
	    $builder->add('user', SearchUserFormType::class);
	}
}
``` 