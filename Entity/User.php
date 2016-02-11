<?php
/**
 * This file is part of Artscore Studio Framework Package
 *
 * (c) 2012-2015 Artscore Studio <info@artscore-studio.fr>
 *
 * This source file is subject to the MIT Licence that is bundled
 * with this source code in the file LICENSE.
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
	const ROLE_MEMBER = 'ROLE_MEMBER';
	
	/**
	 * @var integer
	 */
	protected $id;
	
	public function __construct()
	{
		parent::__construct();
	}
}