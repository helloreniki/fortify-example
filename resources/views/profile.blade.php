<x-auth-layout>

<div class="mx-auto px-8">
  <div class="mt-10">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
          <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
        </div>
      </div>
      <div class="mt-5 md:mt-0 md:col-span-2">

        {{-- @if ($errors->any())
        <div class="text-sm text-red-500 mb-2">
            <div>Something went wrong!</div>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif --}}

        @if (session('status') === 'profile-information-updated')
            <div class="mb-4 font-medium text-sm text-green-600">
                Profile Info has been updated.
            </div>
        @endif

        <form action="{{ route('user-profile-information.update') }}" method="POST">
          @csrf
          @method('put')

          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-4">
                  <label for="name" class="block text-sm font-medium text-gray-700">First name</label>
                  <input type="text" name="name" id="name" autocomplete="name" value="{{ old('name', auth()->user()->name) }}" autofocus class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md py-1 px-2">
                  @error('name') <p class="text-sm text-red-500 mt-2">{{ $message }}</p> @enderror
                </div>

                <div class="col-span-6 sm:col-span-4">
                  <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                  <input type="text" name="email" id="email" autocomplete="email" value="{{ old('email', auth()->user()->email) }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md py-1 px-2">
                  @error('email') <p class="text-sm text-red-500 mt-2">{{ $message }}</p> @enderror
                </div>
              </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Update Profile</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
      <div class="border-t border-gray-200"></div>
    </div>
  </div>

  <div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
          <h3 class="text-lg font-medium leading-6 text-gray-900">Security</h3>
        </div>
      </div>
      <div class="mt-5 md:mt-0 md:col-span-2">

        {{-- @if ($errors->any())
        <div class="text-sm text-red-500 mb-2">
            <div>Something went wrong!</div>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif --}}

        @if (session('status') === 'password-updated')
            <div class="mb-4 font-medium text-sm text-green-600">
                Password has been updated.
            </div>
        @endif

        <form action="{{route('user-password.update')}}" method="POST">
          @csrf
          @method('put')

          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-4">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-4">
                  <label for="current_password" class="block text-sm font-medium text-gray-700">Current Password</label>
                  <input type="password" name="current_password" id="current_password" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md py-1 px-2">
                  @error('current_password') <p class="text-sm text-red-500 mt-2">{{ $message }}</p> @enderror
                </div>

                <div class="col-span-6 sm:col-span-4">
                  <label for="password" class="block text-sm font-medium text-gray-700">New Password</label>
                  <input type="password" name="password" id="password" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md py-1 px-2">
                  @error('password') <p class="text-sm text-red-500 mt-2">{{ $message }}</p> @enderror
                </div>

                <div class="col-span-6 sm:col-span-4">
                  <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm New Password</label>
                  <input type="password" name="password_confirmation" id="password_confirmation" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md py-1 px-2">
                </div>
              </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Change Password</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

</x-auth-layout>
