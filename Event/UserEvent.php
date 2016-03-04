<?php
/*
 * This file is part of the Artscore Studio Framework package.
 *
 * (c) Nicolas Claverie <info@artscore-studio.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
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