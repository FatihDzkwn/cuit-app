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
    @if($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-2 rounded mb-4">
        <ul class="list-disc pl-5 text-sm">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <h2 class="text-2xl font-bold text-center text-blue-600 mb-6">Register to Cuit</h2>
    
    <form method="POST" action="{{route('register')}}">
      @csrf
      <div class="mb-4">
        <label class="block text-sm mb-1">Username</label>
        <input type="text" name="username" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500" placeholder="your_username" />
      </div>
      <div class="mb-4">
        <label class="block text-sm mb-1">Email</label>
        <input type="email" name="email" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500" placeholder="you@example.com" />
      </div>
      <div class="mb-4">
        <label class="block text-sm mb-1">Password</label>
        <input type="password" name= "password" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500" placeholder="********"/>
      </div>
      <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">Register</button>
    </form>

    <p class="text-sm text-center mt-4 text-gray-500">
      Already have an account?
      <a href="{{route('login')}}" class="text-blue-600 hover:underline">Login here</a>
    </p>
  </div>

</body>
</html>
