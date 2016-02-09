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
 * Profile Form Type
 *
 * @author Nicolas Claverie <info@artscore-studio.fr>
 *
 */
class ProfileFormType extends AbstractType
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
	 * @see \FOS\UserBundle\Form\Type\ProfileFormType::buildForm()
	 */
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->remove('email')->remove('current_password');
	}
	
	/**
	* (non-PHPdoc)
	* @see \FOS\UserBundle\Form\Type\ProfileFormType::getName()
	*/
	public function getName()
	{
		return $this->userManager->getProfileFormTypeServiceName();
	}
	
	/**
	 * (non-PHPdoc)
	 * @see \Symfony\Component\Form\AbstractType::getParent()
	 */
	public function getParent()
	{
		return 'fos_user_profile';
	}
}