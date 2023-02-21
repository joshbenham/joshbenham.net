<?php

namespace App\Http\Livewire;

use App\Models\Contact;

class ContactPage extends \Livewire\Component
{
    public string $name = '';

    public string $email = '';

    public string $phone = '';

    public string $subject = '';

    public string $message = '';

    protected array $rules = [
        'name' => 'required|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|max:255',
        'subject' => 'required|max:255',
        'message' => 'required',
    ];

    public function submit(): \Livewire\Redirector
    {
        Contact::create($this->validate());

        return to_route('contact')->with('success', 'Your message has been sent.');
    }

    public function render(): \Illuminate\View\View
    {
        return view('livewire.contact');
    }
}
