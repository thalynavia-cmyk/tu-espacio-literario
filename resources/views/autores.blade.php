@extends('layouts.app')

@section('content')
<div class="bg-[#FDFBF7] min-h-screen py-12">
    <div class="max-w-7xl mx-auto px-4">
        <!-- Encabezado de la Sección -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-serif font-bold text-[#2C3E50]">Nuestros Autores</h1>
            <p class="text-gray-600 mt-2 italic">Las mentes brillantes detrás de nuestras historias</p>
            <div class="w-24 h-1 bg-amber-500 mx-auto mt-4"></div>
        </div>

        <!-- Grid de Autores -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <!-- Autor 1 -->
            <div class="bg-white p-6 rounded-xl shadow-md border-l-4 border-amber-500 hover:shadow-lg transition">
                <h3 class="text-xl font-bold text-[#2C3E50]">Gabriel García Márquez</h3>
                <p class="text-amber-700 font-semibold text-sm uppercase tracking-wider">Realismo Mágico</p>
                <p class="text-gray-600 mt-2 text-sm">Obra cumbre: Cien años de soledad.</p>
            </div>

            <!-- Autor 2 -->
            <div class="bg-white p-6 rounded-xl shadow-md border-l-4 border-amber-500 hover:shadow-lg transition">
                <h3 class="text-xl font-bold text-[#2C3E50]">Isabel Allende</h3>
                <p class="text-amber-700 font-semibold text-sm uppercase tracking-wider">Ficción Contemporánea</p>
                <p class="text-gray-600 mt-2 text-sm">Obra cumbre: La casa de los espíritus.</p>
            </div>

            <!-- Autor 3 -->
            <div class="bg-white p-6 rounded-xl shadow-md border-l-4 border-amber-500 hover:shadow-lg transition">
                <h3 class="text-xl font-bold text-[#2C3E50]">Mario Vargas Llosa</h3>
                <p class="text-amber-700 font-semibold text-sm uppercase tracking-wider">Literatura Moderna</p>
                <p class="text-gray-600 mt-2 text-sm">Obra cumbre: La ciudad y los perros.</p>
            </div>

            <!-- Autor 4 -->
            <div class="bg-white p-6 rounded-xl shadow-md border-l-4 border-amber-500 hover:shadow-lg transition">
                <h3 class="text-xl font-bold text-[#2C3E50]">Julio Cortázar</h3>
                <p class="text-amber-700 font-semibold text-sm uppercase tracking-wider">Surrealismo</p>
                <p class="text-gray-600 mt-2 text-sm">Obra cumbre: Rayuela.</p>
            </div>

            <!-- Autor 5 -->
            <div class="bg-white p-6 rounded-xl shadow-md border-l-4 border-amber-500 hover:shadow-lg transition">
                <h3 class="text-xl font-bold text-[#2C3E50]">Jorge Luis Borges</h3>
                <p class="text-amber-700 font-semibold text-sm uppercase tracking-wider">Ensayística / Ficción</p>
                <p class="text-gray-600 mt-2 text-sm">Obra cumbre: El Aleph.</p>
            </div>

            <!-- Autor 6 -->
            <div class="bg-white p-6 rounded-xl shadow-md border-l-4 border-amber-500 hover:shadow-lg transition">
                <h3 class="text-xl font-bold text-[#2C3E50]">Pablo Neruda</h3>
                <p class="text-amber-700 font-semibold text-sm uppercase tracking-wider">Poesía</p>
                <p class="text-gray-600 mt-2 text-sm">Obra cumbre: Veinte poemas de amor.</p>
            </div>

        </div>
        
        <div class="mt-12 text-center">
            <a href="/home" class="text-amber-600 font-bold hover:underline">← Volver al Panel de Control</a>
        </div>
    </div>
</div>
@endsection
