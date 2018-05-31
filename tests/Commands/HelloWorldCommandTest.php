<?php

namespace Test\Commands;

use App\Commands\HelloWorldCommand;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;

class HelloWorldCommandTest extends TestCase
{
    /**
     * @var Application
     */
    private $application;

    public function testHelloWorld()
    {
        $expected = "Hello, world!\n";
        $commandName = 'hello-world';
        $command = $this->application->find($commandName);
        $commandTester = new CommandTester($command);
        $commandTester->execute(['command' => $commandName]);
        $output = $commandTester->getDisplay();
        $this->assertSame($expected, $output);
    }

    protected function setUp()
    {
        $command = new HelloWorldCommand();
        $this->application = new Application();
        $this->application->add($command);
    }
}
