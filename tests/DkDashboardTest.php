<?php

namespace Tests;

use Arkitecht\B2B\B2B;

class DkDashboardTest extends BaseB2bTest
{
    /** @test */
    function can_get_dk_dashboard()
    {
        $b2b = new B2B($this->config['auth_token'], $this->config['scopes'], true);//, 'production');
        $b2b->setDebug();
        //$this->getStores($b2b);
        //exit();
        $response = $b2b->setOlrId(9904578)->getDkDashboard(10, '2022-09-01', '2022-09-13');
        print_r($response);

        $data = json_decode($response);
        print_r($data);
    }

    function getStores($b2b){
        $response = $b2b->setOlrId(9904578)->getStores();
        $data = json_decode($response);

        print_r($data);
    }
}
