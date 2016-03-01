<?php
/*
 * This file is part of the Artscore Studio Framework package.
 *
 * (c) Nicolas Claverie <info@artscore-studio.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace ASF\UserBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

/**
 * User Repository
 *
 * @author Nicolas Claverie <info@artscore-studio.fr>
 *
 */
class UserRepository extends EntityRepository
{
    /**
     * Find user by username
     *
     * @param string $searched_term
     */
    public function findByUsernameContains($searched_term)
    {
        $qb = $this->createQueryBuilder('u');
        $qb instanceof QueryBuilder;

        $qb->add('where', $qb->expr()->like('u.username', $qb->expr()->lower(':searched_term')))
            ->setParameter('searched_term', $searched_term . '%');

        return $qb->getQuery()->getResult();
    }
}