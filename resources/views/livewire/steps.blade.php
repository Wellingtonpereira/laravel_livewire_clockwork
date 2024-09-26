<div>
    
    {{ $steps }}


    <div class="w-full flex jusstify-between">
    <button wire:click="setStep(1)" class="w-full px-4 py-6 @if($steps ===1) bg-green-800  text-white @endif" aria-current="page">Contador</button>
    <button wire:click="setStep(2)" class="w-full px-4 py-6 @if($steps ===2) bg-green-800  text-white @endif">Tem nada aqui não</button>
    <button wire:click="setStep(3)" class="w-full px-4 py-6 @if($steps ===3) bg-green-800 text-white @endif">Aqui também não</button>
    <button wire:click="setStep(4)" class="w-full px-4 py-6 @if($steps ===4) bg-green-800 text-white @endif">Eita teimosia!</button>
    </div>
    @switch($steps)
        @case(1)
        <div class="w-full flex flex-col justify-center ring-1 bg-zinc-900 pt-4 pb-12">
            <livewire:counter />
        </div>
            
            @break
        @case(2)
        <div class="w-full flex flex-col justify-center ring-1 bg-zinc-900 pt-4 pb-12 ">
            <livewire:steps1/>
        </div>
            @break
        @case(3)
        <div class="w-full flex flex-col justify-center ring-1 bg-zinc-900  pt-4 pb-12">
            <livewire:steps2/>
        </div>
            @break
        @default
        <div class="w-full flex flex-col justify-center ring-1 bg-zinc-900  pt-4 pb-12">
        <livewire:notfound/>
        </div>
            @break      
    @endswitch
</div>
