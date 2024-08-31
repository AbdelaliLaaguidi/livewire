<div class="w-1/2 relative overflow-x-auto sm:rounded-lg">
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
            @foreach ($users as $user)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                        <img class="w-10 h-10 rounded-full" src="{{ Storage::url($user->avatar)}}" alt="user image">
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
    {{ $users->links() }}
</div>

