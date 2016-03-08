<?php
/*
 * This file is part of the Artscore Studio Framework package.
 *
 * (c) Nicolas Claverie <info@artscore-studio.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace ASF\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;

/**
 * User Entity
 * 
 * @author Nicolas Claverie <info@artscore-studio.fr>
 *
 */
class User extends BaseUser
{
	/**
	 * @var integer
	 */
	protected $id;
	
	public function __construct()
	{
		parent::__construct();
	}
}