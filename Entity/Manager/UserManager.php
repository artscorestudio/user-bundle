<?php
/**
 * This file is part of Artscore Studio Framework Package
 *
 * (c) 2012-2015 Artscore Studio <info@artscore-studio.fr>
 *
 * This source file is subject to the MIT Licence that is bundled
 * with this source code in the file LICENSE.
 */
namespace ASF\UserBundle\Entity\Manager;

use ASF\CoreBundle\Entity\Manager\ASFEntityManager;
use ASF\UserBundle\Event\UserEvent;
use ASF\UserBundle\Event\UserEvents;

/**
 * User Entity Manager
 * 
 * @author Nicolas Claverie <info@artscore-studio.fr>
 *
 */
class UserManager extends ASFEntityManager
{
	/**
	 * (non-PHPdoc)
	 * @see \Asf\Bundle\ApplicationBundle\Application\AsfEntityManager::createInstance()
	 */
	public function createInstance()
	{
		$entityName = $this->getClassName();
		$user = new $entityName();
		
		$event = new UserEvent($user);
		$this->container->get('event_dispatcher')->dispatch(UserEvents::ASF_USER_CREATE, $event);
	}
	
	/**
	 * (non-PHPdoc)
	 * @see \Asf\Bundle\ApplicationBundle\Application\AsfEntityManager::getFormTypeServiceName()
	 */
	public function getFormTypeServiceName()
	{
		return 'asf_user_form_type';
	}

	/**
	 * Return User Form Profile Service Name
	 * 
	 * @return string
	 */
	public function getProfileFormTypeServiceName()
	{
		return 'asf_user_profile';
	}
	
	/**
	 * Return User Form Registration Service Name
	 *
	 * @return string
	 */
	public function getRegistrationFormTypeServiceName()
	{
		return 'asf_user_registration';
	}
}