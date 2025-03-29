<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warranty Registration</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-gray-500 to-teal-500 min-h-screen flex items-center justify-center p-6">
    
    <div class="bg-black bg-opacity-20 backdrop-blur-md shadow-lg rounded-2xl p-8 max-w-lg w-full border border-white border-opacity-30">
        
        <!-- Header -->
        <div class="text-center mb-6">
            <h1 class="text-2xl font-semibold text-white">Warranty Registration</h1>
            <p class="text-white text-opacity-80 text-sm">Register your product to activate your warranty.</p>
        </div>

        <!-- Form -->
        <form action="#" method="POST">
            
            <!-- Full Name -->
            <div class="mb-4">
                <label for="name" class="block text-white font-medium">Full Name</label>
                <input type="text" id="name" name="name" required placeholder="John Doe" 
                    class="w-full p-3 rounded-lg bg-white bg-opacity-30 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-teal-300 placeholder-white placeholder-opacity-50">
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-white font-medium">Email Address</label>
                <input type="email" id="email" name="email" required placeholder="john@example.com" 
                    class="w-full p-3 rounded-lg bg-white bg-opacity-30 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-teal-300 placeholder-white placeholder-opacity-50">
            </div>

            <!-- Phone -->
            <div class="mb-4">
                <label for="phone" class="block text-white font-medium">Phone Number</label>
                <input type="tel" id="phone" name="phone" required placeholder="+1 555-123-4567"
                    class="w-full p-3 rounded-lg bg-white bg-opacity-30 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-teal-300 placeholder-white placeholder-opacity-50">
            </div>

            <!-- Product Model -->
            <div class="mb-4">
                <label for="model" class="block text-white font-medium">Product Model</label>
                <input type="text" id="model" name="model" required placeholder="XYZ-1234"
                    class="w-full p-3 rounded-lg bg-white bg-opacity-30 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-teal-300 placeholder-white placeholder-opacity-50">
            </div>

            <!-- Serial Number -->
            <div class="mb-4">
                <label for="serial" class="block text-white font-medium">Serial Number</label>
                <input type="text" id="serial" name="serial" required placeholder="SN-ABC-987654"
                    class="w-full p-3 rounded-lg bg-white bg-opacity-30 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-teal-300 placeholder-white placeholder-opacity-50">
            </div>

            <!-- Date of Purchase -->
            <div class="mb-4">
                <label for="purchase_date" class="block text-white font-medium">Date of Purchase</label>
                <input type="date" id="purchase_date" name="purchase_date" required
                    class="w-full p-3 rounded-lg bg-white bg-opacity-30 text-white border border-white border-opacity-30 focus:outline-none focus:ring-2 focus:ring-teal-300">
            </div>

            <!-- Upload Invoice -->
            <div class="mb-4">
                <label class="block text-white font-medium">Upload Purchase Invoice</label>
                <input type="file" id="invoice" name="invoice" required class="hidden">
                <label for="invoice" 
                    class="w-full p-3 rounded-lg bg-white bg-opacity-30 text-white border border-dashed border-white border-opacity-30 flex items-center justify-center cursor-pointer hover:bg-opacity-40 transition">
                    <span class="text-sm text-white text-opacity-80">Click to upload invoice (PDF, JPG, PNG)</span>
                </label>
            </div>

            <!-- Terms & Conditions -->
            <div class="mb-4 flex items-center space-x-2">
                <input type="checkbox" id="terms" name="terms" required class="w-5 h-5 rounded bg-white bg-opacity-30 border border-white border-opacity-30 focus:ring-2 focus:ring-teal-300">
                <label for="terms" class="text-white text-sm">I agree to the <a href="#" class="underline text-teal-300">terms and conditions</a></label>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full p-3 rounded-lg bg-teal-900 text-white font-semibold hover:bg-teal-700 transition">
                Register Warranty
            </button>

        </form>

    </div>

</body>
</html>
