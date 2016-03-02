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

use Symfony\Component\Config\Definition\Processor;
use ASF\UserBundle\DependencyInjection\Configuration;

/**
 * This test case check if the default bundle's configuration from bundle's Configuration class is OK
 *  
 * @author Nicolas Claverie <info@artscore-studio.fr
 *
 */
class ConfigurationTest extends \PHPUnit_Framework_TestCase
{	
    /**
     * @covers ASF\UserBundle\DependencyInjection\Configuration
     */
    public function testEnableASFCoreSupportParameterInDefaultConfiguration()
    {
        $processor = new Processor();
        $config = $processor->processConfiguration(new Configuration(), array());
        $this->assertFalse($config['enable_core_support']);
    }
    
    /**
     * @covers ASF\UserBundle\DependencyInjection\Configuration
     */
    public function testSelect2SupportParameterInDefaultConfiguration()
    {
        $processor = new Processor();
        $config = $processor->processConfiguration(new Configuration(), array());
        $this->assertFalse($config['enable_select2_support']);
    }
    
    /**
     * @covers ASF\UserBundle\DependencyInjection\Configuration
     */
    public function testTwigFormThemeParameterInDefaultConfiguration()
    {
        $processor = new Processor();
        $config = $processor->processConfiguration(new Configuration(), array());
        $this->assertArrayHasKey('form_theme', $config);
    }
    
	/**
	 * Processes an array of configurations.
	 * 
	 * @param array $configs An array of configuration items to process
	 * 
	 * @return array The processed configuration
	 */
	public function process($configs)
	{
		$processor = new Processor();
		return $processor->processConfiguration(new Configuration(), $configs);
	}
}