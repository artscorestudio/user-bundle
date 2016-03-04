<?php
/*
 * This file is part of the Artscore Studio Framework package.
 *
 * (c) Nicolas Claverie <info@artscore-studio.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
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
class RegistrationType extends AbstractType
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
	 * @see \FOS\UserBundle\Form\Type\RegistrationType::buildForm()
	 */
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->remove('email');
	}
	
	/**
	 * (non-PHPdoc)
	 * @see \FOS\UserBundle\Form\Type\RegistrationType::getName()
	 */
	public function getName()
	{
		return 'asf_user_registration';
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