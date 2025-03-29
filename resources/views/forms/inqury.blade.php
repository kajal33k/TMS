<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquiry Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center p-6 bg-gradient-to-r from-[#E6A157] to-[#C28A5E]">
    <div class="max-w-lg w-full p-8 rounded-2xl shadow-lg bg-white bg-opacity-20 backdrop-blur-md">
        <h2 class="text-center text-2xl font-semibold text-gray-800 mb-6">Submit an Inquiry</h2>
        
        <form action="#" method="POST">
            <div class="mb-4">
                <label for="name" class="block text-gray-800 font-medium">Full Name</label>
                <input type="text" id="name" name="name" required class="w-full p-3 rounded-lg bg-white bg-opacity-30 text-gray-800 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#E6A157]">
            </div>
            
            <div class="mb-4">
                <label for="email" class="block text-gray-800 font-medium">Email Address</label>
                <input type="email" id="email" name="email" required class="w-full p-3 rounded-lg bg-white bg-opacity-30 text-gray-800 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#E6A157]">
            </div>
            
            <div class="mb-4">
                <label for="subject" class="block text-gray-800 font-medium">Subject</label>
                <input type="text" id="subject" name="subject" required class="w-full p-3 rounded-lg bg-white bg-opacity-30 text-gray-800 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#E6A157]">
            </div>
            
            <div class="mb-4">
                <label for="message" class="block text-gray-800 font-medium">Message</label>
                <textarea id="message" name="message" required class="w-full p-3 rounded-lg bg-white bg-opacity-30 text-gray-800 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#E6A157] h-32 resize-none"></textarea>
            </div>
            
            <button type="submit" class="w-full p-3 rounded-lg bg-[#5b3d25] text-white font-semibold hover:bg-[#7d5f4a] transition">Submit Inquiry</button>
        </form>
    </div>
</body>
</html>