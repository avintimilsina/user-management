<div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
    </div>
</div>

<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-2 md:gap-6 place-items-center">
        <div class="mt-5 md:col-span-2 md:mt-0">
            <form wire:submit.prevent="submit">
                <div class="overflow-hidden  sm:rounded-md">
                    <div class="bg-white px-4 py-5 sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first_name" class="block text-sm font-medium text-gray-700">First
                                    Name</label>
                                <input type="text" wire:model="first_name" id="first_name" autocomplete="given-name"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('first_name')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="last-name" class="block text-sm font-medium text-gray-700">Last Name</label>
                                <input type="text" wire:model="last_name" id="last-name" autocomplete="family-name"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('last_name')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label for="email-address" class="block text-sm font-medium text-gray-700">Email
                                    address</label>
                                <input type="text" wire:model="email" id="email-address" autocomplete="email"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('email')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-4 sm:col-span-2">
                                <label for="phone-number" class="block text-sm font-medium text-gray-700">Phone
                                    Number</label>
                                <input type="text" wire:model="phone_number" id="phone-number"
                                    autocomplete="phone-number"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('phone_number')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="identification-number"
                                    class="block text-sm font-medium text-gray-700">Identification
                                    Number</label>
                                <input type="text" wire:model="identification_number" id="identification-number"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('identification_number')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <fieldset class="flex flex-col items-start gap-3 w-full">
                                    <div class="flex flex-row justify-between w-full">
                                        <legend class="contents whitespace-nowrap text-base font-medium text-gray-900">
                                            Gender</legend>
                                        @error('gender')
                                            <p class="text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="flex flex-row gap-3">
                                        <div class="flex flex-row w-full items-center">
                                            <input id="male" value="male" wire:model="gender" type="radio"
                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="male"
                                                class="ml-3 block text-sm font-medium text-gray-700">Male</label>
                                        </div>
                                        <div class="flex flex-row w-full items-center">
                                            <input id="female" value="female" wire:model="gender" type="radio"
                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="female"
                                                class="ml-3 block text-sm font-medium text-gray-700">Female</label>
                                        </div>
                                        <div class="flex flex-row w-full items-center">
                                            <input id="other" value="other" wire:model="gender" type="radio"
                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="other"
                                                class="ml-3 block text-sm font-medium text-gray-700">Other</label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-span-6 sm:col-span-4">
                                <label for="date-of-birth" class="block text-sm font-medium text-gray-700">Date of
                                    Birth</label>
                                <input datepicker type="text" wire:model="date_of_birth" id="date-of-birth"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('date_of_birth')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                                <input type="text" wire:model="country" id="country"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('country')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-span-6">
                                <label for="street-address" class="block text-sm font-medium text-gray-700">Street
                                    address</label>
                                <input type="text" wire:model="street_address" id="street-address"
                                    autocomplete="street-address"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('street_address')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                                <input type="text" wire:model="city" id="city" autocomplete="address-level2"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('city')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label for="province" class="block text-sm font-medium text-gray-700">
                                    Province</label>
                                <input type="text" wire:model="province" id="province"
                                    autocomplete="address-level1"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('province')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                <label for="zipcode" class="block text-sm font-medium text-gray-700">ZIP code</label>
                                <input type="text" wire:model="zipcode" id="zipcode" autocomplete="zipcode"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                @error('zipcode')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                <button type="submit"
                                    class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
    </div>
</div>
