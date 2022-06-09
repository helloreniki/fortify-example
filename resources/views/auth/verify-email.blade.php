<x-auth-layout>
  <div class="min-h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
      <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
      <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Verify Email</h2>
      <div class="mt-8 mb-4 text-sm text-gray-600 text-center">
        Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.
      </div>
    </div>
  </div>

  <div class="sm:mx-auto sm:w-full sm:max-w-md">
    <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
      @if ($errors->any())
          <div>
              <div>Something went wrong!</div>
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

      @if (session('status') == 'verification-link-sent')
          <div class="mb-4 font-medium text-sm text-green-600">
              A new verification link has been sent to the email address you provided during registration.
          </div>
      @endif

      <form method="POST" action="{{ route('verification.send') }}">
          @csrf

          <div>
              <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Resend Verification Email</button>
          </div>
      </form>

    </div>
  </div>

</x-auth-layout>
