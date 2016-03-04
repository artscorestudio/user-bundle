<?php
/*
 * This file is part of the Artscore Studio Framework package.
 *
 * (c) Nicolas Claverie <info@artscore-studio.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace ASF\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use ASF\UserBundle\Form\DataTransformer\StringToUserTransformer;
use ASF\CoreBundle\Model\Manager\ASFEntityManagerInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use ASF\UserBundle\Entity\Manager\UserManagerInterface;

/**
 * Field for searching user account
 * 
 * @author Nicolas Claverie qinfo@artscore-studio.fr>
 *
 */
class SearchUserType extends AbstractType
{
	/**
	 * @var UserManagerInterface|ASFEntityManagerInterface
	 */
	protected $userManager;
	
	/**
	 * @param UserManagerInterface $user_manager
	 */
	public function __construct(UserManagerInterface $user_manager)
	{
		$this->userManager = $user_manager;
	}
	
	/**
	 * (non-PHPdoc)
	 * @see \Symfony\Component\Form\AbstractType::buildForm()
	 */
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$user_transformer = new StringToUserTransformer($this->userManager);
		$builder->addModelTransformer($user_transformer);
	}

	/**
	 * {@inheritDoc}
	 * @see \Symfony\Component\Form\AbstractType::configureOptions()
	 */
	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
		    'label' => 'User',
			'class' => $this->userManager->getClassName(),
		    'choice_label' => 'username',
		    'placeholder' => 'Choose a user',
		    'attr' => array('class' => 'select2-entity-ajax', 'data-route' => 'asf_user_ajax_request_user_by_username')
		));
	}
	
	/**
	 * (non-PHPdoc)
	 * @see \Symfony\Component\Form\FormTypeInterface::getName()
	 */
	public function getName()
	{
		return 'search_user';
	}
	
	/**
	 * {@inheritDoc}
	 * @see \Symfony\Component\Form\AbstractType::getParent()
	 */
	public function getParent()
	{
		return EntityType::class;
	}
}