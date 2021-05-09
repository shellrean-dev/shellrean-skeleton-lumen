<?php declare(strict_types=1);

namespace ShellreanDev\Exceptions;

use ShellreanDev\Exceptions\Model\AbstractException;

class NotFoundResourceException extends AbstractException
{
    public function __construct($message=NULL, $code=0)
    {
        parent::__construct($message, $code);
    }
}