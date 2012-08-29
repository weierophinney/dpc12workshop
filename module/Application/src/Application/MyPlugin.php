<?php
namespace Application;

use Zend\Mvc\Controller\Plugin\AbstractPlugin;

class MyPlugin extends AbstractPlugin
{
    public function doSomething()
    {
        $controller = $this->getController();
        $controller->layout()->message = __METHOD__;
    }
}
