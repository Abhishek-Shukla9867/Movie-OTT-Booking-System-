<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MovieX</title>
  <link rel="shortcut icon" href="./Utilities/clapperboard.png" type="image/x-icon">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- Option 1: Include in HTML -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">



  <link rel="stylesheet" href="css/swiper-bundle.min.css">


  <link rel="stylesheet" href="/login system with avatar//css//style.css">


  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">




  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="./CSS/Toggle.css">
  <link rel="stylesheet" href="./CSS/Loder.css">
  <link rel="stylesheet" href="/CSS/logo_Dance.css">
  <link rel="stylesheet" href="./CSS/color.css">
  <link rel="stylesheet" href="./CSS/Movies.css">
  <link rel="stylesheet" href="./CSS/Movie_Fliter.css">
  <link rel="stylesheet" href=".//CSS/pagination.css">
  <link rel="stylesheet" href="./CSS/Yt.css">
  <link rel="stylesheet" href="/CSS/./Ticket.css">
  <link rel="stylesheet" href="/CSS/./news.css">
  <link rel="stylesheet" href="/CSS/./Team.css">















</head>

<body>

  <!-- Loading  -->
  <div class="loader">
    <div data-glitch="Loading..." class="glitch">Loading...</div>
  </div>












  <!-- Trailer Movie Section -->


  <header>


    <div class="navbar">
      <div class="custom-navbar">
        <div id="content">



          <nav class=" border-gray-200 dark:bg-gray-900 ">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
              <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <!-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="MovieX Logo" /> -->

                <img src=".//logo.png" class="h-8" alt="MovieX Logo" />
                <!-- 
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white moviex "><img src=".//logo.png" alt="">
                </span> -->



              </a>
              <div class="flex md:order-2">
                <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false" class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 me-1">

                  <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                  </svg>


                  <span class="sr-only">Search</span>
                </button>
                <div class="relative hidden md:block">
                  <div class="absolute inset-y-0  end-0        flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search icon</span>
                  </div>



                  <form id="form">
                    <input type="text" id="search" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 search" placeholder="Search...">
                  </form>







                </div>
                <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-search" aria-expanded="false">
                  <span class="sr-only">Open main menu</span>
                  <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                  </svg>

                </button>
              </div>
              <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
                <div class="relative mt-3 md:hidden">
                  <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                  </div>
                  <input type="text" id="search-navbar" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
                </div>


                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border-gray-100 rounded-lg   md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0    dark:bg-gray-800 md:dark:bg-gray-900      dark:border-gray-700  xyz ">




                  <li>
                    <a href="#home" class="block py-2 px-3 text-gray-900 rounded  homex active">Home

                    </a>
                  </li>



                  <li>
                    <a href="#Movies" class="block py-2 px-3 text-gray-900 rounded   Movie  ">Movies</a>
                  </li>




                  <li>
                    <a href="#services" class="block py-2 px-3 text-gray-900 rounded  Services  ">Services</a>
                  </li>



                  <li>
                    <a href="./index.php" class=" block py-2 px-3 text-gray-900 rounded  About">Book</a>
                  </li>




                  <li>
                    <a href="#About" class="block py-2 px-3 text-gray-900 rounded    About ">About</a>
                  </li>



                  <li>




                    <label class="switch">
                      <input type="checkbox" id="darkbtn">
                      <span < class="slider">
                        <svg class="slider-icon" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation">
                          <path fill="none" d="m4 16.5 8 8 16-16"></path>
                        </svg>







                        </a>







                  </li>




                </ul>



              </div>
            </div>
          </nav>
        </div>
      </div>

    </div>



  </header>


















  <!-- drawer init and show -->




















  <!-- Home Section  -->


  <!-- Carse Section -->

  <section>


    <div id="default-carousel" class="relative w-full" data-carousel="slide">
      <!-- Carousel wrapper -->
      <div class="relative h-56 overflow-hidden rounded-lg md:h-96   Carosule">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="./utils/money-heist.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="./utils/Marvel Wallpaper.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="./utils/gadar_bg.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="./utils/Venom .png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="/./utils/Soilder.png" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
      </div>
      <!-- Slider indicators -->
      <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
      </div>
      <!-- Slider controls -->
      <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
          </svg>
          <span class="sr-only">Previous</span>
        </span>
      </button>
      <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
          </svg>
          <span class="sr-only">Next</span>
        </span>
      </button>
    </div>

  </section>





  <!-- Youtube Vide Section -->


  <section class="bg-white dark:bg-gray-900  sectionx">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 grid lg:grid-cols-2 gap-8 lg:gap-16">
      <div class="flex flex-col justify-center">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white Free text">
          Free Website To Watch Movies Anytime<span class="Triple_Dot">...</span></h1>

        <p id="app-description" class="mb-8 text-lg font-normal text-gray-500 lg:text-xl  white dark:text-gray-400">
          Discover, watch, and discuss your favorite movies with our intuitive movie app! Browse through a vast
          collection of films, get personalized recommendations, and connect with fellow movie enthusiasts. Stream
          seamlessly or plan your next movie night with friends</p>




        <!-- drawer init and show -->
        <div class="text-center">


          <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0">
            <a href="#Account" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900 mr-1">Account


              <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
              </svg>
            </a>













            <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300  ml-1 font-medium rounded-lg text-sm px-8 py-5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">

              Profile



            </button>













          </div>

          <!-- drawer component -->
          <div id="drawer-navigation" class="fixed top-0 left-0 z-40 w-64 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-navigation-label">
            <h5 id="drawer-navigation-label" class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">Menu</h5>
            <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 end-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
              <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
              <span class="sr-only">Close menu</span>
            </button>
            <div class="py-4 overflow-y-auto">
              <ul class="space-y-2 font-medium">
                <li>
                  <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                      <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                      <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                    </svg>
                    <span class="ms-3">Dashboard</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                      <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Kanban</span>
                    <span class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Inbox</span>
                    <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                      <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                      <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Sign In</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                      <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                      <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Sign Up</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>




















































        </div>
      </div>
      <div>
        <iframe class="mx-auto w-full lg:max-w-xl h-64 rounded-lg sm:h-96 shadow-xl dark:shadow-none" src="https://www.youtube.com/embed/ULEQb_l-N08?si=xX7qQP2csZjfidLz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </section>


  <!-- Youtube Video Play -->

  <section class="home">




    <div id="controls-carousel" class="relative w-full" data-carousel="static">
      <!-- Carousel wrapper -->
      <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <video controls class="absolute block w-full h-full object-cover" alt="...">
            <source src="./Vid/KGF_Chapter2_TEASER__Yash_Sanjay_Dutt_Raveena_Tandon_Srinidhi_Shetty_Prashanth_Neel_Vijay_Kiragandur(1440p).webm" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <video controls class="absolute block w-full h-full object-cover" alt="...">
            <source src="./Vid/Gadar.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <video controls class="absolute block w-full h-full object-cover" alt="...">
            <source src="./Vid/SPIDER-MAN_.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <video controls class="absolute block w-full h-full object-cover" alt="...">
            <source src="./Vid/Baahubali 2.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <video controls class="absolute block w-full h-full object-cover" alt="...">
            <source src="./Vid/Avengers_ Endgame.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
      <!-- Slider controls -->
      <!-- Slider controls -->
      <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
          </svg>
          <span class="sr-only">Previous</span>
        </span>
      </button>
      <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
          <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
          </svg>
          <span class="sr-only">Next</span>
        </span>
      </button>
      <!-- Play/Pause Button -->
      <button type="button" class="absolute top-1/2 transform -translate-y-1/2 z-30 flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none" id="playPauseButton">
        <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
          <path fill="currentColor" d="M18 12L5.333 20V4z" />
        </svg>
        <span class="sr-only">Play/Pause</span>
      </button>






  </section>










  <!-- hr Movie -->

  <div class="inline-flex items-center justify-center w-full  hr-div">
    <hr class="w-64 h-px my-8 bg-gray-200 border-0 dark:bg-gray-700 xxx">
    <span class="absolute px-3 font-medium text-gray-900 -translate-x-1/2 bg-white left-1/2 dark:text-white dark:bg-gray-900  hr-text ">Movies</span>
  </div>






  <!-- Filter Movies -->



  <section>
    <div id="tags">
      <div class="tag">Action</div>
      <div class="tag">Adventure</div>
      <div class="tag">Drama</div>
      <div class="tag">Comedy</div>

    </div>


  </section>






  <!-- Color Changing  -->


  <div class="color_container">


    <div class="color">


      <div class="bluex" onclick="ColorChange();"></div>
      <div class="redx" onclick="ColorChange_yellow();"></div>
      <div class="greenx" onclick="ColorChange_Green()"></div>

    </div>
  </div>





  <button onclick="scrollToTop()" class="back-to-top" title="Go to top"><i class="fas fa-arrow-up"></i></button>










  <!-- Movies Section  -->


  <section id="Movies">
    <main id="main">
      <div class="movie">
        <img src="" alt="Image">
        <div class="movie-info">
          <h3>Movie title</h3>
          <span class="green">1.1</span>
        </div>
        <div class="overview">

        </div>
      </div>


    </main>
  </section>




  <div id="myNav" class="overlay">

    <!-- Button to close the overlay navigation -->
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <!-- Overlay content -->
    <div class="overlay-content" id="overlay-content"></div>

    <a href="javascript:void(0)" class="arrow left-arrow" id="left-arrow">&#8656;</a>

    <a href="javascript:void(0)" class="arrow right-arrow" id="right-arrow">&#8658;</a>

  </div>

  <div class="pagination">
    <div class="page" id="prev">Previous Page</div>
    <div class="current" id="current">1</div>
    <div class="page" id="next">Next Page</div>

  </div>

  </div>









  <section  >
