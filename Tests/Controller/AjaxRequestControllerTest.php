<?php
/*
 * This file is part of the Artscore Studio Framework package.
 *
 * (c) Nicolas Claverie <info@artscore-studio.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace ASF\UserBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Ajax Request Controller Tests
 * 
 * @author Nicolas Claverie <info@artscore-studio.fr>
 *
 */
class AjaxRequestControllerTest extends WebTestCase
{
    /**
     * @covers ASF\UserBundle\Controller\AjaxRequestController::byUsernameAction
     */
   public function testByUsernameAction()
   {
		$client = $this->createClient();
		$client->request('GET', '/ajax/request/search/by/username');
		
		$this->assertTrue($client->getResponse()->isSuccessful());
   }
}