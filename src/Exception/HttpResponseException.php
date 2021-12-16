<?php

// src/Exception/HttpResponseException.php

namespace App\Exception;

use RuntimeException;

/**
 * HttpResponseException is thrown when the response of the API call 
 * is not with status 200 OK.
 *
 * @author Asen Diev <dievasen7@gmail.com>
 */
class HttpResponseException extends RuntimeException
{
    public function __construct(string $message = ' ') 
    {
        parent::__construct($message);
        $this->message = $message;
    }
}