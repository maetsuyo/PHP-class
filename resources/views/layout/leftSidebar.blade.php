<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>
    @yield('title')
  </title>
</head>
<body>
  <div class="text-left">
    @yield('sidebar')
  </div>
  {{-- <div>
    @yield('ProfileCard')
  </div> --}}
  <div>
    @yield('form')
  </div>
</body>
</html>