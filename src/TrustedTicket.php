<?php

namespace Tableau;

use Httpful\Request;

class TrustedTicket
{
    private $server = 'http://161.202.19.166';

    /**
     * undocumented function
     *
     * @return void
     */
    public function __construct()
    {
        return $this->server;
    }

    /**
     * Return Server address for Tableau Server
     *
     * @return void
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * Return Url for Tableau Server trusted ticket
     *
     * @return void
     */
    public function getUrl()
    {
        return $this->server . '/trusted';
    }

    /**
     * Get Trusted Ticket from Tableau Server
     * Note: Can't use json payload
     *
     * @return void
     */
    public function getTicket($username, $clientIp = null, $targetSite = null)
    {
        $server = $this->getServer();
        return Request::post($this->getUrl())
            ->addHeader('Content-Type', 'application/x-www-form-urlencoded;charset=UTF-8')
            ->body("username=$username&server=$server&client_ip=$clientIp&target_site=$targetSite")
            ->send();
    }
}
