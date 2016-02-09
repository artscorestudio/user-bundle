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

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;
use ASF\UserBundle\Entity\Manager\UserManager;

/**
 * Registration Form Type
 *
 * @author Nicolas Claverie <info@artscore-studio.fr>
 *
 */
class RegistrationFormType extends AbstractType
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
	 * @see \FOS\UserBundle\Form\Type\RegistrationFormType::buildForm()
	 */
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->remove('email');
	}
	
	/**
	 * (non-PHPdoc)
	 * @see \FOS\UserBundle\Form\Type\RegistrationFormType::getName()
	 */
	public function getName()
	{
		return $this->userManager->getRegistrationFormTypeServiceName();
	}
	
	/**
	 * (non-PHPdoc)
	 * @see \Symfony\Component\Form\AbstractType::getParent()
	 */
	public function getParent()
	{
		return 'fos_user_registration';
	}
}