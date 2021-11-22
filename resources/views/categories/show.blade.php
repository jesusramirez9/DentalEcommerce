<x-app-layout>
    <div>
        <div class="relative h-contacto bg-center bg-cover w-full object-cover object-center"
            style="background-image: url('{{ asset('dental/nosotros/producto.jpg') }}')">
            <div class="absolute bg-black bg-opacity-30 w-full h-full">

            </div>
            <div
                class="mt-8 absolute text-center max-w-full mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-36 text-white font-bold text-2xl lg:text-4xl lr">
                <p class="m-0 shdot-text text-2xl">Tu mejor experiencia dental con nuestros productos</p>
                <p class="m-0 shdot-text font-black text-2xl lg:text-6xl xl:text-8xl">Dentales</p>
                
            </div>
        </div>
    </div>
    <div class="container  pt-6 md:pt-14 pb-14">
        {{-- <figure class="mb-4">
            <img class="w-full h-80 object-cover object-center"  src="{{Storage::url($category->image)}}" alt="">
        </figure> --}}

        @livewire('category-filter', ['category' => $category])
    </div>

</x-app-layout>
