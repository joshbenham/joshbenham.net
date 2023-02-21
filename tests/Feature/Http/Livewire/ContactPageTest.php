<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\ContactPage;
use Livewire\Livewire;
use Tests\TestCase;

class ContactPageTest extends TestCase
{
    /** @test */
    public function the_page_can_be_viewed(): void
    {
        $this->get(route('contact'))
            ->assertOk();
    }

    /** @test */
    public function the_component_can_render(): void
    {
        Livewire::test(ContactPage::class)
            ->assertStatus(200);
    }

    /** @test */
    public function the_component_can_validate(): void
    {
        Livewire::test(ContactPage::class)
            ->set('name', '')
            ->set('email', '')
            ->set('phone', '')
            ->set('subject', '')
            ->set('message', '')
            ->call('submit')
            ->assertHasErrors([
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'subject' => 'required',
                'message' => 'required',
            ]);
    }

    /** @test */
    public function the_component_can_submit(): void
    {
        Livewire::test(ContactPage::class)
            ->set('name', 'John Doe')
            ->set('email', 'john@doe.com')
            ->set('phone', '1234567890')
            ->set('subject', 'Test')
            ->set('message', 'This is a test message.')
            ->call('submit')
            ->assertRedirect(route('contact'))
            ->assertSessionHas('success', 'Your message has been sent.');

        // $component->assertEmitted('contactSubmitted');
        // $component->assertEmitted('contactSubmitted', function ($contact) {
        //     return $contact->name === 'John Doe';
        // });

        $this->assertDatabaseHas('contacts', [
            'name' => 'John Doe',
            'email' => 'john@doe.com',
            'phone' => '1234567890',
            'subject' => 'Test',
            'message' => 'This is a test message.',
        ]);
    }
}
