<?php

namespace Chsoft\Dic\Tests\Fixtures;

class TestService implements TestInterface
{
    public $test = 'foo';
    public $service;
    public $viaConstruct;
    public $viaMethods;
    public $std;    
}
