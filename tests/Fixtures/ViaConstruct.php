<?php

namespace Chsoft\Dic\Tests\Fixtures;

class ViaConstruct
{
    public $service;
    public $std;
    
    public function __construct(TestInterface $service, \StdClass $std)
    {
        $this->service = $service;
        $this->std = $std;
    }
}
