<?php

namespace Tests;

use Arkitecht\B2B\B2B;

class DkDashboardTest extends BaseB2bTest
{
    /** @test */
    function can_get_dk_dashboard()
    {
        $b2b = new B2B($this->config['auth_token'], $this->config['scopes'], false, 'production');
        $b2b->setDebug();
        $response = $b2b->setOlrId($this->config['olrid'])->getDkDashboard(101, '2020-12-01', '2020-12-21');
        print_r($response);

        $data = json_decode($response);
        print_r($data);
    }
}
