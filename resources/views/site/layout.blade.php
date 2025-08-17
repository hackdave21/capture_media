<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>

  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('sitetemp/assets/logo.jpg') }}">
  <link rel="icon" type="image/png" href="{{ asset('sitetemp/assets/logo.jpg') }}">
  <title>@yield('title','Capture Media')</title>

  {{-- CSS du thème (ex: template BootstrapMade/Blogy) --}}
  <link href="{{ asset('sitetemp/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('sitetemp/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('sitetemp/assets/css/main.css') }}" rel="stylesheet">
</head>
<body>

  @include('site.partials.header')

  <main class="main">
    @yield('content')
  </main>

  @include('site.partials.footer')

  {{-- JS du thème --}}
  <script src="{{ asset('sitetemp/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('sitetemp/assets/js/main.js') }}"></script>
</body>
</html>
