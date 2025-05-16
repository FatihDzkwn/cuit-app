<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register - Cuit App</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

  <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-8">
    <h2 class="text-2xl font-bold text-center text-blue-600 mb-6">Register to Cuit</h2>
    
    <form>
      <div class="mb-4">
        <label class="block text-sm mb-1">Username</label>
        <input type="text" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500" placeholder="your_username" />
      </div>
      <div class="mb-4">
        <label class="block text-sm mb-1">Email</label>
        <input type="email" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500" placeholder="you@example.com" />
      </div>
      <div class="mb-4">
        <label class="block text-sm mb-1">Password</label>
        <input type="password" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500" placeholder="********" />
      </div>
      <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">Register</button>
    </form>

    <p class="text-sm text-center mt-4 text-gray-500">
      Already have an account?
      <a href="login.html" class="text-blue-600 hover:underline">Login here</a>
    </p>
  </div>

</body>
</html>
