<?php

    use Coco\commandBuilder\Builder;
    use Coco\commandBuilder\BuilderRegistry;
    use Coco\commandBuilder\command\Grep;
    use Coco\commandBuilder\command\Nohup;
    use Coco\commandBuilder\command\Sudo;

    require '../vendor/autoload.php';

    $command1 = new Builder('command');
    $command1->addArgument('agr11');

    $command2 = new Builder('command2');
    $command2->addArgument('agr21');

    $command3 = Grep::getIns();
    $command3->addFlag('iP');
    $command3->addArgument('test')->sq();

    $reg = BuilderRegistry::getIns();

    $sudo = Sudo::getIns();
    $sudo->setSubCommand($command1);

    $reg->command($sudo);
    $reg->and();
    $reg->commandBash('dirname "z.zip"');

    $reg->and()->command($command2);
    $reg->pipe()->commandBash($command3);
    $reg->outputRedirection()->raw('log.txt');
    $reg->semicolon();

    $nohup = Nohup::getIns();
    $nohup->runBackend();

    $nohup->setSubCommand($reg);

//   nohup sudo command agr11 && $(dirname "z.zip") && command2 agr21 | $(grep -iP 'test') > log.txt ; &
    echo $nohup;