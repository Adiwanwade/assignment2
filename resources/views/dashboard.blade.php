<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex justify-center">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>


    <nav
    class="absolute inset-0 transform lg:transform-none lg:opacity-100 duration-200 lg:relative z-10 w-80 bg-indigo-900 text-white h-screen p-3"
    :class="{'translate-x-0 ease-in opacity-100':open === true, '-translate-x-full ease-out opacity-0': open === false}"
>
    <div class="flex justify-between">
        <span class="font-bold text-2xl sm:text-3xl p-2">Sidebar</span>
        <button
            class="p-2 focus:outline-none focus:bg-indigo-800 hover:bg-indigo-800 rounded-md lg:hidden"
            @click="open = false"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-6 w-6"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M15 19l-7-7 7-7"
                />
            </svg>
        </button>
    </div>
    <ul class="mt-8">
        <li>
            <a
                href="/home"
                class="block px-4 py-2 hover:bg-indigo-800 rounded-md"
                >Home</a
            >
            @if(Auth::user()->isAdmin())
            <a
            href="{{ route('admin') }}"
            class="block px-4 py-2 hover:bg-indigo-800 rounded-md"
            >Admin Section</a
        >
            <a
                href="{{ route('admin-users') }}"
                class="block px-4 py-2 hover:bg-indigo-800 rounded-md"
                >All Users</a
            >
            <a

            href="{{ route('admin-users-create') }}"
            class="block px-4 py-2 hover:bg-indigo-800 rounded-md"
                >Create User</a>
                @endif
                <a
                href="{{ route('admin-categories') }}"
                class="block px-4 py-2 hover:bg-indigo-800 rounded-md"
                >All Categories</a
            >
            <a
                href="{{ route('admin-categories-create') }}"
                class="block px-4 py-2 hover:bg-indigo-800 rounded-md"
                >Create Category</a
            >
            <a
            href="{{ route('admin-posts') }}"
                class="block px-4 py-2 hover:bg-indigo-800 rounded-md"
                >All Posts</a
            >
            <a
            href="{{ route('admin-posts-create') }}"
                class="block px-4 py-2 hover:bg-indigo-800 rounded-md"
                >Create Post</a
            >
        </li>
    </ul>
    </nav>




</x-app-layout>
