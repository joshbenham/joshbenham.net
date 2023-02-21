<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\UsesPage;
use Livewire\Livewire;
use Tests\TestCase;

class UsesPageTest extends TestCase
{
    /** @test */
    public function the_page_can_be_viewed(): void
    {
        $this->get(route('uses'))
            ->assertOk();
    }

    /** @test */
    public function the_component_can_render(): void
    {
        Livewire::test(UsesPage::class)
            ->assertStatus(200);
    }
}
