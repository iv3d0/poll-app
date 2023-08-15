<div>
    @forelse ($polls as $poll)
        <div class="mb-4">
            <h3 class="text-center bg-slate-400	">{{ $poll->name }}</h3>
            <ul>
                @foreach ($poll->options as $option)
                    <li class="mb-2">{{ $option->name }} - {{ $option->votes->count() }} Votes <button class="btn"
                            wire:click="vote({{ $option->id }})">Vote</button>
                    </li>
                @endforeach
            </ul>
        </div>


    @empty
        No Polls Yet !
    @endforelse



</div>
