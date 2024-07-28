<?php

namespace App\Exceptions;

use Exception;

class ApiErrorException extends Exception
{
    protected $message;

    public function __construct($message = "Error fetching Api", protected $code = 500)
    {
        $this->message = $message;
        parent::__construct($this->message);
    }

    public function report()
    {
    }

    public function render($request)
    {
        return response()->view('errors.api_error', ['message' => $this->message,'code'=>$this->code], $this->code);
    }
}
