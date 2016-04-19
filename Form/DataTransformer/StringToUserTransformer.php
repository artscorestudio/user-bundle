<?php
/*
 * This file is part of the Artscore Studio Framework package.
 *
 * (c) Nicolas Claverie <info@artscore-studio.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace ASF\UserBundle\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;

use ASF\UserBundle\Utils\Manager\UserManagerInterface;

/**
 * Transform a string to a User entity
 * 
 * @author Nicolas Claverie <info@artscore-studio.fr>
 *
 */
class StringToUserTransformer implements DataTransformerInterface
{
	/**
	 * @var UserManagerInterface
	 */
	protected $userManager;
	
	/**
	 * @param UserManagerInterface $user_manager
	 */
	public function __construct(UserManagerInterface $user_manager)
	{
		$this->userManager = $user_manager;
	}
	
	/**
	 * (non-PHPdoc)
	 * @see \Symfony\Component\Form\DataTransformerInterface::transform()
	 */
	public function transform($user)
	{
		if ( is_null($user) )
			return '';
	
		return $user->getUsername();
	}
	
	/**
	 * (non-PHPdoc)
	 * @see \Symfony\Component\Form\DataTransformerInterface::reverseTransform()
	 */
	public function reverseTransform($string)
	{
		$user = $this->userManager->getRepository()->findOneBy(array('username' => $string));
		return $user;
	}
}