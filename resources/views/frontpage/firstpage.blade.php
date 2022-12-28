<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
        <!-- start hero -->
        <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
            <header class="fixed absolute top-0 left-0 z-50 w-full px-4 sm:px-8 lg:px-16">
                <div class="flex flex-wrap items-center justify-between py-6">
                <div class="w-1/2 md:w-auto">
                    <a href="index.html" class="text-2xl font-bold text-white">
                    <img src="images/logo1.png" alt="">
                    </a>
                </div>

                <label for="menu-toggle" class="block mr-6 pointer-cursor md:hidden"><svg class="text-white fill-current"
                    xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <title>menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg></label>
                <input class="hidden" type="checkbox" id="menu-toggle">

                <div class="hidden w-full md:block md:w-auto" id="menu">
                    <nav class="w-full px-6 py-4 mt-4 text-center bg-white rounded shadow-lg md:bg-transparent md:p-0 md:mt-0 md:shadow-none">
                    <ul class="items-center md:flex">
                        <li><a class="inline-block py-2 font-semibold md:text-white md:hidden lg:block hover:text-yellow-400" 
                            href="#about">About Us</a></li>
                        <li class="md:ml-4"><a class="inline-block py-2 font-semibold md:text-white md:px-2 hover:text-yellow-400" 
                            href="#testi">Testimoni</a></li>
                        <li class="md:ml-4"><a class="inline-block py-2 font-semibold md:text-white md:px-2 hover:text-yellow-400" 
                            href="#">FAQ's</a></li>
                        <li class="md:ml-4"><a class="inline-block py-2 font-semibold md:text-white md:px-2 hover:text-yellow-400" 
                            href="#">Contact Us</a></li>
                        @if (Route::has('login'))
                                @auth
                                <li class="md:ml-4"><a href="{{ url('/landing') }}" class="inline-block py-1 font-medium border rounded-md md:text-white md:px-2 hover:text-yellow-400">Dashboard</a></li>
                                @else
                                    <li class="md:ml-4"><a href="{{ route('login') }}" class="inline-block py-1 font-medium border rounded-md md:text-white md:px-2 hover:text-yellow-400">Log In</a></li>
                                    @if (Route::has('register'))
                                    <li class="md:ml-3"><a href="{{ route('register') }}" class="inline-block py-1 font-medium border rounded-md md:text-white md:px-2  hover:text-yellow-400">Sign In</a></li>
                                    @endif
                                @endauth
                        @endif </li>
                        </div>
                    </ul>
                    </nav>
                </div>
                </div>
            </header>
        </nav>
        
        <div class="bg-gray-100">
        <section class="relative flex items-center min-h-screen px-4 overflow-hidden bg-gray-700 cover bg-blue-teal-gradient sm:px-8 lg:px-16 ">
            <div class="absolute top-0 left-0 right-0 z-0 h-full">
                <img src="images/kost1.png" alt="" class="object-cover w-full h-full opacity-20">
            </div>
            
            <div class="relative z-10 lg:w-3/4 xl:w-2/4 h-50 lg:mt-6">
                <div >
                    <a href="#"><img src="images/In-Kost.png" alt=""></a>
                    <h1 class="text-4xl font-bold leading-tight text-yellow-400 md:text-5xl xl:text-6xl">Home is where we should feel secure and comfortable.</h1>
                    <p class="mt-4 text-xl leading-snug text-blue-100 md:text-2xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis sit autem assumenda fugit!</p>
                    <a href="{{ url('/landing') }}" class="inline-block px-12 py-4 mt-8 font-bold text-white bg-yellow-400 rounded hover:bg-teal-600 hover:transition-4">Get Started</a>
                </div>
            </div>
        </section>
        <!-- end hero -->


        <!-- Fyp Section-->
        <section >
        <div class="container min-h-screen px-12 pt-16 bg-gray-100" id="book">
            <div class="flex flex-col items-center justify-center">
                <h2 class="text-2xl font-bold text-gray-800 md:text-4xl">For Your Page.</h2>
                <p class=" text-base leading-6 text-center text-gray-700 2xl:w-2/5 ">Rekomendasi Dari Kami</p>
            </div>
            
            <div  class="grid gap-4 my-6 md:grid-cols-3 lg:grid-cols-4" >
                @foreach ($packages as $key=>$item) 
                <div  class="overflow-hidden bg-white rounded shadow group" data-aos="fade-up">
                    <div class="relative ">
                        <img src="{{asset( $item->feature_img)}}" alt="product 1" class="w-full">
                        <div class="absolute inset-0 flex items-center justify-center gap-2 transition bg-black opacity-0 bg-opacity-40 group-hover:opacity-100">
                            <button @click="modalOpen = true"
                                id="sch1"
                                type="submit"
                                class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-yellow-400 fa-solid fa-magnifying-glass"
                                title="view product">
                            </button>
                            <a href="/bookingpage"
                                id="Kos1"
                                type="submit"
                                class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-yellow-400 fa fa-shopping-cart"
                                title="add to cart">
                            </a>
                        </div>
                    </div>
                    <div class="px-4 pt-4 pb-3">
                        <a id="Pos1" type="submit">
                            <h4 class="text-xl font-medium text-gray-800 uppercase transition hover:text-primary">{{$item->package_name}}</h4>
                        </a> 
                        <div class="text-gray-500 mb-2text-sm">
                            Alamat : {{$item->location}}
                        </div>
                        <p>{{$item->package_desc}}</p>
                        <div class="flex flex-col items-baseline mb-1">
                            <p class="text-xl font-semibold text-primary">Rp. {{$item->package_rate}}/bulan</p>
                            <p class="text-sm text-gray-400">disc : Rp. {{$item->package_disc}}</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                            </div>
                            <div class="ml-3 text-xs text-gray-500">(150)</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>    
            <div class="py-6 font-sans text-center ">
                    <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-yellow-400 hover:text- gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    Prev
                    </a>
                    <!-- Next Button -->
                    <a href="#" class="inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-yellow-400 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    Next
                    </a>
                </div>
        </section>
        <!-- End FYP Section -->


         <!-- start about -->
    <section class="relative px-4 py-16 bg-gray-400 sm:px-8 lg:px-16 xl:px-40 lg:py-32" id="about">
    <div class="flex flex-col text-white lg:flex-row lg:-mx-8">
        <div class="w-full lg:w-1/2 lg:px-8"  data-aos="zoom-in">
            <h2 class="mt-4 text-4xl font-bold leading-tight text-gray-900">About Us</h2>
            <p class="mt-4 text-xl font-semibold">InKost on your area</p>
            <p class="mt-2 leading-relaxed">InKost merupakan singkatan dari Info Kost yang merupakan web layanan informasi seputar properti seperti Kost dan Kontrakan siap huni. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, temporibus est corrupti quae hic commodi? Pariatur fugit voluptatibus obcaecati aliquam asperiores neque aut nulla veniam, adipisci explicabo odit a saepe?</p>
        </div>

        <div class="w-full mt-12 lg:w-1/2 lg:px-8 lg:mt-0"  data-aos="zoom-in">
        <div class="md:flex">
            <div>
            <div class="w-16 h-16 bg-yellow-400 rounded-full hover:translate-y-3"></div>
            </div>
            <div class="mt-4 md:ml-8 md:mt-0">
            <h4 class="text-xl font-bold leading-tight text-gray-700">Apa Yang Kami Berikan</h4>
            <p class="mt-2 leading-relaxed">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis ab laborum repellat doloribus, perspiciatis dignissimos. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem alias et voluptatibus aliquam, ipsum harum.</p>
            </div>
        </div>

        <div class="mt-8 md:flex"  data-aos="zoom-in">
            <div>
            <div class="w-16 h-16 bg-teal-400 rounded-full hover:translate-y-3"></div>
            </div>
            <div class="mt-4 md:ml-8 md:mt-0">
            <h4 class="text-xl font-bold leading-tight text-gray-700">Apa Yang Kami Kerjakan</h4>
            <p class="mt-2 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat beatae reprehenderit enim, cumque ad corrupti? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ad ut veritatis eius unde necessitatibus.</p>
            </div>
        </div>
        </div>
    </div>

    <div class="mt-12"  data-aos="zoom-in">
        <h1 class="mt-4 text-xl text-3xl font-bold leading-tight text-gray-800 ">Cara Booking</h1>
    </div>

    <div class="text-center text-gray-800 md:flex md:flex-wrap md:-mx-4 sm:mb-6"  data-aos="zoom-in">
        <div class="pt-6 md:w-1/2 md:px-4 lg:w-1/4">
        <div class="p-8 bg-yellow-400 border border-gray-300 rounded-lg hover:translate-y-4 hover:transition-all">
            <h4 class="mt-4 text-xl font-bold">Log in</h4>
            <p class="mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, fugit? Lorem ipsum dolor sit amet.</p>
            <a href="#" class="block mt-4 text-blue-500 hover:text-blue-100">Read More</a>
        </div>
        </div>

        <div class="pt-6 md:w-1/2 md:px-4 lg:w-1/4">
        <div class="p-8 bg-teal-400 border border-gray-300 rounded-lg hover:translate-y-4 hover:transition-all">
            <h4 class="mt-4 text-xl font-bold">Pilih Kost</h4>
            <p class="mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, fugit?.</p>
            <a href="#" class="block mt-4 text-blue-500 hover:text-blue-100">Read More</a>
        </div>
        </div>

        <div class="pt-6 md:w-1/2 md:px-4 lg:w-1/4">
        <div class="p-8 bg-yellow-400 border border-gray-300 rounded-lg hover:translate-y-4 hover:transition-all">
            <h4 class="mt-4 text-xl font-bold">Tambah Ke Keranjang</h4>
            <p class="mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, fugit? Lorem ipsum dolor sit amet.</p>
            <a href="#" class="block mt-4 text-blue-500 hover:text-blue-100">Read More</a>
        </div>
        </div>

        <div class="pt-6 md:w-1/2 md:px-4 lg:w-1/4">
        <div class="p-8 bg-teal-400 border border-gray-300 rounded-lg hover:translate-y-4 hover:transition-all">
            <h4 class="mt-4 text-xl font-bold">Booking</h4>
            <p class="mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, fugit?.</p>
            <a href="#" class="block mt-4 text-blue-500 hover:text-blue-100">Read More</a>
        </div>
        </div>       
    </div>
    </section>
    <!-- end about -->

        
        <!-- start footer -->
        <footer class="relative px-4 py-12 text-white bg-gray-900 sm:px-8 lg:px-16 xl:px-40 2xl:px-64 lg:py-24">
        <div class="flex flex-col md:flex-row">
            <div class="w-full lg:w-2/6 lg:mx-4 lg:pr-8">
            <img src="images/In-Kost.png" alt="">
            <p class="text-gray-400">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy.</p>
            </div>

            <div class="w-full mt-8 lg:w-1/6 lg:mt-0 lg:mx-4">
            <h5 class="font-semibold tracking-wider text-gray-500 uppercase">Featured</h5>
            <ul class="mt-4">
                <li class="mt-2"><a href="#" title="" class="opacity-75 hover:opacity-100">Info Kost Singaraja</a></li>
                <li class="mt-2"><a href="#" title="" class="opacity-75 hover:opacity-100">Mami Kost</a></li>
                <li class="mt-2"><a href="#" title="" class="opacity-75 hover:opacity-100">Ngekost Aja</a></li>
            </ul>
            </div>

            <div class="w-full mt-8 lg:w-2/6 lg:mt-0 lg:mx-4 lg:pr-8">
            <h5 class="font-semibold tracking-wider text-gray-500 uppercase">Our Company</h5>
            <ul class="mt-4">
                <li>
                <a href="#" title="" class="flex items-center block opacity-75 hover:opacity-100">
                    <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                        d="M12,2C7.589,2,4,5.589,4,9.995C3.971,16.44,11.696,21.784,12,22c0,0,8.029-5.56,8-12C20,5.589,16.411,2,12,2z M12,14 c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4S14.21,14,12,14z" />
                    </svg>
                    </span>
                    <span class="ml-3">
                    Jl. Udayana, Singaraja, Bali 
                    </span>
                </a>
                </li>
                <li class="mt-4">
                <a href="#" title="" class="flex items-center block opacity-75 hover:opacity-100">
                    <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                        d="M12,2C6.486,2,2,6.486,2,12s4.486,10,10,10c5.514,0,10-4.486,10-10S17.514,2,12,2z M12,20c-4.411,0-8-3.589-8-8 s3.589-8,8-8s8,3.589,8,8S16.411,20,12,20z" />
                        <path d="M13 7L11 7 11 13 17 13 17 11 13 11z" /></svg>
                    </span>
                    <span class="ml-3">
                    Mon - Fri: 8:00 - 16:00<br>
                    Closed on Weekends
                    </span>
                </a>
                </li>
                <li class="mt-4">
                <a href="#" title="" class="flex items-center block opacity-75 hover:opacity-100">
                    <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                        d="M14.594,13.994l-1.66,1.66c-0.577-0.109-1.734-0.471-2.926-1.66c-1.193-1.193-1.553-2.354-1.661-2.926l1.661-1.66 l0.701-0.701L5.295,3.293L4.594,3.994l-1,1C3.42,5.168,3.316,5.398,3.303,5.643c-0.015,0.25-0.302,6.172,4.291,10.766 C11.6,20.414,16.618,20.707,18,20.707c0.202,0,0.326-0.006,0.358-0.008c0.245-0.014,0.476-0.117,0.649-0.291l1-1l0.697-0.697 l-5.414-5.414L14.594,13.994z" />
                    </svg>
                    </span>
                    <span class="ml-3">
                    +62 0363-81029
                    </span>
                </a>
                </li>
                <li class="mt-4">
                <a href="#" title="" class="flex items-center block opacity-75 hover:opacity-100">
                    <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                        d="M20,4H4C2.896,4,2,4.896,2,6v12c0,1.104,0.896,2,2,2h16c1.104,0,2-0.896,2-2V6C22,4.896,21.104,4,20,4z M20,8.7l-8,5.334 L4,8.7V6.297l8,5.333l8-5.333V8.7z" />
                    </svg>
                    </span>
                    <span class="ml-3">
                    inKost@gmail.com
                    </span>
                </a>
                </li>
            </ul>
            </div>

            <div class="w-full mt-8 lg:w-1/6 lg:mt-0 lg:mx-4">
            <h5 class="font-semibold tracking-wider text-gray-500 uppercase">Social Media</h5>
            <ul class="flex mt-4">
                <li>
                <a href="#" target="_blank" title="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                    <path
                        d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592	c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20	c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z" />
                    </svg>
                </a>
                </li>

                <li class="ml-6">
                <a href="#" target="_blank" title="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                    <path
                        d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809	c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793	c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05	c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032	c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028	c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22	c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z" />
                    </svg>
                </a>
                </li>

                <li class="ml-6">
                <a href="#" target="_blank" title="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                    <path
                        d="M20.947,8.305c-0.011-0.757-0.151-1.508-0.419-2.216c-0.469-1.209-1.424-2.165-2.633-2.633 c-0.699-0.263-1.438-0.404-2.186-0.42C14.747,2.993,14.442,2.981,12,2.981s-2.755,0-3.71,0.055 c-0.747,0.016-1.486,0.157-2.185,0.42C4.896,3.924,3.94,4.88,3.472,6.089C3.209,6.788,3.067,7.527,3.053,8.274 c-0.043,0.963-0.056,1.268-0.056,3.71s0,2.754,0.056,3.71c0.015,0.748,0.156,1.486,0.419,2.187 c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45c0.963,0.043,1.268,0.056,3.71,0.056s2.755,0,3.71-0.056 c0.747-0.015,1.486-0.156,2.186-0.419c1.209-0.469,2.164-1.425,2.633-2.633c0.263-0.7,0.404-1.438,0.419-2.187 c0.043-0.962,0.056-1.267,0.056-3.71C21.003,9.572,21.003,9.262,20.947,8.305z M11.994,16.602c-2.554,0-4.623-2.069-4.623-4.623 s2.069-4.623,4.623-4.623c2.552,0,4.623,2.069,4.623,4.623S14.546,16.602,11.994,16.602z M16.801,8.263 c-0.597,0-1.078-0.482-1.078-1.078s0.481-1.078,1.078-1.078c0.595,0,1.077,0.482,1.077,1.078S17.396,8.263,16.801,8.263z" />
                    <circle cx="11.994" cy="11.979" r="3.003" /></svg>
                </a>
                </li>

                <li class="ml-6">
                <a href="#" target="_blank" title="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                    <path
                        d="M21.593,7.203c-0.23-0.858-0.905-1.535-1.762-1.766C18.265,5.007,12,5,12,5S5.736,4.993,4.169,5.404	c-0.84,0.229-1.534,0.921-1.766,1.778c-0.413,1.566-0.417,4.814-0.417,4.814s-0.004,3.264,0.406,4.814	c0.23,0.857,0.905,1.534,1.763,1.765c1.582,0.43,7.83,0.437,7.83,0.437s6.265,0.007,7.831-0.403c0.856-0.23,1.534-0.906,1.767-1.763	C21.997,15.281,22,12.034,22,12.034S22.02,8.769,21.593,7.203z M9.996,15.005l0.005-6l5.207,3.005L9.996,15.005z" />
                    </svg>
                </a>
                </li>
            </ul>

            <p class="mt-12 text-sm text-gray-400">2022©rsv. <br class="hidden lg:block">All Rights Reserved.
            </p>
            </div>
        </div>
        </footer>
        <!-- end footer -->
    </div>    
</body>
</html>
