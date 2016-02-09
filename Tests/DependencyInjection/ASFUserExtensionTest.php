<?php
/*
 * This file is part of the Artscore Studio Framework package.
 *
 * (c) Nicolas Claverie <info@artscore-studio.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace ASF\UserBundle\Tests\DependencyInjection;

use \Mockery as m; 
use ASF\UserBundle\DependencyInjection\ASFUserExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Bundle's Extension Test Suites
 * 
 * @author Nicolas Claverie <info@artscore-studio.fr>
 *
 */
class ASFUserExtensionTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var \ASF\UserBundle\DependencyInjection\ASFUserExtension
	 */
	protected $extension;
	
	/**
	 * {@inheritDoc}
	 * @see PHPUnit_Framework_TestCase::setUp()
	 */
	public function setUp()
	{
		parent::setUp();

		$this->extension = new ASFUserExtension();
	}
	
	/**
	 * Test the load method in bundle's extension
	 */
	public function testLoadExtension()
	{
		$this->extension->load(array(), $this->getContainer());
	}
	
	/**
	 * Return a mock object of ContainerBuilder
	 * 
	 * @return \Symfony\Component\DependencyInjection\ContainerBuilder
	 */
	protected function getContainer($bundles = null, $extensions = null)
	{
	    $bag = m::mock('Symfony\Component\DependencyInjection\ParameterBag\ParameterBag');
	    $bag->shouldReceive('add');
	    
	    if ( is_null($bundles) ) {
    	    $bundles = $bundles = array(
    	        'AsseticBundle' => 'Symfony\Bundle\AsseticBundle\AsseticBundle',
    	        'TwigBundle' => 'Symfony\Bundle\TwigBundle\TwigBundle',
    	        'FOSJsRoutingBundle' => 'FOS\JsRoutingBundle\FOSJsRoutingBundle'
    	    );
	    }
	    
	    if ( is_null($extensions) ) {
    	    $extensions = array(
    	        'assetic' => array(),
    	        'twig' => array()
    	    );
	    }
	    
	    $container = m::mock('Symfony\Component\DependencyInjection\ContainerBuilder');
	    $container->shouldReceive('getParameter')->with('kernel.bundles')->andReturn($bundles);
	    $container->shouldReceive('getExtensions')->andReturn($extensions);
	    $container->shouldReceive('getExtensionConfig')->andReturn(array());
	    $container->shouldReceive('prependExtensionConfig');
	    $container->shouldReceive('setAlias');
	    
	    $container->shouldReceive('addResource');
	    $container->shouldReceive('setParameter');
	    $container->shouldReceive('hasExtension')->andReturn(false);
	    $container->shouldReceive('getParameterBag')->andReturn($bag);
	    $container->shouldReceive('setDefinition');
	    $container->shouldReceive('setParameter');
	    
	    return $container;
	}
	
	/**
	 * Return bundle's default configuration
	 * 
	 * @return array
	 */
	protected function getDefaultConfig()
	{
	    return array(
	        
	    );
	}
}