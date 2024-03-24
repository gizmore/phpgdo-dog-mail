<?php
namespace GDO\DogMail;

use GDO\Dog\DOG_Connector;
use GDO\Dog\DOG_Server;

final class MailConnector extends DOG_Connector
{

    private $imap;

    public function init(): bool
    {
        $username = $this->server->getUsername();
        $password = $this->server->getPassword();
        $connectstring = "";
        if ($this->imap = imap_open($connectstring, $username, $password))
        {
            return true;
        }
    }

    public function connect(): bool
    {
        // TODO: Implement connect() method.
    }

    public function disconnect(string $reason): void
    {
        // TODO: Implement disconnect() method.
    }

    public function readMessage(): bool
    {
        // TODO: Implement readMessage() method.
    }

    public function setupServer(DOG_Server $server): void
    {
        // TODO: Implement setupServer() method.
    }

}
