<?php
/**
 * This file is part of Artscore Studio Framework Package
 *
 * (c) 2012-2015 Artscore Studio <info@artscore-studio.fr>
 *
 * This source file is subject to the MIT Licence that is bundled
 * with this source code in the file LICENSE.
 */
namespace ASF\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Asf\Bundle\ContactBundle\Form\DataTransformer\StringToUserTransformer;
use ASF\UserBundle\Entity\Manager\UserManager;

/**
 * Field for searching user account
 * 
 * @author Nicolas Claverie qinfo@artscore-studio.fr>
 *
 */
class SearchUserFormType extends AbstractType
{
	/**
	 * @var UserManager
	 */
	protected $userManager;
	
	/**
	 * @param UserManager $user_manager
	 */
	public function __construct($user_manager)
	{
		$this->userManager = $user_manager;
	}
	
	/**
	 * (non-PHPdoc)
	 * @see \Symfony\Component\Form\AbstractType::buildForm()
	 */
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$user_transformer = new StringToUserTransformer($this->userManager);
		$builder->addModelTransformer($user_transformer);
	}

	/* (non-PHPdoc)
	 * @see \Symfony\Component\Form\AbstractType::setDefaultOptions()
	 */
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
			'class' => $this->userManager->getClassName()
		));

	}
	
	/**
	 * (non-PHPdoc)
	 * @see \Symfony\Component\Form\FormTypeInterface::getName()
	 */
	public function getName()
	{
		return 'asf_user_search_user';
	}
	
	public function getParent()
	{
		return 'genemu_jqueryautocomplete_entity';
	}
}