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
@include('partials.log')

<form method="POST" action="{{ route('login') }}" class="w-full max-w-sm mx-auto rounded-lg border shadow-md p-5 mb-5">
    <h1 class="text-3xl text-green-500 mb-6 text-center">Se connecter</h1>
    @csrf
    
    <div class="mb-4">
        <label for="email" class="block font-semibold text-gray-700 mb-2">Email</label>
        <input id="email" type="email" name="email" class="shadow border rounded w-full p-2" value="{{ old('email') }}" autocomplete="email" placeholder="Votre email" autofocus>
        @error('email')
            <span class="text-red-400 text-sm">
                <span>{{ $message }}</span>
            </span>
        @enderror
    </div>

    <div class="mb-4">
        <label for="password" class="block font-semibold text-gray-700 mb-2">Mot de passe</label>
        <input id="password" type="password" name="password" class="shadow border rounded w-full p-2" value="{{ old('password') }}" autocomplete="password" placeholder="Votre mot de passe" autofocus>
       @error('password')
            <span class="text-red-400 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit" class="bg-green-500 text-white hover:bg-green-700 transition ease-in-out duration-500 rounded-md shadow-md w-full block px-4 py-2 mt-3">Se connecter</button>
</form>

</div>
</body>
</html>