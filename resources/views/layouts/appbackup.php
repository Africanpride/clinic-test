@include('layouts.head')

<body tabindex="-1">
    <div class="bg-base-100 drawer drawer-mobile"><input id="drawer" type="checkbox" class="drawer-toggle">
        <div class="drawer-content" style="scroll-behavior: smooth; scroll-padding-top: 5rem;">
            @include('layouts.topbar')
            <div class="p-6 pb-16">
                <div class="flex flex-col-reverse justify-between gap-6 xl:flex-row">
                    <div class="prose w-full flex-grow">


                        {{-- {{ $slot }} --}}



                    </div>

                </div>
            </div>
            @include('layouts.footer')
        </div>
        <div class="drawer-side" style="scroll-behavior: smooth; scroll-padding-top: 5rem;"><label for="drawer"
                class="drawer-overlay"></label>

            @include('layouts.navigation')

        </div>
    </div>

    <input type="checkbox" id="my-modal" class="modal-toggle" aria-label="Open or close modal">

    <div class="modal">
        <div class="modal-box">
            <h3 class="text-lg font-bold">Congratulations random Interner user!</h3>
            <p class="py-4">You've been selected for a chance to get one year of subscription to use Wikipedia for
                free!</p>
            <div class="modal-action"><label for="my-modal" class="btn">Yay!</label></div>
        </div>
    </div>
    <div class="modal" id="my-modal-2">
        <div class="modal-box">
            <h3 class="text-lg font-bold">Congratulations random Interner user!</h3>
            <p class="py-4">You've been selected for a chance to get one year of subscription to use Wikipedia for
                free!</p>
            <div class="modal-action"><a href="#" class="btn" rel="external">Yay!</a></div>
        </div>
    </div> <input type="checkbox" id="my-modal-3" class="modal-toggle" aria-label="Open or close modal">
    <div class="modal">
        <div class="modal-box relative"><label for="my-modal-3"
                class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
            <h3 class="text-lg font-bold">Congratulations random Interner user!</h3>
            <p class="py-4">You've been selected for a chance to get one year of subscription to use Wikipedia for
                free!</p>
        </div>
    </div> <input type="checkbox" id="my-modal-4" class="modal-toggle" aria-label="Open or close modal"> <label
        for="my-modal-4" class="modal cursor-pointer"><label class="modal-box relative" for="">
            <h3 class="text-lg font-bold">Congratulations random Interner user!</h3>
            <p class="py-4">You've been selected for a chance to get one year of subscription to use Wikipedia for
                free!</p>
        </label></label> <input type="checkbox" id="my-modal-5" class="modal-toggle" aria-label="Open or close modal">
    <div class="modal">
        <div class="modal-box w-11/12 max-w-5xl">
            <h3 class="text-lg font-bold">Congratulations random Interner user!</h3>
            <p class="py-4">You've been selected for a chance to get one year of subscription to use Wikipedia for
                free!</p>
            <div class="modal-action"><label for="my-modal-5" class="btn">Yay!</label></div>
        </div>
    </div> <input type="checkbox" id="my-modal-6" class="modal-toggle" aria-label="Open or close modal">
    <div class="modal modal-bottom sm:modal-middle">
        <div class="modal-box">
            <h3 class="text-lg font-bold">Congratulations random Interner user!</h3>
            <p class="py-4">You've been selected for a chance to get one year of subscription to use Wikipedia for
                free!</p>
            <div class="modal-action"><label for="my-modal-6" class="btn">Yay!</label></div>
        </div>
    </div>
    <div id="svelte-announcer" aria-live="assertive" aria-atomic="true"
        style="position: absolute; left: 0px; top: 0px; clip: rect(0px, 0px, 0px, 0px); clip-path: inset(50%); overflow: hidden; white-space: nowrap; width: 1px; height: 1px;">
        Hero — Tailwind CSS Components</div>

        @livewireScripts

</body>

</html>