<h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400   ">Popular </span>Movies.</h1>
</section>



<div class="inline-flex items-center justify-center w-full  hr-div">
    <hr class="w-64 h-px my-8 bg-gray-200 border-0 dark:bg-gray-700 xxx">
    <span class="absolute px-3 font-medium text-gray-900 -translate-x-1/2 bg-white left-1/2 dark:text-white dark:bg-gray-900  hr-text "></span>
  </div>




<section>



<div class="container_boxes">
        <div class="card_boxes"> 
        <img src="./assets//images//m9.jpg" alt="sample image">
        <div class="texts">
         <span>  <button type="submit">watch Now</button> </span>
        </div>
 </div>
</div>

<div class="container_boxes">
        <div class="card_boxes"> 
        <img src="./assets//images//m11.jpg" alt="sample image">
        <div class="texts">
           <button type="submit">watch Now</button>
        </div>
 </div>
</div>


<div class="container_boxes">
        <div class="card_boxes"> 
        <img src="./assets//images//m4.jpg" alt="sample image">
        <div class="texts">
           <button type="submit">watch Now</button>
        </div>
 </div>
</div>




<div class="container_boxes">
        <div class="card_boxes"> 
        <img src="./assets//images//m5.jpg" alt="sample image">
        <div class="texts">
           <button type="submit">watch Now</button>
        </div>
 </div>
