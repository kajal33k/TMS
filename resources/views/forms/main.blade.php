<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Responsive Navbar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black min-h-screen">

    <!-- Navbar -->
    <nav class="bg-black bg-opacity-20 backdrop-blur-md shadow-lg border-b border-white border-opacity-30">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            
            <!-- Logo -->
            <a href="#" class="text-white text-2xl font-semibold">FORM</a>
            
            <!-- Menu Button (Mobile) -->
            <button id="menu-btn" class="lg:hidden text-white focus:outline-none">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
            
            <!-- Menu Items -->
            <ul id="menu" class="hidden lg:flex space-x-6 text-white text-lg">
                <li><a href="{{route('form.feedback')}}" class="hover:text-yellow-300 transition">Feedback</a></li>
                <li><a href="{{route('form.controller')}}" class="hover:text-yellow-300 transition">Services</a></li>
                
                <!-- Dropdown -->
                <li class="relative group">
                    <button class="flex items-center space-x-1 hover:text-yellow-300 transition">
                        <span>More</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <ul class="absolute left-0 mt-2 bg-white bg-opacity-20 backdrop-blur-md shadow-lg rounded-lg border border-white border-opacity-30 hidden group-hover:block">
                        <li><a href="{{route('form.user-rec')}}" class="block px-4 py-2 text-white hover:bg-white hover:bg-opacity-30">User Requirement</a></li>
                        <li><a href="{{route('form.inqury')}}" class="block px-4 py-2 text-white hover:bg-white hover:bg-opacity-30">Inquery</a></li>
                    </ul>
                </li>
                
                <li><a href="{{route('form.varranty')}}" class="hover:text-yellow-300 transition">Varranty</a></li>
            </ul>

            <!-- Search Bar -->
            <div class="hidden lg:flex items-center space-x-2 bg-white bg-opacity-20 rounded-lg px-3 py-2 border border-white border-opacity-30">
                <input type="text" placeholder="Search..." class="bg-transparent text-white placeholder-white focus:outline-none">
                <button class="text-white hover:text-yellow-300">
                    🔍
                </button>
            </div>
            
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="lg:hidden hidden bg-white bg-opacity-20 backdrop-blur-md text-white text-center py-4 space-y-3">
            <a href="#" class="block hover:text-yellow-300">Home</a>
            <a href="#" class="block hover:text-yellow-300">Services</a>
            <a href="#" class="block hover:text-yellow-300">Contact</a>
            <a href="#" class="block hover:text-yellow-300">More</a>
        </div>
    </nav>

    <!-- JavaScript for Menu Toggle -->
    <script>
        const menuBtn = document.getElementById("menu-btn");
        const menu = document.getElementById("mobile-menu");

        menuBtn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>

</body>
</html>
