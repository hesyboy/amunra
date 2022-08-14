<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/web3/1.7.5/web3.min.js"></script>

    <script src="{{asset('js/app.js')}}"></script>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <title>Document</title>
</head>
<body style="background-color: #000000; animation:example 80s infinite;
background-image: url('{{asset('images/back.png')}}'); ";>

<style>
    @keyframes example {
  from {background-position-x: 0px;}
  to {background-position-x: 1000px;}
}
</style>
    <header class="sticky top-0 z-50">
        <div class="navbar bg-black py-5 px-5">
            <div class="navbar-start">
              <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost lg:hidden">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
                </label>
                <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                  <li><a>About Amunra</a></li>
                  <li><a>RoadMap</a></li>
                  {{-- <li tabindex="0">
                    <a class="justify-between">
                      Parent
                      <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z"/></svg>
                    </a>
                    <ul class="p-2">
                      <li><a>Submenu 1</a></li>
                      <li><a>Submenu 2</a></li>
                    </ul>
                  </li> --}}
                  <li><a>Item 3</a></li>
                </ul>
              </div>
              <a class="text-gray-100 text-3xl">AMUNRA NFT</a>
            </div>
            <div class="navbar-center hidden lg:flex text-gray-100">
              <ul class="menu menu-horizontal p-0">
                <li><a>Why Amunra</a></li>
                <li><a>RoadMap</a></li>
                <li><a>Mint Info</a></li>
                {{-- <li tabindex="0">
                  <a>
                    Parent
                    <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/></svg>
                  </a>
                  <ul class="p-2">
                    <li><a>Submenu 1</a></li>
                    <li><a>Submenu 2</a></li>
                  </ul>
                </li> --}}
                <li><a>Item 3</a></li>
              </ul>
            </div>
            <div class="navbar-end">
                <div class="flex gap-5 w">
                    <a class="bg-gradient-to-r from-yellow-500 to-orange-600
                    transition-all duration-300 hover:scale-95
                     text-gray-100 p-3 rounded-lg flex justify-center items-center gap-2">
                        <ion-icon name="bag-handle" class="text-3xl "></ion-icon>
                        <span class="">Mint NFT</span>
                    </a>
                    <a class="bg-gradient-to-r from-indigo-500 to-indigo-800
                    transition-all duration-300 hover:scale-95
                     text-gray-100 p-3 rounded-lg flex justify-center items-center gap-2"  onclick="connect()">
                        <ion-icon name="wallet" class="text-3xl "></ion-icon>
                        <span class="" id="connectButtontxt">Connect Wallet</span>
                    </a>
                </div>
            </div>
          </div>
          <div class="h-1 bg-zinc-900"></div>
    </header>

    <div class=" flex flex-col" >

        {{-- level1
             --}}

             <div class="flex flex-col items-center justify-center  h-screen"  >
                <div class="container mx-auto">
                    <div class="flex flex-col gap-8  justify-center items-center ">

                        <div class="flex flex-col gap-8 items-center justify-between group">
                            <div class="bg-yellow-600 p-3 rounded-full">
                                <div class="swiper mySwiper1 bg-black rounded-full p-3" style="
                                width: 270px;
                                height: 270px;
                                ">
                                    <div class="swiper-wrapper">
                                      <div class="swiper-slide">
                                        <img src="{{asset('/images/slide1.png')}}" class="w-[270px]" />
                                      </div>
                                      <div class="swiper-slide">
                                        <img src="{{asset('/images/slide2.png')}}" class="w-[270px]" />
                                      </div>
                                      <div class="swiper-slide">
                                        <img src="{{asset('/images/slide3.png')}}" class="w-[270px]" />
                                      </div>
                                      <div class="swiper-slide">
                                        <img src="{{asset('/images/slide4.png')}}" class="w-[270px]" />
                                      </div>
                                    </div>

                                  </div>

                                  <!-- Swiper JS -->
                                  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

                                  <!-- Initialize Swiper -->
                                  <script>
                                    var swiper = new Swiper(".mySwiper1", {
                                      effect: "flip",
                                      grabCursor: true,
                                      autoplay: {
                                        delay: 1500,
                                        disableOnInteraction: false,
                                        },

                                    });
                                  </script>
                                {{-- <img src="{{asset('/images/slide1.png')}}" class="w-[300px]" /> --}}
                            </div>




                            <div class="flex flex-col gap-5 items-center ">
                                <h1 class="text-7xl text-zinc-300 tracking-[6px] font2">AMUNRA</h1>
                                <p class="text-5xl text-yellow-600 font1 tracking-[4px]">Play To Earn</p>
                                <div class="flex flex-col justify-center text-gray-100">
                                    <div class="w-full text-center text-lg font2">
                                        Your Wallet Address
                                    </div>
                                    <div class="w-full text-center " id="walletAddress">
                                        Wallet Not Connected
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col gap-5 justify-center items-center">
                            <div class="flex gap-8">
                                <a class="flex flex-col justify-center items-center text-gray-300 hover:text-yellow-600
                                transition-all duration-300 hover:scale-95 " href="">
                                    <ion-icon name="logo-instagram" class="text-6xl "></ion-icon>
                                    <span class="">Instagram</span>
                                </a>
                                <a class="flex flex-col justify-center items-center text-gray-300 hover:text-yellow-600
                                transition-all duration-300 hover:scale-95 " href="">
                                    <ion-icon name="logo-discord" class="text-6xl "></ion-icon>
                                    <span class="">Discord</span>
                                </a>
                                <a  class="flex flex-col justify-center items-center text-gray-300 hover:text-yellow-600
                                transition-all duration-300 hover:scale-95 " href="">
                                    <ion-icon name="logo-twitter" class="text-6xl "></ion-icon>
                                    <span class="">Twitter</span>
                                </a>
                                <a class="flex flex-col justify-center items-center text-gray-300 hover:text-yellow-600
                                transition-all duration-300 hover:scale-95 " href="">
                                    <ion-icon name="navigate-circle" class="text-6xl "></ion-icon>
                                    <span class="">Telegram</span>
                                </a>
                            </div>
                        </div>



                    </div>
                </div>


             </div>


                     {{-- level2 --}}
        <div class="flex flex-col items-center justify-center  my-40">
            <div class="container mx-auto ">

                <div class="">

                    <div class="flex flex-col gap-7 items-center">
                        <div class="flex flex-col items-center gap-8">
                            <div class="flex flex-col gap-5 items-center ">
                                {{-- <img src="{{asset('/images/logo2.png')}}" class="w-[250px]" /> --}}
                                <div class="flex flex-col gap-5 items-center ">
                                    <img src="{{asset('/images/logo2.png')}}" class="w-[190px]" />
                                    <h2 class="text-7xl text-yellow-600 font1 tracking-[6px]"> Amunra </h2>
                                    <h2 class="text-5xl text-gray-300 font1 tracking-[6px]">  NFT Collection</h2>
                                    <h2 class="text-4xl text-gray-300 font1 tracking-[6px]">
                                        <span>10,000 </span>
                                        <span class="text-yellow-600"> Mintable </span>
                                        <span> NFTs</span>
                                    </h2>


                                </div>
                                <h1 class="text-6xl text-yellow-600 font1 tracking-[6px]"> World Of Amunra</h1>
                            </div>
                            <div x-data="{box:false}" class=" w-3/6">
                                <div>
                                    <p class="text-2xl font-semibold text-gray-300 tracking-[3px] leading-10 text-center">Amunra is old-school fighting game in metaverse and it has 12 master characters
                                        of fighters . Project aiming to restore the amunra civilization in the metaverse and to protect cultural heritage
                                         and ...
                                    </p>
                                </div>
                                <div x-show="box" x-transition.duration.500ms>
                                    <p class="text-2xl font-semibold text-gray-300 tracking-[3px] leading-10 text-center"> environments all around the world. First of all we are working with some  absolutely intelligence artists to
                                         bring you stunning 2D and 3D collection. Our upcoming 2D collection consists of another eleven 10000 nfts generated
                                          from 650 all hand drawn unique traits . Our 3D collection will come before gaming launch .we believe that our game
                                           is world class and so attractive and interesting. The teams project consists of our 3 founder , our 7 artists ,
                                           5 nft developers , 2 gaming developers and 3 moderators.
                                    </p>
                                </div>
                                <div class="flex w-full justify-center items-center my-5">
                                    <button x-on:click="box=!box" x-text=" box ?'Show Less' :'Show Me More'"  class="font2 text-xl p-3 bg-gradient-to-r from-yellow-500 to-orange-600 text-gray-900 rounded-xl"></button>
                                </div>
                            </div>



                        </div>
                        {{-- <div class="flex justify-center gap-5 w-full">
                            <a class="bg-gradient-to-r from-yellow-500 to-orange-600
                            transition-all duration-300 hover:scale-95
                             text-gray-100 p-3 rounded-lg flex justify-center items-center gap-2">
                                <ion-icon name="bag-handle" class="text-4xl "></ion-icon>
                                <span class="text-xl">Mint NFT</span>
                            </a>
                            <a class="bg-gradient-to-r from-indigo-500 to-indigo-800
                            transition-all duration-300 hover:scale-95
                             text-gray-100 p-3 rounded-lg flex justify-center items-center gap-2">
                                <ion-icon name="wallet" class="text-4xl "></ion-icon>
                                <span class="text-xl">Connect Wallet</span>
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>

        </div>



                     {{-- level3 --}}
                     <div class="flex flex-col   relative items-center justify-center  my-40">
                        <div class="container mx-auto ">

                            <div class="flex flex-col items-center justify-center gap-3 mb-3">
                                <h2 class="text-7xl text-gray-300 font2 tracking-[6px] text-center">
                                    <span>Mint </span>
                                    <span class="text-yellow-600"> Amunra </span>
                                    <span>NFT</span>
                                 </h2>
                                 <h2 class="text-4xl text-yellow-600 font2 tracking-[6px]"> 10,000 Mintable NFTs</h2>

                            </div>

                            <div class="flex  items-center justify-center gap-5">

                                <div class="p-5 flex items-center justify-center">
                                    <div class="col-span-4">
                                        <style>


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
                                        <div class="swiper myswiper" style="width: 350px; height: 550px;">
                                            <div class="swiper-wrapper">
                                            <div class="swiper-slide " style="background-color: transparent">
                                                <img src="{{asset('/images/amunra1.png')}}" class="w-full" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{asset('/images/amunra2.png')}}" class="w-full" />
                                            </div>
                                            </div>
                                        </div>

                                        <!-- Swiper JS -->
                                        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

                                        <!-- Initialize Swiper -->
                                        <script>
                                            var swiper = new Swiper(".myswiper", {
                                            effect: "cards",
                                            grabCursor: true,
                                            });
                                        </script>
                                    </div>
                                </div>

                                <div class=" flex flex-col gap-8 items-center">
                                    <div class="flex flex-col items-center gap-8">
                                        <div class="flex flex-col gap-8 items-center ">
                                            {{-- <h2 class="text-6xl text-gray-300 font1 tracking-[6px]"> Play To Earn </h2> --}}
                                            <h2 class="text-5xl text-gray-300 font2 tracking-[6px]"> Start Mint At  </h2>
                                            <h2 class="text-3xl text-gray-300 font2 tracking-[6px]">  09/09/2022</h2>


                                        </div>


                                    </div>

                                    <div class="stats shadow bg-zinc-800 text-gray-100">

                                        <div class="stat place-items-center">
                                            <div class="stat-title">NFT Collection</div>
                                            <div class="stat-value">1</div>
                                            <div class="text-lg stat-desc text-white">+ 3 At Soon</div>
                                          </div>

                                        <div class="stat place-items-center">
                                          <div class="stat-title">NFT Amount</div>
                                          <div class="stat-value">10,000</div>
                                          <div class="text-lg stat-desc text-white">in one Collection</div>
                                        </div>

                                        <div class="stat place-items-center">
                                          <div class="stat-title">Users Subscriber</div>
                                          <div class="stat-value text-white">2.2M</div>
                                          <div class="text-lg stat-desc text-green-500">↗︎ (250%)</div>
                                        </div>

                                      </div>
                                    <div class="flex justify-center gap-5 w-full">
                                        <a class="bg-gradient-to-r from-yellow-500 to-orange-600
                                        transition-all duration-300 hover:scale-95
                                         text-gray-100 p-3 rounded-lg flex justify-center items-center gap-2">
                                            <ion-icon name="bag-handle" class="text-4xl "></ion-icon>
                                            <span class="text-xl font2">Mint Now</span>
                                        </a>
                                        <a class="bg-gradient-to-r from-indigo-500 to-indigo-800
                                        transition-all duration-300 hover:scale-95
                                         text-gray-100 p-3 rounded-lg flex justify-center items-center gap-2">
                                            <ion-icon name="link" class="text-4xl "></ion-icon>
                                            <span class="text-xl font2">View On OpenSea</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

{{-- level4 --}}
        <div class="flex flex-col items-center justify-center  my-40">
            <div class="container mx-auto ">
                <div class="flex flex-col items-center justify-center gap-12">
                    <div class="flex flex-col gap-5 items-center justify-center">
                        <h2 class="text-7xl text-gray-300 font2 tracking-[6px]">
                            <span>Why </span>
                            <span class="text-yellow-600"> Amunra </span>
                            <span>NFT</span>
                         </h2>
                         <h2 class="text-3xl  font2 tracking-[4px] text-yellow-600"> Most Important Of Our Featured </h2>

                        <p class="text-lg  text-gray-300 text-center font2 w-2/3">EACH AMUNRA NFT HAS A UNIQUE SET OF TRAITS AND UNLOCKS VARYING UNIQUE LEVELS OF ACCESS AND PERKS FOR ITS OWNER</p>

                    </div>

                    <div class="grid grid-cols-3 gap-12 w-5/6">
                                <div class=" text-zinc-900 flex items-center gap-2  rounded-xl p-2 bg-gradient-to-r from-yellow-500 to-orange-600
                                    hover:scale-95 transition-all duration-300 cursor-pointer">
                                    <ion-icon name="checkmark-done" class="text-6xl  text-white bg-zinc-900 rounded-xl p-1"></ion-icon>
                                    <div>
                                        <div class="text-2xl font2">Taget Goal</div>
                                        <div>
                                            adaad asdasd dasads sdfsdf sdsdf
                                        </div>
                                    </div>
                                </div>
                                <div class=" text-zinc-900 flex items-center gap-2  rounded-xl p-2 bg-gradient-to-r from-yellow-500 to-orange-600
                                    hover:scale-95 transition-all duration-300  cursor-pointer">
                                    <ion-icon name="checkmark-done" class="text-6xl  text-white bg-zinc-900 rounded-xl p-1"></ion-icon>
                                    <div>
                                        <div class="text-2xl font2">Taget Goal</div>
                                        <div>
                                            adaad asdasd dasads sdfsdf sdsdf
                                        </div>
                                    </div>
                                </div>
                                <div class=" text-zinc-900 flex items-center gap-2  rounded-xl p-2 bg-gradient-to-r from-yellow-500 to-orange-600
                                    hover:scale-95 transition-all duration-300  cursor-pointer">
                                    <ion-icon name="checkmark-done" class="text-6xl  text-white bg-zinc-900 rounded-xl p-1"></ion-icon>
                                    <div>
                                        <div class="text-2xl font2">Taget Goal</div>
                                        <div>
                                            adaad asdasd dasads sdfsdf sdsdf
                                        </div>
                                    </div>
                                </div>
                                <div class=" text-zinc-900 flex items-center gap-2  rounded-xl p-2 bg-gradient-to-r from-yellow-500 to-orange-600
                                    hover:scale-95 transition-all duration-300  cursor-pointer">
                                    <ion-icon name="checkmark-done" class="text-6xl  text-white bg-zinc-900 rounded-xl p-1"></ion-icon>
                                    <div>
                                        <div class="text-2xl font2">Taget Goal</div>
                                        <div>
                                            adaad asdasd dasads sdfsdf sdsdf
                                        </div>
                                    </div>
                                </div>
                                <div class=" text-zinc-900 flex items-center gap-2  rounded-xl p-2 bg-gradient-to-r from-yellow-500 to-orange-600
                                    hover:scale-95 transition-all duration-300  cursor-pointer">
                                    <ion-icon name="checkmark-done" class="text-6xl  text-white bg-zinc-900 rounded-xl p-1"></ion-icon>
                                    <div>
                                        <div class="text-2xl font2">Taget Goal</div>
                                        <div>
                                            adaad asdasd dasads sdfsdf sdsdf
                                        </div>
                                    </div>
                                </div>
                                <div class=" text-zinc-900 flex items-center gap-2  rounded-xl p-2 bg-gradient-to-r from-yellow-500 to-orange-600
                                    hover:scale-95 transition-all duration-300  cursor-pointer">
                                    <ion-icon name="checkmark-done" class="text-6xl  text-white bg-zinc-900 rounded-xl p-1"></ion-icon>
                                    <div>
                                        <div class="text-2xl font2">Taget Goal</div>
                                        <div>
                                            adaad asdasd dasads sdfsdf sdsdf
                                        </div>
                                    </div>
                                </div>



                                </div>
                    </div>
                </div>
            </div>
        </div>






        {{-- level2 --}}
        <div class="flex flex-col   relative my-40">
            <div class="container mx-auto ">

                <div class="">
                    {{-- <div class="p-5 flex items-center justify-center">
                        <div class="col-span-4">
                            <style>


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
                            <div class="swiper myswiper" style="width: 400px; height: 600px;">
                                <div class="swiper-wrapper">
                                  <div class="swiper-slide " style="background-color: transparent">
                                    <img src="{{asset('/images/amunra1.png')}}" class="w-full" />
                                  </div>
                                  <div class="swiper-slide">
                                    <img src="{{asset('/images/amunra2.png')}}" class="w-full" />
                                  </div>
                                </div>
                              </div>

                              <!-- Swiper JS -->
                              <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

                              <!-- Initialize Swiper -->
                              <script>
                                var swiper = new Swiper(".myswiper", {
                                  effect: "cards",
                                  grabCursor: true,
                                });
                              </script>
                        </div>
                    </div> --}}
                    <div class="flex flex-col gap-7 items-center">
                        <div class="flex items-center gap-1">
                            <div class="flex flex-col items-center ">
                                <ul class="steps steps-vertical">
                                    <li class="step text-2xl step-primary">Register</li>
                                    <li class="step step-primary">Choose plan</li>
                                    <li class="step">Purchase</li>
                                    <li class="step">Receive Product</li>
                                  </ul>
                            </div>

                            <div>
                                <span class="countdown font-mono text-6xl">
                                    <span style="--value:57;"></span>
                                  </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div>
                <img src="{{asset('images/wall2.png')}}" alt="" srcset="">
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









      <title>Connect to crypto wallet</title>

   <script>
    /* To connect using MetaMask */
    async function connect() {
        $btn=document.getElementById('connectButtontxt');
        $walletdiv=document.getElementById('walletAddress');

      if (typeof window.ethereum !== 'undefined') {
         $acc=await window.ethereum.request({ method: "eth_requestAccounts" });
         window.web3 = new Web3(window.ethereum);
         const account = web3.eth.accounts;
         //Get the current MetaMask selected/active wallet
         const walletAddress = account.givenProvider.selectedAddress;
         $btn.textContent ="Connected";
         $walletdiv.textContent=`${walletAddress}`;
         console.log(`Wallet: ${walletAddress}`);

      } else {
        console.log($acc);
       console.log("No wallet");
       window.open("https://metamask.io/download/", "_blank");
      }
    }
    </script>
<button id="connectButton" onclick="connect()">Connect Wallet</button>

</body>
</html>



