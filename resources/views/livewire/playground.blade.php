<div class="p-5 ">
    <ul class="mb-5">
        <li class="text-lg font-semibold text-gray-900">Users: ({{count($users)}})</li>
        @foreach ($users as $user)
            <li class="px-4 py-2 odd:bg-gray-100 border-t border-gray-300 flex gap-5 items-center">
                <img src="{{ Storage::url($user->avatar)}}" alt="Not" class="w-20 h-20 rounded-full">
                <span>{{$user->name}}</span>
            </li>
        @endforeach
    </ul>

    {{ $users->links()}}
    
    @if(session('success'))        
        <span class="block p-4 mb-5 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            {{ session('success')}}
        </span>
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
        
        <label for="avatar" class="text-lg font-semibold text-gray-900">Avatar</label>
        <input wire:model="avatar" type="file" id="avatar" class="block border border-gray-300 px-4 py-2 rounded-md">
        @error('avatar')
            <span class="block text-xs text-red-500 mb-3">{{ $message }}</span>
        @enderror

        @if ($this->avatar)
            <img src="{{ $this->avatar->temporaryUrl()}}" alt="Image Placeholder" class="w-20 h-20 rounded-full">
        @endif
        
        <button wire:loading.attr="disabled" wire:loading.class.add="bg-gray-400" class="bg-green-600 text-white px-4 py-2 mt-4 rounded-md">Add User</button>
        <button wire:loading.attr="disabled" wire:loading.class.add="bg-gray-400" wire:click.prevent="addRandomUser" class="bg-blue-600 text-white px-4 py-2 rounded-md">Add Random User</button>
    </form>

</div>
