<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <div class="relative bg-gray-50">
    <div class="relative bg-white shadow">
      <div class="max-w-7xl mx-auto px-4 sm:px-6">
        @include('partials.menu')
        {{-- if Route is not login/register --}}
        @if(Route::is('login') ||  Route::is('register'))
          {{-- include nothing --}}
        @else
          {{-- @include('partials.header') --}}
        @endif
      </div>
    </div>
  </div>

  {{ $slot}}

</body>
</html>
