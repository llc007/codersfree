<x-app-layout>

    {{--    Para poner una imagen de fondo y encima contenido se debe usar el estilo background-image--}}
    <section class="bg-cover" style="background-image: url({{asset('img/home/pizarra-notebook.jpg')}})">
        {{--Acomodar texto class="max-w-7xl mx-auto px4 sm:px6 lg:px-8"--}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">Domina la tecnología web con Coders Free</h1>
                <p class="text-white text-lg mt-2 mb-4">En Coders free encontrarás cursos, manuales y articulos que te
                    ayudarán a convertirte en un profesional del desarrollo web.</p>

                @livewire('search')


            </div>
        </div>
    </section>

    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">CONTENIDO</h1>

        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover"
                         src="{{asset('img/home/architecture-5705042_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Cursos y proyectos</h1>
                </header>
                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad
                    aut corporis delectus
                    doloribus esse exercitationem.</p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover"
                         src="{{asset('img/home/english-cocker-spaniel-5937757_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Manual de Laravel</h1>
                </header>
                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad
                    aut corporis delectus
                    doloribus esse exercitationem.</p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/pattern-5649403_640.jpg')}}"
                         alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Blog</h1>
                </header>
                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad
                    aut corporis delectus
                    doloribus esse exercitationem.</p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/team-5614157_640.png')}}"
                         alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Desarrollo web</h1>
                </header>
                <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad
                    aut corporis delectus
                    doloribus esse exercitationem.</p>
            </article>

        </div>

    </section>

    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">¿No sabes qué curso llevar?</h1>
        <p class="text-center text-white">Dirígete al catálogo de cursos y filtralos por categoría o nivel.</p>

        <div class="flex justify-center mt-4">
            <a href="{{route('courses.index')}}"
               class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Catálogo de cursos
            </a>
        </div>


    </section>

    <section class="my-24">
        <h1 class="text-center text-3xl text-gray-600">ÚLTIMOS CURSOS</h1>
        <p class="text-center text-gray-500 text-sm mb-6">Trabajo duro para seguir subiendo cursos</p>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">

            @foreach($courses as $course)
                <x-course-card :course="$course"/>
            @endforeach
        </div>

    </section>

</x-app-layout>
