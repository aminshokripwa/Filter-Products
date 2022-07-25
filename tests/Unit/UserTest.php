<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    use DatabaseTransactions;
    public function testLogin()
    {
        $user = User::factory()->count(1)->make()->first();
        $user->email = 'testuser2';
        $user->password = bcrypt('testuserpass');
        $user->save();
        $res = $this->post('login', [
            'email' => 'testuser',
            'password' => 'testuserpass'
        ]);
        $this->assertTrue(auth()->check());
    }
}
