<x-app-layout>
    <section class="bg-cover" style="background-image: url({{asset('img/courses/laptop-2838917_1920.jpg')}})">

        {{--Acomodar texto class="max-w-7xl mx-auto px4 sm:px6 lg:px-8"--}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">Los mejores cursos de programación gratis y en español!!</h1>
                <p class="text-white text-lg mt-2 mb-4">Si buscas profundizar tus conocimientos, has llegado al lugar adecuado.
                    Encuentra cursos utilizando el buscador.</p>

                <!-- component -->
                <!-- This is an example component -->
                @livewire('search')
            </div>
        </div>
    </section>

    @livewire('course-index')
</x-app-layout>
