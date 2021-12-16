<?php

// src/Exception/InvalidCollectionObjectException.php

namespace App\Exception;

use InvalidArgumentException;

/**
 * InvalidCollectionObjectException is thrown when object of disallowed class 
 * is set to the collection
 *
 * @author Asen Diev <dievasen7@gmail.com>
 */
class InvalidCollectionObjectException extends InvalidArgumentException 
{

    public function __construct(string $message = ' ') 
    {
        parent::__construct($message);
        $this->message = $message;
    }

}
