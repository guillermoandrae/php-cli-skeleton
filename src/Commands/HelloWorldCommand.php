<?php

namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloWorldCommand extends Command
{
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hello, world!');
    }

    protected function configure()
    {
        $this->setName('hello-world');
    }
}
