<div class="p-5 ">
    <ul class="mb-5">
        <li class="text-lg font-semibold text-gray-900">Users: ({{count($users)}})</li>
        @foreach ($users as $user)
            <li class="px-4 py-2 odd:bg-gray-100 border-t border-gray-300">{{$user->name}}</li>
        @endforeach
    </ul>

    @if(session('success'))        
        <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
               {{session('success')}}
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>
    @endif


    <form wire:submit="addUser" class="mb-5" >
        <label for="name" class="text-lg font-semibold text-gray-900">Name</label>
        <input wire:model="name" type="text" id="name" class="block border border-gray-300 px-4 py-2 rounded-md">
        @error('name')
            <span class="block text-xs text-red-500 mb-3">{{ $message }}</span>
        @enderror
        
        <label for="email" class="text-lg font-semibold text-gray-900">Email</label>
        <input wire:model="email" type="email" id="email" class="block border border-gray-300 px-4 py-2 rounded-md">
        @error('email')
            <span class="block text-xs text-red-500 mb-3">{{ $message }}</span>
        @enderror
        
        <label for="password" class="text-lg font-semibold text-gray-900">Password</label>
        <input wire:model="password" type="password" id="password" class="block border border-gray-300 px-4 py-2 rounded-md">
        @error('password')
            <span class="block text-xs text-red-500 mb-3">{{ $message }}</span>
        @enderror
        
        <button class="bg-green-600 text-white px-4 py-2 mt-4 rounded-md">Add User</button>
        <button wire:click.prevent="addRandomUser" class="bg-blue-600 text-white px-4 py-2 rounded-md">Add Random User</button>
    </form>

</div>