</div>


<div class="container_boxes">
        <div class="card_boxes"> 
        <img src="./assets//images//m6.jpg" alt="sample image">
        <div class="texts">
           <button type="submit">watch Now</button>
        </div>
 </div>
</div>

<div class="container_boxes">
        <div class="card_boxes"> 
        <img src="./assets//images//m7.jpg" alt="sample image">
        <div class="texts">
           <button type="submit">watch Now</button>
        </div>
 </div>
 </div>

</section>














































  <section id="About">



    <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400 xer">Meet </span> Our Team </h1>


    


  </section>


<!-- Team Photo -->






 <section>
  <div class="card-list">
        <a href="#" class="card-item">
            <img src="./Baby.jpg" alt="Card Image">
        <center>  <span class="developerx">Abhishek Shukla</span></center>   
            <span class="developer">Developer</span>
            <h3>A "developer" codes software and websites.</h3>
            
        </a>


        <a href="#" class="card-item">
            <img src="./khushi.jpg" alt="Card Image">
            <center>  <span class="developerx">Khushi Poojari</span></center>   
            <span class="designer">Designer</span>
            <h3>A "designer" is a design expert.</h3>
            
        </a>
        <a href="#" class="card-item">
            <img src="./sudhir.jpg" alt="Card Image">
            <center>  <span class="developerx">Sudhir Morchale</span></center>   
            <span class="editor">Editor</span>

            <h3>An "editor" ensures content quality and accuracy.</h3>
            
        </a>

        <a href="#" class="card-item">
            <img src="./aditya.webp" alt="Card Image">
            <center>  <span class="developerx">Aditya Vishwakrma</span></center>   
            <span class="editor">Editor</span>
            <h3>An "editor" ensures content quality and accuracy.</h3>
            
        </a>

        <a href="#" class="card-item">
            <img src="./OMkar.jpg" alt="Card Image">
            <center>  <span class="developerx">Omkar Ranavare</span></center>   
            <span class="editor">Editor</span>
            <h3>An "editor" ensures content quality and accuracy.</h3>
            
        </a>



      



    </div>
    </section>









    <section>
  <div class="content">
    <div class="value" akhi="5000">
      <div class="textX"> Customers:</div>
      <div class="count">0</div>
    </div>
    <div class="value" akhi="1500">
      <div class="textX"> Downloads:</div>
      <div class="count">0</div>
    </div>
    <div class="value" akhi="1700">
      <div class="textX"> Visits:</div>
      <div class="count">0</div>
    </div>
    <div class="value" akhi="999">
      <div class="textX"> Subscribers:</div>
      <div class="count">0</div>
    </div>
  </div>
