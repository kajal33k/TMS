<x-layouts.app :title="__('Dashboard')">

    <div class="bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 min-h-screen flex items-center justify-center p-6">
    
        <div class="w-full max-w-3xl bg-white/10 backdrop-blur-lg border border-white/20 shadow-2xl p-8 rounded-2xl">
    
            {{-- ✅ Page Heading --}}
            <h2 class="text-3xl font-bold text-white mb-6 text-center">Task List</h2>
    
            {{-- ✅ Success Message --}}
            @if(session('success'))
                <div class="bg-green-500 text-white p-3 rounded mb-4 text-center font-semibold shadow-md">
                    {{ session('success') }}
                </div>
            @endif
    
            {{-- ✅ Task Form (Assign Task) --}}
            <form action="{{ route('tasks.store') }}" method="POST" class="flex flex-col md:flex-row mb-6 gap-2">
                @csrf
                <input type="text" name="title" placeholder="Task Title" 
                    class="w-full md:w-1/2 p-3 bg-white/20 border border-white/30 text-white placeholder-gray-300 rounded focus:outline-none focus:ring focus:ring-[#6da1a8]" required>
                
                <select name="employee_id" class="p-3 bg-gray-400 text-white border border-white/30 rounded focus:ring focus:ring-[#6da1a8] w-full md:w-1/2">
                    <option value="">Assign to Employee</option>
                    @foreach($employees as $employee)
                        <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                    @endforeach
                </select>
    
                <button type="submit" class="bg-[#6da1a8] hover:bg-[#3c5b64] text-white px-6 py-3 rounded-lg transition-all">
                    Assign
                </button>
            </form>
    
            {{-- ✅ Task List --}}
            <ul class="space-y-3">
                @foreach($tasks as $task)
                    <li class="flex flex-col md:flex-row md:items-center justify-between p-4 border border-white/30 bg-white/10 backdrop-blur-lg rounded text-white">
                        
                        {{-- ✅ Task Information --}}
                        <div>
                            <span class="font-semibold">{{ $task->title }}</span> 
                            <span class="text-gray-300">- Assigned to <strong>{{ optional($task->employee)->name ?? 'Unassigned' }}</strong></span>
                            
                            {{-- ✅ Task Assigned Time --}}
                            <p class="text-sm text-gray-400">
                                Assigned: {{ optional($task->assigned_at)->diffForHumans() ?? 'N/A' }}
                            </p>
    
                            {{-- ✅ Task Completion Time & Duration --}}
                            @if($task->progress === 'Completed')
                                <p class="text-sm text-green-400">Completed: {{ optional($task->completed_at)->diffForHumans() }}</p>
                            @endif
                        </div>
    
                        {{-- ✅ Task Actions --}}
                        <div class="flex space-x-2">
                            {{-- Update Progress Button --}}
                            <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="px-3 py-1 rounded shadow-md transition-all 
                                    {{ $task->progress == 'Not Started' ? 'bg-yellow-400 hover:bg-yellow-500' : 
                                       ($task->progress == 'In Progress' ? 'bg-blue-400 hover:bg-blue-500' : 
                                       'bg-green-500 hover:bg-green-600') }}">
                                    {{ $task->progress }}
                                </button>
                            </form>
    
                            {{-- Delete Task --}}
                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this task?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-400 hover:text-red-600 transition-all text-lg font-bold px-3 py-1 rounded">
                                    X
                                </button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
            
        </div>
    </div>

</x-layouts.app>
