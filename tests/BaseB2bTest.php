<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

abstract class BaseB2bTest extends TestCase
{
    protected $config;

    public function setUp(): void
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
