<div>
    <button wire:click="increment">+1</button>

    <button wire:click="decrement(2)">-2</button>

    <div style="margin-top: 10px;">
        <input type="number" wire:model.lazy.number="count"> 
    </div>

    <p>Count: {{ $count }}</p>

    <div>
        <form wire:submit.prevent="save">
            <input type="number" wire:model.live.number="count">
            <button type="submit">保存</button>
        </form>

        @if ($message)
            <p style="color: green;">{{ $message }}</p>
        @endif

        @error('count')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>
</div>
