<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}
    <!-- Scripts -->
    {{-- <script src="{{asset('script/script.js')}}"></script> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>Nutrition|@yield('page')</title>
    <link rel="icon"  href="{{asset('storage/product/stronger_nutrition.jpeg')}}"/>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{-- <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css"
  rel="stylesheet"
/>

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"
></script>
</head>
<body class="">
    <div id="app">
        <nav class="navbar bg-body-tertiary bg-light bg-gradient shadow-sm  fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" id="menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="{{ __('Toggle navigation') }}" >
                    <span class="navbar-toggler-icon"></span>
                  </button>

                <a class="navbar-brand" href="{{ url('/') }}">
                    <div class="position-absolute top-50 start-50 translate-middle">
                    <h5 class="text-danger" id="logo">Stronger </h5>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="500" zoomAndPan="magnify" viewBox="0 0 375 374.999991" height="500" preserveAspectRatio="xMidYMid meet" version="1.0"><defs><g/><clipPath id="2bb88de193"><path d="M 144 81.425781 L 231.660156 81.425781 L 231.660156 217 L 144 217 Z M 144 81.425781 " clip-rule="nonzero"/></clipPath></defs><rect x="-37.5" width="450" fill="#ffffff" y="-37.499999" height="449.999989" fill-opacity="1"/><rect x="-37.5" width="450" fill="#ffffff" y="-37.499999" height="449.999989" fill-opacity="1"/><rect x="-37.5" width="450" fill="#ffffff" y="-37.499999" height="449.999989" fill-opacity="1"/><g fill="#200000" fill-opacity="1"><g transform="translate(52.007814, 267.532686)"><g><path d="M 26.234375 0 L 8.09375 0 C 6.5625 0 5.253906 -0.539062 4.171875 -1.625 C 3.085938 -2.707031 2.546875 -4.007812 2.546875 -5.53125 L 5.578125 -5.53125 C 5.578125 -4.84375 5.820312 -4.253906 6.3125 -3.765625 C 6.800781 -3.273438 7.394531 -3.03125 8.09375 -3.03125 L 26.234375 -3.03125 C 26.921875 -3.03125 27.507812 -3.273438 28 -3.765625 C 28.5 -4.253906 28.75 -4.84375 28.75 -5.53125 L 28.75 -8.15625 C 28.75 -8.84375 28.5 -9.429688 28 -9.921875 C 27.507812 -10.421875 26.921875 -10.671875 26.234375 -10.671875 L 8.09375 -10.671875 C 6.5625 -10.671875 5.253906 -11.210938 4.171875 -12.296875 C 3.085938 -13.378906 2.546875 -14.679688 2.546875 -16.203125 L 2.546875 -18.828125 C 2.546875 -20.359375 3.085938 -21.660156 4.171875 -22.734375 C 5.253906 -23.816406 6.5625 -24.359375 8.09375 -24.359375 L 26.234375 -24.359375 C 27.765625 -24.359375 29.066406 -23.816406 30.140625 -22.734375 C 31.222656 -21.660156 31.765625 -20.359375 31.765625 -18.828125 L 28.75 -18.828125 C 28.75 -19.515625 28.5 -20.101562 28 -20.59375 C 27.507812 -21.09375 26.921875 -21.34375 26.234375 -21.34375 L 8.09375 -21.34375 C 7.394531 -21.34375 6.800781 -21.09375 6.3125 -20.59375 C 5.820312 -20.101562 5.578125 -19.515625 5.578125 -18.828125 L 5.578125 -16.203125 C 5.578125 -15.515625 5.820312 -14.921875 6.3125 -14.421875 C 6.800781 -13.929688 7.394531 -13.6875 8.09375 -13.6875 L 26.234375 -13.6875 C 27.765625 -13.6875 29.066406 -13.144531 30.140625 -12.0625 C 31.222656 -10.988281 31.765625 -9.6875 31.765625 -8.15625 L 31.765625 -5.53125 C 31.765625 -4.007812 31.222656 -2.707031 30.140625 -1.625 C 29.066406 -0.539062 27.765625 0 26.234375 0 Z M 26.234375 0 "/></g></g></g><g fill="#200000" fill-opacity="1"><g transform="translate(86.325095, 267.532686)"><g><path d="M 15.53125 0 L 12.5 0 L 12.5 -21.34375 L 0.515625 -21.34375 L 0.515625 -24.359375 L 27.53125 -24.359375 L 27.53125 -21.34375 L 15.53125 -21.34375 Z M 15.53125 0 "/></g></g></g><g fill="#200000" fill-opacity="1"><g transform="translate(114.356537, 267.532686)"><g><path d="M 32.625 0 L 29.59375 0 L 29.59375 -6.640625 C 29.59375 -7.335938 29.347656 -7.929688 28.859375 -8.421875 C 28.367188 -8.910156 27.773438 -9.15625 27.078125 -9.15625 L 6.421875 -9.15625 L 6.421875 0 L 3.390625 0 L 3.390625 -24.359375 L 27.078125 -24.359375 C 28.609375 -24.359375 29.914062 -23.816406 31 -22.734375 C 32.082031 -21.660156 32.625 -20.359375 32.625 -18.828125 L 32.625 -14.703125 C 32.625 -13.109375 32.046875 -11.765625 30.890625 -10.671875 C 32.046875 -9.566406 32.625 -8.222656 32.625 -6.640625 Z M 27.078125 -12.1875 C 27.773438 -12.1875 28.367188 -12.429688 28.859375 -12.921875 C 29.347656 -13.410156 29.59375 -14.003906 29.59375 -14.703125 L 29.59375 -18.828125 C 29.59375 -19.515625 29.347656 -20.101562 28.859375 -20.59375 C 28.367188 -21.09375 27.773438 -21.34375 27.078125 -21.34375 L 6.421875 -21.34375 L 6.421875 -12.1875 Z M 27.078125 -12.1875 "/></g></g></g><g fill="#200000" fill-opacity="1"><g transform="translate(149.523256, 267.532686)"><g><path d="M 24.21875 0 C 26.300781 0 28.078125 -0.738281 29.546875 -2.21875 C 31.023438 -3.695312 31.765625 -5.476562 31.765625 -7.5625 L 31.765625 -16.828125 C 31.765625 -18.910156 31.023438 -20.6875 29.546875 -22.15625 C 28.078125 -23.632812 26.300781 -24.375 24.21875 -24.375 L 10.109375 -24.375 C 8.023438 -24.375 6.242188 -23.632812 4.765625 -22.15625 C 3.285156 -20.6875 2.546875 -18.910156 2.546875 -16.828125 L 2.546875 -7.5625 C 2.546875 -5.476562 3.285156 -3.695312 4.765625 -2.21875 C 6.242188 -0.738281 8.023438 0 10.109375 0 Z M 24.21875 -3.03125 L 10.109375 -3.03125 C 8.859375 -3.03125 7.789062 -3.472656 6.90625 -4.359375 C 6.019531 -5.242188 5.578125 -6.3125 5.578125 -7.5625 L 5.578125 -16.828125 C 5.578125 -18.066406 6.019531 -19.128906 6.90625 -20.015625 C 7.789062 -20.910156 8.859375 -21.359375 10.109375 -21.359375 L 24.21875 -21.359375 C 25.46875 -21.359375 26.535156 -20.910156 27.421875 -20.015625 C 28.304688 -19.128906 28.75 -18.066406 28.75 -16.828125 L 28.75 -7.5625 C 28.75 -6.3125 28.304688 -5.242188 27.421875 -4.359375 C 26.535156 -3.472656 25.46875 -3.03125 24.21875 -3.03125 Z M 24.21875 -3.03125 "/></g></g></g><g fill="#200000" fill-opacity="1"><g transform="translate(183.840538, 267.532686)"><g><path d="M 32.625 0 L 30.5625 0 L 6.421875 -19.671875 L 6.421875 0 L 3.390625 0 L 3.390625 -24.359375 L 5.453125 -24.359375 L 29.59375 -4.6875 L 29.59375 -24.359375 L 32.625 -24.359375 Z M 32.625 0 "/></g></g></g><g fill="#200000" fill-opacity="1"><g transform="translate(219.856694, 267.532686)"><g><path d="M 24.21875 0 C 26.238281 0 28.019531 -0.734375 29.5625 -2.203125 C 31.007812 -3.703125 31.742188 -5.488281 31.765625 -7.5625 L 31.765625 -10.15625 C 31.765625 -10.8125 31.53125 -11.375 31.0625 -11.84375 C 30.601562 -12.3125 30.046875 -12.546875 29.390625 -12.546875 L 17.15625 -12.546875 L 17.15625 -9.515625 L 28.75 -9.515625 L 28.75 -7.5625 C 28.75 -6.351562 28.304688 -5.28125 27.421875 -4.34375 C 26.492188 -3.46875 25.425781 -3.03125 24.21875 -3.03125 L 10.109375 -3.03125 C 8.859375 -3.03125 7.789062 -3.472656 6.90625 -4.359375 C 6.019531 -5.242188 5.578125 -6.3125 5.578125 -7.5625 L 5.578125 -16.828125 C 5.578125 -18.066406 6.019531 -19.128906 6.90625 -20.015625 C 7.789062 -20.910156 8.859375 -21.359375 10.109375 -21.359375 L 24.21875 -21.359375 C 25.46875 -21.359375 26.535156 -20.910156 27.421875 -20.015625 C 28.304688 -19.128906 28.75 -18.066406 28.75 -16.828125 L 31.765625 -16.828125 C 31.765625 -18.910156 31.023438 -20.6875 29.546875 -22.15625 C 28.078125 -23.632812 26.300781 -24.375 24.21875 -24.375 L 10.109375 -24.375 C 8.023438 -24.375 6.242188 -23.632812 4.765625 -22.15625 C 3.285156 -20.6875 2.546875 -18.910156 2.546875 -16.828125 L 2.546875 -7.5625 C 2.546875 -5.476562 3.285156 -3.695312 4.765625 -2.21875 C 6.242188 -0.738281 8.023438 0 10.109375 0 Z M 24.21875 0 "/></g></g></g><g fill="#200000" fill-opacity="1"><g transform="translate(254.173975, 267.532686)"><g><path d="M 31.109375 0 L 3.390625 0 L 3.390625 -24.375 L 31.109375 -24.375 L 31.109375 -21.359375 L 6.421875 -21.359375 L 6.421875 -13.6875 L 28.25 -13.6875 L 28.25 -10.671875 L 6.421875 -10.671875 L 6.421875 -3.03125 L 31.109375 -3.03125 Z M 31.109375 0 "/></g></g></g><g fill="#200000" fill-opacity="1"><g transform="translate(287.828689, 267.532686)"><g><path d="M 32.625 0 L 29.59375 0 L 29.59375 -6.640625 C 29.59375 -7.335938 29.347656 -7.929688 28.859375 -8.421875 C 28.367188 -8.910156 27.773438 -9.15625 27.078125 -9.15625 L 6.421875 -9.15625 L 6.421875 0 L 3.390625 0 L 3.390625 -24.359375 L 27.078125 -24.359375 C 28.609375 -24.359375 29.914062 -23.816406 31 -22.734375 C 32.082031 -21.660156 32.625 -20.359375 32.625 -18.828125 L 32.625 -14.703125 C 32.625 -13.109375 32.046875 -11.765625 30.890625 -10.671875 C 32.046875 -9.566406 32.625 -8.222656 32.625 -6.640625 Z M 27.078125 -12.1875 C 27.773438 -12.1875 28.367188 -12.429688 28.859375 -12.921875 C 29.347656 -13.410156 29.59375 -14.003906 29.59375 -14.703125 L 29.59375 -18.828125 C 29.59375 -19.515625 29.347656 -20.101562 28.859375 -20.59375 C 28.367188 -21.09375 27.773438 -21.34375 27.078125 -21.34375 L 6.421875 -21.34375 L 6.421875 -12.1875 Z M 27.078125 -12.1875 "/></g></g></g><g fill="#db2a2a" fill-opacity="1"><g transform="translate(111.353193, 289.781964)"><g><path d="M 10.4375 0 L 9.59375 0 L 2.34375 -5.90625 L 2.34375 0 L 1.09375 0 L 1.09375 -7.84375 L 1.9375 -7.84375 L 9.203125 -1.9375 L 9.203125 -7.84375 L 10.4375 -7.84375 Z M 10.4375 0 "/></g></g></g><g fill="#db2a2a" fill-opacity="1"><g transform="translate(131.858624, 289.781964)"><g><path d="M 7.671875 0 C 8.359375 0 8.945312 -0.238281 9.4375 -0.71875 C 9.925781 -1.207031 10.171875 -1.800781 10.171875 -2.5 L 10.171875 -7.84375 L 8.921875 -7.84375 L 8.921875 -2.5 C 8.921875 -2.144531 8.796875 -1.847656 8.546875 -1.609375 C 8.304688 -1.367188 8.015625 -1.25 7.671875 -1.25 L 3.3125 -1.25 C 2.96875 -1.25 2.671875 -1.367188 2.421875 -1.609375 C 2.179688 -1.847656 2.0625 -2.144531 2.0625 -2.5 L 2.0625 -7.84375 L 0.828125 -7.84375 L 0.828125 -2.5 C 0.828125 -1.800781 1.066406 -1.207031 1.546875 -0.71875 C 2.035156 -0.238281 2.625 0 3.3125 0 Z M 7.671875 0 "/></g></g></g><g fill="#db2a2a" fill-opacity="1"><g transform="translate(151.817027, 289.781964)"><g><path d="M 4.96875 0 L 3.71875 0 L 3.71875 -6.609375 L 0.171875 -6.609375 L 0.171875 -7.84375 L 8.515625 -7.84375 L 8.515625 -6.609375 L 4.96875 -6.609375 Z M 4.96875 0 "/></g></g></g><g fill="#db2a2a" fill-opacity="1"><g transform="translate(169.466974, 289.781964)"><g><path d="M 10.4375 0 L 9.203125 0 L 9.203125 -2.203125 C 9.203125 -2.378906 9.140625 -2.523438 9.015625 -2.640625 C 8.890625 -2.765625 8.742188 -2.828125 8.578125 -2.828125 L 2.34375 -2.828125 L 2.34375 0 L 1.09375 0 L 1.09375 -7.84375 L 8.578125 -7.84375 C 9.085938 -7.84375 9.523438 -7.660156 9.890625 -7.296875 C 10.253906 -6.929688 10.4375 -6.492188 10.4375 -5.984375 L 10.4375 -4.703125 C 10.4375 -4.222656 10.28125 -3.804688 9.96875 -3.453125 C 10.28125 -3.097656 10.4375 -2.679688 10.4375 -2.203125 Z M 8.578125 -4.078125 C 8.742188 -4.078125 8.890625 -4.140625 9.015625 -4.265625 C 9.140625 -4.390625 9.203125 -4.535156 9.203125 -4.703125 L 9.203125 -5.984375 C 9.203125 -6.148438 9.140625 -6.296875 9.015625 -6.421875 C 8.890625 -6.546875 8.742188 -6.609375 8.578125 -6.609375 L 2.34375 -6.609375 L 2.34375 -4.078125 Z M 8.578125 -4.078125 "/></g></g></g><g fill="#db2a2a" fill-opacity="1"><g transform="translate(189.698891, 289.781964)"><g><path d="M 2.34375 0 L 2.34375 -7.84375 L 1.09375 -7.84375 L 1.09375 0 Z M 2.34375 0 "/></g></g></g><g fill="#db2a2a" fill-opacity="1"><g transform="translate(202.102844, 289.781964)"><g><path d="M 4.96875 0 L 3.71875 0 L 3.71875 -6.609375 L 0.171875 -6.609375 L 0.171875 -7.84375 L 8.515625 -7.84375 L 8.515625 -6.609375 L 4.96875 -6.609375 Z M 4.96875 0 "/></g></g></g><g fill="#db2a2a" fill-opacity="1"><g transform="translate(219.75279, 289.781964)"><g><path d="M 2.34375 0 L 2.34375 -7.84375 L 1.09375 -7.84375 L 1.09375 0 Z M 2.34375 0 "/></g></g></g><g fill="#db2a2a" fill-opacity="1"><g transform="translate(232.156743, 289.781964)"><g><path d="M 7.671875 0 C 8.359375 0 8.945312 -0.238281 9.4375 -0.71875 C 9.925781 -1.207031 10.171875 -1.800781 10.171875 -2.5 L 10.171875 -5.359375 C 10.171875 -6.046875 9.925781 -6.628906 9.4375 -7.109375 C 8.945312 -7.597656 8.359375 -7.84375 7.671875 -7.84375 L 3.3125 -7.84375 C 2.625 -7.84375 2.035156 -7.597656 1.546875 -7.109375 C 1.066406 -6.628906 0.828125 -6.046875 0.828125 -5.359375 L 0.828125 -2.5 C 0.828125 -1.800781 1.066406 -1.207031 1.546875 -0.71875 C 2.035156 -0.238281 2.625 0 3.3125 0 Z M 7.671875 -1.25 L 3.3125 -1.25 C 2.96875 -1.25 2.671875 -1.367188 2.421875 -1.609375 C 2.179688 -1.847656 2.0625 -2.144531 2.0625 -2.5 L 2.0625 -5.359375 C 2.0625 -5.703125 2.179688 -5.992188 2.421875 -6.234375 C 2.671875 -6.484375 2.96875 -6.609375 3.3125 -6.609375 L 7.671875 -6.609375 C 8.015625 -6.609375 8.304688 -6.484375 8.546875 -6.234375 C 8.796875 -5.992188 8.921875 -5.703125 8.921875 -5.359375 L 8.921875 -2.5 C 8.921875 -2.144531 8.796875 -1.847656 8.546875 -1.609375 C 8.304688 -1.367188 8.015625 -1.25 7.671875 -1.25 Z M 7.671875 -1.25 "/></g></g></g><g fill="#db2a2a" fill-opacity="1"><g transform="translate(252.115146, 289.781964)"><g><path d="M 10.4375 0 L 9.59375 0 L 2.34375 -5.90625 L 2.34375 0 L 1.09375 0 L 1.09375 -7.84375 L 1.9375 -7.84375 L 9.203125 -1.9375 L 9.203125 -7.84375 L 10.4375 -7.84375 Z M 10.4375 0 "/></g></g></g><g clip-path="url(#2bb88de193)"><path fill="#db2a2a" d="M 225 206.105469 C 225.082031 208.65625 225.558594 211.167969 226.746094 213.527344 C 226.539062 213.117188 219.511719 212.050781 218.53125 211.667969 C 215.664062 210.554688 212.972656 208.980469 210.597656 207.023438 C 204.777344 202.21875 198.390625 194.425781 197.851562 186.546875 C 197.820312 186.125 197.804688 185.6875 197.601562 185.316406 C 197.398438 184.945312 196.9375 184.679688 196.550781 184.847656 C 196.613281 186.433594 196.675781 188.019531 196.738281 189.605469 C 196.746094 189.84375 196.757812 190.085938 196.691406 190.316406 C 196.269531 191.742188 192.039062 192.792969 190.816406 193.191406 C 188.375 193.984375 185.855469 194.441406 183.285156 194.488281 C 182.347656 194.503906 181.449219 194.4375 180.570312 194.335938 C 180.261719 194.210938 179.9375 194.113281 179.621094 194.003906 C 178.796875 193.726562 177.96875 193.457031 177.144531 193.179688 C 173.25 190.761719 169.714844 188.441406 166.949219 184.671875 C 166.765625 184.421875 166.453125 184.132812 166.183594 184.292969 C 165.976562 184.417969 165.980469 184.714844 166.015625 184.953125 C 166.3125 187.035156 167.269531 188.710938 168.148438 190.542969 C 164.792969 190.273438 161.050781 189.214844 157.738281 188.441406 C 155.042969 187.816406 152.523438 186.902344 150.554688 184.878906 C 147.054688 181.300781 146.839844 175.746094 147.148438 170.714844 C 147.105469 171.410156 149.429688 172.863281 149.863281 173.160156 C 150.148438 173.355469 150.5 173.546875 150.820312 173.414062 C 151.441406 173.148438 151.074219 172.210938 150.667969 171.671875 C 147.949219 168.058594 147.339844 163.191406 148.042969 158.71875 C 148.945312 152.996094 151.570312 147.378906 154.4375 142.390625 C 155.191406 141.078125 164.484375 127.363281 164.71875 127.554688 C 166.0625 128.648438 167.515625 129.609375 169.058594 130.417969 C 169.835938 130.820312 170.632812 131.191406 171.449219 131.519531 C 172.675781 132.011719 173.945312 132.40625 175.253906 132.707031 C 175.003906 141.851562 174.90625 151.101562 171.398438 159.683594 C 171.191406 160.183594 170.976562 160.671875 170.753906 161.148438 C 170.683594 161.296875 170.613281 161.433594 170.542969 161.578125 C 167.898438 166.972656 163.570312 171.683594 158.863281 175.347656 C 158.585938 175.5625 158.300781 175.785156 158.136719 176.09375 C 157.972656 176.40625 157.976562 176.835938 158.242188 177.066406 C 158.535156 177.324219 158.984375 177.230469 159.355469 177.113281 C 163.910156 175.667969 167.523438 172.570312 170.226562 168.6875 C 170.269531 168.632812 170.308594 168.574219 170.347656 168.519531 C 170.585938 168.167969 170.824219 167.816406 171.050781 167.457031 C 171.113281 167.359375 171.171875 167.261719 171.230469 167.167969 C 171.492188 166.753906 171.742188 166.335938 171.980469 165.914062 C 178.804688 162.511719 186.820312 161.046875 193.957031 164.410156 C 201.734375 168.074219 206.742188 176.597656 212.042969 183.066406 C 212.441406 183.546875 212.863281 184.050781 213.441406 184.285156 C 216.214844 185.417969 214.433594 182.074219 213.917969 181.246094 C 213.863281 181.160156 213.808594 181.074219 213.753906 180.980469 C 211.683594 177.449219 209.324219 174.074219 206.628906 170.992188 C 203.742188 167.703125 200.113281 165.375 197.09375 162.347656 C 200.875 159.386719 208.234375 159.261719 212.800781 159.601562 C 217.914062 159.984375 221.085938 162.054688 224.847656 164.835938 C 224.84375 165.066406 224.84375 165.300781 224.84375 165.535156 C 224.84375 166.019531 224.863281 166.503906 224.886719 166.984375 C 224.890625 166.992188 224.890625 167 224.890625 167.007812 C 225.039062 169.527344 225.507812 171.964844 225.953125 174.449219 C 225.972656 174.570312 225.996094 174.683594 226.015625 174.796875 C 226.050781 174.984375 226.082031 175.167969 226.113281 175.355469 C 226.175781 175.722656 226.238281 176.09375 226.296875 176.464844 C 226.308594 176.558594 226.324219 176.648438 226.34375 176.742188 C 226.40625 177.15625 226.46875 177.578125 226.523438 177.996094 C 227.320312 184.167969 226.953125 190.320312 225.941406 196.441406 C 225.417969 199.59375 224.894531 202.882812 225 206.105469 Z M 162.058594 106.542969 C 162.058594 95.070312 171.328125 85.773438 182.765625 85.773438 C 194.199219 85.773438 203.46875 95.070312 203.46875 106.542969 C 203.46875 118.011719 194.199219 127.308594 182.765625 127.308594 C 180.355469 127.308594 178.039062 126.890625 175.890625 126.132812 C 174.773438 125.734375 173.703125 125.25 172.679688 124.679688 C 166.34375 121.128906 162.058594 114.339844 162.058594 106.542969 Z M 230.414062 213.5625 C 225.664062 211.046875 227.738281 202.171875 228.300781 198.164062 C 228.796875 194.722656 229.289062 191.300781 229.4375 187.832031 C 229.585938 184.238281 229.402344 180.648438 228.878906 177.097656 C 228.257812 172.925781 226.859375 168.851562 227.445312 164.597656 C 227.546875 163.816406 227.054688 163.304688 226.46875 163.125 C 223.785156 158.601562 217.257812 156.992188 212.398438 156.753906 C 206.285156 156.460938 199.539062 157.363281 194.636719 161.261719 C 188.089844 158.394531 179.882812 158.523438 173.789062 162.304688 C 174.238281 161.273438 174.648438 160.246094 175 159.238281 C 177.925781 150.917969 178.171875 141.867188 177.339844 133.097656 C 178.550781 133.273438 179.785156 133.367188 181.042969 133.367188 C 195.335938 133.367188 206.921875 121.742188 206.921875 107.40625 C 206.921875 93.070312 195.335938 81.449219 181.042969 81.449219 C 166.746094 81.449219 155.15625 93.070312 155.15625 107.40625 C 155.15625 114.394531 157.917969 120.734375 162.394531 125.402344 C 156.515625 132.335938 151.210938 140.230469 147.746094 148.582031 C 145.40625 154.230469 143.164062 162.777344 145.921875 168.691406 C 144.667969 173.539062 143.972656 178.664062 146.144531 183.359375 C 148.765625 189.023438 154.527344 190.734375 160.203125 191.757812 C 164.445312 192.515625 168.128906 193.589844 172.1875 195.109375 C 174.917969 196.132812 177.671875 196.882812 180.59375 197.128906 C 186.3125 197.601562 192.550781 196.382812 197.480469 193.289062 C 201.210938 206.882812 215.894531 217.902344 229.910156 216.203125 C 231.285156 216.035156 231.664062 214.222656 230.414062 213.5625 " fill-opacity="1" fill-rule="nonzero"/></g><path fill="#db2a2a" d="M 183.199219 102.214844 C 185.339844 102.214844 187.078125 103.960938 187.078125 106.109375 C 187.078125 108.261719 185.339844 110.003906 183.199219 110.003906 C 181.054688 110.003906 179.316406 108.261719 179.316406 106.109375 C 179.316406 103.960938 181.054688 102.214844 183.199219 102.214844 Z M 182.765625 111.734375 C 185.625 111.734375 187.941406 109.410156 187.941406 106.542969 C 187.941406 103.675781 185.625 101.351562 182.765625 101.351562 C 179.90625 101.351562 177.589844 103.675781 177.589844 106.542969 C 177.589844 109.410156 179.90625 111.734375 182.765625 111.734375 " fill-opacity="1" fill-rule="nonzero"/><path fill="#db2a2a" d="M 169.792969 101.371094 C 171.175781 97.964844 173.957031 95.210938 177.304688 93.839844 C 180.65625 92.453125 184.5 92.484375 187.785156 93.882812 C 191.078125 95.257812 193.730469 97.96875 195.046875 101.230469 C 196.503906 104.433594 196.648438 108.226562 195.386719 111.574219 C 194.148438 114.925781 191.527344 117.75 188.226562 119.246094 C 184.933594 120.746094 181.027344 120.882812 177.609375 119.554688 C 174.195312 118.226562 171.355469 115.496094 169.890625 112.109375 C 168.441406 108.71875 168.410156 104.773438 169.792969 101.371094 Z M 177.089844 120.871094 C 180.808594 122.417969 185.160156 122.4375 188.917969 120.855469 C 192.691406 119.320312 195.828125 116.207031 197.40625 112.378906 C 199.007812 108.566406 199.03125 104.078125 197.421875 100.203125 C 195.714844 96.375 192.449219 93.308594 188.582031 91.863281 C 184.726562 90.382812 180.320312 90.535156 176.613281 92.230469 C 172.886719 93.886719 169.914062 97.074219 168.480469 100.847656 C 166.996094 104.605469 167.085938 108.941406 168.703125 112.625 C 170.261719 116.332031 173.34375 119.375 177.089844 120.871094 " fill-opacity="1" fill-rule="nonzero" /></svg>
                    <h5 class="text-danger" id="logo">Nutrution</h5>
                </a>
            </div>
              

              <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                  <img src="{{asset('storage/product/stronger_nutrition.jpeg')}}" class="img-fluid rounded-top w-25" id="pic" alt="">
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav ms-auto" id="drop" >
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                            
                                <li class="nav-item">
                                    <a class="nav-link"  href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> {{ __('Login') }} </a>
                                    
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        
                            
                        @if (auth()->user()->is_admin===1)
                            
                       
                        <li class="nav-item ">
                            <a  class="nav-link " href="{{route('products.index')}}" >
                                <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                Products
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a  class="nav-link " href="{{route('products.create')}}" >
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                Add Product
                            </a>
                        </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                    {{ Auth::user()->name }}
                                </a>

                                

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="fa fa-sign-out" aria-hidden="true"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endif
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> 
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<footer>
    @include('partiale.footer')
</footer>
</html>
