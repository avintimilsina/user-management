<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Management</title>
    @vite('resources/css/app.css')
    @livewireStyles


</head>

<body>
    <div class="mx-4 sm:mx-20 lg:mx-40">
        <livewire:navbar />
    </div>
    @yield('content')
    <livewire:footer />
    @livewireScripts
    <script>
        const paginator = document.querySelector('[aria-label="Pagination Navigation"]').firstChild
        paginator.nextSibling.classList.remove('sm:hidden')
        paginator.nextSibling.classList.remove('justify-between')
        paginator.nextSibling.nextSibling.nextSibling.classList.remove('sm:justify-between')
        paginator.nextSibling.nextSibling.nextSibling.classList.add('justify-end')
    </script>
</body>

</html>
