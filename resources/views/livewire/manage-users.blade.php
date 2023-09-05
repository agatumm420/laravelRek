<div>
    <input wire:model="name" placeholder="Imię">
    <input wire:model="surname" placeholder="Nazwisko">
    <input wire:model="email" type="email" placeholder="Email">
    <select wire:model="role">
        <option value="admin">Admin</option>
        <option value="user">User</option>
    </select>
    <button wire:click="createUser">Create User</button>


</div>
