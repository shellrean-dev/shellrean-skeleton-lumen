<?php declare(strict_types=1);

namespace ShellreanDev\Services;

/**
 * @author shellrean <wandinak17@gmail.com>
 * @year 2021
 * ----------------------------------------
 * Here we create our common method 
 * reusable
 */
use ShellreanDev\Repositories\RepositoryInterface;
use ShellreanDev\Cache\Interface\CacheHandlerInterface;

abstract class AbstractService implements ServiceInterface
{
    /**
     * we need repository to interact 
     * with data source
     * @var RepositoryInterface
     */
    protected RepositoryInterface $repository;

    /**
     * We need cache for save our server resource
     * @var CacheHandlerInterface
     */
    protected CacheHandlerInterface $cache;
}