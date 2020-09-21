<?php
namespace App\Exceptions;


class ApiException extends \Exception
{

    function __construct($errorMsg='', $errorCode = 0)
    {
        parent::__construct($errorMsg,$errorCode);
    }
}
