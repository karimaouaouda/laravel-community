<div class="w-full md:w-4/5 px-2 bg-slate-700 shadow mt-1 mx-auto flex flex-col">

    <div class="cover overflow-hidden w-full h-auto rounded-lg">
        <img class="w-full object-cover max-h-[400px]" src="{{ asset('cover.jpeg') }}" alt="#">
    </div>

    <div class="informations px-6 py-4 flex justify-between items-center">

        <div class="space-x-3 flex items-center">

            <div class="w-20 h-20 overflow-hidden shadow rounded-full border border-2 border-sky-600">
                <img src="{{asset('profile.jpeg')}}" class="w-full h-full object-cover" alt="">
            </div>

            <div class="flex flex-col justify-around">
                <h1 class="font-semibold text-xl text-white capitalize tracking-wide">
                    karim aouaouda
                </h1>
                <span class="text-light text-gray-300 uppercase text-sm">
                    student
                </span>
            </div>

        </div>


        <div class="actions flex items-center space-x-4">
            <button class="follow py-1 px-3 bg-slate-600 text-white rounded-md shadow hover:bg-slate-700 duration-300">
                <i class="bi bi-plus-lg "></i>
                <span class="uppercase text-sm">
                    follow
                </span>
            </button>

            <button class="follow py-1 px-3 bg-sky-600 text-white rounded-md shadow hover:bg-sky-700 duration-300">
                <i class="bi bi-chat "></i>
                <span class="uppercase text-sm">
                    contact
                </span>
            </button>
        </div>

    </div>

    <div class="w-full text-center text-slate-500">
        user bio here
    </div>
    

    <ul class="w-full px-10 flex items-center justify-around">

        <li class="flex-1 text-center">
            <a href="#" class="block duratiion-300 rounded-md w-full capitalize tracking-wide py-2 px-4 bg-transparent hover:bg-slate-500 text-white">
                posts
            </a>
        </li>

        <li class="flex-1 text-center">
            <a href="#" class="block duratiion-300 rounded-md w-full capitalize tracking-wide py-2 px-4 bg-transparent hover:bg-slate-500 text-white">
                information
            </a>
        </li>

        <li class="flex-1 text-center">
            <a href="#" class="block duratiion-300 rounded-md w-full capitalize tracking-wide py-2 px-4 bg-transparent hover:bg-slate-500 text-white">
                achivements
            </a>
        </li>

        <li class="flex-1 text-center">
            <a href="#" class="block duratiion-300 rounded-md w-full capitalize tracking-wide py-2 px-4 bg-transparent hover:bg-slate-500 text-white">
                bio
            </a>
        </li>
        

    </ul>

    <hr class="mx-auto w-4/5 my-2 bg-slate-600">

</div>