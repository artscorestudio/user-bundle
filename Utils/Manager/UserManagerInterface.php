<?php
/*
 * This file is part of the Artscore Studio Framework package.
 *
 * (c) Nicolas Claverie <info@artscore-studio.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace ASF\UserBundle\Utils\Manager;

use ASF\CoreBundle\Utils\Manager\ASFManagerInterface;

/**
 * User Manager Interface
 * 
 * @author Nicolas Claverie <info@artscore-studio.fr>
 *
 */
interface UserManagerInterface extends ASFManagerInterface
{
    /**
     * Return the entity class name
     * 
     * @return string
     */
    public function getClassName();
    
    /**
     * Return the repository for the entity managed by the Entity Manager
     * 
     * @return \Doctrine\ORM\EntityRepository
     */
    public function getRepository();
}