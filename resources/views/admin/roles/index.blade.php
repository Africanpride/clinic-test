<x-app-layout>
    <!-- component -->
    <div class="flex items-center mb-5">
        <div class="mx-auto container align-middle">
            <div class="grid md:grid-cols-2 gap-2">
                <div class="shadow rounded-lg py-3 px-5 bg-white">
                    <div class="flex flex-row justify-between items-center">
                        <div>
                            <h6 class="text-2xl">Roles Available</h6>
                            <h4 class="text-black text-4xl font-bold text-left">{{ $roles->count() }}</h4>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24"
                                stroke="#14B8A6" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                            </svg>
                        </div>
                    </div>
                    <div class="text-left flex flex-row justify-start items-center">
                        <span class="mr-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="#14B8A6" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                        </span>
                        <p><span class="text-teal-500 font-bold">3%</span> in 7 days</p>
                    </div>
                </div>
                <div class="shadow rounded-lg py-3 px-5 bg-white">
                    <div class="flex flex-row justify-between items-center">
                        <div>
                            <h6 class="text-2xl">Total Permissions</h6>
                            <h4 class="text-black text-4xl font-bold text-left">{{ $permissions->count() ?? '456' }}
                            </h4>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24"
                                stroke="#EF4444" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                            </svg>
                        </div>
                    </div>
                    <div class="text-left flex flex-row justify-start items-center">
                        <span class="mr-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="#EF4444" stroke-width="{2}">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6" />
                            </svg>
                        </span>
                        <p><span class="text-red-500 font-bold">12%</span> in 7 days</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- component -->
    <div class="flex gap-4 items-center justify-between ">


        <button
            class="px-4 py-2 bg-indigo-500 outline-none rounded text-white shadow-indigo-200 shadow-lg font-medium active:shadow-none active:scale-95 hover:bg-indigo-600 focus:bg-indigo-600 focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2 disabled:bg-gray-400/80 disabled:shadow-none disabled:cursor-not-allowed transition-colors duration-200">Add
            New Role</button>
        <div class="avatar-group -space-x-6">
            <div class="avatar">
                <div class="w-12">
                    <img src="https://placeimg.com/192/192/people" />
                </div>
            </div>
            <div class="avatar">
                <div class="w-12">
                    <img src="https://placeimg.com/192/192/people" />
                </div>
            </div>
            <div class="avatar">
                <div class="w-12">
                    <img src="https://placeimg.com/192/192/people" />
                </div>
            </div>
            <div class="avatar placeholder">
                <div class="w-12 bg-neutral-focus text-neutral-content">
                    <span>{{ $roles->count() }}</span>
                </div>
            </div>
        </div>

    </div>

    <div class="my-5">



    <table class="min-w-full leading-normal">

        <thead>
            <tr>
                <th
                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                   User Details
                </th>
                <th
                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                    Amount
                </th>
                <th
                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                    Issued / Due
                </th>
                <th
                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                    Status
                </th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <div class="flex">
                        <div class="flex-shrink-0 w-10 h-10">
                            <img class="w-full h-full rounded-full"
                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                alt="" />
                        </div>
                        <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                                Molly Sanders
                            </p>
                            <p class="text-gray-600 whitespace-no-wrap">000004</p>
                        </div>
                    </div>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">$20,000</p>
                    <p class="text-gray-600 whitespace-no-wrap">USD</p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">Sept 28, 2019</p>
                    <p class="text-gray-600 whitespace-no-wrap">Due in 3 days</p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                        <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                        <span class="relative">Paid</span>
                    </span>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                    <button type="button" class="inline-block text-gray-500 hover:text-gray-700">
                        <svg class="inline-block h-6 w-6 fill-current" viewBox="0 0 24 24">
                            <path
                                d="M12 6a2 2 0 110-4 2 2 0 010 4zm0 8a2 2 0 110-4 2 2 0 010 4zm-2 6a2 2 0 104 0 2 2 0 00-4 0z" />
                        </svg>
                    </button>
                </td>
            </tr>
            <tr>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <div class="flex">
                        <div class="flex-shrink-0 w-10 h-10">
                            <img class="w-full h-full rounded-full"
                                src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                alt="" />
                        </div>
                        <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                                Michael Roberts
                            </p>
                            <p class="text-gray-600 whitespace-no-wrap">000003</p>
                        </div>
                    </div>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">$214,000</p>
                    <p class="text-gray-600 whitespace-no-wrap">USD</p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">Sept 25, 2019</p>
                    <p class="text-gray-600 whitespace-no-wrap">Due in 6 days</p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                        <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                        <span class="relative">Paid</span>
                    </span>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                    <button type="button" class="inline-block text-gray-500 hover:text-gray-700">
                        <svg class="inline-block h-6 w-6 fill-current" viewBox="0 0 24 24">
                            <path
                                d="M12 6a2 2 0 110-4 2 2 0 010 4zm0 8a2 2 0 110-4 2 2 0 010 4zm-2 6a2 2 0 104 0 2 2 0 00-4 0z" />
                        </svg>
                    </button>
                </td>
            </tr>
            <tr>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <div class="flex">
                        <div class="flex-shrink-0 w-10 h-10">
                            <img class="w-full h-full rounded-full"
                                src="https://images.unsplash.com/photo-1540845511934-7721dd7adec3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                alt="" />
                        </div>
                        <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                                Devin Childs
                            </p>
                            <p class="text-gray-600 whitespace-no-wrap">000002</p>
                        </div>
                    </div>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">$20,000</p>
                    <p class="text-gray-600 whitespace-no-wrap">USD</p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">Sept 14, 2019</p>
                    <p class="text-gray-600 whitespace-no-wrap">Due in 2 weeks</p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <span class="relative inline-block px-3 py-1 font-semibold text-orange-900 leading-tight">
                        <span aria-hidden class="absolute inset-0 bg-orange-200 opacity-50 rounded-full"></span>
                        <span class="relative">Pending</span>
                    </span>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                    <button type="button" class="inline-block text-gray-500 hover:text-gray-700">
                        <svg class="inline-block h-6 w-6 fill-current" viewBox="0 0 24 24">
                            <path
                                d="M12 6a2 2 0 110-4 2 2 0 010 4zm0 8a2 2 0 110-4 2 2 0 010 4zm-2 6a2 2 0 104 0 2 2 0 00-4 0z" />
                        </svg>
                    </button>
                </td>
            </tr>
            <tr>
                <td class="px-5 py-5 bg-white text-sm">
                    <div class="flex">
                        <div class="flex-shrink-0 w-10 h-10">
                            <img class="w-full h-full rounded-full"
                                src="https://images.unsplash.com/photo-1522609925277-66fea332c575?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&h=160&w=160&q=80"
                                alt="" />
                        </div>
                        <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                                Frederick Nicholas
                            </p>
                            <p class="text-gray-600 whitespace-no-wrap">000001</p>
                        </div>
                    </div>
                </td>
                <td class="px-5 py-5 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">$12,000</p>
                    <p class="text-gray-600 whitespace-no-wrap">USD</p>
                </td>
                <td class="px-5 py-5 bg-white text-sm">
                    <p class="text-gray-900 whitespace-no-wrap">Sept 6, 2019</p>
                    <p class="text-gray-600 whitespace-no-wrap">
                        Due 3 weeks ago
                    </p>
                </td>
                <td class="px-5 py-5 bg-white text-sm">
                    <span class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                        <span aria-hidden class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                        <span class="relative">Overdue</span>
                    </span>
                </td>
                <td class="px-5 py-5 bg-white text-sm text-right">
                    <button type="button" class="inline-block text-gray-500 hover:text-gray-700">
                        <svg class="inline-block h-6 w-6 fill-current" viewBox="0 0 24 24">
                            <path
                                d="M12 6a2 2 0 110-4 2 2 0 010 4zm0 8a2 2 0 110-4 2 2 0 010 4zm-2 6a2 2 0 104 0 2 2 0 00-4 0z" />
                        </svg>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>

</div>

</x-app-layout>
