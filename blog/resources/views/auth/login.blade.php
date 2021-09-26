<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container mt-4 py-4">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
<form>
  <div class="mb-4">
    <label class="block text-md font-light mb-2" for="username">Email</label>
    <input class=" bg-drabya-gray border-gray-500 appearance-none border p-4 font-light leading-tight focus:outline-none focus:shadow-outline" type="text" name="email" id="" placeholder="Username">
  </div>
  <div class="mb-4">
    <label class="block text-md font-light mb-2" for="password">Password</label>
    <input class="bg-drabya-gray border-gray-500 appearance-none border p-4 font-light leading-tight focus:outline-none focus:shadow-outline" type="password" name="password" id="" placeholder="Password">
  </div>

  <div class="flex items-center justify-between mb-5">
    <button class="bg-indigo-600 hover:bg-blue-700 text-white font-light py-2 px-6 rounded focus:outline-none focus:shadow-outline" type="button">
      LOGIN
    </button>
    <a class="inline-block align-baseline font-light text-sm text-indigo-600 hover:text-indigo-500" href="#">
      Forgot Password?
    </a>
  </div>
  <p class="text-center text-md font-light">Don't have an account? <a class="font-light text-md text-indigo-600">Create</a></p>
</form>
</div>
</body>
</html>