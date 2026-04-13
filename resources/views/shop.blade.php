@extends('layouts.app') <!-- Esto hereda tu Navbar y Footer de app.blade.php -->

@section('content')
  <!-- Aquí va todo el código del catálogo (el div class="bg-[#FDFBF7]" etc.) 
<div class="bg-[#FDFBF7] min-h-screen py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Título de la Sección -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-serif font-bold text-[#2C3E50]">Nuestro Catálogo</h1>
            <p class="text-gray-600 mt-2 italic">Explora los mundos que tenemos para ti</p>
            <div class="w-24 h-1 bg-amber-500 mx-auto mt-4"></div>
        </div>

        <!-- Filtros Rápidos (Opcional) -->
        <div class="flex flex-wrap gap-4 mb-10 justify-center">
            <button class="px-4 py-2 bg-[#2C3E50] text-white rounded-full text-sm">Todos</button>
            <button class="px-4 py-2 bg-white border border-gray-200 text-gray-700 rounded-full text-sm hover:bg-amber-100 transition">Novelas</button>
            <button class="px-4 py-2 bg-white border border-gray-200 text-gray-700 rounded-full text-sm hover:bg-amber-100 transition">Historia</button>
            <button class="px-4 py-2 bg-white border border-gray-200 text-gray-700 rounded-full text-sm hover:bg-amber-100 transition">Poesía</button>
        </div>

        <!-- Grid de Libros -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            
            <!-- Ejemplo de Libro 1 (Repite este bloque o usa un @foreach) -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl transition duration-300 group">
                <div class="relative h-72 bg-gray-200 overflow-hidden">
                    <img src="https://images.unsplash.com" 
                         alt="Libro" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute top-3 left-3 bg-amber-600 text-white text-xs font-bold px-2 py-1 rounded shadow">DESTACADO</div>
                </div>
                <div class="p-5">
                    <p class="text-xs text-amber-700 font-bold uppercase tracking-wider mb-1">Ficción</p>
                    <h3 class="text-[#2C3E50] font-serif font-bold text-lg mb-1 truncate">El Alquimista</h3>
                    <p class="text-gray-500 text-sm mb-4 italic text-sm">Paulo Coelho</p>
                    <div class="flex justify-between items-center">
                        <span class="text-xl font-bold text-[#800000]">$35.000</span>
                        <button class="bg-[#2C3E50] text-white p-2 rounded-lg hover:bg-amber-600 transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Fin de Libro 1 -->

        </div>
    </div>
</div>
@endsection
