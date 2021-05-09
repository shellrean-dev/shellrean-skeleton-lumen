<?php declare(strict_types=1);

namespace ShellreanDev\Repositories\Auth;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\SUpport\Str;
use ShellreanDev\Repositories\AbstractRepository;
use stdClass;

/**
 * class AuthRepository
 * @author shellrean <wandinak17@gmail.com>
 */
final class AuthRepository extends AbstractRepository
{
    /**
     * Table of repository
     * @var string $table
     */
    protected string $table = 'access_token';

    /**
     * Generate access_token
     */
    public function save(stdClass $user) 
    {
        DB::table($this->table)->insert([
            'id' => Str::uuid()->toString(),
            'user_id' => $user->id,
            'agent' => $user->agent,
            'token' => $user->token,
            'ip' => $user->ip,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        return true;
    }

    /**
     * Get data access_token
     */
    public function findOne(string $token)
    {
        $access = DB::table($this->table)
            ->where([
                'token' => $token,
                'is_invoke' => false
            ])->first();
        return $access;
    }

    /**
     * Invoke access_token
     */
    public function invoke(string $token)
    {
        DB::table($this->table)
            ->where('token', $token)
            ->update(['is_invoke' => true]);
        return true;
    }
}