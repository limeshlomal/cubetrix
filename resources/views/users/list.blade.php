<x-app-layout>
    <div class="container mx-auto p-6">
        <div class="flex justify-between items-center mb-4">
            <ul class="flex space-x-2 rtl:space-x-reverse">
                <li>
                    <a href="javascript:;" class="text-primary hover:underline text-lg font-semibold">User List</a>
                </li>
            </ul>
            <x-href-button href="{{ route('users.store')  }}">Create User</x-href-button>
        </div>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">First Name</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Name</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Employee ID</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User Name</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                @foreach($users as $user)
                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2 whitespace-nowrap">{{ $user->id }}</td>
                        <td class="px-4 py-2 whitespace-nowrap">{{ $user->first_name }}</td>
                        <td class="px-4 py-2 whitespace-nowrap">{{ $user->last_name }}</td>
                        <td class="px-4 py-2 whitespace-nowrap">{{ $user->empId }}</td>
                        <td class="px-4 py-2 whitespace-nowrap">{{ $user->username }}</td>
                        <td class="px-4 py-2 whitespace-nowrap">{{ $user->email }}</td>
                        <td class="px-4 py-2 whitespace-nowrap">
                            <x-secondary-button>Edit</x-secondary-button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
