<!-- This example requires Tailwind CSS v2.0+ -->

<div class="relative bg-gray-50">
  <div class="relative bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">

      <div class="flex justify-between items-center py-6 md:justify-start md:space-x-10">
        <div class="flex justify-start lg:w-0 lg:flex-1">
          <a href="{{ route('home') }}">
            <span class="sr-only">Workflow</span>
            <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="">
          </a>
        </div>

        <nav class="flex space-x-10">
          <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900"> Solutions </a>
          <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900"> Pricing </a>
          <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900"> Docs </a>
        </nav>

        <div class="flex items-center justify-end flex-1 lg:w-0 space-x-3">
          @guest
            <a href="/login" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900"> Log in </a>
            <a href="/register" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700"> Register </a>
          @endguest

          @auth
            <a href="{{ route('dashboard') }}" class="whitespace-nowrap text-sm text-gray-500 hover:text-gray-900"> {{ auth()->user()->name }} Dashboard </a>

            <form action="{{ route('logout') }}" method="post">
              @csrf
              <button type="submit" class="whitespace-nowrap text-sm text-gray-500 hover:text-gray-900">Logout</button>
            </form>

          @endauth
        </div>
      </div>

    </div>
  </div>
</div>
