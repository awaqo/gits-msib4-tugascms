<header class="w-full py-4 px-6 shadow-md">
    <div class="flex justify-end items-center gap-3">
        <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="flex items-center text-sm font-medium text-gray-900 rounded-full hover:text-blue-600" type="button">
            <span class="sr-only">Open user menu</span>
            {{ Auth::user()->name }}
            <svg class="w-4 h-4 mx-1.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            @if (Auth::user()->avatar == NULL)
                <img class="w-10 h-10 mr-2 rounded-full" src="{{ asset('img/default.png') }}" alt="Gambar {{ Auth::user()->name }}">
            @else
                <img class="w-10 h-10 mr-2 rounded-full" src="{{ asset('storage/images/profile/' . Auth::user()->avatar) }}" alt="Gambar {{ Auth::user()->name }}">
            @endif
        </button>

        <!-- Dropdown menu -->
        <div id="dropdownAvatarName" class="z-10 hidden divide-y rounded-lg shadow w-44 bg-gray-700 divide-gray-600">
            <ul class="py-2 text-sm text-gray-200" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                <li>
                    <a href="{{ route('profile') }}" class="block px-4 py-2 hover:bg-gray-600 hover:text-white">
                        <i class="fa-solid fa-gear"></i> <span class="ml-1">Edit Akun</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm hover:bg-gray-600 text-gray-200 hover:text-white">
                        <i class="fa-solid fa-right-from-bracket"></i> <span class="ml-1">Logout</span>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</header>