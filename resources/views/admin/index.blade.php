<x-app-layout>
    <x-app-data />

    <div class="navbar bg-white  px-5 py-3.5 my-5 rounded-lg shadow hover:shadow-sm w-full mx-auto transform hover:-translate-y-[0.125rem] transition duration-100 ease-linear" ">
        <div class="flex-1">
          <a class=" text-xl">New Accounts</a>
        </div>
        <div class="flex-none">
          <button class="btn btn-square btn-ghost">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
          </button>
        </div>
      </div>
        @if (session('flash_message'))
        <div
            class="relative flex flex-col sm:flex-row sm:items-center bg-slate-200 shadow rounded-md py-5 pl-6 pr-8 sm:pr-6">
            <div class="flex flex-row items-center border-b sm:border-b-0 w-full sm:w-auto pb-4 sm:pb-0">
                <div class="text-green-500">
                    <svg class="w-6 sm:w-5 h-6 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="text-sm font-medium ml-3">Success.</div>
            </div>
            <div class="text-sm tracking-wide text-gray-500 mt-4 sm:mt-0 sm:ml-4">
                {{ session('flash_message') }}
            </div>
            <div
                class="absolute sm:relative sm:top-auto sm:right-auto ml-auto right-4 top-4 text-gray-400 hover:text-gray-800 cursor-pointer">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </div>
        </div>
        @endif


        <div class=" w-full my-2">
            <table class="table w-full">
                <!-- head -->
                <thead>
                    <tr>

                        <th>Name</th>
                        <th>Email Address</th>
                        <th>Registration Date</th>
                        <th>Approve/Reject</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>
                                <div class="flex items-center space-x-3">
                                    <div class="avatar">
                                        <div class="mask mask-squircle w-10 h-10">
                                            <img src="https://daisyui.com/tailwind-css-component-profile-2@56w.png"
                                                alt="{{ $user->full_name ?? 'Full Name' }}" />
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-bold">{{ $user->full_name ?? 'Full Name' }}</div>
                                        {{-- <div class="text-sm opacity-50">United States</div> --}}
                                    </div>
                                </div>
                            </td>
                            <td>
                                {{ $user->email ?? 'Email Address' }}<br>
                                {{-- <span class="badge badge-ghost badge-sm">{{ $user->email ?? 'Email Address' }}</span> --}}
                            </td>
                            <td>
                                {{ $user->created_at ?? 'Date of Registration' }}
                            </td>



                            <td class="flex justify-start items-center gap-2">

                                <form action="{{ route('admin.update',$user->id) }}" method="post">
                                    @method('put')
                                    @csrf
                                <button type='submit' class="btn btn-circle btn-sm">
                                    <x-fluentui-checkmark-12-o class="h-6 w-6" />
                                </button>

                            </form>

                            <form method="POST"
                            action="{{ route('admin.destroy', ['admin' => $user->id]) }}">
                            @method('delete')
                            @csrf
                                <button type="submit" class="btn btn-circle btn-sm btn-outline">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach


                </tbody>




            </table>
            <div class="py-2  my-4"> {{ $users->links() }} </div>

        </div>

</x-app-layout>
