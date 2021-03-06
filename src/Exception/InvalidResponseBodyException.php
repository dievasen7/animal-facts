<?php

// src/Exception/InvalidResponseBodyException.php

namespace App\Exception;

/**
 * InvalidResponseBodyException is thrown when a problem with json decoding of
 * the response body is raised. 
 * The origin JsonException must be set as previous exception.
 * 
 * @author Asen Diev <dievasen7@gmail.com>
 */
class InvalidResponseBodyException extends InvalidArgumentException 
{

    public function __construct(string $message = ' ') 
    {
        parent::__construct($message);
        $this->message = $message;
    }

}