</section>
  









<div class="containerx" id="#services" >
        <h2>⭐⭐⭐Our Happy Customers⭐⭐⭐ </h2>
        <p class="description">John H. –  “I had an amazing experience with this company! The customer service was top-notch, and the product exceeded my expectations. I highly recommend them to anyone looking for quality products and excellent service.”</p>
    
        <!-- Clients Review Section -->
        <div class="reviewSection">

        <!-- Clients Review-1 Section Starts from Here  -->
            <div class="reviewItem">
                <div class="top">
                    <div class="clientImage">
                        <img src="./team4.jpg" alt="">
                        <span>Raja Babu</span>
                    </div>
                    <ul>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-regular fa-star"></i></li>
                        <li><i class="fa-regular fa-star"></i></li>
                      
                    </ul>
                </div>
                <article>
                    <p class="review">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit beatae ipsa
                        voluptatibus perferendis quos eaque nemo error tempora harum quas, laudantium tenetur, neque,
                        facere exercitationem!</p>
                    <p>Jan 01, 2023</p>
                </article>
            </div>

        <!-- Clients Review-2 Section Starts from Here  -->
            <div class="reviewItem">
                <div class="top">
                    <div class="clientImage">
                        <img src="./team5.jpg" alt="">
                        <span>Maria Singh</span>
                    </div>
                    <ul>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-regular fa-star"></i></li>
                        <li><i class="fa-regular fa-star"></i></li>
                    </ul>
                </div>
                <article>
                    <p class="review">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit beatae ipsa
                        voluptatibus perferendis quos eaque nemo error tempora harum quas, laudantium tenetur, neque,
                        facere exercitationem!</p>
                    <p>Jan 01, 2023</p>
                </article>
            </div>

        <!-- Clients Review-3 Section Starts from Here  -->
            <div class="reviewItem">
                <div class="top">
                    <div class="clientImage">
                        <img src="./img_avatar.png" alt="">
                        <span>Pappu yadav</span>
                    </div>
                    <ul>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-solid fa-star"></i></li>
                        <li><i class="fa-regular fa-star"></i></li>
                        <li><i class="fa-regular fa-star"></i></li>
                    </ul>
                </div>
                <article>
                    <p class="review">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit beatae ipsa
                        voluptatibus perferendis quos eaque nemo error tempora harum quas, laudantium tenetur, neque,
                        facere exercitationem!</p>
                    <p>Jan 01, 2023</p>
                </article>
            </div>
        </div>


        <section>
  

  <form id="ratingForm" action="#" method="post">
      <div class="rating">
          <input type="radio" id="star5" name="rating" value="5">
          <label for="star5">&#9733;</label>
          <input type="radio" id="star4" name="rating" value="4">
          <label for="star4">&#9733;</label>
          <input type="radio" id="star3" name="rating" value="3">
          <label for="star3">&#9733;</label>
          <input type="radio" id="star2" name="rating" value="2">
          <label for="star2">&#9733;</label>
          <input type="radio" id="star1" name="rating" value="1">
          <label for="star1">&#9733;</label>
      </div>
      <textarea id="message" name="message" placeholder="Write your message here..."></textarea>
      <button type="submit" class="submit-button">Submit Rating</button>
  </form>
  </section>
      





    </div>
  




















































