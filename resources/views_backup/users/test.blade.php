<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alpine.js Example - Modal</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <style>
        [x-cloak] {
            display: none;
        }

        .duration-300 {
            transition-duration: 300ms;
        }

        .ease-in {
            transition-timing-function: cubic-bezier(0.4, 0, 1, 1);
        }

        .ease-out {
            transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
        }

        .scale-90 {
            transform: scale(.9);
        }

        .scale-100 {
            transform: scale(1);
        }
    </style>


</head>

<body class="mx-auto w-full bg-gray-100 flex items-center justify-center h-screen" x-data="{ 'showModal': false }"
    @keydown.escape="showModal = false" x-cloak>

    <section class="flex flex-wrap p-4 h-full items-center">

        <button type="button"
            class="bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full"
            @click="showModal = true">
            Open modal
        </button>

        <!--Overlay-->
        <div class="overflow-auto" style="background-color: rgba(0,0,0,0.5)" x-show="showModal"
            :class="{ 'absolute inset-0 z-10 flex items-center justify-center': showModal }">
            <!--Dialog-->
            <div
                class="bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg py-4 text-left px-6"
                x-show="showModal"
                @click.away="showModal = false" x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-90">

                <!--Title-->
                <div class="flex justify-between items-center pb-3">
                    <p class="text-2xl font-bold">Simple Modal!</p>
                    <div class="cursor-pointer z-50" @click="showModal = false">
                        <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18"
                            height="18" viewBox="0 0 18 18">
                            <path
                                d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                            </path>
                        </svg>
                    </div>
                </div>

                <!-- content -->
                <p>Modal content can go here</p>
                <p>...</p>
                <p>...</p>
                <p>...</p>
                <p>...</p>

                <!--Footer-->
                <div class="flex justify-end pt-2">
                    <button
                        class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2"
                        @click="alert('Additional Action');">Action</button>
                    <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400"
                        @click="showModal = false">Close</button>
                </div>


            </div>
            <!--/Dialog -->
        </div><!-- /Overlay -->

    </section>

</body>
