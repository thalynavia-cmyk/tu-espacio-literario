<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tu Espacio Literario</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script> <!-- Ayuda extra para el centrado -->
</head>
<body class="antialiased bg-[#fdfbf7] min-h-screen flex flex-col items-center justify-center text-center p-4">

    <!-- Capa de textura -->
    <div class="fondo-literario"></div>

    <!-- LOGO -->
    <div class="mb-6">
        <img src="/images/logo.png.png" class="drop-shadow-xl" alt="Logo" width="180">
    </div>

    <!-- TÍTULO -->
    <h1 class="font-serif font-bold text-gray-900 mb-2" style="font-size: 4.5rem; line-height: 1;">
        Tu Espacio Literario
    </h1>

    <!-- ESLOGAN -->
    <p class="font-serif italic text-gray-600 mb-8" style="font-size: 1.5rem;">
        Tu lectura, a un clic de distancia.
    </p>

    <!-- BOTONES -->
    <div class="flex gap-4 justify-center items-center">
        @if (Route::has('login'))
            <a href="{{ route('login') }}" class="btn-literario">
                📚 Iniciar Sesión
            </a>
        @endif

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="btn-registro">
                ✨ Registrarse
            </a>
        @endif
    </div>

    <!-- FOOTER -->
    <footer class="mt-12 text-gray-400 text-sm">
        © {{ date('Y') }} | Tu Espacio Literario • Todos los derechos reservados.
    </footer>

</body>
</html>
