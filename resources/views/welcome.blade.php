<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>frontend ui/laravel12</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Left Section -->
                <div class="flex">
                    <a href="#" class="flex items-center text-lg font-semibold text-[#0A3C5E]">
                        <img src="{{ asset('asset/img/task_logo.webp') }}" alt="Tasks Logo" class="h-10">
                    </a>
                </div>

                <!-- Center Links -->
                <div class="hidden md:flex space-x-6 items-center">
                    <a href="#" class="text-[#0A3C5E] hover:text-blue-500">Home</a>
                    <a href="#" class="text-[#0A3C5E] hover:text-blue-500">About</a>
                    <a href="#" class="text-[#0A3C5E] hover:text-blue-500">Services</a>
                    <a href="#" class="text-[#0A3C5E] hover:text-blue-500">Contact</a>
                </div>

                <!-- Right Section (Mobile Menu) -->
                <div class="md:hidden flex items-center">
                    <button id="menu-btn" class="focus:outline-none">
                        <svg class="w-6 h-6 text-[#0A3C5E]" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden px-4 pb-4 space-y-2 bg-white">
            <a href="#" class="block text-[#0A3C5E] hover:text-blue-500">Home</a>
            <a href="#" class="block text-[#0A3C5E] hover:text-blue-500">About</a>
            <a href="#" class="block text-[#0A3C5E] hover:text-blue-500">Services</a>
            <a href="#" class="block text-[#0A3C5E] hover:text-blue-500">Contact</a>
        </div>
    </nav>

    <script>
        // Toggle Mobile Menu
        document.getElementById('menu-btn').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>


    {{-- MAIN SECTION --}}


    <div class="w-full bg-[#C7E2ED]">
        <div class="text-center py-2 text-sm text-[#0A3C5E]">
            Powered by Petpooja, building a tech-led ecosystem for <span class="font-bold">SMBs in India</span> since
            2011 🚀
        </div>
        <div class="max-w-6xl mx-auto flex flex-col lg:flex-row items-center py-10 px-6">
            <div class="lg:w-1/2 space-y-6">
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('asset/img/task_logo.webp') }}" alt="Tasks Logo" class="h-10">
                    {{-- <h1 class="text-3xl font-bold">TASKS</h1>
                <span class="text-[#0A3C5E]">BY PETPOOJA</span> --}}
                </div>
                <h2 class="text-4xl font-bold">Everyday task management made simple</h2>
                <p class="text-[#0A3C5E]">Create, track & validate updates on your staff’s assigned operational tasks
                    from a single app.</p>
                <button class="bg-[#2D556E] hover:bg-[#5B8DAE] text-white px-6 py-3 rounded-lg text-lg font-medium">Get
                    started</button>
            </div>
            <div class="lg:w-1/2 mt-10 lg:mt-0">
                <img src="{{ asset('asset/img/task.jpg') }}" alt="Task Management Illustration" class="w-full">
            </div>
        </div>
    </div>

    {{-- section2 --}}
    <div class="max-w-5xl mx-auto text-center py-16 px-4">
        <h1 class="text-3xl font-bold">Running a business means getting</h1>
        <h2 class="text-3xl font-bold text-black">1000 things done at the same time</h2>
        <p class="text-[#0A3C5E] mt-4">You can run all day... and still have a few tasks</p>
        <p class="text-black font-bold">Unmanaged. Unsupervised. Unfinished!</p>
    </div>

    <div class="flex flex-col lg:flex-row items-center justify-center gap-12 px-4 pb-4">
        <div class="relative w-96">
            <img src="{{ asset('asset/img/img2.jpg') }}" alt="Task Management App" class="">
        </div>
        <div class="text-left">
            <p class="text-[#2d556e] font-bold">Step 1:</p>
            <p class="mb-2">Easily create & assign business tasks to your staff</p>
            <p class="text-[#2d556e] font-bold">Step 2:</p>
            <p class="mb-2">Verify task completion via photo/video/doc proof</p>
            <p class="text-[#2d556e] font-bold">Step 3:</p>
            <p class="mb-2">Escalate necessary issues</p>
            <p class="text-[#2d556e] font-bold">Step 4:</p>
            <p class="mb-2">Track progress & plan activities better</p>
            <p class="italic">directly from the app!</p>
        </div>
    </div>

    {{-- section3 --}}
    <div class="max-w-5xl mx-auto text-center py-16 px-4">
        <h1 class="text-3xl font-bold">Everyday Task Management Simplified for All!</h1>
        <p class="text-[#0A3C5E] mt-2">Delegate Tasks. Verify Completion. Improve Efficiency.</p>
        <p class="text-[#5B8DAE] font-bold mt-4">Specifically crafted for</p>
        <div class="flex justify-center gap-4 mt-2">
            <button data-tab="owners" class="tab-btn px-6 py-2 bg-[#0A3C5E] text-white rounded transition-all"
                onclick="setActiveTab('owners')">Owners</button>
            <button data-tab="managers" class="tab-btn px-6 py-2 bg-[#0A3C5E] text-white rounded transition-all"
                onclick="setActiveTab('managers')">Managers</button>
            <button data-tab="employees" class="tab-btn px-6 py-2 bg-[#0A3C5E] text-white rounded transition-all"
                onclick="setActiveTab('employees')">Employees</button>
        </div>
    </div>

    <div class="flex flex-col lg:flex-row items-center justify-center gap-12 px-4">
        <div class="relative w-72">
            <img src="{{ asset('asset/img/man-5433469_1280.webp') }}" alt="Task Management App" class="">
        </div>
        <div class="text-left w-full max-w-lg">
            <div id="owners" class="tab-content hidden">
                <h2 class="text-black font-bold text-xl">For Owners</h2>
                <p class="mt-2 text-[#0A3C5E]">Monitor all tasks efficiently, track employee performance, and ensure
                    smooth operations.</p>
            </div>
            <div id="managers" class="tab-content">
                <h2 class="text-[#0A3C5E] font-bold text-xl">For Managers</h2>
                <p class="mt-2 text-[#0A3C5E]">Allocate tasks to each staff in any shift with a few simple clicks.
                    Solve pending issues and create SOP templates for smoother training.</p>
            </div>
            <div id="employees" class="tab-content hidden">
                <h2 class="text-black font-bold text-xl">For Employees</h2>
                <p class="mt-2 text-[#0A3C5E]">Complete assigned tasks efficiently, provide real-time updates, and
                    ensure seamless workflow.</p>
            </div>
        </div>
    </div>

    {{-- section4 --}}
    <div class="max-w-full mx-auto text-center py-16 bg-[#C7E2ED]">
        <h1 class="text-3xl font-bold text-black">
            Say goodbye to daily follow-ups, reminders, excuses and chaotic task management.
        </h1>
        <p class="text-gray-600 mt-2">Get real-time updates on task progress along with escalated issues</p>
    </div>
    
    <div class="flex flex-col bg-[#C7E2ED] lg:flex-row items-center justify-center gap-12">
        <div class="flex-1 space-y-4 px-32">
            <p class="flex items-center text-black font-medium">
                ✅ Photo, video, checklist-based verification
            </p>
            <p class="flex items-center text-black font-medium">
                ✅ Advance task scheduling
            </p>
            <p class="flex items-center text-black font-medium">
                ✅ Customize employee rights
            </p>
            <p class="flex items-center text-black font-medium">
                ✅ Access logs & reports
            </p>
        </div>
        
        <div class="relative w-96">
            <img src="{{ asset('asset/img/todo') }}" alt="Task Management App" class="">
            <div class="absolute top-1/3 right-0 bg-green-200 p-4 rounded-full shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14V9a6 6 0 10-12 0v5c0 .386-.146.735-.405 1.005L4 17h5m6 0a3 3 0 11-6 0" />
                </svg>
            </div>
        </div>
        
        <div class="flex-1 space-y-4 px-32">
            <p class="flex items-center text-black font-medium">
                ✅ Create SOP templates
            </p>
            <p class="flex items-center text-black font-medium">
                ✅ Send reminders & notifications
            </p>
            <p class="flex items-center text-black font-medium">
                ✅ 24x7 Support
            </p>
        </div>
    </div>
{{-- section5 --}}

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setActiveTab('managers');
        });

        function setActiveTab(tab) {
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('bg-[#0A3C5E]', 'text-white');
                btn.classList.add('bg-[#0A3C5E]', 'text-white');
            });

            document.querySelectorAll('.tab-content').forEach(content => content.classList.add('hidden'));

            document.getElementById(tab).classList.remove('hidden');
            document.querySelector(`[data-tab='${tab}']`).classList.add('bg-[#5B8DAE]', 'text-white');
        }
    </script>
</body>

</html>
