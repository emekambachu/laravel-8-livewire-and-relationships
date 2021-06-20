<div style="text-align: center">
    <button wire:click="increment">+</button>
    <h1>{{ $count }}</h1>
    <button wire:click="decrement">+</button>

    @foreach($field as $f)
        <div wire:key="{{ $f }}">
            <input class="form-control" name="field" value="" placeholder="field">
            <span wire:click="increaseField" class="bg-success p-2">+</span>
            <span wire:click="decreaseField({{ $f }})" class="bg-danger p-2">-</span>
        </div>
    @endforeach
</div>
