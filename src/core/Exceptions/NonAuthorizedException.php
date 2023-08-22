<?php

namespace App\Core\Exceptions;

class NonAuthorizedException extends \Exception
{
    protected $message = 'You are not authorized to access this page';
    protected $code = 403;
}