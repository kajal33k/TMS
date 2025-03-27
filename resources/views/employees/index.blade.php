<x-layouts.app :title="__('Dashboard')">
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold mb-4">Employee List</h2>
        <a href="{{ route('employees.create') }}"
            class="bg-[#5B8DAE] hover:bg-[#0A3C5E] text-white px-4 py-2 rounded-md border border-white">Add Employee</a>
        @if (session('success'))
            <div class="bg-green-500 text-white p-3 rounded-md mb-4 text-center">
                {{ session('success') }}
            </div>
        @endif

        <table class="min-w-full bg-gray-800 border mt-4">
            <thead>
                <tr>
                    <th class="border px-4 py-2">ID</th>
                    <th class="border px-4 py-2">Name</th>
                    <th class="border px-4 py-2">Role</th>
                    <th class="border px-4 py-2">Email</th>
                    <th class="p-3 border">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td class="border px-4 py-2">{{ $employee->id }}</td>
                        <td class="border px-4 py-2">{{ $employee->name }}</td>
                        <td class="border px-4 py-2">{{ $employee->role }}</td>
                        <td class="border px-4 py-2">{{ $employee->email }}</td>
                        <td class="p-3 border">
                            <a href="{{ route('employees.edit', $employee->id) }}"
                                class="bg-yellow-500 text-white py-1 px-3 rounded hover:bg-yellow-600">Edit</a>

                            <a
                                href="{{ route('employees.destroy', $employee->id) }}"class="inline-block bg-red-500 text-white py-1 px-3 rounded hover:bg-red-600">Delete</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-layouts.app>
