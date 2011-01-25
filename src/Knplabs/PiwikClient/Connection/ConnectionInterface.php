<?php

namespace Knplabs\PiwikClient\Connection;

/*
 * This file is part of the PiwikClient.
 * (c) 2011 knpLabs <http://www.knplabs.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Piwik Client Abstract Connection.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
interface ConnectionInterface
{
    /**
     * Calls specific method on Piwik API.
     *
     * @param   array   $params     parameters (associative array)
     * 
     * @return  string              response
     */
    function send(array $params = array());
}
