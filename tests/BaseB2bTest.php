<?php

namespace Tests;

abstract class BaseB2bTest extends \PHPUnit_Framework_TestCase
{
    protected $config;

    public function setUp()
    {
        if (!$this->config) {
            $this->config = require dirname(__FILE__) . '/config.php';
        }
    }

    private function getConfig()
    {
        $this->config = require_once dirname(__FILE__) . '/config.php';
    }
}
