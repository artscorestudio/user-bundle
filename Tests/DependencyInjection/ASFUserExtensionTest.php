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
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

/**
 * Bundle's Extension Test Suites
 * 
 * @author Nicolas Claverie <info@artscore-studio.fr>
 *
 */
class ASFUserExtensionTest extends KernelTestCase
{
	/**
	 * @var \ASF\UserBundle\DependencyInjection\ASFUserExtension
	 */
	protected $extension;
	
	/**
	 * @var ContainerBuilder
	 */
	protected $container;
	
	/**
	 * {@inheritDoc}
	 * @see PHPUnit_Framework_TestCase::setUp()
	 */
	public function setUp()
	{
		parent::setUp();

		static::$kernel = static::createKernel();
		static::$kernel->boot();
		
		$this->container = static::$kernel->getContainer();
		$this->extension = new ASFUserExtension();
	}
	
	/**
	 * @covers ASF\UserBundle\DependencyInjection\ASFUserExtension::load
	 */
	public function testLoadMethod()
	{
		$this->extension->load(array(), $this->getContainer());
	}
	
	/**
	 * @covers ASF\UserBundle\DependencyInjection\ASFUserExtension::prepend
	 */
	public function testPrependMethod()
	{
	    $this->extension->prepend($this->getContainer());
	}
	
	/**
	 * @covers ASF\UserBundle\DependencyInjection\ASFUserExtension::configureTwigBundle
	 */
	public function testConfigureTwigBundleMethod()
	{
	    $configure_twig = self::getMethod('configureTwigBundle');
	    $configure_twig->invokeArgs($this->extension, array($this->container, $this->getDefaultConfig()));
	    $twig_config = $container->getParameter('twig.form_theme');
	    
        $this->assertCount(1, $twig_config);
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
    	        'TwigBundle' => 'Symfony\Bundle\TwigBundle\TwigBundle'
    	    );
	    }
	    
	    if ( is_null($extensions) ) {
    	    $extensions = array(
    	        'twig' => array('form_theme' => array())
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
	        'form_theme' => 'ASFUserBundle:Form:fields.html.twig'
	    );
	}
	
	/**
	 * Access to protected methods
	 *
	 * @param string $name
	 */
	protected static function getMethod($name)
	{
	    $class = new \ReflectionClass('ASF\UserBundle\DependencyInjection\ASFUserExtension');
	    $method = $class->getMethod($name);
	    $method->setAccessible(true);
	    return $method;
	}
}