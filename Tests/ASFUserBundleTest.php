<?php
/*
 * This file is part of the Artscore Studio Framework package.
 *
 * (c) Nicolas Claverie <info@artscore-studio.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace ASF\UserBundle\Tests;

use ASF\UserBundle\ASFUserBundle;

/**
 * User Bundle Tests
 * 
 * @author Nicolas Claverie <info@artscore-studio.fr>
 *
 */
class ASFUserBundleTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @cover \ASF\UserBundle\ASFUserBundle
	 */
	public function testBuild()
	{
		$container = $this->getContainer();
		
		$bundle = new ASFUserBundle();
		$bundle->build($container);
	}
	
	/**
	 * Return a mock object of ContainerBuilder
	 *
	 * @return \Symfony\Component\DependencyInjection\ContainerBuilder
	 */
	protected function getContainer()
	{
	    $container = $this->getMock('Symfony\Component\DependencyInjection\ContainerBuilder');
		return $container;
	}
}
