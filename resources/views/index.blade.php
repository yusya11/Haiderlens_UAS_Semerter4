<!doctype html>
<html> 
<head> 
  <title>HaiderLens</title>
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
@if($message = Session::get('success'))
    <script>
        Swal.fire({
            title: "Thank You",
            text: "{{ Session::get('success') }}",
            // background: "#00C853"
            // color: "#FAFAFA",
            icon: "success"
        });
    </script>
@endif
  
{{-- navbar --}}
   <section id="nav">
        <div class="bg-gradient-to-b from-red-800 to-black border-red-800 dark:bg-gray-900 opacity-80 mx-auto flex flex-wrap items-center w-full fixed top-0 z-50">
		    <div class="flex w-full md:w-1/2 justify-center md:justify-start text-white font-extrabold ">
				<div>
               <a href="#home"> <img class="h-10 ml-4 mt- mb-1  cursor-pointer" src="../img/logo.png" alt="..."> </a>
            </div>
            </div>
			<div class="flex w-full pt-2 content-center justify-between md:w-1/2 md:justify-end">
				<ul class="list-reset flex justify-between  flex-1 md:flex-none items-center">
          {{-- dashboard --}}
          </li>
					<li class="mr-3">
					<a class="inline-block text-white no-underline font-bold hover:text-gray-300 hover:text-underline py-2 px-4" href="/login">Dashboard</a>
				  </li>
          {{-- dashboard --}}

				  <li class="mr-3">
					<a class="inline-block text-white no-underline hover:text-gray-300 font-bold hover:text-underline py-2 px-4" href="#about">About</a>
				  </li>
          <li class="mr-3">
					<a class="inline-block text-white no-underline hover:text-gray-300 font-bold hover:text-underline py-2 px-4" href="#service">Service</a>
				  </li>
				  <li class="mr-3">
					<a class="inline-block text-white no-underline hover:text-gray-300 font-bold hover:text-underline py-2 px-4" href="#portopolio">Portopolio</a>
				  </li>
					<li class="mr-3">
					<a class="inline-block text-white no-underline font-bold hover:text-gray-300 hover:text-underline py-2 px-4" href="#contact">Contact</a>
				  </li>
				</ul>
			</div>
        </div>
    </nav>
	</div>
   </section>
{{-- navbar --}}

{{-- home--}}
<section id="home"
    class="flex flex-col-reverse sm:flex-row sm:justify-between	 lg:min-h- bg-gradient-to-b from-red-800 to-black opacity-[100%] px- sm:px-16 py-20 max-w-screen	mx-auto">
    <!-- left side -->
    <div class="sm:w-3/5">
      <p style="font-family: 'Roboto Mono', monospace;" class="text-transparent font-semibold">.</p>
      <h1 class="text-4xl lg:text-5xl xl:text-6xl	font-bold text-gray-100 mt-3 lg:mt-7">Mohammad Haidar Yusya.</h1>
      <p class="mt-6 text-xl lg:mt-10 max-w-md	text-white">
        Setiap gambar memiliki cerita, dan saya berusaha untuk menceritakannya dengan setiap klik.
        Membiarkan gambar berbicara lebih dari ribuan kata. <br>
        <span style="font-family: 'Roboto Mono', monospace;" class="font-bold text-transparent">.</span>
      </p>
      <div class="mt-12">
        <a href="#service" style="font-family: 'Roboto Mono', monospace;"
          class="px-6 py-3 text-gray-50 border-2 border-gray-500 font-bold transition-all hover:bg-gray-600 rounded-md">Check
          Skills !</a>
      </div>
      <h2 class="text-3xl lg:text-4xl xl:text-5xl	font-bold text-transparent mt-3 lg:mt-7">.</h2>
    </div>

    <!-- right side -->
    <div class="hidden sm:block sm:w-2/5">
      <img src="../img/jempolhome.jpg" alt="hero-img" class="">
    </div>
</section>
{{-- home--}}


<!--about-->
<section id ="about">
    <div class="flex flex-col md:flex-row items-center justify-between bg-gradient-to-b from-black to-red-800 mt opacity-[100%] py-15">
        <div class="w-full  md:w-1/2 lg:w-1/2 xl:w-1/2 mb-2 ">
            <img src="../img/kursi.jpg" alt="Foto" class="max-w-full h-auto">
        </div>
        <div class="w-full text-white md:w-1/2 lg:w-2/3 xl:w-3/4 md:pl-8">
            <h2 class="text-4xl font-bold mb-4">About me</h2>
            <p class="text-xl ">Hai, saya Mohammad Haidar Yusya, seorang mahasiswa di Politeknik Harapan Bersama Kota Tegal. Saya juga seorang fotografer yang menekuni Dunia Fotografi sejak dibangku sekolah. Saya percaya bahwa fotografi adalah cara yang kuat untuk mengekspresikan diri dan menceritakan cerita. Saya senang terlibat dalam proyek-proyek fotografi dan berharap dapat terus berkembang di bidang ini..</p>
        </div>
    </div>
