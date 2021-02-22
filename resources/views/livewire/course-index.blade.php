<div>
    {{-- Because she competes with no one, no one can compete with her. --}}

    {{-- Barra de navegacion--}}
    <div class="bg-gray-200 py-4 mb-8">
        <div class="max-w-7xl mx-auto px4 sm:px6 lg:px-8 flex">

            <!-- Botón Todos los cursos -->
            <button class="bg-white shadow h-12 px-4 rounded-lg text-gray-600 mr-4 focus:outline-none" wire:click="resetFilters()">
                <i class="fas fa-archway text-xs mr-2"></i>
                Todos los cursos
            </button>
            <!-- // Botón Todos los cursos-->

            <!-- Dropdown Categorias -->
            <div class="relative" x-data="{open: false}">
                <button x-on:click="open=!open"
                        class="block overflow-hidden focus:outline-none bg-white shadow h-12 px-4 rounded-lg text-gray-600 mr-4">
                    <i class="fas fa-tags text-xs mr-2"></i>
                    Categorias
                    <i class="fas fa-angle-down text-xs ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" x-show="open"
                     x-on:click.away="open = false">

                    @foreach($categories as $category)
                        <a class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-900
                         rounded hover:bg-blue-500 hover:text-white" wire:click="$set('category_id',{{$category->id}})" x-on:click="open=false">
                            {{$category->name}}
                        </a>
                    @endforeach

                </div>
                <!-- // Dropdown Body -->
            </div>
            <!-- // Dropdown Categorias-->

            <!-- Dropdown Niveles -->
            <div class="relative" x-data="{open: false}">
                <button x-on:click="open=!open"
                        class="block overflow-hidden focus:outline-none bg-white shadow h-12 px-4 rounded-lg text-gray-600 mr-4">
                    <i class="fas fa-tags text-xs mr-2"></i>
                    Niveles
                    <i class="fas fa-angle-down text-xs ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" x-show="open"
                     x-on:click.away="open = false">
                    @foreach ($levels as $level)
                        <a class="cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-900
                         rounded hover:bg-blue-500 hover:text-white" wire:click="$set('level_id',{{$level->id}})" x-on:click="open=false">
                            {{$level->name}}
                        </a>
                    @endforeach


                </div>
                <!-- // Dropdown Body -->
            </div>
            <!-- // Dropdown Niveles-->


        </div>

    </div>

    {{-- Grilla de cursos--}}
    <div
        class="max-w-7xl mx-auto px4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">

        @foreach($courses as $course)
            <x-course-card :course="$course"/>
        @endforeach
    </div>

    {{-- Paginacion de cursos--}}
    <div class="max-w-7xl mx-auto px4 sm:px6 lg:px-8 mt-4">
        {{$courses->links()}}
    </div>

</div>
