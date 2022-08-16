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

             <div class="flex flex-col items-center justify-center mt-10 mb-32 "  >
                <div class="container mx-auto">
                    <div class="flex flex-col gap-8  justify-center items-center ">

                        <div class="flex flex-col gap-8 items-center justify-between group">
                            <div class="bg-yellow-600 p-1  mask mask-triangle">
                                <div class="swiper mySwiper1 bg-black rounded-full p-3" style="
                                width: 280px;
                                height: 280px;
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
                                <p class="text-6xl text-yellow-600 font1 tracking-[4px]">Play To Earn</p>
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
        <div class="flex flex-col items-center justify-center  my-32">
            <div class="container mx-auto ">
                <div class="flex flex-col items-center justify-center gap-12">
                    <div class="flex flex-col gap-5 items-center justify-center">
                        <h2 class="text-7xl text-gray-300 font2 tracking-[6px]">
                            <span>Why </span>
                            <span class="text-yellow-600 font1"> Amunra </span>
                            <span>NFT</span>
                         </h2>
                         <h2 class="text-3xl  font2 tracking-[4px] text-yellow-600"> Most Important Of Our Featured </h2>

                        <p class="text-lg  text-gray-300 text-center font2 w-2/3">EACH AMUNRA NFT HAS A UNIQUE SET OF TRAITS AND UNLOCKS VARYING UNIQUE LEVELS OF ACCESS AND PERKS FOR ITS OWNER</p>

                    </div>

                    <div class="grid grid-cols-3 gap-12 w-5/6 bg-zinc-900 p-5 rounded-2xl">
                                <div class=" text-zinc-900 flex flex-col items-center gap-4  rounded-xl p-2
                                    hover:scale-95 transition-all duration-300 cursor-pointer">
                                    <ion-icon name="checkmark-done" class="text-5xl  text-zinc-900 bg-yellow-600 rounded-xl p-1"></ion-icon>
                                    <div class="flex flex-col items-center">
                                        <div class="text-2xl font2 text-yellow-600">Taget Goal</div>
                                        <div class="text-gray-100">
                                            adaad asdasd dasads sdfsdf sdsdf
                                        </div>
                                    </div>
                                </div>
                                <div class=" text-zinc-900 flex flex-col items-center gap-4  rounded-xl p-2
                                hover:scale-95 transition-all duration-300 cursor-pointer">
                                <ion-icon name="checkmark-done" class="text-5xl  text-zinc-900 bg-yellow-600 rounded-xl p-1"></ion-icon>
                                <div class="flex flex-col items-center">
                                    <div class="text-2xl font2 text-yellow-600">Taget Goal</div>
                                    <div class="text-gray-100">
                                        adaad asdasd dasads sdfsdf sdsdf
                                    </div>
                                </div>
                            </div>
                            <div class=" text-zinc-900 flex flex-col items-center gap-4  rounded-xl p-2
                            hover:scale-95 transition-all duration-300 cursor-pointer">
                            <ion-icon name="checkmark-done" class="text-5xl  text-zinc-900 bg-yellow-600 rounded-xl p-1"></ion-icon>
                            <div class="flex flex-col items-center">
                                <div class="text-2xl font2 text-yellow-600">Taget Goal</div>
                                <div class="text-gray-100">
                                    adaad asdasd dasads sdfsdf sdsdf
                                </div>
                            </div>
                        </div>



                                </div>
                    </div>
                </div>
            </div>
        </div>



                                  {{-- level3 --}}
                                  <div class="flex flex-col   relative items-center justify-center  my-32">
                                    <div class="container mx-auto flex flex-col justify-center items-center ">

                                        <div class=" flex flex-col items-center justify-center gap-3 mb-3">
                                            <h2 class="text-7xl text-gray-300 font2 tracking-[6px] text-center">
                                                <span>Mint </span>
                                                <span class="text-yellow-600 font1"> Amunra </span>
                                                <span>NFT</span>
                                             </h2>
                                             <h2 class="text-4xl text-yellow-600 font2 tracking-[6px]"> 10,000 Mintable NFTs</h2>

                                        </div>

                                        <div class="flex w-max p-4 items-center justify-center gap-10 bg-zinc-900/90 rounded-2xl mt-10">

                                            <div class="p-3 flex items-center justify-center">
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
                                                        <h2 class="text-3xl text-yellow-600 font2 tracking-[6px]">  09/09/2022</h2>


                                                    </div>


                                                </div>

                                                <div class="stats shadow bg-zinc-800 text-gray-100">

                                                    <div class="stat place-items-center">
                                                        <div class="stat-title">NFT Collection</div>
                                                        <div class="stat-value text-yellow-600">1</div>
                                                        <div class="text-lg stat-desc text-white">+ 3 At Soon</div>
                                                      </div>

                                                    <div class="stat place-items-center">
                                                      <div class="stat-title">NFT Amount</div>
                                                      <div class="stat-value ">10,000</div>
                                                      <div class="text-lg stat-desc text-white">in one Collection</div>
                                                    </div>

                                                    <div class="stat place-items-center">
                                                      <div class="stat-title">Users Subscriber</div>
                                                      <div class="stat-value text-yellow-600 ">2.2M</div>
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



                                        {{-- level5 --}}
        <div class="flex flex-col items-center justify-center py-32  mt-32 mb-20">
            <div class="container mx-auto ">
                <div class="flex flex-col items-center justify-center gap-12">
                    <div class="flex flex-col gap-5 items-center justify-center">
                        <h2 class="text-7xl text-gray-300 font2 tracking-[6px]">
                            <span class="text-yellow-600 font1"> Amunra </span>
                            <span>RoadMap</span>
                         </h2>
                         <h2 class="text-3xl  font2 tracking-[4px] text-yellow-600"> The Way Of Our Goals / 19lvl </h2>

                    </div>

                    <div class="flex gap-12 w-5/6 bg-zinc-900 p-5 rounded-2xl" x-data="{popup:0}">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper mb-28">
                              <div class="swiper-slide">
                                <div >
                                    <div @click="popup=1" class=" text-zinc-900 flex items-center gap-2  rounded-xl py-2 px-4 bg-gradient-to-r from-yellow-500 to-orange-600
                                    hover:scale-95 transition-all duration-300 cursor-pointer">
                                        <span class="text-4xl  text-white bg-zinc-900 rounded-xl py-2 px-4">1</span>
                                        <div>
                                            <div class="text-xl font2">Taget Goal 1</div>
                                        </div>
                                    </div>

                                </div>
                              </div>
                              <div class="swiper-slide">
                                <div >
                                    <div @click="popup=2" class=" text-zinc-900 flex items-center gap-2  rounded-xl py-2 px-4 bg-gradient-to-r from-yellow-500 to-orange-600
                                    hover:scale-95 transition-all duration-300 cursor-pointer">
                                        <span class="text-4xl  text-white bg-zinc-900 rounded-xl py-2 px-4">2</span>
                                        <div>
                                            <div class="text-xl font2">Taget Goal 2</div>
                                        </div>
                                    </div>

                                </div>
                              </div>
                              <div class="swiper-slide">
                                <div >
                                    <div @click="popup=3" class=" text-zinc-900 flex items-center gap-2  rounded-xl py-2 px-4 bg-gradient-to-r from-yellow-500 to-orange-600
                                    hover:scale-95 transition-all duration-300 cursor-pointer">
                                        <span class="text-4xl  text-white bg-zinc-900 rounded-xl py-2 px-4">3</span>
                                        <div>
                                            <div class="text-xl font2">Taget Goal 3</div>
                                        </div>
                                    </div>

                                </div>
                              </div>
                              <div class="swiper-slide">
                                <div >
                                    <div @click="popup=4" class=" text-zinc-900 flex items-center gap-2  rounded-xl py-2 px-4 bg-gradient-to-r from-yellow-500 to-orange-600
                                    hover:scale-95 transition-all duration-300 cursor-pointer">
                                        <span class="text-4xl  text-white bg-zinc-900 rounded-xl py-2 px-4">4</span>
                                        <div>
                                            <div class="text-xl font2">Taget Goal 4</div>
                                        </div>
                                    </div>

                                </div>
                              </div>
                            </div>


                            <div class="swiper-scrollbar bg-red-500" style="height: 20px!important"></div>
                          </div>


                        {{-- 1 --}}
                        <div x-show="popup==1" x-transition class="fixed top-0 left-0 w-screen h-screen bg-black/80 z-50 flex justify-center items-center">
                            <div class="bg-gray-100 py-5 px-8 rounded-2xl w-2/4 flex flex-col gap-3">
                                <div class="flex justify-between items-center">
                                    <div class="text-2xl font2">Taget Goal 1</div>
                                    <ion-icon @click="popup=0" name="close-outline" class="text-4xl cursor-pointer"></ion-icon>
                                </div>
                                <hr>
                                <p class="text-lg">dsfsdfsdfsf sdf sdf sf sfs f</p>
                            </div>
                        </div>

                        {{-- 2 --}}
                        <div x-show="popup==2" x-transition class="fixed top-0 left-0 w-screen h-screen bg-black/80 z-50 flex justify-center items-center">
                            <div class="bg-gray-100 py-5 px-8 rounded-2xl w-2/4 flex flex-col gap-3">
                                <div class="flex justify-between items-center">
                                    <div class="text-2xl font2">Taget Goal 2</div>
                                    <ion-icon @click="popup=0" name="close-outline" class="text-4xl cursor-pointer"></ion-icon>
                                </div>
                                <hr>
                                <p class="text-lg">dsfsdfsdfsf sdf sdf sf sfs f</p>
                            </div>
                        </div>


                        {{-- 3 --}}
                        <div x-show="popup==3" x-transition class="fixed top-0 left-0 w-screen h-screen bg-black/80 z-50 flex justify-center items-center">
                            <div class="bg-gray-100 py-5 px-8 rounded-2xl w-2/4 flex flex-col gap-3">
                                <div class="flex justify-between items-center">
                                    <div class="text-2xl font2">Taget Goal 3</div>
                                    <ion-icon @click="popup=0" name="close-outline" class="text-4xl cursor-pointer"></ion-icon>
                                </div>
                                <hr>
                                <p class="text-lg">dsfsdfsdfsf sdf sdf sf sfs f</p>
                            </div>
                        </div>


                        {{-- 4 --}}
                        <div x-show="popup==4" x-transition class="fixed top-0 left-0 w-screen h-screen bg-black/80 z-50 flex justify-center items-center">
                            <div class="bg-gray-100 py-5 px-8 rounded-2xl w-2/4 flex flex-col gap-3">
                                <div class="flex justify-between items-center">
                                    <div class="text-2xl font2">Taget Goal 4</div>
                                    <ion-icon @click="popup=0" name="close-outline" class="text-4xl cursor-pointer"></ion-icon>
                                </div>
                                <hr>
                                <p class="text-lg">dsfsdfsdfsf sdf sdf sf sfs f</p>
                            </div>
                        </div>

                          <!-- Swiper JS -->
                          <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

                          <!-- Initialize Swiper -->
                          <script>
                            var swiper = new Swiper(".mySwiper", {
                              slidesPerView: 4,
                              spaceBetween: 30,
                              slidesPerGroup: 4,
                              loop: true,
                              loopFillGroupWithBlank: true,
                              scrollbar: {
                                el: ".swiper-scrollbar",

                                },


                            });
                          </script>





                                </div>
                    </div>
                </div>
            </div>
        </div>




                     {{-- level4 --}}
        <div class="flex flex-col items-center justify-center  my-20 relative">
            <div class="text-[400px] font1 text-gray-100/5 absolute z-0">
                AMUNRA
            </div>

            <div class="container mx-auto z-10 ">

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
                                <div class="flex w-full justify-center items-center my-5 z-10">
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



