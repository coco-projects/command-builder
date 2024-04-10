<?php

    use Coco\commandBuilder\Builder;
    use Coco\commandBuilder\BuilderRegistry;
    use Coco\commandBuilder\command\Grep;

    require '../vendor/autoload.php';

    $command1 = new Builder('command');
    $command1->addArgument('agr1');

    $command2 = new Builder('command2');
    $command2->withBash();
    $command2->addArgument('agr1');

    $command3 = Grep::getIns();
    $command3->addFlag('iP');
    $command3->addArgument('test')->sq();

    $reg = BuilderRegistry::init($command1,true);

    $reg->bashCommand('dirname "z.zip"');

    $reg->and()->withCommand($command2);
    $reg->pipe()->bashCommand($command3);
    $reg->outputRedirection()->withCommand('log.txt');
    $reg->semicolon();

//   sudo command agr1 $(dirname "z.zip") && $(command2 agr1) | $(grep -iP 'test') > log.txt ;
    echo $reg;