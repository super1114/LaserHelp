@php
$config = [
    'appName' => config('app.name'),
    'locale' => $locale = app()->getLocale(),
    'locales' => config('app.locales'),
    'githubAuth' => config('services.github.client_id'),
];
@endphp
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name') }}</title>
  <link rel="icon" type="image/png" href="{{ asset('images/icon.png') }}">
</head>
<body>
  <div id="app"></div>
  <script>
    window.config = @json($config);
    console.log(window.config);
  </script>
  <script src="{{ mix('dist/js/app.js') }}"></script>
</body>
</html>
