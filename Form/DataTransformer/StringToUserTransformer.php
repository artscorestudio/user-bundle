<?php
/**
 * This file is part of Artscore Studio Framework Package
 *
 * (c) 2012-2015 Artscore Studio <info@artscore-studio.fr>
 *
 * This source file is subject to the MIT Licence that is bundled
 * with this source code in the file LICENSE.
 */
namespace ASF\UserBundle\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use ASF\CoreBundle\Model\Manager\ASFEntityManagerInterface;
use ASF\UserBundle\Entity\Manager\UserManagerInterface;

/**
 * Transform a string to a User entity
 * 
 * @author Nicolas Claverie <info@artscore-studio.fr>
 *
 */
class StringToUserTransformer implements DataTransformerInterface
{
	/**
	 * @var UserManagerInterface|ASFEntityManagerInterface
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