<x-auth-layout>
  <x-auth-header>Enter your code here for two factor auth</x-auth-header>

  <div x-data="{openFormCode: true, openFormRecoveryCode: false}" class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
    <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
      @if ($errors->any())
          <div class="text-red-500 text-sm mb-1">
              <div>Something went wrong!</div>
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

      @if (session('status'))
          <div class="mb-4 font-medium text-sm text-green-600">
              {{ session('status') }}
          </div>
      @endif

      <form x-show="openFormCode" action="{{ route('two-factor.login') }}" method="POST" class="">
          @csrf

          <div>
            <p class="text-gray-700 my-4">Enter authentication code provided by your authenticator application</p>
            <label for="code" class="block text-sm font-medium text-gray-700"> Code </label>
            <div class="mt-1">
              <input id="code" name="code" type="code" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            @error('code') <p class="text-sm text-red-500 mt-2">{{ $message }}</p> @enderror
          </div>

          <div class="flex space-x-4 items-end my-6">
              <button type="button" @click="openFormRecoveryCode = true, openFormCode=false" class="text-gray-800 underline mb-2 flex-shrink-0">Use recovery code</button>
              <x-button class="">Login</x-button>
          </div>
      </form>

      <form x-show="openFormRecoveryCode" action="{{ route('two-factor.login') }}" method="POST">
          @csrf

          <div>
            <label for="recovery_code" class="block text-sm font-medium text-gray-700 my-4"> Recovery Code </label>
            <div class="mt-1">
              <input id="recovery_code" name="recovery_code" type="recovery_code" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            @error('recovery_code') <p class="text-sm text-red-500 mt-2">{{ $message }}</p> @enderror
          </div>

          <div class="flex space-x-4 items-end my-6">
            <button @click="openFormCode = true,openFormRecoveryCode = false" class="text-gray-800 underline">Use code from your authenticator app.</button>
            <x-button>Login</x-button>
          </div>
      </form>
    </div>
  </div>

</x-auth-layout>
