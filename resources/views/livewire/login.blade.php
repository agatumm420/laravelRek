<div>
    <form wire:submit.prevent="authenticate">
        <input type="email" wire:model="email" placeholder="Email">
        <input type="password" wire:model="password" placeholder="Password">
        <button type="submit">Login</button>
    </form>
    @if (session('error'))
        <div>{{ session('error') }}</div>
    @endif
</div>
