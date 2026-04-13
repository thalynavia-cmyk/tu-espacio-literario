@extends('layouts.app')

@section('content')
<div class="bg-[#FDFBF7] min-h-screen py-12">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Botón Volver -->
        <a href="/catalogo" class="text-amber-700 hover:text-amber-900 font-bold flex items-center mb-8 transition">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
            Volver al catálogo
        </a>

        <div class="bg-white rounded-3xl shadow-xl overflow-hidden flex flex-col md:flex-row border border-gray-100">
            
            <!-- Imagen del Libro (Izquierda) -->
            <div class="md:w-1/2 bg-gray-200">
                <img src="https://images.unsplash.com" 
                     alt="Portada del Libro" class="w-full h-full object-cover">
            </div>

            <!-- Información (Derecha) -->
            <div class="md:w-1/2 p-10 flex flex-col justify-center">
                <p class="text-amber-600 font-bold uppercase tracking-widest text-sm mb-2">Novela Clásica</p>
                <h1 class="text-4xl font-serif font-bold text-[#2C3E50] mb-4">Cien Años de Soledad</h1>
                <p class="text-xl text-gray-500 italic mb-6">Por: Gabriel García Márquez</p>

                <div class="text-[#800000] text-3xl font-bold mb-8">
                    $45.000 <span class="text-sm text-gray-400 font-normal">COP</span>
                </div>

                <div class="border-t border-gray-100 pt-6">
                    <h3 class="text-lg font-bold text-[#2C3E50] mb-3">Sinopsis</h3>
                    <p class="text-gray-600 leading-relaxed mb-8">
                        Muchos años después, frente al pelotón de fusilamiento, el coronel Aureliano Buendía había de recordar aquella tarde remota en que su padre lo llevó a conocer el hielo. Macondo era entonces una aldea de veinte casas de barro y cañabrava...
                    </p>
                </div>

                <!-- Acciones -->
                <div class="flex space-x-4">
                    <button class="flex-1 bg-[#2C3E50] text-[#F5F5DC] py-4 rounded-xl font-bold hover:bg-amber-600 transition shadow-lg flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        Añadir al Carrito
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
