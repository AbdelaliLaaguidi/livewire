<div class="w-full h-screen grid place-items-center relative overflow-x-auto sm:rounded-lg">
    <div class="flex gap-5 items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-white dark:bg-gray-900">
        <div>
            <h1 class="text-xl font-bold">Total users ({{$this->users->total()}})</h1>
        </div>
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input wire:model.live.debounce.1000ms="search" type="text" id="table-search-users" class="inline-block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for users">
        </div>
    </div>
    <table class="mb-3 w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Joined Date
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($this->users as $user)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                        <a wire.navigate href="/users/{{ $user->id}}">
                            <img class="w-10 h-10 rounded-full" src="{{ Storage::url($user->avatar)}}" alt="user image">
                        </a>
                        <div class="ps-3">
                            <div class="text-base font-semibold">{{ $user->name}}</div>
                            <div class="font-normal text-gray-500">{{ $user->email}}</div>
                        </div>  
                    </th>
                    <td class="px-6 py-4">
                        {{ $user->created_at}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $this->users->links() }}
</div>

