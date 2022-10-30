<x-app-layout>
                <x-app-data />
                <!-- component -->

                @if (session('flash_message'))
                    <div
                        class="relative flex flex-col sm:flex-row sm:items-center bg-slate-200 shadow rounded-md py-5 pl-6 pr-8 sm:pr-6">
                        <div class="flex flex-row items-center border-b sm:border-b-0 w-full sm:w-auto pb-4 sm:pb-0">
                            <div class="text-green-500">
                                <svg class="w-6 sm:w-5 h-6 sm:h-5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </div>
                    </div>
                @endif



                <div class="flex justify-between items-center my-3">
                    <a href="{{ route('users.create') }}"><button
                            class="btn btn-outline  btn-sm">{{ __('Add New User') }}</button></a>
                </div>


                <div class="flex items-center justify-center bg-base">
                    <div class="w-full">
                        <table class="min-w-full leading-normal">

                            <thead>
                                <tr>
                                    <th
                                        class="px-5 py-3  border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                        User Details
                                    </th>
                                    <th
                                        class="px-5 py-3  border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                        Telephone
                                    </th>
                                    <th
                                        class="px-5 py-3  border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                        Last Login
                                    </th>
                                    <th
                                        class="px-5 py-3  border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                        Admin
                                    </th>
                                    <th
                                        class="px-5 py-3  border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                        Approved
                                    </th>
                                    <th
                                        class="px-5 py-3  border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                        Approve/Reject
                                    </th>
                                    <th
                                        class="px-5 py-3  border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                        Edit
                                    </th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($users as $user)
                                    <tr>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <div class="flex">
                                                <div class="flex-shrink-0 w-10 h-10">
                                                    <img class="w-full h-full rounded-full"
                                                        src={{ $user->profile->profile_image ?? 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80' }}
                                                        alt="" />
                                                </div>
                                                <div class="ml-3">
                                                    <p class="text-gray-900 whitespace-no-wrap text-bold">
                                                        {{ $user->full_name }}
                                                    </p>
                                                    <p class="text-gray-600 whitespace-no-wrap">
                                                        {{ $user->email }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $user->profile->telephone ?? '' }}
                                            </p>
                                            {{-- <p class="text-gray-600 whitespace-no-wrap">USD</p> --}}
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $user->last_login_at ? $user->last_login_at->diffForHumans() : '-' }}
                                            </p>
                                            <p class="text-gray-600 whitespace-no-wrap">-</p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <span
                                                class="relative inline-block px-3 py-1 font-semibold
                                                {{ $user->isAdmin ? 'text-green-900' : 'text-red-900' }}  leading-tight">
                                                <span aria-hidden
                                                    class="absolute inset-0 {{ $user->isAdmin ? 'bg-green-200' : 'bg-red-200' }} opacity-50 rounded-full"></span>
                                                <span class="relative">{{ $user->isAdmin ? 'true' : 'false' }}</span>
                                            </span>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <span
                                                class="relative inline-block px-3 py-1 font-semibold
                                                {{ $user->isApproved ? 'text-green-900' : 'text-red-900' }}  leading-tight">
                                                <span aria-hidden
                                                    class="absolute inset-0 {{ $user->isApproved ? 'bg-green-200' : 'bg-red-200' }} opacity-50 rounded-full"></span>
                                                <span
                                                    class="relative">{{ $user->isApproved ? 'true' : 'false' }}</span>
                                            </span>
                                        </td>
                                        <td
                                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm ">
                                            <div class=" flex justify-start items-center bg-slate-300 rounded-3xl gap-2 h-7">
                                                <form action="{{ route('admin.update', $user->id) }}" method="post" class="h-6">
                                                    @method('put')
                                                    @csrf
                                                    <button type='submit' class="btn btn-circle btn-xs">
                                                        <x-fluentui-checkmark-12-o class="h-6 w-6" />
                                                    </button>

                                                </form>
                                                <div class="h-6">{{ __('Approve') }}</div>
                                            </div>


                                        </td>

                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                                            <div class="space-x-2 flex justify-between items-center">

                                                <a href="{{ route('users.show', ['user' => $user->id]) }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        onclick="toggleModal()" class="w-5 h-5 cursor-pointer">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M7.5 3.75H6A2.25 2.25 0 003.75 6v1.5M16.5 3.75H18A2.25 2.25 0 0120.25 6v1.5m0 9V18A2.25 2.25 0 0118 20.25h-1.5m-9 0H6A2.25 2.25 0 013.75 18v-1.5M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    </svg>
                                                </a>



                                                <a href="{{ route('users.edit', ['user' => $user->id]) }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-5 h-5 cursor-pointer">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                    </svg>
                                                </a>

                                                <form method="POST"
                                                    action="{{ route('users.destroy', ['user' => $user->id]) }}">
                                                    @method('delete')
                                                    @csrf
                                                    <a class="flex items-center  justify-start gap-2"
                                                        href="route('users.destroy')"
                                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                                        <span>
                                                            <x-fluentui-delete-28-o class="text-current w-5 h-5" />
                                                        </span>
                                                        {{-- <span>{{ __('Delete') }}</span> --}}
                                                    </a>
                                                </form>

                                                {{-- <form action="{{ route('admin.update',$user->id) }}" method="post">
                                                    @method('put')
                                                    @csrf
                                                <button type='submit' class="btn btn-circle btn-xs">
                                                    <x-fluentui-checkmark-12-o class="h-5 w-5" />
                                                </button>

                                            </form> --}}



                                            </div>
                                        </td>

                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                        <div class="py-2  my-4"> {{ $users->links() }} </div>




                    </div>
                </div>

            </x-app-layout>
