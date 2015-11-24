<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ApiTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_it_sees_homepage()
    {
        $this->visit('/')
            ->see('web dev');
    }

    public function test_returns_json()
    {
        $this->post('testPost',['namespaces' => 'camera,global'],["Content-Type: multipart/form-data"])->seeJsonContains(['Domain' => "cotrip.org,www.cotrip.org,beta.cotrip.org,www.beta.cotrip.org,m.cotrip.org,cell.cotrip.org,go.cotrip.org,data.cotrip.org,i.cotrip.org,legacy.cotrip.org,www.legacy.cotrip.org"]);
    }
}
