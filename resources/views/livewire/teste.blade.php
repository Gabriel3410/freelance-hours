<div>
    <h1>Meu component LiveWire</h1>
    <br>
    <input wire:model.live="search" />

    <br>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
</div>
