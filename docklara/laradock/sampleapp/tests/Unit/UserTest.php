<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class UserTest extends TestCase
{
    use DatabaseTransactions;

    protected $user;

    public function setUp() {
        parent::setUp();
        $this->user = factory(User::class)->state('enabled')->create();
    }

    /**
     * @test
     * @return void
     */
    public function it_can_be_enabled()
    {
        $value = $this->user->enabled()->pluck('is_enabled')->first();
        $this->assertEquals(1, $value);
    }
}
