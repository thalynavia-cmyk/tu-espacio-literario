<!-- Navbar Responsivo "Tu Espacio Literario" -->
<nav class="bg-[#2C3E50] border-b border-amber-900/20 shadow-md" x-data="{ open: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            
            <!-- Logotipo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="/" class="group flex items-center space-x-2">
                    <div class="bg-amber-500 p-2 rounded-lg group-hover:bg-amber-400 transition">
                        <svg class="w-6 h-6 text-[#2C3E50]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332-4.5 1.253"></path>
                        </svg>
                    </div>
                    <span class="text-[#F5F5DC] text-2xl font-serif font-bold tracking-tight">Tu Espacio <span class="text-amber-500">Literario</span></span>
                </a>
            </div>
            
            <!-- Menú Desktop -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="/" class="text-[#F5F5DC] hover:text-amber-400 font-medium transition">Inicio</a>
                <a href="/catalogo" class="text-[#F5F5DC] hover:text-amber-400 font-medium transition">Libros</a>
                <a href="/autores" class="text-[#F5F5DC] hover:text-amber-400 font-medium transition">Autores</a>
                
                <!-- Botón Carrito -->
                <button class="relative text-[#F5F5DC] hover:text-amber-400 transition p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 118 0m-4 4v2m0-6V4m-2 5V4m-5 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <span class="absolute top-0 right-0 bg-amber-600 text-white text-[10px] font-bold px-1.5 py-0.5 rounded-full">0</span>
                </button>

               <!-- Botón Mi Cuenta con Menú Desplegable (Versión Estable) -->
<div class="nav-item dropdown">
    <button class="bg-amber-600 text-white px-5 py-2 rounded-full hover:bg-amber-500 transition font-bold text-sm shadow-lg flex items-center dropdown-toggle" 
            data-toggle="dropdown" 
            aria-haspopup="true" 
            aria-expanded="false">
        MI CUENTA
    </button>
    
    <div class="dropdown-menu dropdown-menu-right shadow-lg border-0">
        <a href="#" class="dropdown-item">
            <i class="fas fa-user mr-2"></i> Perfil
        </a>
        <a href="#" class="dropdown-item">
            <i class="fas fa-cog mr-2"></i> Configuración
        </a>
        <div class="dropdown-divider"></div>
        <form action="{{ route('logout') }}" method="POST" id="logout-form">
            @csrf
            <button type="submit" class="dropdown-item text-danger">
                <i class="fas fa-sign-out-alt mr-2"></i> Salir
            </button>
        </form>
    </div>
</div>



            <!-- Botón Hamburguesa (Móvil) -->
            <div class="md:hidden flex items-center">
                <button @click="open = !open" class="text-amber-500 focus:outline-none p-2">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': !open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Menú Móvil -->
    <div x-show="open" class="md:hidden bg-[#34495E] border-t border-amber-900/10">
        <div class="px-4 pt-2 pb-6 space-y-2">
            <a href="/" class="block px-4 py-3 rounded-lg text-[#F5F5DC] hover:bg-amber-600 transition font-medium">Inicio</a>
            <a href="/catalogo" class="block px-4 py-3 rounded-lg text-[#F5F5DC] hover:bg-amber-600 transition font-medium">Catálogo</a>
            <a href="/autores" class="block px-4 py-3 rounded-lg text-[#F5F5DC] hover:bg-amber-600 transition font-medium">Autores</a>
            <div class="pt-4 border-t border-gray-600">
                <a href="/login" class="block w-full text-center bg-amber-600 text-white py-3 rounded-lg font-bold">MI CUENTA</a>
            </div>
        </div>
    </div>
</nav>
