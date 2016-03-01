<?php
/*
 * This file is part of the Artscore Studio Framework package.
 *
 * (c) Nicolas Claverie <info@artscore-studio.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace ASF\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Ajax Request Controller
 * 
 * @author Nicolas Claverie <info@artscore-studio.fr>
 *
 */
class AjaxRequestController extends Controller
{
    /**
     * Return list of users according to the search by username
     * 
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
   public function byUsernameAction(Request $request)
   {
       $term = $request->get('username');
       $users = $this->get('asf_user.user.manager')->getRepository()->findByUsernameContains($term);
       $search = array();
       	
       foreach($users as $user) {
           $search[] = array(
               'id' => $user->getId(),
               'username' => $user->getUsername(),
               'email' => $user->getEmail()
           );
       }
       
       $response = new Response();
       $response->setContent(json_encode(array(
           'total_count' => count($search),
           'items' => $search
       )));
       	
       return $response;
   }
}