</div>
</section>
{{-- about me --}}


{{-- service --}}
<section id="service">
<div class="bg-gradient-to-b from-red-800 to-black overflow-hidden">
 <div class=" w-full px-32 md:px-12 mx-auto py-12  md:py-60 sm:py-60 space-y-10 flex flex-col justify-center -my-11 sm:px-8 sm:-mt-36">
  <div class="flex items-center gap-12">
              <p class="text-white font-extrabold text-6xl md:text-7xl">Service</p>
            </div>
  <div class="flex flex-col lg:flex-row sm:flex-row md:flex-row mx-auto my-auto ">
  <a href="#_"> <img src="../img/1.png" class="rounded-xl  rotate-6 hover:rotate-0 duration-500 hover:-translate-y-12 h-full w-full object-cover hover:scale-150 transform origin-bottom" alt="#_"> </a>
  
  <a href="#_"> <img src="../img/2.png" class="rounded-xl  -rotate-12 hover:rotate-0 duration-500 hover:-translate-y-12 h-full w-full object-cover hover:scale-150 transform origin-bottom" alt="#_"> </a>
  
  <a href="#_"> <img src="../img/3.png" class="rounded-xl  rotate-6 hover:rotate-0 duration-500 hover:-translate-y-12 h-full w-full object-cover hover:scale-150 transform origin-bottom" alt="#_"> </a>
  
  <a href="#_"> <img src="../img/4.png" class="rounded-xl  -rotate-12 hover:rotate-0 duration-500 hover:-translate-y-12 h-full w-full object-cover hover:scale-150 transform origin-bottom" alt="#_"> </a>
  </div> 
 </div>
</div>
</section>
{{-- servic --}}

{{-- portopolio --}}
<section id ="portopolio">
    <!--Header-->
	<div class="w-full bg-cover bg-bottom" style="background-image:url('../img/pawe.jpg'); height: 60vh; max-height:460px;">
			<div class="container max-w-4xl mx-auto pt-40 md:pt-32 text-center break-normal">
				<!--Title-->
					<p class="text-white  font-extrabold text-6xl md:text-8xl  sm:text-7xl">
						 PORTOPOLIO
					</p>
			</div>
		</div>
</section>
{{-- portopolio --}}

{{-- foto --}}
<section id="#fotografer">
    <div class="bg-gradient-to-b from-black to-red-800 h-full py-6 sm:py-8 lg:py-12">
    <div class="mx-auto max-w-screen-2xl px-4 md:px-8 my-10">
        <div class="mb-4 flex items-center justify-between gap-8 sm:mb-8 md:mb-12">
            <div class="flex items-center gap-12">
              <p class="text-white font-extrabold text-5xl md:text-7xl">Gallery</p>
            </div>

            <a href="https://drive.google.com/drive/folders/1BOQO_DXrnxBtOLbvijW1gWiwUxN-e6YK?usp=sharing"
                class="px-6 py-3 text-gray-50 border-2 border-white font-bold transition-all hover:bg-gray-500 rounded-md md:px-8 md:py-3 md:text-base ">
                Full Album
            </a>
        </div>
  
        <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
  <div class="grid gap-4 ">
    <div>
      {{-- 1.1 mobil --}}
      <img 
        class="h-auto w-full hover:brightness-75 rounded-lg object-cover object-center"
        src="../img/mobil1.jpeg"
        alt="gallery-photo"
      />
    </div>
    <div>
      {{-- 1.2 hetset --}}
      <img
        class="h-auto max-w-full hover:brightness-75 rounded-lg object-cover object-center "
        src="../img/hetset1.jpg"
        alt="gallery-photo"
      />
    </div>
    <div>
      {{-- 1.3 gunung --}}
      <img
        class="h-auto max-w-full hover:brightness-75 rounded-lg object-cover object-center"
        src="../img/gunung1.png"
        alt="gallery-photo"
      />
    </div>
  </div>
  {{-- 2.1 bojo --}}
  <div class="grid gap-4">
    <div>
      <img
        class="h-auto max-w-full hover:brightness-75 rounded-lg object-cover object-center"
        src="../img/bojo1.jpg"
        alt="gallery-photo"
      />
    </div>
    <div>
      {{-- 2.2 leptop--}}
      <img
        class="h-auto max-w-full hover:brightness-75 rounded-lg object-cover object-center"
        src="../img/leptop1.jpg"
        alt="gallery-photo"
      />
    </div>
    <div>
      {{--2.3 cewe--}}
      <img
        class="h-auto max-w-full hover:brightness-75 rounded-lg object-cover object-center "
        src="../img/cewe1.jpg"
        alt="gallery-photo"
      />
    </div>
  </div>
  <div class="grid gap-4">
    <div>
      {{-- 3.1 gunung --}}
      <img
        class="h-auto max-w-full hover:brightness-75 rounded-lg object-cover object-center"
        src="../img/gunung2.jpg"
        alt="gallery-photo"
      />
    </div>
    <div>
      {{-- 3.2 cewe--}}
      <img
        class="h-auto max-w-full hover:brightness-75 rounded-lg object-cover object-center "
        src="../img/cewe2.jpg"
        alt="gallery-photo"
      />
    </div>
    <div>
      {{-- 3.3 bojo--}}
      <img
        class="h-auto max-w-full hover:brightness-75 rounded-lg object-cover object-center"
        src="../img/bojo2.png"
        alt="gallery-photo"
      />
    </div>
  </div>
  <div class="grid gap-4">
    <div>
      {{-- 4.1 bojo--}}
      <img
        class="h-auto max-w-full hover:brightness-75 rounded-lg object-cover object-center"
        src="../img/bojo3.jpeg"
        alt="gallery-photo"
      />
    </div>
    <div>
      {{-- 4.2 hetset--}}
      <img
        class="h-auto max-w-full hover:brightness-75 rounded-lg object-cover object-center"
        src="../img/hetset2.jpg"
        alt="gallery-photo"
      />
    </div>
  </div>
