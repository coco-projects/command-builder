<?php

    namespace Coco\commandBuilder\command;

    use Coco\commandBuilder\abstract\NamedCommand;

class Systemctl extends NamedCommand
{
    protected static function resolveName(): string
    {
        return 'systemctl';
    }

    // start, stop, status, restart, show ...
    public function action(string $action): static
    {
        $this->addArgument($action);

        return $this;
    }

    public function unit(string $unit): static
    {
        $this->addArgument($unit);

        return $this;
    }

    public function type(string $type): static
    {
        $this->addOption('type', $type);

        return $this;
    }

    public function state(string $state): static
    {
        $this->addOption('state', $state);

        return $this;
    }


    public function property(string $property): static
    {
        $this->addOption('property', $property);

        return $this;
    }

    public function full(): static
    {
        $this->addOption('full');

        return $this;
    }

    public function all(): static
    {
        $this->addOption('all');

        return $this;
    }

    public function reverse(): static
    {
        $this->addOption('reverse');

        return $this;
    }

    public function noPager(): static
    {
        $this->addOption('no-pager');

        return $this;
    }
}
