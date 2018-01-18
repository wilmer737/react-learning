<?php

interface CommandInterface
{
    function onCommand($name, $args);
}

class CommandChain
{
    private $commands = array();

    public function addCommand($command)
    {
        $this->commands[] = $command;
    }

    public function runCommand($name, $args)
    {
        foreach ($this->commands as $command) {
            if ($command->onCommand($name, $args)) {
                return;
            }
        }
    }
}

class UserCommand implements CommandInterface
{
    public function onCommand($name, $args)
    {
        if ($name != 'addUser') {
            return false;
        }

        echo("UserCommand handling 'addUser\n");
        return true;
    }
}

class MailCommand implements CommandInterface
{
    public function onCommand($name, $args)
    {
        if ($name !== 'mail') {
            return false;
        }

        echo("MailCommand handling mail\n");
        return true;
    }
}

$cc = new CommandChain();
$cc->addCommand(new UserCommand());
$cc->addCommand(new MailCommand());
$cc->runCommand('addUser', null);
$cc->runCommand('mail', null);