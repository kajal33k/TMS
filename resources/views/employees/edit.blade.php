<x-layouts.app :title="__('Edit Employee')">
    <div class="flex items-center justify-center min-h-screen bg-[#374146] p-6">
        <div class="w-full max-w-3xl bg-[#4d8892] bg-opacity-10 backdrop-blur-md shadow-lg rounded-2xl p-8 border border-white/20">
            <h2 class="text-3xl font-semibold text-black text-center mb-6">Edit Employee</h2>

            @if (session('success'))
                <div class="bg-green-500/20 text-green-100 p-3 rounded-lg mb-4 border border-green-300">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('employees.update', $employee->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <div>
                    <label class="block text-sm font-medium text-black/80">Full Name</label>
                    <input type="text" name="name" value="{{ old('name', $employee->name) }}" required 
                           class="w-full p-3 border border-black/20 bg-white/20 text-black rounded-lg placeholder-white/60 focus:ring focus:ring-blue-300 focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium text-black/80">Role</label>
                    <input type="text" name="role" value="{{ old('role', $employee->role) }}" required 
                           class="w-full p-3 border border-black/20 bg-white/20 text-black rounded-lg placeholder-white/60 focus:ring focus:ring-blue-300 focus:outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium text-black/80">Email</label>
                    <input type="email" name="email" value="{{ old('email', $employee->email) }}" required 
                           class="w-full p-3 border border-black/20 bg-white/20 text-black rounded-lg placeholder-white/60 focus:ring focus:ring-blue-300 focus:outline-none">
                </div>

                <button type="submit" 
                        class="w-full bg-gradient-to-r from-[#608eacb8] to-[#a6c6ce] text-black py-3 px-4 rounded-lg font-medium shadow-lg hover:opacity-90 transition-all">
                    Update Employee
                </button>
            </form>
        </div>
    </div>
</x-layouts.app>
