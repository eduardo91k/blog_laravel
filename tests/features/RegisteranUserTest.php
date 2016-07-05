<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class RegisterAnUserTest extends TestCase
{
    use DatabaseMigrations;
    public function testRegisterAnUser()
    {
        $user = factory(User::class)->create(['name' => 'Test1']);

        $this->visit('/')
             ->see('Laravel 5');
    }
}
