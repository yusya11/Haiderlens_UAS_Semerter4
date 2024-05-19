<!doctype html>
<html> 
<head> 
  <title> HaiderLens</title>
  <link rel="shortcout icon" href="../img/jempolhome.jpg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Petemoss&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
	<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</head>
<body>

    
<div class="bg-gradient-to-b from-red-800 to-black flex justify-center items-center h-screen">
    <!-- Left: Image -->
<div class="w-1/2 h-screen hidden lg:block">
  <img src="../img/Loginpp.jpg" alt="Placeholder Image" class="object-cover w-full h-full">
</div>
<!-- Right: Login Form -->
<div class="lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
  <h1 class="text-5xl font-bold text-white mb-4">Login</h1>

  {{-- config --}}
  @if($errors->any())
        <div class="alert alert-denger"></div>
        <ul class="text-white ">

            @foreach($errors->all() as $item)
            <li>*{{ $item }}</li>
            @endforeach
        </ul>
        @endif
        
  <form action="{{url('proses_login')}}" method="POST">
    {{ csrf_field() }}
    <!-- Username Input -->
    <div class="mb-4">
      <label for="username" class="form-label text-white">Username</label>
                <input type="text" value="{{ old('username') }}" name="username" class="form-control w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-red-500">
                @if($errors->has('username'))
                <span class="error text-gray-400">{{ $errors->first('username') }}</span>
                @endif
    </div>
    <!-- Password Input -->
    <div class="mb-4">
      <label for="password" class="form-label text-white">Password</label>
                <input type="password" name="password" class="form-control w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-red-500">
                @if($errors->has('password'))
                <span class="error text-gray-400">{{ $errors->first('password') }}</span>
                @endif
    </div>
    {{-- <!-- Remember Me Checkbox -->
    <div class="mb-4 flex items-center">
      <input type="checkbox" id="remember" name="remember" class="text-blue-500">
      <label for="remember" class="text-white ml-2">Remember Me</label>
    </div> --}}

    <!-- Forgot Password Link -->
    {{-- <div class="mb-6 text-blue-500">
      <a href="#" class="hover:underline">Forgot Password?</a>
    </div> --}}

    <!-- Login Button -->
    <div class=" py-10">
    <div class="">
        <a href="/dashboard"><button name="submit" type="submit" class="text-gray-50 hover:text-black border-2 border-white font-bold transition-all hover:bg-white rounded-md py-2 px-4 w-full">LOGIN</button></a>
    </div>
        <!-- back Button -->
    <div class="py-2">
        <a href="/"> <button type="button" class="btn text-gray-50 border-2 hover:text-black border-white font-bold transition-all hover:bg-white rounded-md py-2 px-4 w-full">BACK</button></a>
    </div>
    </div>

  </form>
  
  <!-- Sign up  Link -->
  {{-- <div class="mt-6 text-blue-500 text-center">
    <a href="#" class="hover:underline">Sign up Here</a>
  </div> --}}
</div>
</div>
    

</body>
</html>