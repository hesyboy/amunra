<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <title>Document</title>
</head>
<body>

    <header>
        <div class="navbar bg-zinc-900">
            <div class="navbar-start">
              <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost lg:hidden">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
                </label>
                <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                  <li><a>Item 1</a></li>
                  <li tabindex="0">
                    <a class="justify-between">
                      Parent
                      <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z"/></svg>
                    </a>
                    <ul class="p-2">
                      <li><a>Submenu 1</a></li>
                      <li><a>Submenu 2</a></li>
                    </ul>
                  </li>
                  <li><a>Item 3</a></li>
                </ul>
              </div>
              <a class="btn btn-ghost normal-case text-xl">daisyUI</a>
            </div>
            <div class="navbar-center hidden lg:flex">
              <ul class="menu menu-horizontal p-0">
                <li><a>Item 1</a></li>
                <li tabindex="0">
                  <a>
                    Parent
                    <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/></svg>
                  </a>
                  <ul class="p-2">
                    <li><a>Submenu 1</a></li>
                    <li><a>Submenu 2</a></li>
                  </ul>
                </li>
                <li><a>Item 3</a></li>
              </ul>
            </div>
            <div class="navbar-end">
              <a class="btn">Get started</a>
            </div>
          </div>
    </header>

    <div class="bg-zinc-900 " >

        {{-- level1
             --}}

             <div class="h-screen bg-zinc-900">
                <div class="container mx-auto">
                    <div class="flex flex-col items-center justify-center">
                        <div>
                            <img src="{{asset('/images/header1.png')}}" class="w-[600px]" />
                        </div>
                        <div>
                            <h1 class="text-7xl font-bold text-gray-100">Amunra NFT</h1>
                            <p class="text-4xl text-gray-100">Play To Earn</p>
                        </div>

                    </div>
                </div>
             </div>

        {{-- level2 --}}
        <div class="flex flex-col bg-zinc-800  relative">
            <div class="container mx-auto ">

                <div class="grid grid-cols-2 gap-10 items-center">
                    <div class="p-5 flex items-center justify-center">
                        <div class="col-span-4">
                            <style>
                                .swiper {
                                  width: 400px;
                                  height: 400px;
                                }

                                .swiper-slide {
                                  display: flex;
                                  align-items: center;
                                  justify-content: center;
                                  border-radius: 18px;
                                  font-size: 22px;
                                  font-weight: bold;
                                  color: #fff;
                                }
                                .swiper-slide-shadow{
                                    opacity: 0;
                                    background: rgba(0, 0, 0, 0)!important;
                                }

                              </style>
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                  <div class="swiper-slide">
                                    <img src="{{asset('/images/amunra1.png')}}" class="" />
                                  </div>
                                  <div class="swiper-slide">
                                    <img src="{{asset('/images/amunra2.png')}}" class="" />
                                  </div>
                                </div>
                              </div>

                              <!-- Swiper JS -->
                              <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

                              <!-- Initialize Swiper -->
                              <script>
                                var swiper = new Swiper(".mySwiper", {
                                  effect: "cards",
                                  grabCursor: true,
                                });
                              </script>
                        </div>
                    </div>
                    <div class="flex flex-col gap-7 items-center">
                        <div class="flex flex-col gap-7">
                            <h1 class="text-7xl font-bold text-gray-100">Amunra NFT</h1>
                            <p class="text-4xl text-gray-100">Play To Earn</p>
                            <p class="text-xl text-gray-400">EACH AMUNRA NFT HAS A UNIQUE SET OF TRAITS AND UNLOCKS VARYING UNIQUE LEVELS OF ACCESS AND PERKS FOR ITS OWNER</p>
                        </div>
                        <div class="flex gap-5 w-full">
                            <button class="bg-yellow-600 text-gray-100 p-3 rounded-lg flex items-center gap-2">
                                <ion-icon name="bag-handle-outline" class="text-3xl "></ion-icon>
                                <span class="text-base">Mint Amunra NFT</span>
                              </button>
                              <button class="bg-blue-700 text-gray-100 p-3 rounded-lg flex items-center gap-2">
                                <ion-icon name="wallet-outline" class="text-3xl "></ion-icon>
                                <span class="text-base ">Connect Wallet</span>
                              </button>

                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="relative bottom-20 z-0">
                <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 400" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"><style>
                    .path-0{
                      animation:pathAnim-0 4s;
                      animation-timing-function: linear;
                      animation-iteration-count: infinite;
                    }
                    @keyframes pathAnim-0{
                      0%{
                        d: path("M 0,400 C 0,400 0,200 0,200 C 211.86666666666667,222.13333333333333 423.73333333333335,244.26666666666668 561,248 C 698.2666666666667,251.73333333333332 760.9333333333334,237.06666666666666 895,226 C 1029.0666666666666,214.93333333333334 1234.5333333333333,207.46666666666667 1440,200 C 1440,200 1440,400 1440,400 Z");
                      }
                      25%{
                        d: path("M 0,400 C 0,400 0,200 0,200 C 151.46666666666664,181.33333333333331 302.9333333333333,162.66666666666666 470,153 C 637.0666666666667,143.33333333333334 819.7333333333333,142.66666666666669 984,152 C 1148.2666666666667,161.33333333333331 1294.1333333333332,180.66666666666666 1440,200 C 1440,200 1440,400 1440,400 Z");
                      }
                      50%{
                        d: path("M 0,400 C 0,400 0,200 0,200 C 119.73333333333335,180.8 239.4666666666667,161.6 412,158 C 584.5333333333333,154.4 809.8666666666666,166.4 990,176 C 1170.1333333333334,185.6 1305.0666666666666,192.8 1440,200 C 1440,200 1440,400 1440,400 Z");
                      }
                      75%{
                        d: path("M 0,400 C 0,400 0,200 0,200 C 190.2666666666667,171.06666666666666 380.5333333333334,142.13333333333333 557,135 C 733.4666666666666,127.86666666666667 896.1333333333334,142.53333333333336 1041,157 C 1185.8666666666666,171.46666666666664 1312.9333333333334,185.73333333333332 1440,200 C 1440,200 1440,400 1440,400 Z");
                      }
                      100%{
                        d: path("M 0,400 C 0,400 0,200 0,200 C 211.86666666666667,222.13333333333333 423.73333333333335,244.26666666666668 561,248 C 698.2666666666667,251.73333333333332 760.9333333333334,237.06666666666666 895,226 C 1029.0666666666666,214.93333333333334 1234.5333333333333,207.46666666666667 1440,200 C 1440,200 1440,400 1440,400 Z");
                      }
                    }</style><path d="M 0,400 C 0,400 0,200 0,200 C 211.86666666666667,222.13333333333333 423.73333333333335,244.26666666666668 561,248 C 698.2666666666667,251.73333333333332 760.9333333333334,237.06666666666666 895,226 C 1029.0666666666666,214.93333333333334 1234.5333333333333,207.46666666666667 1440,200 C 1440,200 1440,400 1440,400 Z" stroke="none" stroke-width="0" fill="#18181bff" class="transition-all duration-300 ease-in-out delay-150 path-0"></path></svg>
            </div> --}}
        </div>



        <div class=" bg-zinc-900 z-50">
            <div class="container mx-auto py-10">

                <div class="grid grid-cols-12">
                    <div class="col-span-8">
                        <div>
                            <h2 class="text-gray-100 text-5xl font-bold">Mint Amunra NFT</h2>
                        </div>
                    </div>
                    <div class="col-span-4">
                        <style>
                            .swiper {
                              width: 450px;
                              height: 600px;
                            }

                            .swiper-slide {
                              display: flex;
                              align-items: center;
                              justify-content: center;
                              border-radius: 18px;
                              font-size: 22px;
                              font-weight: bold;
                              color: #fff;
                            }

                          </style>
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                <img src="{{asset('/images/amunra1.png')}}" class="w-[500px]" />
                              </div>
                              <div class="swiper-slide">
                                <img src="{{asset('/images/amunra2.png')}}" class="w-[500px]" />
                              </div>
                            </div>
                          </div>

                          <!-- Swiper JS -->
                          <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

                          <!-- Initialize Swiper -->
                          <script>
                            var swiper = new Swiper(".mySwiper", {
                              effect: "cards",
                              grabCursor: true,
                            });
                          </script>
                    </div>
                </div>



            </div>
        </div>


        <div class=" bg-zinc-800 z-50">
            <div class="container mx-auto py-10">
                <div>
                    <h2 class="text-gray-100 text-5xl font-bold">Amunra NFT RoadMap</h2>
                </div>
            </div>
        </div>


    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
