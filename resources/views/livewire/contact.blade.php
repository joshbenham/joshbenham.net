<div>
    <x-slot name="header">
        Shoot us a message!
    </x-slot>

    <x-paragraph>
        I am the one-stop-shop for all your web development needs!
    </x-paragraph>

    <x-paragraph>
        I'm excited that you're considering me, the one-man-army of the web development world, to help bring your vision to life.
    </x-paragraph>

    <x-paragraph>
        Just fill out the form below and let's make the internet a better place, one website at a time.
    </x-paragraph>

    @if (session()->has('success'))
        <div class="px-4 py-3 mt-4 mb-4 text-green-700 bg-green-100 border border-green-400 rounded-lg" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <form method="POST" wire:submit.prevent="submit" class="mt-4">
        @csrf

        <label class="block mb-6">
            <span class="text-lg font-bold leading-loose text-gray-700">Your name</span>
            <input
                wire:model="name"
                type="text"
                name="name"
                placeholder="Josh Benham"
                autofocus
                class="block w-full mt-1 border-gray-300 rounded-lg cursor-pointer focus:ring-fuchsia-800 focus:border-fuchsia-800"
            />

            @error('name')
                <div class$message }}</div>
            @enderror
        </label>

        <label class="block mb-6">
            <span class="text-lg font-bold leading-loose text-gray-700">Your email</span>
            <input
                wire:model="email"
                type="email"
                name="email"
                placeholder="joshbenham@gmail.com"
                class="block w-full mt-1 border-gray-300 rounded-lg cursor-pointer focus:ring-fuchsia-800 focus:border-fuchsia-800"
            />

            @error('email')
                <div class$message }}</div>
            @enderror
        </label>

        <label class="block mb-6">
            <span class="text-lg font-bold leading-loose text-gray-700">Phone</span>
            <input
                wire:model="phone"
                type="text"
                name="phone"
                placeholder="000-000-0000"
                class="block w-full mt-1 border-gray-300 rounded-lg cursor-pointer focus:ring-fuchsia-800 focus:border-fuchsia-800"
            />

            @error('phone')
                <div class$message }}</div>
            @enderror
        </label>

        <label class="block mb-6">
            <span class="text-lg font-bold leading-loose text-gray-700">Subject</span>
            <input
                wire:model="subject"
                type="text"
                name="subject"
                placeholder="I have a question about an upcoming project."
                class="block w-full mt-1 border-gray-300 rounded-lg cursor-pointer focus:ring-fuchsia-800 focus:border-fuchsia-800"
            />

            @error('subject')
                <div class$message }}</div>
            @enderror
        </label>

        <label class="block mb-6">
            <span class="text-lg font-bold leading-loose text-gray-700">Message</span>
            <textarea
                wire:model="message"
                name="message"
                rows="3"
                placeholder="I would love to get in contact with you about a project I am wanting to get quoted. I have $$$ to spend and I am looking for a great developer to work with."
                class="block w-full mt-1 border-gray-300 rounded-lg cursor-pointer focus:ring-fuchsia-800 focus:border-fuchsia-800"
            ></textarea>

            @error('message')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </label>

        <div class="mb-6">
            <button
                class="inline-flex justify-center px-4 py-2 text-white border border-transparent rounded-md shadow-sm bg-fuchsia-800 hover:bg-fuchsia-600 focus:outline-none focus:ring-2 focus:ring-fuchsia-800 focus:ring-offset-2"
            >Contact Us</button>
        </div>
    </form>
</div>