<section class="ttt">
<div class="w-full p-4 text-center bg-white  rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
    <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">Watch from anywhere</h5>
    <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400 ssss">Stay up to date and move work forward with INOX on iOS & Android. Download the app today.</p>
    <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse">
        <a href="#" class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
            <svg class="me-3 w-7 h-7" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="apple" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"></path></svg>
            <div class="text-left rtl:text-right">
                <div class="mb-1 text-xs">Download on the</div>
                <div class="-mt-1 font-sans text-sm font-semibold">Mac App Store</div>
            </div>
        </a>
        <a href="#" class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
            <svg class="me-3 w-7 h-7" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google-play" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M325.3 234.3L104.6 13l280.8 161.2-60.1 60.1zM47 0C34 6.8 25.3 19.2 25.3 35.3v441.3c0 16.1 8.7 28.5 21.7 35.3l256.6-256L47 0zm425.2 225.6l-58.9-34.1-65.7 64.5 65.7 64.5 60.1-34.1c18-14.3 18-46.5-1.2-60.8zM104.6 499l280.8-161.2-60.1-60.1L104.6 499z"></path></svg>
            <div class="text-left rtl:text-right">
                <div class="mb-1 text-xs">Get in on</div>
                <div class="-mt-1 font-sans text-sm font-semibold">Google Play</div>
            </div>
        </a>
    </div>
</section>



<section>
<h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400  d">Trending </span>Movies.</h1>
</section>




<div class="inline-flex items-center justify-center w-full  hr-div">
    <hr class="w-64 h-px my-8 bg-gray-200 border-0 dark:bg-gray-700 xxx">
    <span class="absolute px-3 font-medium text-gray-900 -translate-x-1/2 bg-white left-1/2 dark:text-white dark:bg-gray-900  hr-text "></span>
  </div>








<section>
<div class="container_boxes">
        <div class="card_boxes"> 
        <img src="./assets//images//m2.jpg" alt="sample image">
        <div class="texts">
         <span>  <button type="submit">watch Now</button> </span>
        </div>
 </div>
</div>

<div class="container_boxes">
        <div class="card_boxes"> 
        <img src="./assets//images//m3.jpg" alt="sample image">
        <div class="texts">
           <button type="submit">watch Now</button>
        </div>
 </div>
</div>


<div class="container_boxes">
        <div class="card_boxes"> 
        <img src="./assets//images//m4.jpg" alt="sample image">
        <div class="texts">
           <button type="submit">watch Now</button>
        </div>
 </div>
</div>



<div class="container_boxes">
        <div class="card_boxes"> 
        <img src="./assets//images//m5.jpg" alt="sample image">
        <div class="texts">
           <button type="submit">watch Now</button>
        </div>
 </div>
</div>


<div class="container_boxes">
        <div class="card_boxes"> 
        <img src="./assets//images//m6.jpg" alt="sample image">
        <div class="texts">
           <button type="submit">watch Now</button>
        </div>
 </div>
</div>

<div class="container_boxes">
        <div class="card_boxes"> 
        <img src="./assets//images//m7.jpg" alt="sample image">
        <div class="texts">
           <button type="submit">watch Now</button>
        </div>
 </div>
 </div>

</section>




































  




<!-- Footer Section -->


  <section>

    <footer class="footer-distributed">

      <div class="footer-left">

        <span><img src="./logo.png" alt="" style="width: 400px;"></span>

        <p class="footer-links">
          <a href="#" class="link-1">Home</a>

          <a href="#">Blog</a>

          <a href="#">Pricing</a>

          <a href="#">About</a>

          <a href="#">Faq</a>

          <a href="#">Contact</a>
        </p>

        <p class="footer-company-name">Company Name © 2015</p>
      </div>


      <div class="footer-center">
    <div>
        <i class="fa fa-map-marker" style="color: #ff5733;"></i>
        <p><span>444 S. Cedros Ave</span> Solana Beach, California</p>
    </div>
    <div>
        <i class="fa fa-phone" style="color: #33ccff;"></i>
        <p>+1.555.555.5555</p>
    </div>
    <div>
        <i class="fa fa-envelope" style="color: #33ff77;"></i>
        <p><a href="mailto:support@company.com">support@company.com</a></p>
    </div>
