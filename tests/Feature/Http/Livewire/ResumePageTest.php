<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\ResumePage;
use Livewire\Livewire;
use Tests\TestCase;

class ResumePageTest extends TestCase
{
    /** @test */
    public function the_page_can_be_viewed(): void
    {
        $this->get(route('resume'))
            ->assertOk();
    }

    /** @test */
    public function the_component_can_render(): void
    {
        Livewire::test(ResumePage::class)
            ->assertStatus(200);
    }
}
