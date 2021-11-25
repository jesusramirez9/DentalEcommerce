<div>
    <div class=" w-full top-0 hidden lg:block">
        <div class="lg:px-10 xl:px-30 flex items-center h-12 justify-between text-xs xl:text-sm">
            <div>
                <p> <img src="{{asset('dental/home/hora.png')}}" class="inline-block" alt="">  Horario de trabajo <span class="font-medium">Lun - Vie 8:00 - 18:00</span> </p>
            </div>
            <div>
                
                <p> <img src="{{asset('dental/home/telefono.png')}}" class="inline-block" alt=""> Teléfono <span class="font-medium">0800 2546 781</span> </p>
            </div>
            <div>
                
                <p> <img src="{{asset('dental/home/ubi.png')}}" class="inline-block" alt=""> Visítanos en <span class="font-medium">Av. Pardo 180 Miraflores</span> </p>
            </div>
          
            <div class="flex items-center">
                <a href="" class="md:mx-6"><img  src="{{ asset('dental/home/facebook.png') }}"
                        alt=""></a>
                <a href="" class=""><img  src="{{ asset('dental/home/instagram.png') }}">
            </div>
        </div>
    </div>
     <header class="md:border-t md:border-gray-400 md:border-opacity-40 w-full py-4 top-0" style="z-index: 900" x-data="dropdown()">
        <div class="container flex items-center h-16 justify-between md:justify-center">
            <a :class="{'bg-opacity-100 text-orange-500' : open}" x-on:click="show()"
                class="flex flex-col items-center justify-center md:hidden order-last md:order-first px-2 md:px-4 bg-gray-500 bg-opacity-25 text-white cursor-pointer font-semibold h-2/3">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>

                {{-- <span class="text-xs xl:text-sm hidden md:block">Categorías</span> --}}
            </a>
            <a href="/">
                <img src="{{asset('dental/home/logo.png')}}" class="hidden lg:block" alt="">
            </a>
            
            <div class="relative  hidden md:block" >
                <a  href="/"
                    class="flex flex-row items-center w-full px-4 py-2 mt-2 text-xs xl:text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 xl:ml-24 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline {{ request()->is('/') ? 'active  border-purple-700  bg-purple-600 bg-opacity-20' : '' }}">
                    <span>Inicio</span>
                </a>   
            </div>
           
            <div class="relative hidden lg:block" >
                <a href="{{route('conocenos')}}"
                    class="flex flex-row items-center w-full px-4 py-2 mt-2 text-xs xl:text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline {{ request()->is('conocenos') ? 'active  border-purple-700  bg-purple-600 bg-opacity-20' : '' }}">
                    <span>Nosotros</span>
                </a>   
            </div>
            <div  class="relative hidden md:block" >
                <a href="{{route('especialidad')}}"
                    class="flex flex-row items-center w-full px-2 py-2 mt-2 text-xs  xl:text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline {{ request()->is('especialidad') ? 'active  border-purple-700  bg-purple-600 bg-opacity-20' : '' }}">
                    <span>Especialidades</span>
                 
                </a>
         
            </div>

            <div  class="relative hidden md:block">
                <a href="{{route('tratamiento')}}"
                    class="flex flex-row items-center w-full px-2 py-2 mt-2 text-xs xl:text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline {{ request()->is('tratamiento') ? 'active  border-purple-700  bg-purple-600 bg-opacity-20' : '' }}">
                    <span>Tratamientos</span>                   
                </a>
            </div>

            <div  class="relative hidden md:block">
                <a href="/categories/dental"
                    class="flex flex-row items-center w-full px-2 py-2 mt-2 text-xs xl:text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline {{ request()->is('categories*','products*','orders*','shopping-cart*') ? 'active  border-purple-700  bg-purple-600 bg-opacity-20' : '' }}">
                    <span>Productos</span>                   
                </a>
            </div>

            <a href="{{ route('contacto') }}"
                class=" xl:mx-6 text-white text-xs xl:text-sm bg-green-500 px-2 py-1 xl:px-6 rounded-md hidden md:block  {{ request()->is('contactanos') ? 'active linktran  bg-green-500 px-4 py-0.5 rounded-xl ' : '' }}">
                Reservar Cita
            </a>
          

            <div class="mx-4 relative hidden md:block">
                @auth
               
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">

                            <button
                                class="flex text-xs xl:text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                <img class="h-8 w-8 rounded-full object-cover"
                                    src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </button>

                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>

                            <x-jet-dropdown-link href="{{ route('orders.index') }}">
                                Mis ordenes
                            </x-jet-dropdown-link>
                           
                            <x-jet-dropdown-link href="{{ route('messages.index') }}">
                               Notificaciones
                            </x-jet-dropdown-link>
                          
                            @role('admin')
                                <x-jet-dropdown-link href="{{ route('admin.index') }}">
                                    Administrador
                                </x-jet-dropdown-link>
                                <x-jet-dropdown-link href="{{ route('admin.messages.index') }}">
                                    Notificaciones
                                </x-jet-dropdown-link>
                            @endrole

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                        this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                   
                @else

                    <x-jet-dropdown align="right" width="48">

                        <x-slot name="trigger">
                            <i class="fas fa-user-circle text-gray-700 text-3xl cursor-pointer"></i>
                        </x-slot>

                        <x-slot name="content">
                            <x-jet-dropdown-link href="{{ route('login') }}">
                                {{ __('Login') }}
                            </x-jet-dropdown-link>

                            <x-jet-dropdown-link href="{{ route('register') }}">
                                {{ __('Register') }}
                            </x-jet-dropdown-link>
                        </x-slot>

                    </x-jet-dropdown>

                @endauth
            </div>

            <div class="hidden md:block">
                @livewire('dropdown-cart')
            </div>
      


        </div>

        <nav id="navigation-menu" :class="{'block': open, 'hidden': !open}"
            class="bg-trueGray-700 mt-4 z-10 bg-opacity-25 w-full absolute hidden">

            {{-- Menu computadora --}}
            {{-- <div class="container h-full hidden md:block">
                <div
                    x-on:click.away="close()"
                    class="grid grid-cols-4 h-full relative">
                    <ul class="bg-white">
                        @foreach ($categories as $category)
                            <li class="navigation-link text-trueGray-500 hover:bg-orange-500 hover:text-white">
                                <a href="{{route('categories.show', $category)}}" class="py-2 px-4 text-xs xl:text-sm flex items-center">
    
                                    <span class="flex justify-center w-9">
                                        {!!$category->icon!!}
                                    </span>
    
                                    {{$category->name}}
                                </a>
    
    
                                <div class="navigation-submenu bg-gray-100 absolute w-3/4 h-full top-0 right-0 hidden">
                                    <x-navigation-subcategories :category="$category" />
                                </div>
    
                            </li>
                        @endforeach
                    </ul>
    
                    <div class="col-span-3 bg-gray-100">
                        <x-navigation-subcategories :category="$categories->first()" />
                    </div>
                </div>
            </div> --}}

            {{-- menu mobil --}}
            <div class="bg-white h-2/5 overflow-y-auto">

                <div class="container bg-gray-200 py-3 mb-2">
                    @livewire('search')
                </div>

                <ul>
                    @foreach ($categories as $category)
                        {{-- <li class="text-trueGray-500 hover:bg-orange-500 hover:text-white">
                            <a class="py-2 px-4 text-xs xl:text-sm flex items-center">
    
                                <span class="flex justify-center w-9">
                                    {!! $category->icon !!}
                                </span>
    
                                {{ $category->name }}
                            </a>
                        </li> --}}
                    @endforeach
                    {{-- <li class="text-trueGray-500 hover:bg-orange-500 hover:text-white">
    
                        <a href="{{ route('conocenos') }}" class="py-2 px-4 text-xs xl:text-sm flex items-center">
                            <span class="flex justify-center w-9">
                                {!! $category->icon !!}
                            </span>
                            Bienvenido
                        </a>
                    </li> --}}
                    <li>
                        <a href="/"
                            class="py-2 px-4 text-xs xl:text-sm flex items-center {{ request()->is('/') ? 'active text-yellow-500 underline' : '' }}">
                            <span class="flex justify-center w-9">
                                <i class="fas fa-tooth"></i>
                            </span>
                            Inicio
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('conocenos') }}"
                            class="py-2 px-4 text-xs xl:text-sm flex items-center {{ request()->is('conocenos') ? 'active text-yellow-500 underline' : '' }}">
                            <span class="flex justify-center w-9">
                                <i class="fas fa-tooth"></i>
                            </span>
                            Nosotros
                        </a>
                    </li>
                    <li>
                        <a href="{{route('especialidad')}}}}"
                            class="py-2 px-4 text-xs xl:text-sm flex items-center {{ request()->is('especialidad') ? 'active text-yellow-500 underline' : '' }}">
                            <span class="flex justify-center w-9">
                                <i class="fas fa-tooth"></i>
                            </span>
                            Especialidades
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('tratamiento') }}"
                            class="py-2 px-4 text-xs xl:text-sm flex items-center {{ request()->is('tratamiento') ? 'active text-yellow-500 underline' : '' }}">
                            <span class="flex justify-center w-9">
                                <i class="fas fa-tooth"></i>
                            </span>
                            Tratamientos
                        </a>
                    </li>
                    <li>
                        <a href="/categories/dental"
                            class="py-2 px-4 text-xs xl:text-sm flex items-center {{ request()->is('categories/*','products*','orders*','shopping-cart*') ? 'active text-yellow-500 underline' : '' }}">
                            <span class="flex justify-center w-9">
                                <i class="fas fa-tooth"></i>
                            </span>
                            Productos
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contacto') }}" class="py-2 px-4 text-xs xl:text-sm flex items-center {{ request()->is('contacto') ? 'active text-yellow-500 underline' : '' }}">
                            <span class="flex justify-center w-9">
                                <i class="fas fa-tooth"></i>
                            </span>
                            Contáctenos
                        </a>
                    </li>

                </ul>
                {{-- <p class="text-trueGray-500 px-6 my-2">USUARIOS</p>
    
                @livewire('cart-mobil')
    
                @auth
                    <a href="{{ route('profile.show') }}"
                        class="py-2 px-4 text-xs xl:text-sm flex items-center text-trueGray-500 hover:bg-orange-500 hover:text-white">
    
                        <span class="flex justify-center w-9">
                            <i class="far fa-address-card"></i>
                        </span>
    
                        Perfil
                    </a>
    
                    <a href="" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit() "
                        class="py-2 px-4 text-xs xl:text-sm flex items-center text-trueGray-500 hover:bg-orange-500 hover:text-white">
    
                        <span class="flex justify-center w-9">
                            <i class="fas fa-sign-out-alt"></i>
                        </span>
    
                        Cerrar sesión
                    </a>
    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
    
                @else
                    <a href="{{ route('login') }}"
                        class="py-2 px-4 text-xs xl:text-sm flex items-center text-trueGray-500 hover:bg-orange-500 hover:text-white">
    
                        <span class="flex justify-center w-9">
                            <i class="fas fa-user-circle"></i>
                        </span>
    
                        Iniciar sesión
                    </a>
    
                    <a href="{{ route('register') }}"
                        class="py-2 px-4 text-xs xl:text-sm flex items-center text-trueGray-500 hover:bg-orange-500 hover:text-white">
    
                        <span class="flex justify-center w-9">
                            <i class="fas fa-fingerprint"></i>
                        </span>
    
                        registrate
                    </a>
                @endauth --}}
            </div>
        </nav>
    </header>
    {{-- <div class="head_movilx">
        <div class="flex justify-center">
            <a class="___class_+?46___" href="/">
                <img src="{{ asset('images/inicio/seccion1/Logo.png') }}" class="block h-9" alt="">
            </a>
        </div>
        <div class="flex justify-center">
            <ul class="mt-4 link_vrd flex">

                <li class="h-opcs-li list-group-item nav-item-2"> <a href=""
                        class="blog_nzv {{ request()->is('/') ? 'active' : '' }}">Inicio</a></li>
                <li class="h-opcs-li2 list-group-item nav-item-2"> <a href="/categories/dental"
                        class="blog_nzv space_link  {{ request()->is('categories/moda') ? 'active' : '' }}">Catalogo</a>
                </li>
                <li class="h-opcs-li3 list-group-item nav-item-2"><a href=""
                        class=" blog_nzv {{ request()->is('blog') ? 'active' : '' }}">Blog</a></li>

            </ul>
        </div>
    </div> --}}
    @push('script')
        <script type="text/javascript">
          
            window.addEventListener("scroll", function(){
			var header = document.querySelector("header");
			header.classList.toggle("abajo",window.scrollY>0);
		})
        </script>
    @endpush
</div>
