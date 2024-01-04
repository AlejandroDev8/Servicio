<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/icon.svg" type="image/x-icon">
    @vite('resources/css/app.css')
    <title>Servicio-App</title>
</head>
<body>
    <div class="bg-blue-50 dark:bg-blue-900">
      <header class="flex items-center justify-between p-6 bg-blue-100 dark:bg-blue-800">
        <a href="/" class="text-slate-200 text-2xl font-bold hover:text-white">
          <span>Tecnm - Ciudad Valles</span>
        </a>
        <nav class="flex gap-4">
          <a
            href="/login"
            class="text-sm font-medium text-blue-900 hover:bg-blue-200 hover:text-blue-700 rounded px-2 py-1 border border-blue-300 hover:scale-105 transition-transform duration-200 ease-in-out dark:text-blue-200 dark:hover:bg-blue-700 dark:hover:text-blue-300 dark:border-blue-700"
          >
            Iniciar Sesión
          </a>
          <a
            href="#about"
            class="text-sm font-medium text-blue-900 hover:bg-blue-200 hover:text-blue-700 rounded px-2 py-1 border border-blue-300 hover:scale-105 transition-transform duration-200 ease-in-out dark:text-blue-200 dark:hover:bg-blue-700 dark:hover:text-blue-300 dark:border-blue-700"
          >
          Sobre la página
        </a>
        </nav>
      </header>
      <section class="w-full py-12 bg-blue-200 dark:bg-blue-900">
        <div class="container px-4 md:px-6 text-center">
          <h1 class="text-4xl font-bold tracking-tighter text-blue-900 sm:text-5xl md:text-6xl dark:text-blue-200">
            Bienvenido al Control de Sala TecnNM Ciudad Valles
          </h1>
        </div>
      </section>

      <section class="w-full py-12 bg-white bg-opacity-60 dark:bg-blue-800" id="banner">
        <div class="container px-4 md:px-6 text-center">
          <img src="/logo.svg" alt="Banner Image" class="mx-auto mb-8 w-3/5">
          <h2 class="text-3xl font-bold tracking-tighter text-blue-900 sm:text-4xl md:text-5xl dark:text-blue-200 mb-5 mt-10">
            Welcome to our website!
          </h2>
          <p class="mt-6 text-lg text-blue-800 dark:text-blue-300 max-w-2xl mx-auto leading-relaxed">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.
          </p>
        </div>
      </section>
      <section class="w-full py-12 bg-white bg-opacity-60 dark:bg-blue-800" id="about">
        <div class="container px-4 md:px-6 text-center">
          <h2 class="text-3xl font-bold tracking-tighter text-blue-900 sm:text-4xl md:text-5xl dark:text-blue-200 mb-8">
            Lo que podrás hacer
          </h2>
          <p class="mt-6 text-lg text-blue-800 dark:text-blue-300 max-w-2xl mx-auto leading-relaxed">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
            anim id est laborum.
          </p>
        </div>
      </section>
    </div>
</body>
</html>