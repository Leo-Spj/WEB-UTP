<!DOCTYPE html>
<html lang="es" data-theme="cupcake">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')

    <title>EasyCode</title>
</head>
<body>

    
<div class="navbar bg-primary text-primary-content sticky top-0 z-40">
  <div class="navbar-start ">
    <div class="dropdown">
      <label tabindex="0" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
      </label>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        <li><a>Conócenos</a></li>
        <li><a href="./cursos">Cursos</a></li>
      {{-- <li tabindex="0">
        <details>
          <summary>Cursos</summary>
          <ul class="p-2">
            <li><a>c 1</a></li>
            <li><a>c 2</a></li>
          </ul>
        </details>
      </li> --}}

      </ul>
    </div>
    <a class="btn btn-ghost normal-case text-xl">EasyCode</a>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <li><a>Conócenos</a></li>
      <li><a href="./cursos">Cursos</a></li>
      <li><a href="./registro">Regístrate</a></li>
      {{-- <li tabindex="0">
        <details>
          <summary>Cursos</summary>
          <ul class="p-2">
            <li><a>c 1</a></li>
            <li><a>c 2</a></li>
          </ul>
        </details>
      </li> --}}

    </ul>
  </div>

  <div class="flex-none navbar-end">
    <div class="dropdown dropdown-end">
      <label tabindex="0" class="btn btn-ghost btn-circle">
        <div class="indicator">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
          <span class="badge badge-sm indicator-item">0</span>
        </div>
      </label>
      <div tabindex="0" class="mt-3 z-[1] card card-compact dropdown-content w-52 bg-base-100 shadow">
        <div class="card-body">
          <span class="font-bold text-lg">0 Items</span>
          <span class="text-info">Subtotal: $0</span>
          <div class="card-actions">
            <a href="/carrito" class="btn btn-primary btn-block">Ver Carrito</a>
          </div>
        </div>
      </div>
    </div>
    <div class="dropdown dropdown-end">
      <label tabindex="0" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
          <img src="https://i.postimg.cc/TP3LWj1f/usuario.png" />
        </div>
      </label>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        <li>
          <a class="justify-between">
            Profile
            <span class="badge">New</span>
          </a>
        </li>
        <li><a>Settings</a></li>
        <li><a>Logout</a></li>
      </ul>
    </div>
  </div>
</div>




<div class="hero min-h-screen css-gradient-hero">
  <div class="hero-content flex-col lg:flex-row-reverse">

  <img src="https://i.postimg.cc/9QLHKT2N/hero.png" class="max-w-[55%] rounded-lg " />

    <div class="max-w-3xl">
      <h1 class="text-5xl font-bold">Aprende a programar como un experto</h1>
      <p class="py-6">Conviértete en un desarrollador de clase mundial desde cualquier parte del mundo.</p>
      <a href="./registro" class="btn btn-primary">Crea tu cuenta gratis</a>
    </div>
  </div>
</div>


<div class="h-auto py-7 bg-primary flex items-center justify-center">
    <div class="container mx-auto">
        <div class="flex justify-center">
            <div class="w-1/2">
                <h2 class="text-4xl font-bold text-center">El camino del desarrollo</h2>
                <p class="text-center mt-2">Aprende a programar desde cero con nuestros cursos.</p>
            </div>
        </div>
    </div>
</div>





<!-- Statistics Section: Simple -->
<div class=" dark:text-gray-900  dark:bg-gray-100">
  <div class="container xl:max-w-7xl mx-auto px-4 py-16 lg:px-8 lg:py-32">
    <div class="grid grid-cols-1 sm:grid-cols-3 text-center divide-y sm:divide-y-0 sm:divide-x dark:divide-gray-700/75">
      <dl class="space-y-1 px-5 py-8">
        <dt class="text-4xl font-extrabold text-black ">
          00001+
        </dt>
        <dd class="text-sm uppercase tracking-wide font-semibold text-blue-600 dark:text-blue-500">
          Proyectos
        </dd>
      </dl>
      <dl class="space-y-1 px-5 py-8">
        <dt class="text-4xl font-extrabold text-black ">
          00001+
        </dt>
        <dd class="text-sm uppercase tracking-wide font-semibold text-blue-600 dark:text-blue-500">
          Clientes
        </dd>
      </dl>
      <dl class="space-y-1 px-5 py-8">
        <dt class="text-4xl font-extrabold text-black ">
          00001+
        </dt>
        <dd class="text-sm uppercase tracking-wide font-semibold text-blue-600 dark:text-blue-500">
          Ganancias
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- END Statistics Section: Simple -->







<!-- Team Section: Circle Photos with Title -->
<div class="bg-white dark:text-gray-100 dark:bg-gray-900">
  <div class="space-y-16 container xl:max-w-7xl mx-auto px-4 py-16 lg:px-8 lg:py-32">
    <!-- Heading -->
    <div class="text-center">
      <div class="text-sm uppercase font-bold tracking-wider mb-1 text-indigo-600 dark:text-indigo-500">
        Grandes personas
      </div>
      <h2 class="text-4xl font-black text-black mb-4 dark:text-white">
        Conoce a nuestro equipo
      </h2>
      <h3 class="text-xl leading-relaxed font-medium text-gray-700 lg:w-2/3 mx-auto dark:text-gray-300">
        Están trabajando sin parar detrás de escena para ayudarlo a crear mejores productos, servicios web y sitios web.
      </h3>
    </div>
    <!-- END Heading -->

    <!-- Team -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 md:gap-16 text-center">
      <div>
        <span class="inline-block rounded-full bg-white shadow-lg p-2 mb-5 dark:bg-gray-700/75 dark:shadow-gray-950">
          <img src="#" alt="User Avatar" class="inline-block w-28 h-28 rounded-full">
        </span>
        <h4 class="text-xl font-bold mb-0.5">
          Brandon Meneses
        </h4>
        <p class="font-medium text-gray-600 dark:text-gray-400">
          Founder &amp; CEO
        </p>
      </div>
      <div>
        <span class="inline-block rounded-full bg-white shadow-lg p-2 mb-5 dark:bg-gray-700/75 dark:shadow-gray-950">
          <img src="#" alt="User Avatar" class="inline-block w-28 h-28 rounded-full">
        </span>
        <h4 class="text-xl font-bold mb-0.5">
          Gianny Dantas
        </h4>
        <p class="font-medium text-gray-600 dark:text-gray-400">
          Product Design
        </p>
      </div>
      <div>
        <span class="inline-block rounded-full bg-white shadow-lg p-2 mb-5 dark:bg-gray-700/75 dark:shadow-gray-950">
          <img src="#" alt="User Avatar" class="inline-block w-28 h-28 rounded-full">
        </span>
        <h4 class="text-xl font-bold mb-0.5">
          Leonardo Espejo
        </h4>
        <p class="font-medium text-gray-600 dark:text-gray-400">
          Web Developer
        </p>
      </div>
      
    <!-- END Team -->
  </div>
</div>
<!-- END Team Section: Circle Photos with Title -->






<footer class="footer p-10 bg-neutral text-neutral-content">
  <aside>
    <svg width="50" height="50" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" class="fill-current"><path d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z"></path></svg>
    <p>Asociación grupo 2<br/>Brindando servicios desde 2023-2</p>  </aside> 
  <nav>
    <header class="footer-title">Social</header> 
    <div class="grid grid-flow-col gap-4">
      <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg></a> 
      <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg></a> 
      <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
    </div>
  </nav>
</footer>


</body>
</html>