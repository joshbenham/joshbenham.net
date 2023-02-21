<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\GoalsPage;
use Livewire\Livewire;
use Tests\TestCase;

class GoalsPageTest extends TestCase
{
    /** @test */
    public function the_page_can_be_viewed(): void
    {
        $this->get(route('goals'))
            ->assertOk();
    }

    /** @test */
    public function the_component_can_render(): void
    {
        Livewire::test(GoalsPage::class)
            ->assertStatus(200);
    }
}
