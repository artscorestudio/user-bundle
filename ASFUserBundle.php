<?php
/*
 * This file is part of the Artscore Studio Framework package.
 *
 * (c) 2012-2015 Nicolas Claverie <info@artscore-studio.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace ASF\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * User Bundle
 * 
 * @author Nicolas Claverie <info@artscore-studio.fr>
 *
 */
class ASFUserBundle extends Bundle
{
	/**
	 * {@inheritDoc}
	 * @see \Symfony\Component\HttpKernel\Bundle\Bundle::getParent()
	 */
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
