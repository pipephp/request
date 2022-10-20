<?php

use Pipe\Request;

function request(): Request
{
    return Request::getInstance();
}
