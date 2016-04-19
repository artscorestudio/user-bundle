<?php
/*
 * This file is part of the Artscore Studio Framework package.
 *
 * (c) Nicolas Claverie <info@artscore-studio.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace ASF\UserBundle\Tests\Utils\Manager;

use ASF\UserBundle\Utils\Manager\UserManager;

use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

/**
 * Base class for Artscore Studio Framework Entity Managers
 * 
 * @author Nicolas Claverie <info@artscore-studio.fr>
 *
 */
class UserManagerTest extends KernelTestCase
{
    /**
     * @var \ASF\UserBundle\Utils\Manager\UserManagerInterface
     */
    protected $entityManager;
    
    /**
     * {@inheritDoc}
     * @see PHPUnit_Framework_TestCase::setUp()
     */
    public function setUp()
    {
        parent::setUp();
        
        static::$kernel = static::createKernel();
        static::$kernel->boot();
        $this->entityManager = self::$kernel->getContainer()->get('asf_user.user.manager');
    }
    
    /**
     * @covers ASF\UserBundle\Utils\Manager\UserManager
     */
    public function testUserManager()
    {
        $this->assertEquals('ASF\UserBundle\Entity\User', $this->entityManager->getClassName());
    }
}