<?php
namespace Acme\DemoBundle\Tests\Manager;

use Acme\DemoBundle\Manager\PrimeManager;
use Acme\DemoBundle\Controller\WelcomeController;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function testCount()
    {
        $pm = new PrimeManager();
        $result = $pm->selectOnlyPrimes(range( WelcomeController::MIN, WelcomeController::MAX ));

        $this->assertEquals(168, count($result));
    }
}