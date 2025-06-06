<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit a Complaint</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black min-h-screen flex items-center justify-center p-6">
    <div class="bg-black bg-opacity-20 backdrop-blur-md  rounded-2xl shadow-lg shadow-orange-100 p-8 max-w-lg w-full">
        <div class="text-center mb-6">
            <h1 class="text-2xl font-semibold text-[#fefefe]">Fill Complaint Detail</h1>
        </div>

        <form action="submit_complaint.php" method="POST" enctype="multipart/form-data">
            <div class="mb-4">
                <label for="name" class="block text-white font-medium">Full Name</label>
                <input type="text" id="name" name="name" required class="w-full p-3 rounded-lg bg-white bg-opacity-30 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-indigo-300">
            </div>
            
            <div class="mb-4">
                <label for="email" class="block text-white font-medium">Email Address</label>
                <input type="email" id="email" name="email" required class="w-full p-3 rounded-lg bg-white bg-opacity-30 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-indigo-300">
            </div>
            
            <div class="mb-4">
                <label for="phone" class="block text-white font-medium">Phone Number</label>
                <input type="tel" id="phone" name="phone" required class="w-full p-3 rounded-lg bg-white bg-opacity-30 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-indigo-300">
            </div>
            
            <div class="mb-4">
                <label for="category" class="block text-white font-medium">Complaint Category</label>
                <select id="category" name="category" required class="w-full p-3 rounded-lg bg-gray-900 bg-opacity-30 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-gray-300">
                    <option value="" disabled selected>Select a category</option>
                    <option value="Service Quality">Service Quality</option>
                    <option value="Product Issue">Product Issue</option>
                    <option value="Billing Problem">Billing Problem</option>
                    <option value="Delivery Delay">Delivery Delay</option>
                    <option value="Employee Behavior">Employee Behavior</option>
                    <option value="Facility Issue">Facility Issue</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            
            <div class="mb-4">
                <label for="description" class="block text-white font-medium">Complaint Details</label>
                <textarea id="description" name="description" required class="w-full p-3 rounded-lg bg-white bg-opacity-30 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-indigo-300 h-32 resize-none"></textarea>
            </div>
            
            <div class="mb-4">
                <label class="block text-white font-medium">Attachments (Optional)</label>
                <input type="file" name="attachments[]" multiple class="w-full p-3 rounded-lg bg-white bg-opacity-30 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-indigo-300">
            </div>
            
            <button type="submit" class="w-full p-3 rounded-lg bg-[#5e201d] text-white font-semibold hover:bg-[#744947] transition">Submit Complaint</button>
        </form>
    </div>
</body>
</html>