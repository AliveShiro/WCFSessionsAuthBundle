<?php

namespace xanily\WCFSessionsAuthBundle\Repository;

use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use Doctrine\ORM\EntityRepository;

/**
 * Repository able to load the user by the username, the email, the userid or the sessionID
 */
class WcfUserRepository extends EntityRepository implements UserLoaderInterface
{

    /**
     * @param string $username
     * @return mixed|null|\Symfony\Component\Security\Core\User\UserInterface
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function loadUserByUsername($username)
    {
        return $this->createQueryBuilder('u')
            ->leftJoin('WCFSessionsAuthBundle:WcfSession', 's', \Doctrine\ORM\Query\Expr\Join::WITH, 'u.userid = s.userid')
            ->where('s.sessionid = :sessionid')
            ->setParameter('sessionid', $username)
            ->getQuery()
            ->setMaxResults(1)
            ->getOneOrNullResult();
    }

}
