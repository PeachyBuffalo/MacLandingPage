<form wire:submit.prevent="submitForm" class="space-y-4">
    <input type="text" wire:model.defer="name" placeholder="Your Name" class="w-full p-2 border rounded">
    <input type="email" wire:model.defer="email" placeholder="Your Email" class="w-full p-2 border rounded">
    <textarea wire:model.defer="message" placeholder="Your Message" class="w-full p-2 border rounded"></textarea>
    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Send</button>
</form>
