<main class="grid min-h-full place-items-center">
    <div class="w-full flex gap-4 p-4 ">
    <button wire:click="moveStep(2)" class="w-full p-4 rounded-sm bg-blue-800 text-white">Próximo</button>
    </div>
        <div class="relative flex items-center gap-6 lg:items-end">
            <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">
                <div class="pt-3 sm:pt-5 lg:pt-0">
                    <h2 class="text-xl font-semibold text-black dark:text-white">A sequência esta em:</h2>

                    <p class="mt-4  text-7xl font-bold text-white text-center p-3 ">
                        {{ $total }}
                    </p>
                </div>
            </div>
        </div>

        <button
            wire:click="soma"
            class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
        >
            <div class="pt-3 sm:pt-5">
                <h2 class="text-xl font-semibold text-black dark:text-white">Clique aqui para somar</h2>
            </div>
    </button>
    
</main>
