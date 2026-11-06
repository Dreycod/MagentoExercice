<?php
declare(strict_types=1);

namespace Dreycod\ProductInfoCommand\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ProductInfo extends Command
{
    protected function configure(): void
    {
        $this->setName('productinfo:show')
            ->setDescription("Affiche les informations d'un produit à partir de son SKU")
            ->addArgument('sku',
            InputArgument::REQUIRED,
            "Le SKU du produit");
        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $sku = $input->getArgument('sku');
        $output->writeln($sku);
        return Command::SUCCESS;
    }
}

