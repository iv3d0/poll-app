<div>
    <form class="text-center">

        <label for="Poll Question">Poll Question ?</label>
        <input type="text" wire:model="title" />
        @error('title')
            <span class="error">{{ $message }}</span>
        @enderror

        <div class="mt-2">
            <button class="btn" wire:click.prevent="addPollOption()">Add An Option</button>
        </div>
        <div>

            @foreach ($options as $index => $option)
                <div class="flex">

                    <label for="Poll Option">Poll Option {{ $index + 1 }}</label>
                    <input type="text" wire:model="options.{{ $index }}" />
                    <button class="btn" wire:click.prevent="removePollOption({{ $index }})">X</button>

                </div>
            @endforeach

        </div>
        <button wire:click.prevent="createPoll()" class="btn">Create Poll</button>
    </form>

</div>
@if ($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
    </div>
@endif
