<?php
/**
 * This file is part of Artscore Studio Framework Package
 *
 * (c) 2012-2015 Artscore Studio <info@artscore-studio.fr>
 *
 * This source file is subject to the MIT Licence that is bundled
 * with this source code in the file LICENSE.
 */
namespace ASF\UserBundle\Event;

use Symfony\Component\EventDispatcher\Event;
use ASF\UserBundle\Entity\User;

/**
 * Artscore Studio User Event
 * 
 * @author Nicolas Claverie <nicolas.claverie@cg31.fr>
 *
 */
class UserEvent extends Event
{
	/**
	 * @var User
	 */
	protected $user;
	
	/**
	 * @param \ASF\UserBundle\Entity\User $user
	 */
	public function __construct(User $user)
	{
		$this->user = $user;
	}
	
	/**
	 * @return \ASF\UserBundle\Entity\User
	 */
	public function getUser()
	{
		return $this->user;
	}
}