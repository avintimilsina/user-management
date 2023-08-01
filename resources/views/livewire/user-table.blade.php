<div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-xl font-semibold text-gray-900">Users</h1>
            <p class="mt-2 text-sm text-gray-700">A list of all the users in your account including their name, title,
                email and role.</p>
        </div>

    </div>
    <div class="mt-8 flex flex-col">    
            <div class="my-4">
                {{ $users->links() }}
            </div>
        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="relative overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                    <table class="min-w-full table-fixed divide-y divide-gray-300">
                        <thead class="bg-gray-50">
                            <tr>

                                <th scope="col" class="py-3.5 px-6 text-left text-sm font-semibold text-gray-900">
                                    Name
                                </th>
                                <th scope="col" class="px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    Email</th>
                                <th scope="col" class="px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    Phone</th>
                                <th scope="col" class="px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    ID Number</th>
                                <th scope="col" class="px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    Gender</th>
                                <th scope="col" class="px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    DOB</th>
                                <th scope="col" class="px-2 py-3.5 text-left text-sm font-semibold text-gray-900 ">
                                    About</th>
                                <th scope="col" class="px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    Address</th>
                                <th scope="col" class="px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    Province</th>
                                <th scope="col" class="px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    Country</th>
                                <th scope="col" class="px-2 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    Zipcode</th>
                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                    <span class="sr-only">Edit</span>
                                </th>
                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                    <span class="sr-only">Delete</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            @foreach ($users as $user)
                                <tr>

                                    <td class="whitespace-nowrap py-4 px-6 text-sm font-medium text-gray-900">
                                        {{ $user->first_name }} {{ $user->last_name }}
                                    </td>
                                    <td class="whitespace-nowrap px-2 py-4 text-sm text-gray-500">
                                        {{ $user->email }}
                                    </td>
                                    <td class="whitespace-nowrap px-2 py-4 text-sm text-gray-500">
                                        {{ $user->phone_number }}
                                    </td>
                                    <td class="whitespace-nowrap px-2 py-4 text-sm text-gray-500">
                                        {{ $user->identification_number }}
                                    </td>
                                    <td class="whitespace-nowrap px-2 py-4 text-sm text-gray-500">
                                        {{ $user->gender }}
                                    </td>
                                    <td class="whitespace-nowrap px-2 py-4 text-sm text-gray-500">
                                        {{ $user->date_of_birth }}
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-2 py-4 text-sm text-gray-500 max-w-xs overflow-hidden">
                                        {{ $user->about }}
                                    </td>
                                    <td class="whitespace-nowrap px-2 py-4 text-sm text-gray-500">
                                        {{ $user->street_address }} ,
                                        {{ $user->city }}
                                    </td>

                                    <td class="whitespace-nowrap px-2 py-4 text-sm text-gray-500">
                                        {{ $user->province }}
                                    </td>
                                    <td class="whitespace-nowrap px-2 py-4 text-sm text-gray-500">
                                        {{ $user->country }}
                                    </td>
                                    <td class="whitespace-nowrap px-2 py-4 text-sm text-gray-500">
                                        {{ $user->zipcode }}
                                    </td>

                                    <td class="whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                        <a href="/edit?id={{ $user->id }}"
                                            class="text-indigo-600 hover:text-indigo-900">Edit</a>

                                    </td>
                                    <td class="whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                        <button wire:click="delete({{ $user->id }})"
                                            class="text-indigo-600 hover:text-indigo-900">Delete</button>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
