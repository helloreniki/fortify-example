<x-auth-layout>

    <x-auth-header>Create an account</x-auth-header>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
      <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
        <form class="space-y-6" action="{{ route('register') }}" method="POST">
          @csrf

          <div>
            <label for="name" class="block text-sm font-medium text-gray-700"> Name </label>
            <div class="mt-1">
              <input id="name" name="name" type="name" autocomplete="name" required value="{{ old('name') }}" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            @error('name') <p class="text-sm text-red-500 mt-2">{{ $message }}</p> @enderror
          </div>

          <div>
            <label for="email" class="block text-sm font-medium text-gray-700"> Email address </label>
            <div class="mt-1">
              <input id="email" name="email" type="email" autocomplete="email" required value="{{ old('email') }}" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            @error('email') <p class="text-sm text-red-500 mt-2">{{ $message }}</p> @enderror
          </div>

          <div>
            <label for="password" class="block text-sm font-medium text-gray-700"> Password </label>
            <div class="mt-1">
              <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            @error('password') <p class="text-sm text-red-500 mt-2">{{ $message }}</p> @enderror
          </div>

          <div>
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700"> Password </label>
            <div class="mt-1">
              <input id="password_confirmation" name="password_confirmation" type="password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            @error('password_confirmation') <p class="text-sm text-red-500 mt-2">{{ $message }}</p> @enderror
          </div>

          <div class="flex items-center justify-between">
            <div class="flex items-center">
              <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
              <label for="remember-me" class="ml-2 block text-sm text-gray-900"> Remember me </label>
            </div>

            <div class="text-sm">
              <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> Forgot your password? </a>
            </div>
          </div>

          <div>
            <x-button>Create an account</x-button>
          </div>
        </form>

      </div>
    </div>
  </div>

</x-auth-layout>
