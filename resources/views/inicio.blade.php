@extends('layouts.app')

@section('content')

<section class="hero text-center p-5" style="background:#d9b8fa;color:#4b2e83;">
    <h1 style="font-size:40px;">Bienvenido a tu mundo literario</h1>
    <p>Explora, aprende, comparte y disfruta la lectura.</p>
    <button id="btnLogin" class="btn btn-primary mt-3">Iniciar sesión</button>
</section>

<div id="login" style="display:none;" class="modal p-4 bg-white border shadow" style="max-width:400px;margin:20px auto;">
    <h3>Iniciar Sesión</h3>
    <input id="email" type="email" placeholder="Correo" class="form-control mb-2">
    <input id="password" type="password" placeholder="Contraseña" class="form-control mb-2">
    <button onclick="login()" class="btn btn-success w-100 mb-2">Ingresar</button>
    <button onclick="cerrarModal()" class="btn btn-danger w-100">Cerrar</button>
    <p id="mensaje" class="mt-2"></p>
</div>

<footer class="text-center mt-5 p-3" style="background:#4b2e83;color:#fff;">
    © 2025 Tu Espacio Literario - Todos los derechos reservados.
</footer>

@endsection

@section('scripts')
<script src="{{ asset('js/script.js') }}"></script>
@endsection
