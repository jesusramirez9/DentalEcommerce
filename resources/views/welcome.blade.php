<x-app-layout>

    {{-- <div class="container py-8">
        @foreach ($categories as $category)
        
            <section class="mb-6">
                <div class="flex items-center mb-2">
                    <h1 class="text-lg uppercase font-semibold text-gray-700">
                        {{$category->name}}
                    </h1>

                    <a href="{{route('categories.show', $category)}}" class="text-orange-500 hover:text-orange-400 hover:underline ml-2 font-semibold">Ver más</a>

                </div>

                @livewire('category-products', ['category' => $category])
            </section>

        @endforeach
    </div> --}}
    @push('link')
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    @endpush
    <div class="relative h-contacto bg-center bg-cover w-full object-cover object-center"
        style="background-image: url('{{ asset('dental/home/slider.jpg') }}')">
        <div class="absolute bg-black bg-opacity-30 w-full h-full">

        </div>
        <div
            class="absolute text-left max-w-full mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-36 xl:px-32 text-white   md:lr">

            <p class="m-0 shdot-text text-xl md:text-xl xl:text-3xl font-bold">Especialistas internacionales</p>
            <p class="m-0 shdot-text text-xl md:text-xl xl:text-3xl">El mejor equipo de profesionales <br>especializados.
            </p>
            </p>
            <div class="md:flex text-base font-normal mt-6">
                <a href=""
                    class="bg-purple-600 text-white px-8 border-2 py-3 rounded-3xl font-medium border-purple-600 hover:border-purple-600 hover:bg-transparent hover:text-purple-600 transition-transform">Más
                    detalles</a>
                <a href=""
                    class="inline-block mt-8 md:mt-0 bg-transparent text-white px-8 border-2 py-3 rounded-3xl font-medium md:ml-8 border-white hover:bg-yellow-50 hover:text-black ">Reservar
                    Cita</a>
            </div>
        </div>
    </div>



    <div class="container mt-20">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center">
            <div class="text-center md:text-left">
                <p class="text-gray-700 font-medium">Expertos en tratamientos</p>
                <p class="pt-4 font-black text-2xl">Nuestros <span class="text-purple-700">Tratamientos</span></p>
            </div>
            <div class="text-center md:text-right mt-12 md:mt-0">
                <div class="md:text-right">
                    <img src="{{ asset('dental/home/too.png') }}" class="inline-block" alt="">
                </div>
            </div>
        </div>

        <div class="mt-12 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4 lg:gap-4">
            <div>
                <img src="{{ asset('dental/home/a.png') }}" class="w-full object-cover object-center" alt="">
                <div
                    class="border-2 border-t-0 border-gray-400 border-opacity-20 py-6 px-4 hover:bg-purple-600 hover:text-white">
                    <p class="font-medium">Blanqueamiento</p>
                    <p class="font-medium  mt-3 hover:text-white text-sm">Tratamiento 01</p>
                </div>
            </div>
            <div>
                <img src="{{ asset('dental/home/b.png') }}" class="w-full object-cover object-center" alt="">
                <div
                    class="border-2 border-t-0 border-gray-400 border-opacity-20 py-6 px-4 hover:bg-purple-600 hover:text-white">
                    <p class="font-medium">Carillas dental</p>
                    <p class="font-medium  mt-3 hover:text-white text-sm">Tratamiento 02</p>
                </div>
            </div>
            <div>
                <img src="{{ asset('dental/home/c.png') }}" class="w-full object-cover object-center" alt="">
                <div
                    class="border-2 border-t-0 border-gray-400 border-opacity-20 py-6 px-4 hover:bg-purple-600 hover:text-white">
                    <p class="font-medium">Bonding dental</p>
                    <p class="font-medium  mt-3 hover:text-white text-sm">Tratamiento 03</p>
                </div>
            </div>
            <div>
                <img src="{{ asset('dental/home/d.png') }}" class="w-full object-cover object-center" alt="">
                <div
                    class="border-2 border-t-0 border-gray-400 border-opacity-20 py-6 px-4 hover:bg-purple-600 hover:text-white">
                    <p class="font-medium">Coronas </p>
                    <p class="font-medium  mt-3 hover:text-white text-sm">Tratamiento 04</p>
                </div>
            </div>
            <div class="xl:mt-10">
                <img src="{{ asset('dental/home/e.png') }}" class="w-full object-cover object-center" alt="">
                <div
                    class="border-2 border-t-0 border-gray-400 border-opacity-20 py-6 px-4 hover:bg-purple-600 hover:text-white">
                    <p class="font-medium">Endodoncia laser</p>
                    <p class="font-medium  mt-3 hover:text-white text-sm">Tratamiento 05</p>
                </div>
            </div>
            <div class="xl:mt-10">
                <img src="{{ asset('dental/home/f.png') }}" class="w-full object-cover object-center" alt="">
                <div
                    class="border-2 border-t-0 border-gray-400 border-opacity-20 py-6 px-4 hover:bg-purple-600 hover:text-white">
                    <p class="font-medium">Implantes</p>
                    <p class="font-medium  mt-3 hover:text-white text-sm">Tratamiento 06</p>
                </div>
            </div>
            <div class="xl:mt-10">
                <img src="{{ asset('dental/home/g.png') }}" class="w-full object-cover object-center" alt="">
                <div
                    class="border-2 border-t-0 border-gray-400 border-opacity-20 py-6 px-4 hover:bg-purple-600 hover:text-white">
                    <p class="font-medium">Incrustaciones</p>
                    <p class="font-medium  mt-3 hover:text-white text-sm">Tratamiento 07</p>
                </div>
            </div>
            <div class="xl:mt-10">
                <img src="{{ asset('dental/home/h.png') }}" class="w-full object-cover object-center" alt="">
                <div
                    class="border-2 border-t-0 border-gray-400 border-opacity-20 py-6 px-4 hover:bg-purple-600 hover:text-white">
                    <p class="font-medium">Brackets</p>
                    <p class="font-medium  mt-3 hover:text-white text-sm">Tratamiento 08</p>
                </div>
            </div>
        </div>
    </div>

    <div class="relative h-contacto bg-center bg-cover w-full object-cover object-center mt-32"
        style="background-image: url('{{ asset('dental/home/slider2.jpg') }}')">

        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center">
                <div class=" text-left  px-4 sm:px-6 lg:px-8 py-8  text-white   md:lr">
                    <p class="m-0 shdot-text text-xl md:text-xl xl:text-2xl mb-2">Quienes Somos
                    </p>
                    <p class="m-0 shdot-text text-xl md:text-xl xl:text-3xl font-bold mb-6">Somos Dental Carry</p>

                    <p class="text-justify mb-6">
                        Con más de 20 años de permanencia, el Centro Odontológico San Pablo ofrece una renovada
                        infraestructura
                        que nos permite brindar una atención de excelente calidad, garantizando un tratamiento integral
                        a niños
                        y adultos, que son atendidos por un grupo de odontólogos prestigiosos y profesionales con alta
                        especialización odontológica.
                    </p>
                    <p class="text-justify">
                        Pensando siempre en el bienestar y comodidad de nuestros pacientes, estamos afiliados a la
                        principales
                        compañias de seguros, empresas prestadoras de salud y autoseguros. Y lo más importante, es que
                        somos
                        parte del Grupo San Pablo, la red privada de salud más grande del país.
                    </p>

                </div>
                <div class=" lg:mt-16">
                    <div class="">
                        <img src="{{ asset('dental/home/nosss.png') }}" class="inline-block " alt="">

                    </div>

                </div>
            </div>
        </div>



    </div>

    <div class="container mt-32 md:mt-20 lg:mt-52 mb-20">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center">
            <div class="text-center md:text-left">
                <p class="text-gray-700 font-medium">Equipo de especialistas</p>
                <p class="pt-4 font-black text-2xl">Nuestros <span class="text-purple-700">Odontólogos</span></p>
            </div>
            <div class="text-center md:text-right mt-12 md:mt-0">
                <div class="md:text-right">
                    <img src="{{ asset('dental/home/too.png') }}" class="inline-block" alt="">
                </div>
            </div>
        </div>

        <div class="mt-20 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4 lg:gap-4">
            <div>
                <img src="{{ asset('dental/home/doc1.png') }}" class="w-full" alt="">
                <div class="border-2 border-t-0 border-gray-400 border-opacity-20 py-6 px-4 ">
                    <p class="font-medium">Dr. Erick Sihuay</p>
                    <p class="font-medium text-xs text-purple-700 mt-3 ">Cirujano Dentista</p>
                    <p class="font-medium text-sm text-gray-400 mt-6">Odontología Estética</p>
                </div>
            </div>
            <div>
                <img src="{{ asset('dental/home/doc2.png') }}" class="w-full" alt="">
                <div class="border-2 border-t-0 border-gray-400 border-opacity-20 py-6 px-4">
                    <p class="font-medium">Dr. Michael Carrión</p>
                    <p class="font-medium text-xs text-purple-700 mt-3 ">Cirujano Dentista</p>
                    <p class="font-medium text-sm text-gray-400 mt-6">Odontología Estética</p>
                </div>
            </div>
            <div>
                <img src="{{ asset('dental/home/doc3.png') }}" class="w-full" alt="">
                <div class="border-2 border-t-0 border-gray-400 border-opacity-20 py-6 px-4">
                    <p class="font-medium">Dr. Carlos Vasquez</p>
                    <p class="font-medium text-xs text-purple-700 mt-3 ">Cirujano Dentista</p>
                    <p class="font-medium text-sm text-gray-400 mt-6">Odontología Estética</p>
                </div>
            </div>
            <div>
                <img src="{{ asset('dental/home/doc4.png') }}" class="w-full" alt="">
                <div class="border-2 border-t-0 border-gray-400 border-opacity-20 py-6 px-4">
                    <p class="font-medium">Dr. Roberto Valverde</p>
                    <p class="font-medium text-xs text-purple-700 mt-3 ">Cirujano Dentista</p>
                    <p class="font-medium text-sm text-gray-400 mt-6">Odontología Estética</p>
                </div>
            </div>
        </div>
    </div>
    <div class="relative h-contacto bg-center bg-cover w-full object-cover object-center"
        style="background-image: url('{{ asset('dental/especialidades/slider.png') }}')">
        <div class="absolute bg-purple-700 bg-opacity-60 w-full h-full">

        </div>
        <div
            class="mt-8 absolute text-center max-w-7xl lg:max-w-full mx-auto px-4 sm:px-6 lg:px-8 pt-12 lg:pt-20 text-white lr">
            <p class="m-0 shdot-text text-2xl">10 años de experiencia</p>
            <p class="m-0 mt-6 md:mt-1 shdot-text font-black text-2xl lg:text-3xl xl:text-4xl">Estadisticas de la
                clínica</p>
            <div class="max-w-5xl md:max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-5 gap-2 mt-16">
                <div class="w-full h-52 bg-purple-300 bg-opacity-60 py-8 rounded-md">
                    <div>
                        <img src="{{ asset('dental/home/calidad.svg') }}" alt="" class="inline-block">
                    </div>
                    <p class="py-4 text-xl font-semibold">100%</p>
                    <p>Calidad</p>
                </div>
                <div class="w-full h-52 bg-purple-300 bg-opacity-60 py-8 rounded-md hidden md:block">
                    <div>
                        <img src="{{ asset('dental/home/pacientes.svg') }}" alt="" class="inline-block">
                    </div>
                    <p class="py-4 text-xl font-semibold">2480</p>
                    <p>Pacientes al año</p>
                </div>
                <div class="w-full h-52 bg-purple-300 bg-opacity-60 py-8 rounded-md hidden md:block">
                    <div>
                        <img src="{{ asset('dental/home/colaboradores.svg') }}" alt="" class="inline-block">
                    </div>
                    <p class="py-4 text-xl font-semibold">26</p>
                    <p>Colaboradores</p>
                </div>
                <div class="w-full h-52 bg-purple-300 bg-opacity-60 py-8 rounded-md hidden md:block">
                    <div>
                        <img src="{{ asset('dental/home/anios.svg') }}" alt="" class="inline-block">
                    </div>
                    <p class="py-4 text-xl font-semibold">16</p>
                    <p>Años de experiencia</p>
                </div>
                <div class="w-full h-52 bg-purple-300 bg-opacity-60 py-8 rounded-md hidden md:block">
                    <div>
                        <img src="{{ asset('dental/home/happy.svg') }}" alt="" class="inline-block">
                    </div>
                    <p class="py-4 text-xl font-semibold">7856</p>
                    <p>Sonrisas de éxito</p>
                </div>
            </div>
        </div>
    </div>






    @push('script')

        <script>
            Livewire.on('glider', function(id) {

                new Glider(document.querySelector('.glider-' + id), {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    draggable: true,
                    dots: '.glider-' + id + '~ .dots',
                    arrows: {
                        prev: '.glider-' + id + '~ .glider-prev',
                        next: '.glider-' + id + '~ .glider-next'
                    },
                    responsive: [{
                            breakpoint: 640,
                            settings: {
                                slidesToShow: 2.5,
                                slidesToScroll: 2,
                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 3.5,
                                slidesToScroll: 3,
                            }
                        },

                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 4.5,
                                slidesToScroll: 4,
                            }
                        },

                        {
                            breakpoint: 1280,
                            settings: {
                                slidesToShow: 5.5,
                                slidesToScroll: 5,
                            }
                        },
                    ]
                });

            });
        </script>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script>
            $('.cardss').slick({
                prevArrow: '.arrow_prev',
                nextArrow: '.arrow_next',
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                Margin: '50px',
                autoplaySpeed: 5000,
                dotsClass: 'slick-dots',
                infinite: true,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,

                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        </script>
        <script>
            $('.catalogslide').slick({
                prevArrow: '.arrow_prev1',
                nextArrow: '.arrow_next1',
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                Margin: '50px',
                autoplaySpeed: 5000,
                dotsClass: 'slick-dots',
                infinite: true,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,

                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        </script>
    @endpush

</x-app-layout>