</div>
    </div>
</div>
</section>
{{-- foto --}}


{{-- vidio --}}
<section id="#videografer">
<div class="bg-gradient-to-b from-red-800 to-black relative overflow-hidden py-5">
    <div class="pt-2 pb-2 sm:pt-2 sm:pb-2 lg:pt-2 lg:pb-2">
      <div class=" mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
        <div class="mb-4 flex items-center justify-between gap-8 sm:mb-8 md:mb-12">
            <div class="flex items-center ">
              <p class="text-white font-extrabold text-5xl md:text-7xl">Video</p>
            </div>

            <a href="https://drive.google.com/drive/folders/1BOQO_DXrnxBtOLbvijW1gWiwUxN-e6YK?usp=sharing"
                class="px-6 py-3 text-gray-50 border-2 border-white font-bold transition-all hover:bg-gray-500 rounded-md md:px-8 md:py-3 md:text-base">
                Full Album
            </a>
        </div>
        <div>
          <div class="flex justify-center items-center h-full w-full">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-3 md:gap-x-16 sm:grid-cols-2" >
  <div class="grid gap-16">
    <div>
      {{-- 1.2 bojo --}}
      <img
        class="h-96 w-full hover:brightness-75 rounded-lg object-cover object-center"
        src="../img/bojov.jpg"
        alt="gallery-photo"
      />
    </div>

    {{-- lod --}}
   <div>
      <div class="flex p-4 space-x-4 sm:px-8">
        <div class="flex-shrink-0 w-16 h-16 rounded-full bg-gray-300"></div>
        <div class="flex-1 py-2 space-y-4">
            <div class="w-full h-3 rounded bg-gray-300"></div>
            <div class="w-5/6 h-3 rounded bg-gray-300"></div>
        </div>
    </div>
    <div class="p-4 space-y-4 sm:px-8">
        <div class="w-full h-4 rounded bg-gray-300"></div>
        <div class="w-full h-4 rounded bg-gray-300"></div>
        <div class="w-3/4 h-4 rounded bg-gray-300"></div>
    </div>
    </div>

    {{-- lod --}}
    <div>
     <div class="flex p-4 space-x-4 sm:px-8">
        <div class="flex-shrink-0 w-16 h-16 rounded-full bg-gray-300"></div>
        <div class="flex-1 py-2 space-y-4">
            <div class="w-full h-3 rounded bg-gray-300"></div>
            <div class="w-5/6 h-3 rounded bg-gray-300"></div>
        </div>
    </div>
    <div class="p-4 space-y-4 sm:px-8">
        <div class="w-full h-4 rounded bg-gray-300"></div>
        <div class="w-full h-4 rounded bg-gray-300"></div>
        <div class="w-3/4 h-4 rounded bg-gray-300"></div>
    </div>
    </div>
  </div>

  <div class="grid gap-16">
  {{-- lod --}}
    <div>
      <div class="flex p-4 space-x-4 sm:px-8">
        <div class="flex-shrink-0 w-16 h-16 rounded-full bg-gray-300"></div>
        <div class="flex-1 py-2 space-y-4">
            <div class="w-full h-3 rounded bg-gray-300"></div>
            <div class="w-5/6 h-3 rounded bg-gray-300"></div>
        </div>
    </div>
    <div class="p-4 space-y-4 sm:px-8">
        <div class="w-full h-4 rounded bg-gray-300"></div>
        <div class="w-full h-4 rounded bg-gray-300"></div>
        <div class="w-3/4 h-4 rounded bg-gray-300"></div>
    </div>
    </div>

  {{-- 2.2 bojo--}}
    <div>
      <img
        class="h-96 w-full hover:brightness-75 rounded-lg object-cover object-center"
        src="../img/bojoV2.jpeg"
        alt="gallery-photo"
      />
    </div>

  {{-- lod --}}
    <div>
      <div class="flex p-4 space-x-4 sm:px-8">
        <div class="flex-shrink-0 w-16 h-16 rounded-full bg-gray-300"></div>
        <div class="flex-1 py-2 space-y-4">
            <div class="w-full h-3 rounded bg-gray-300"></div>
            <div class="w-5/6 h-3 rounded bg-gray-300"></div>
        </div>
    </div>
    <div class="p-4 space-y-4 sm:px-8">
        <div class="w-full h-4 rounded bg-gray-300"></div>
        <div class="w-full h-4 rounded bg-gray-300"></div>
        <div class="w-3/4 h-4 rounded bg-gray-300"></div>
    </div>
    </div>
  </div>

  <div class="grid gap-16">

    {{-- lod --}}
    <div> 
      <div class="flex p-4 space-x-4 sm:px-8">
        <div class="flex-shrink-0 w-16 h-16 rounded-full bg-gray-300"></div>
        <div class="flex-1 py-2 space-y-4">
            <div class="w-full h-3 rounded bg-gray-300"></div>
            <div class="w-5/6 h-3 rounded bg-gray-300"></div>
        </div>
    </div>
    <div class="p-4 space-y-4 sm:px-8">
        <div class="w-full h-4 rounded bg-gray-300"></div>
        <div class="w-full h-4 rounded bg-gray-300"></div>
        <div class="w-3/4 h-4 rounded bg-gray-300"></div>
    </div>
    </div>

  {{-- lod --}}
    <div>
      <div class="flex p-4 space-x-4 sm:px-8">
        <div class="flex-shrink-0 w-16 h-16 rounded-full bg-gray-300"></div>
        <div class="flex-1 py-2 space-y-4">
            <div class="w-full h-3 rounded bg-gray-300"></div>
            <div class="w-5/6 h-3 rounded bg-gray-300"></div>
        </div>
    </div>
    <div class="p-4 space-y-4 sm:px-8">
        <div class="w-full h-4 rounded bg-gray-300"></div>
        <div class="w-full h-4 rounded bg-gray-300"></div>
        <div class="w-3/4 h-4 rounded bg-gray-300"></div>
    </div>
    </div>

    {{-- 3.1 bojo --}}
    <div>
      <img
        class="h-96 w-full hover:brightness-75 rounded-lg object-cover object-center"
        src="../img/bojoB.png"
        alt="gallery-photo"
      />
    </div>
  </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- video --}}

