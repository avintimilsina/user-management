<div class="flex-1 xl:overflow-y-auto">
    <div class="mx-auto max-w-3xl py-10 px-4 sm:px-6 lg:py-12 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-blue-gray-900">User Registration</h1>

        <form wire:submit.prevent="submit" class="divide-y-blue-gray-200 mt-6 space-y-8 divide-y">

            <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6">
                <div class="sm:col-span-6">
                    <h2 class="text-xl font-medium text-blue-gray-900">Profile</h2>
                    <p class="mt-1 text-sm text-blue-gray-500">This information will be displayed publicly so be
                        careful
                        what you share.</p>
                </div>

                <div class="sm:col-span-3">
                    <label for="first_name" class="block text-sm font-medium text-blue-gray-900">First name</label>
                    <input type="text" wire:model="first_name" id="first_name" autocomplete="given-name"
                        class="mt-1 block w-full rounded-md border-blue-gray-300 text-blue-gray-900 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    @error('first_name')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="sm:col-span-3">
                    <label for="last_name" class="block text-sm font-medium text-blue-gray-900">Last name</label>
                    <input type="text" wire:model="last_name" id="last_name" autocomplete="family-name"
                        class="mt-1 block w-full rounded-md border-blue-gray-300 text-blue-gray-900 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    @error('last_name')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="sm:col-span-3">
                    <label for="phone_number" class="block text-sm font-medium text-blue-gray-900">Phone
                        Number</label>
                    <input type="text" wire:model="phone_number" id="phone_number" autocomplete="phone-number"
                        class="mt-1 block w-full rounded-md border-blue-gray-300 text-blue-gray-900 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    @error('phone_number')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="sm:col-span-3">
                    <label for="identification_number"
                        class="block text-sm font-medium text-blue-gray-900">Identification
                        Number</label>
                    <input type="text" wire:model="identification_number" id="identification_number"
                        autocomplete="identification-number"
                        class="mt-1 block w-full rounded-md border-blue-gray-300 text-blue-gray-900 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    @error('identification_number')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="sm:col-span-6">
                    <div class="col-span-6 sm:col-span-3">
                        <fieldset class="flex flex-row items-start gap-3">
                            <div class="flex flex-row ">
                                <legend class="contents whitespace-nowrap text-base font-medium text-gray-900">
                                    Gender</legend>

                            </div>
                            <div class="flex flex-row gap-3">
                                <div class="flex flex-row w-full items-center">
                                    <input id="male" value="Male" wire:model="gender" type="radio"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="male"
                                        class="ml-3 block text-sm font-medium text-gray-700">Male</label>
                                </div>
                                <div class="flex flex-row w-full items-center">
                                    <input id="female" value="Female" wire:model="gender" type="radio"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="female"
                                        class="ml-3 block text-sm font-medium text-gray-700">Female</label>
                                </div>
                                <div class="flex flex-row w-full items-center">
                                    <input id="other" value="Other" wire:model="gender" type="radio"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="other"
                                        class="ml-3 block text-sm font-medium text-gray-700">Other</label>
                                </div>
                            </div>
                            @error('gender')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </fieldset>
                    </div>
                </div>
                <div class="sm:col-span-6">
                    <label for="date_of_birth" class="block text-sm font-medium text-blue-gray-900">Date of
                        Birth</label>
                    <input type="text" wire:model="date_of_birth" id="date_of_birth" autocomplete="date_of_birth"
                        class="mt-1 block w-full rounded-md border-blue-gray-300 text-blue-gray-900 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    @error('date_of_birth')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <div class="sm:col-span-6">
                    <label for="about" class="block text-sm font-medium text-blue-gray-900">About You</label>
                    <div class="mt-1">
                        <textarea id="about" wire:model="about" rows="4"
                            class="block w-full rounded-md border-blue-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"></textarea>
                        @error('about')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <p class="mt-3 text-sm text-blue-gray-500">Describe yourself in a few words.
                    </p>
                </div>
                <div class="sm:col-span-6">
                    <label for="email" class="block text-sm font-medium text-blue-gray-900">Email</label>
                    <input type="email" wire:model="email" id="email" autocomplete="email"
                        class="mt-1 block w-full rounded-md border-blue-gray-300 text-blue-gray-900 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    @error('email')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="grid grid-cols-1 gap-y-6 pt-8 sm:grid-cols-6 sm:gap-x-6">
                <div class="sm:col-span-6">
                    <h2 class="text-xl font-medium text-blue-gray-900">Address Information</h2>
                    <p class="mt-1 text-sm text-blue-gray-500">This information will be displayed publicly so be
                        careful what you share.</p>
                </div>
                <div class="sm:col-span-6">
                    <label for="street_address" class="block text-sm font-medium text-blue-gray-900">Street
                        Address</label>
                    <input type="text" wire:model="street_address" id="street_address"
                        autocomplete="street-address"
                        class="mt-1 block w-full rounded-md border-blue-gray-300 text-blue-gray-900 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    @error('street_address')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="sm:col-span-3">
                    <label for="city" class="block text-sm font-medium text-blue-gray-900">City</label>
                    <input type="text" wire:model="city" id="city" autocomplete="city"
                        class="mt-1 block w-full rounded-md border-blue-gray-300 text-blue-gray-900 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    @error('city')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="sm:col-span-3">
                    <label for="province" class="block text-sm font-medium text-blue-gray-900">Province</label>
                    <input type="text" wire:model="province" id="province" autocomplete="province"
                        class="mt-1 block w-full rounded-md border-blue-gray-300 text-blue-gray-900 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    @error('province')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="sm:col-span-3">
                    <label for="country" class="block text-sm font-medium text-blue-gray-900">Country</label>
                    <input type="text" wire:model="country" id="country" autocomplete="country"
                        class="mt-1 block w-full rounded-md border-blue-gray-300 text-blue-gray-900 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    @error('country')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="sm:col-span-3">
                    <label for="zipcode" class="block text-sm font-medium text-blue-gray-900">ZIP Code</label>
                    <input type="text" wire:model="zipcode" id="zipcode"
                        class="mt-1 block w-full rounded-md border-blue-gray-300 text-blue-gray-900 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
                    @error('zipcode')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="flex justify-end pt-8">
                <button type="reset"
                    class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-blue-gray-900 shadow-sm hover:bg-blue-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Reset</button>
                <button type="submit"
                    class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-blue-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Save</button>
            </div>
        </form>
    </div>
</div>
