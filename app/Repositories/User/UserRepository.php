<?php declare(strict_types=1);

namespace ShellreanDev\Repositories\User;

use stdClass;
use Illuminate\Support\Facades\DB;
use ShellreanDev\Repositories\AbstractRepository;

/**
 * class UserRepository
 * @author shellrean <wandinak17@gmail.com>
 */
final class UserRepository extends AbstractRepository
{
    /**
     * Table of repository
     * @var string $table
     */
    protected string $table = 'users';

    /**
     * Find user by email
     * @param string $email
     * @return stdClass
     */
    public function findOneByEmail(string $email)
    {
        $result = DB::table($this->table)
            ->where('email', $email)
            ->first();

        return $result;
    }

    /**
     * Find user by id
     * @param string $id
     * @return stdClass
     */
    public function findOneById(string $id)
    {
        $result = DB::table($this->table)
            ->where('id', $id)
            ->first();

        return $result;
    }
}