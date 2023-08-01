<nav class="w-full flex flex-row  py-4">

    <a href="/" class="flex flex-shrink-0 items-center h-8 w-48 justify-end">
        <img class="block w-auto lg:hidden" src="logo.svg" alt="Your Company">
        <img class="hidden w-auto lg:block" src="logo.svg" alt="Your Company">
    </a>

    <div class="hidden md:ml-6 md:flex md:space-x-8">
        <a href="/"
            class="inline-flex items-center border-b-2  px-1 pt-1 text-sm font-medium text-gray-900 {{ request()->route()->uri == '/' ? 'border-indigo-500' : 'border-transparent hover:border-gray-300 hover:text-gray-700' }} ">Registration
            Form</a>
        <a href="/users"
            class="inline-flex items-center border-b-2  px-1 pt-1 text-sm font-medium text-gray-900 {{ request()->route()->uri == 'users' ? 'border-indigo-500' : 'border-transparent hover:border-gray-300 hover:text-gray-700' }} ">
            All Users</a>
    </div>


</nav>
