@include('layouts.head')

<body tabindex="-1">
    <div class="bg-base-100 drawer drawer-mobile"><input id="drawer" type="checkbox" class="drawer-toggle">
        <div class="drawer-content" style="scroll-behavior: smooth; scroll-padding-top: 5rem;">
            @include('layouts.topbar')
            <div class="p-6 pb-16">
                <div class="flex flex-col-reverse justify-between gap-6 xl:flex-row">
                    <div class="prose w-full flex-grow">


                        {{ $slot ?? ' ' }}
                        @yield('content')



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


        @livewireScripts

</body>

</html>
