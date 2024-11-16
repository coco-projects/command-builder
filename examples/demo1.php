<?php

    use Coco\commandBuilder\Builder;

    require '../vendor/autoload.php';

    $builder = new Builder('command');

    $builder->setSubCommand('subcommand');

    $builder->addArgument('agr1');
    $builder->addArgument('agr2')->dq();

    $builder->addOption('op0');
    $builder->addOption('op1', 'val1');
    $builder->addOption('op2', 'val2')->sq();
    $builder->addOption('op3', 'val3')->dq()->noMark();

    $builder->addFlag('flag0');
    $builder->addFlag('flag1', 'val1');
    $builder->addFlag('flag2', 'val2')->sq();
    $builder->addFlag('flag3', 'val3')->dq()->noMark();
    $builder->addEnd('&');

//  command subcommand agr1 "agr2" --op0 --op1=val1 --op2='val2' --op3 "val3" -flag0 -flag1=val1 -flag2='val2' -flag3 "val3" &
    echo $builder;


