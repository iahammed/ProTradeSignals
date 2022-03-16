<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use function PHPUnit\Framework\assertTrue;

class ResistrationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_guest_can_register()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }
    
    /** @test */
    public function anyone_can_register()
    {
        
        assertTrue(true);
    }

}
