@props(['name', 'index', 'placeholder'])
<div class="relative">
    <button type="button" wire:click="removeInput('{{ $name }}', {{ $index }})"
        class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-enlace-red hover:bg-enlace-red-hover transition-colors w-5 h-5 flex justify-center items-center rounded-full"><svg
            xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-minus" width="16" height="16"
            viewBox="0 0 24 24" stroke-width="3" stroke="#ffffff" fill="none" stroke-linecap="round"
            stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M5 12l14 0" />
        </svg></button>
    <input id="{{$name}}" type="text" wire:model="{{$name}}.{{ $index }}"
        class="w-full focus:ring-2 focus:ring-enlace-green focus:border-enlace-green rounded-lg border-none px-5 py-2 bg-enlace-gray text-enlace-dark-gray placeholder-enlace-dark-gray"
        placeholder="{{ $placeholder }}">
</div>
