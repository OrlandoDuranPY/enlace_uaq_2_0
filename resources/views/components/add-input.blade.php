@props([ 'name', 'title', 'required'])

<div class="relative">
    @if ($required)
        <x-required-label name={{$name}} title={{$title}}/>
    @else
    <x-label name={{$name}} title={{$title}}/>
    @endif
    <button type="button" wire:click="addInput('{{ $name }}')"
        class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-enlace-dark-green hover:bg-enlace-green transition-colors w-5 h-5 flex justify-center items-center rounded-full">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="16" height="16"
            viewBox="0 0 24 24" stroke-width="3" stroke="#ffffff" fill="none" stroke-linecap="round"
            stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M12 5l0 14" />
            <path d="M5 12l14 0" />
        </svg>
    </button>
</div>
