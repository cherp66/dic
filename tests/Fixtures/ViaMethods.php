<?php

namespace Chsoft\Dic\Tests\Fixtures;

class ViaMethods
{
    public $service;
    public $viaConstruct;
    
    public function setService(TestInterface $service)
    {
        $this->service = $service;
    }
    
    public function setViaConstruct(ViaConstruct $viaConstruct)
    {
        $this->viaConstruct = $viaConstruct;
    }
}
