<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')
    @livewireStyles
    <title>Document</title>
</head>
<body class="w-screen h-screen bg-slate-100 relative">
    <div class="w-full h-full flex items-center justify-center">
        <button class="px-4 py-2 text-white bg-blue-500 shadow rounded-md hover:bg-blue-600 duration-300 ease-in-out">
            create post
        </button>
    </div>



    <div class="absolute w-full h-full bg-black bg-opacity-40 top-0 left-0 flex items-center justify-center">

        <div class="px-8 py-2 bg-white w-10/12 rounded-lg border shadow-lg flex flex-col">

            {{-- the heading --}}
            <div class="heading py-2 flex justify-between items-center">

                <h1 class="text-slate-800 text-2xl font-bold capitalize">
                    Create new post
                </h1>

                <span>
                    <i class="bi bi-x-lg text-slate-800 hover:text-red-700 text-xl cursor-pointer"></i>
                </span>

            </div>
            {{-- end heading --}}

            <livewire::community::livewire.create-post/>

        </div>

    </div>
    @livewireScripts



</body>
</html>
