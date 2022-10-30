<aside class="bg-base-200 w-80">
    <div
        class="z-20 bg-base-200 bg-opacity-90 backdrop-blur sticky top-0 items-center gap-2 px-4 py-2 hidden lg:flex ">
        <a href="/" aria-current="page" aria-label="Homepage" class="flex-0 btn btn-ghost px-2">
            <div
                class="font-title text-primary inline-flex text-lg transition-all duration-200 md:text-3xl">
                <span class="lowercase">{{ config('app.name') }}</span> <span
                    class="text-base-content uppercase">- UI</span>
            </div>
        </a> <a href="/docs/changelog" class="link link-hover font-mono text-xs text-opacity-50">
            <div data-tip="Changelog" class="tooltip tooltip-bottom">{{ config('app.version') }}</div>
        </a>
    </div>
    <div class="h-4"></div>
    <ul class="menu menu-compact flex flex-col p-0 px-4">
        {{-- <li>

            <a href="{{ route('admin.index') }}"
            id=""
            class="{{ (Request::segment(1) == 'admin' ? 'active' : '') }}  flex gap-4   ">
                <span class="flex-none">
                    <x-grommet-user-admin class="w-6 h-6 text-current" />
                </span>
                <span class="flex-1">Admin</span>
            </a>

        </li> --}}
        <li>

            <a href="{{ url('/dashboard') }}"
            id=""
            class="{{ (Request::segment(1) == 'dashboard' ? 'active' : '') }}  flex gap-4   ">
                <span class="flex-none">
                    <x-heroicon-o-building-office-2 class="w-6 h-6 text-current" />
                </span>
                <span class="flex-1">Dashboard</span>
            </a>

        </li>

        <li>
            <a href="{{ url('/users') }}" id=""  class="{{ (Request::segment(1) == 'users' ? 'active' : '') }}  flex gap-4   ">
                <span class="flex-none">
                    <x-heroicon-o-users class="w-6 h-6 text-current" />
                </span>
                <span class="flex-1">Users</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/posts') }}" id="" class="{{ (Request::segment(1) == 'posts' ? 'active' : '') }}flex gap-4   ">
                <span class="flex-none">
                    <x-heroicon-o-newspaper class="w-6 h-6 text-current" />
                </span>
                <span class="flex-1">Posts</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/ministers') }}" id="" class="{{ (Request::segment(1) == 'ministers' ? 'active' : '') }}flex gap-4   ">
                <span class="flex-none">
                    <x-fluentui-people-community-16-o class="w-6 h-6 text-current" />
                </span>
                <span class="flex-1">Ministers</span>
            </a>
        </li>
        <li>
            <a href="{{ url('/events') }}" id="" class="{{ (Request::segment(1) == 'events' ? 'active' : '') }}flex gap-4   ">
                <span class="flex-none">
                    <x-carbon-event class="w-6 h-6 text-current" />
                </span>
                <span class="flex-1">Events</span>
            </a>
        </li>
    </ul>

    <ul class="menu menu-compact flex flex-col p-0 px-4"> </ul>
    <div
        class="from-base-200 pointer-events-none sticky bottom-0 flex h-20 bg-gradient-to-t to-transparent">
    </div>
</aside>
