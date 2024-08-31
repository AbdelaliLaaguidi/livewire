<div class="p-5 ">
    <ul class="mb-5">
        <li class="text-lg font-semibold text-gray-900">Users: ({{count($users)}})</li>
        @foreach ($users as $user)
            <li class="px-4 py-2 odd:bg-gray-100 border-t border-gray-300">{{$user->name}}</li>
        @endforeach
    </ul>

    
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
