<?php

namespace Tink\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ConfigCommand extends Command
{
    const CONFIG_PATH = 'config/app-config.json';

    protected function configure()
    {
        $this->setName("Config:Make")
            ->setDescription("Make config")
            ->addArgument('Path', InputArgument::REQUIRED, 'Config Path');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $path = $input->getArgument('Path');

        if (\file_exists($path)) {
            $output->writeln('Your config path: ' . $path);

            if (is_writable(self::CONFIG_PATH)) {
                $this->makeConfig($path);
                $output->writeln('Your config is: ' . self::CONFIG_PATH);
            } else {
                $output->writeln('Your config is not writable: ' . self::CONFIG_PATH);
            }
        } else {
            $output->writeln('Your config path not exist');
        }
    }

    private function makeConfig($path)
    {
        $conf = new \Noodlehaus\Config($path);
        $settings = $conf->all();
        \file_put_contents(self::CONFIG_PATH, json_encode($settings));
    }
}
