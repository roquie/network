<?php declare(strict_types=1);

namespace Igni\Network\Server\Listener;

use Igni\Network\Server;
use Igni\Network\Server\Listener;

/**
 * The event happens when the server shuts down
 *
 * Before the shutdown happens all the client connections are closed.
 */
interface OnShutdown extends Listener
{
    /**
     * Handles server's shutdown event.
     * 
     * @param Server $server
     */
    public function onShutdown(Server $server): void;
}