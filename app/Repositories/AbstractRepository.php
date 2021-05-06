<?php declare(strict_types=1);

namespace ShellreanDev\Repositories;

/**
 * @author shellrean <wandinak17@gmail.com>
 * @year 2021
 * ---------------------------------------
 * Here we create our common method
 * reusable
 */
use ShellreanDev\Repositories\Interface\RepositoryInterface;

abstract class AbstractRepository implements RepositoryInterface
{
    /**
     * table name in database
     * @var string
     */
    protected string $table;
}