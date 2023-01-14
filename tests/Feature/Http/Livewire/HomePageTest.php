<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\HomePage;
use Livewire\Livewire;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    /** @test */
    public function the_page_can_be_viewed()
    {
        $this->get(route('home'))
            ->assertOk();
    }

    /** @test */
    public function the_component_can_render()
    {
        Livewire::test(HomePage::class)
            ->assertStatus(200);
    }
}
