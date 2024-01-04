@vite('resources/css/app.css')
<div class="w-full h-screen flex flex-col items-center justify-center bg-gray-100 dark:bg-gray-800">
  <div class="w-80 p-8 bg-white dark:bg-gray-900 rounded-lg shadow-md">
    <div class="flex justify-center mb-8">
      <img
        alt="Logo"
        class="rounded-full"
        height="64"
        width="64"
        src="/icon.svg"
      />
    </div>
    <h1 class="text-2xl font-bold text-center mb-4 dark:text-gray-200">Login</h1>
    <form class="space-y-8">
      <div class="space-y-3">
        <label class="text-sm font-medium dark:text-gray-400" for="email">
          Email
        </label>
        <Input class="w-full rounded-md p-2" id="email" required type="email" />
      </div>
      <div class="space-y-3">
        <div class="flex justify-between">
          <label class="text-sm font-medium dark:text-gray-400" for="password">
            Password
          </label>
        </div>
        <Input class="w-full rounded-md p-2" id="password" required type="password" />
      </div>
      <Button class="w-full text-white rounded-full border p-3 hover:bg-gray-600" type="submit">
        Login
      </Button>
    </form>
    <div class="mt-4 text-center">
      <a class="text-sm underline ml-1 dark:text-gray-400" href="/">
        Home
      </a>
    </div>
  </div>
</div>