{{-- contact --}}
<section id ="contact" class="">

    <div class="font-sans antialiased text-gray-900 leading-normal tracking-wider bg-cover" style="background-image: url('../img/catur.jpg');">
  <div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto  lg:my-0">
    
	<!--Main Col-->
	<div id="profile" class="w-full scroll lg:w-3/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-75 mx-4 lg:mx-0">
	
		<div class="md:p-10 text-center lg:text-left ">
			<!-- Image for mobile view-->
			<div class="block lg:hidden rounded-full shadow-xl mx-auto mt-2 h-48 w-48 bg-cover bg-center" style="background-image: url('../img/pp.jpg')"></div>
			
			<h1 class="text-3xl font-bold pt-8 lg:pt-0">Mohammad Haidar Yusya</h1>

			<div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-red-700 opacity-50"></div>
			<p class="pt-4 text-base font-bold flex items-center justify-center lg:justify-start"><svg class="h-4 fill-current text-red-500 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z"/></svg> Fotografer</p>
			<p class="pt-2 text-gray-600 text-xs lg:text-sm flex items-center justify-center lg:justify-start"><svg class="h-4 fill-current text-red-500 pr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm7.75-8a8.01 8.01 0 0 0 0-4h-3.82a28.81 28.81 0 0 1 0 4h3.82zm-.82 2h-3.22a14.44 14.44 0 0 1-.95 3.51A8.03 8.03 0 0 0 16.93 14zm-8.85-2h3.84a24.61 24.61 0 0 0 0-4H8.08a24.61 24.61 0 0 0 0 4zm.25 2c.41 2.4 1.13 4 1.67 4s1.26-1.6 1.67-4H8.33zm-6.08-2h3.82a28.81 28.81 0 0 1 0-4H2.25a8.01 8.01 0 0 0 0 4zm.82 2a8.03 8.03 0 0 0 4.17 3.51c-.42-.96-.74-2.16-.95-3.51H3.07zm13.86-8a8.03 8.03 0 0 0-4.17-3.51c.42.96.74 2.16.95 3.51h3.22zm-8.6 0h3.34c-.41-2.4-1.13-4-1.67-4S8.74 3.6 8.33 6zM3.07 6h3.22c.2-1.35.53-2.55.95-3.51A8.03 8.03 0 0 0 3.07 6z"/></svg>Jawa Tengah, Kota Pekalongan. Indonesia</p>

      {{-- from Contact--}}
      <div class="mx-auto w-full max-w-lg">
    <h1 class="text-3xl font-bold pt-8 lg:pt-0">Contact us</h1>
      
      <form action="" class="mx-auto w-full max-w-lg mt-5" method="post">
        @csrf
      <input type="hidden" name="access_key" value="YOUR_ACCESS_KEY_HERE" /> 
      <div class="grid gap-6 sm:grid-cols-2">
        <div class="relative z-0">
          <input type="text" name="name" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder="" name="name" value="{{ (isset($tamu)) ? $tamu->name:"" }}" />
          <label class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Your name</label>
        </div>


        <div class="relative z-0">
          <input type="text" name="instagram" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder="" name="instagram" value="{{ (isset($tamu)) ? $tamu->instagram:"" }}"/>
          <label class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Your Instagram</label>
        </div>


        <div class="relative z-0 col-span-2">
          <textarea name="message" rows="2" class="peer block w-full appearance-none border-0 border-b border-gray-500 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=""
              value="{{ (isset($tamu)) ? $tamu->message:"" }}"></textarea>
          <label class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-7 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Your Message</label>
        </div>
      </div>
      <button type="submit" class="mt-5 rounded-md bg-red-600 px-10 py-2 text-white">Send Message</button>
    </form>


      {{-- icon --}}
			<div class="mt-7 pb-10 lg:pb-0 w-4/5 lg:w-full mx-auto flex flex-wrap items-center justify-between pr-20">
        {{-- github --}}
				<a class="link" href="https://github.com/yusya11" data-tippy-content="@github_handle"><svg class="h-6 fill-current text-gray-600 hover:text-red-700" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg></a>

        {{-- Instagram --}}
				<a class="link" href="https://www.instagram.com/yusya11_?igsh=ODd5OTBpamcwMW4w" data-tippy-content="@instagram_handle"><svg class="h-6 fill-current text-gray-600 hover:text-red-700" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg></a>

        {{-- you tube --}}
				<a class="link" href="https://www.youtube.com/channel/UClcTfmqhL76mHsCCmi04p9Q" data-tippy-content="@youtube_handle"><svg class="h-6 fill-current text-gray-600 hover:text-red-700" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>YouTube</title><path d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"/></svg></a>
			</div>
      </div>
		</div>

	</div>
	
	<!--Img Col-->
	<div class="w-full lg:w-2/5">

		<img src="../img/potoPto.png" class="rounded-none lg:rounded-lg shadow-2xl hidden lg:block">
	</div>
</div>
</div>
</section>
{{-- contact --}}

<script>

const swal = $('.swal').data('swal');

        if(swal){
            Swal.fire({
                'title':'Success',
                'text' : swal,
                'icon': 'success',
                'showConfirmButton':false,
                'timer':2000
            })
        }

        function Menu(e) {
            let list = document.querySelector('ul');
            e.name === 'menu' ? (e.name = "close", list.classList.add('top-[87px]'), list.classList.add('opacity-100')) : (e.name = "menu", list.classList.remove('top-[87px]'), list.classList.remove('opacity-100'))
        }
    </script>
       @if($message = Session::get('success'))
    <script>
        Swal.fire({
            title: "Thank You",
            text: "{{ Session::get('success') }}",
            // background: "#00C853"
            // color: "#FAFAFA",
            icon: "success"
        });
    </script>
@endif

 
</body>
</html> 