</div>

     
      <div class="footer-right">

        <p class="footer-company-about">
          <span>About the company</span>
          Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
        </p>

        <div class="footer-icons">

        <a href="#"><i class="fab fa-facebook" style="color: #3b5998;"></i></a>
        <a href="#"><i class="fab fa-twitter" style="color: #1da1f2;"></i></a>
        <a href="#"><i class="fab fa-linkedin" style="color: #0e76a8;"></i></a>
        <a href="#"><i class="fab fa-github" style="color: #211F1F;"></i></a>
        

        </div>

      </div>

    </footer>

  </section>





































































  <script src="./JS/Color.js"></script>
  <script src="index.js"></script>
  <script src="./JS/Navbar_Link.js"></script>
  <script src="./JS/loding.js"></script>
  <script src="./JS/Play_Video.js"></script>
  <script src="./JS/Movies.js"></script>
  <script src="./JS/WishList.js"></script>
  <script src="./JS/Top_Movies.js"></script>
  <script src="./JS/x.js"></script>
  <script src="./JS/yt.js"></script>
  <script src="./JS//Ticket.js"></script>


  


  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>


  <script>
    // Function to animate counting
    function animateCounter(element, start, end, duration) {
      let startTime = null;
      const step = (timestamp) => {
        if (!startTime) {
          startTime = timestamp;
        }
        const progress = Math.min((timestamp - startTime) / duration, 1);
        const value = Math.floor(progress * (end - start) + start);
        element.textContent = value;
        if (progress < 1) {
          window.requestAnimationFrame(step);
        }
      };
      window.requestAnimationFrame(step);
    }

    // Starting values and target values for the counters
    const moviesCounter = document.getElementById('moviesCounter');
    const showsCounter = document.getElementById('showsCounter');
    const staffCounter = document.getElementById('staffCounter');
    const usersCounter = document.getElementById('usersCounter');

    const startValues = [0, 0, 0, 0]; // Start values for counters
    const targetValues = [65, 165, 463, 5063]; // Target values for counters
    const duration = 2000; // Duration for the animation in milliseconds

    // Animate each counter
    animateCounter(moviesCounter, startValues[0], targetValues[0], duration);
    animateCounter(showsCounter, startValues[1], targetValues[1], duration);
    animateCounter(staffCounter, startValues[2], targetValues[2], duration);
    animateCounter(usersCounter, startValues[3], targetValues[3], duration);
  </script>





<script>
  const counters = document.querySelectorAll('.value');
  const speed = 2000;

  counters.forEach(counter => {
    const targetValue = +counter.getAttribute('akhi');
    let currentValue = 0;

    const updateCounter = () => {
      const increment = Math.ceil(targetValue / speed);
      currentValue += increment;

      if (currentValue < targetValue) {
        counter.querySelector('.count').innerText = currentValue;
        setTimeout(updateCounter, 1);
      } else {
        counter.querySelector('.count').innerText = targetValue;
      }
    };

    updateCounter();
  });
</script>







  <script>
    const darkModeToggle = document.getElementById('dark-mode-toggle');
    const appDescription = document.getElementById('app-description');

    darkModeToggle.addEventListener('click', function() {
      // Toggle dark mode class on the paragraph element
      appDescription.classList.toggle('dark-text');
    });
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const banner = document.getElementById("banner");
      const videoId = "YOUR_YOUTUBE_VIDEO_ID";

      banner.addEventListener("click", function() {
        const iframe = document.createElement("iframe");
        iframe.setAttribute("src", `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0`);
        iframe.setAttribute("frameborder", "0");
        iframe.setAttribute("allowfullscreen", "true");
        this.innerHTML = "";
        this.appendChild(iframe);
      });
    });
  </script>




  <script src="js/swiper-bundle.min.js"></script>

  <!-- JavaScript -->
  <script src="js/script.js"></script>


  <script>
    document.addEventListener("DOMContentLoaded", function() {
      fetchNews();
    });

    function fetchNews() {
      // Fetch news data from an API
      fetch('https://api.example.com/news')
        .then(response => response.json())
        .then(data => {
          // Display news articles on the webpage
          const newsContainer = document.getElementById('news-container');
          data.articles.forEach(article => {
            const articleElement = createArticleElement(article);
            newsContainer.appendChild(articleElement);
          });
        })
        .catch(error => console.error('Error fetching news:', error));
    }

    function createArticleElement(article) {
      const articleElement = document.createElement('div');
      articleElement.classList.add('article');

      const titleElement = document.createElement('h2');
      titleElement.textContent = article.title;

      const descriptionElement = document.createElement('p');
      descriptionElement.textContent = article.description;

      articleElement.appendChild(titleElement);
      articleElement.appendChild(descriptionElement);

      return articleElement;
    }
  </script>



  <script>
    function scrollToTop() {
      window.scrollTo({
        top: 0,
        behavior: "smooth"
      });
    }
  </script>



</body>

</html>