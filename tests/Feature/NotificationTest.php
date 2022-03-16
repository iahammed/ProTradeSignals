<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\Concerns\InteractsWithExceptionHandling;
use Illuminate\Contracts\Auth\Authenticatable;
use Inertia\Testing\Assert;

class NotificationTest extends TestCase
{

    use RefreshDatabase;
    use InteractsWithExceptionHandling;
    
    protected function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'johndoe@example.com',
            'owner' => true,
        ]);
    }

    /** @test */
    public function can_visit_notification()
    {
        $response = $this->actingAs($this->user)->get('/notify');
        // dd($response);

        $this->actingAs($this->user)
            ->get('/notify')
            ->assertInertia(fn (Assert $assert) => $assert
                ->component('Notify/Index')
                ->has('pairs.data', 27)
        );


    }
}
