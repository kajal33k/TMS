<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Requirement Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-rose-600 via-gray-500 to-rose-500 min-h-screen flex items-center justify-center p-6">
    <div class="bg-black bg-opacity-20 backdrop-blur-md rounded-2xl shadow-lg p-8 max-w-2xl w-full">
        <div class="text-center mb-6">
            <h1 class="text-2xl font-semibold text-white">User Requirement Form</h1>
            <p class="text-white text-opacity-80">Please fill out the form with accurate details.</p>
        </div>

        <form action="#" method="POST">
            <div class="mb-4">
                <label for="name" class="block text-white font-medium">Full Name</label>
                <input type="text" id="name" name="name" required class="w-full p-3 rounded-lg bg-white bg-opacity-30 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-rose-300">
            </div>
            
            <div class="mb-4">
                <label for="email" class="block text-white font-medium">Email Address</label>
                <input type="email" id="email" name="email" required class="w-full p-3 rounded-lg bg-white bg-opacity-30 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-rose-300">
            </div>
            
            <div class="mb-4">
                <label for="company" class="block text-white font-medium">Company Name</label>
                <input type="text" id="company" name="company" required class="w-full p-3 rounded-lg bg-white bg-opacity-30 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-rose-300">
            </div>
            
            <div class="mb-4">
                <label for="requirements" class="block text-white font-medium">Project Requirements</label>
                <textarea id="requirements" name="requirements" required class="w-full p-3 rounded-lg bg-white bg-opacity-30 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-rose-300 h-32 resize-none"></textarea>
            </div>

            <div class="mb-4">
                <label for="priority" class="block text-white font-medium">Priority Level</label>
                <select id="priority" name="priority" required 
                    class="w-full p-3 rounded-lg bg-gray-900 bg-opacity-30 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-rose-300">
                    <option value="Low">Low</option>
                    <option value="Medium">Medium</option>
                    <option value="High">High</option>
                </select>
            </div>
            
            
            <button type="submit" class="w-full p-3 rounded-lg bg-rose-500 text-white font-semibold hover:bg-rose-700 transition">Submit Requirements</button>
        </form>
    </div>
    
</body>
</html>