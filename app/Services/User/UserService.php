<?php declare(strict_types=1);

namespace ShellreanDev\Services\User;

use ShellreanDev\Exceptions\NotFoundResourceException;
use ShellreanDev\Repositories\User\UserRepository;
use ShellreanDev\Services\AbstractService;
use ShellreanDev\Utils\Error;
use stdClass;
/**
 * class UserService
 * @author shellrean <wandinak17@gmail.com>
 */
final class UserService extends AbstractService
{
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Check if user exist
     * @param string $email
     * @return stdClass
     */
    public function findOne(string $email): ?stdClass
    {
        $user = $this->repository->findOneByEmail($email);
        if (!$user) {
            throw new NotFoundResourceException('user not found',1101);
        }
        
        return $user;
    }

    /**
     * 
     */
    public function findOneById(string $id): ?stdClass
    {
        $user = $this->repository->findOneById($id);
        if (!$user) {
            throw new NotFoundResourceException('user not found',1101);
        }

        return $user;
    }
}