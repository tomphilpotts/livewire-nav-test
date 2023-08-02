<div class="w-full ">

    @json($filter)

    <div class="flex w-full border border-gray-200 rounded p-4">
        <div class="w-1/3">
            @foreach($mappings as $key => $filter)
                <h2 class="font-semibold">{{ ucfirst($key) }}</h2>
                <ul>
                    @foreach($filter as $item)
                        <li>

                            <input id="{{ $key }}-{{ $item }}" wire:model.live="filter.services" name="{{ $item }}" value="{{$item}}" class="text-teal-800"
                                   type="checkbox"/>
                            <label for="{{ $key }}-{{ $item }}">{{ $item }}</label>
                        </li>
                    @endforeach
                </ul>
            @endforeach
        </div>
        <div class="w-2/3 flex flex-col gap-4">
            @foreach($results as $result)
                <div>
                    <a href="{{ route('livewire') }}" wire:navigate>
                        <h3 class="font-medium text-lg">  {{ $result['name'] }}</h3>
                    </a>
                    <div>
                        <p>
                            {{ $result['description'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
