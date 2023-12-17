<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="{{ asset('assets/images/supports.png') }}">


  <title>Jobboard</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-seo-dream.css">
  <link rel="stylesheet" href="assets/css/animated.css">
  <link rel="stylesheet" href="assets/css/owl.css">

  <style>
    ul.nav li {
      background-color: #0000;
    }

    /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
    *,
    ::after,
    ::before {
      box-sizing: border-box;
      border-width: 0;
      border-style: solid;
      border-color: #e5e7eb
    }

    ::after,
    ::before {
      --tw-content: ''
    }

    html {
      line-height: 1.5;
      -webkit-text-size-adjust: 100%;
      -moz-tab-size: 4;
      tab-size: 4;
      font-family: Figtree, sans-serif;
      font-feature-settings: normal
    }

    body {
      margin: 0;
      line-height: inherit
    }

    hr {
      height: 0;
      color: inherit;
      border-top-width: 1px
    }

    abbr:where([title]) {
      -webkit-text-decoration: underline dotted;
      text-decoration: underline dotted
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-size: inherit;
      font-weight: inherit
    }

    a {
      color: inherit;
      text-decoration: inherit
    }

    b,
    strong {
      font-weight: bolder
    }

    code,
    kbd,
    pre,
    samp {
      font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
      font-size: 1em
    }

    small {
      font-size: 80%
    }

    sub,
    sup {
      font-size: 75%;
      line-height: 0;
      position: relative;
      vertical-align: baseline
    }

    sub {
      bottom: -.25em
    }

    sup {
      top: -.5em
    }

    table {
      text-indent: 0;
      border-color: inherit;
      border-collapse: collapse
    }

    button,
    input,
    optgroup,
    select,
    textarea {
      font-family: inherit;
      font-size: 100%;
      font-weight: inherit;
      line-height: inherit;
      color: inherit;
      margin: 0;
      padding: 0
    }

    button,
    select {
      text-transform: none
    }

    [type=button],
    [type=reset],
    [type=submit],
    button {
      -webkit-appearance: button;
      background-color: transparent;
      background-image: none
    }

    :-moz-focusring {
      outline: auto
    }

    :-moz-ui-invalid {
      box-shadow: none
    }

    progress {
      vertical-align: baseline
    }

    ::-webkit-inner-spin-button,
    ::-webkit-outer-spin-button {
      height: auto
    }

    [type=search] {
      -webkit-appearance: textfield;
      outline-offset: -2px
    }

    ::-webkit-search-decoration {
      -webkit-appearance: none
    }

    ::-webkit-file-upload-button {
      -webkit-appearance: button;
      font: inherit
    }

    summary {
      display: list-item
    }

    blockquote,
    dd,
    dl,
    figure,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    hr,
    p,
    pre {
      margin: 0
    }

    fieldset {
      margin: 0;
      padding: 0
    }

    legend {
      padding: 0
    }

    menu,
    ol,
    ul {
      list-style: none;
      margin: 0;
      padding: 0
    }

    textarea {
      resize: vertical
    }

    input::placeholder,
    textarea::placeholder {
      opacity: 1;
      color: #9ca3af
    }

    [role=button],
    button {
      cursor: pointer
    }

    :disabled {
      cursor: default
    }

    audio,
    canvas,
    embed,
    iframe,
    img,
    object,
    svg,
    video {
      display: block;
      vertical-align: middle
    }

    img,
    video {
      max-width: 100%;
      height: auto
    }

    [hidden] {
      display: none
    }

    *,
    ::before,
    ::after {
      --tw-border-spacing-x: 0;
      --tw-border-spacing-y: 0;
      --tw-translate-x: 0;
      --tw-translate-y: 0;
      --tw-rotate: 0;
      --tw-skew-x: 0;
      --tw-skew-y: 0;
      --tw-scale-x: 1;
      --tw-scale-y: 1;
      --tw-pan-x: ;
      --tw-pan-y: ;
      --tw-pinch-zoom: ;
      --tw-scroll-snap-strictness: proximity;
      --tw-ordinal: ;
      --tw-slashed-zero: ;
      --tw-numeric-figure: ;
      --tw-numeric-spacing: ;
      --tw-numeric-fraction: ;
      --tw-ring-inset: ;
      --tw-ring-offset-width: 0px;
      --tw-ring-offset-color: #fff;
      --tw-ring-color: rgb(59 130 246 / 0.5);
      --tw-ring-offset-shadow: 0 0 #0000;
      --tw-ring-shadow: 0 0 #0000;
      --tw-shadow: 0 0 #0000;
      --tw-shadow-colored: 0 0 #0000;
      --tw-blur: ;
      --tw-brightness: ;
      --tw-contrast: ;
      --tw-grayscale: ;
      --tw-hue-rotate: ;
      --tw-invert: ;
      --tw-saturate: ;
      --tw-sepia: ;
      --tw-drop-shadow: ;
      --tw-backdrop-blur: ;
      --tw-backdrop-brightness: ;
      --tw-backdrop-contrast: ;
      --tw-backdrop-grayscale: ;
      --tw-backdrop-hue-rotate: ;
      --tw-backdrop-invert: ;
      --tw-backdrop-opacity: ;
      --tw-backdrop-saturate: ;
      --tw-backdrop-sepia:
    }

    ::-webkit-backdrop {
      --tw-border-spacing-x: 0;
      --tw-border-spacing-y: 0;
      --tw-translate-x: 0;
      --tw-translate-y: 0;
      --tw-rotate: 0;
      --tw-skew-x: 0;
      --tw-skew-y: 0;
      --tw-scale-x: 1;
      --tw-scale-y: 1;
      --tw-pan-x: ;
      --tw-pan-y: ;
      --tw-pinch-zoom: ;
      --tw-scroll-snap-strictness: proximity;
      --tw-ordinal: ;
      --tw-slashed-zero: ;
      --tw-numeric-figure: ;
      --tw-numeric-spacing: ;
      --tw-numeric-fraction: ;
      --tw-ring-inset: ;
      --tw-ring-offset-width: 0px;
      --tw-ring-offset-color: #fff;
      --tw-ring-color: rgb(59 130 246 / 0.5);
      --tw-ring-offset-shadow: 0 0 #0000;
      --tw-ring-shadow: 0 0 #0000;
      --tw-shadow: 0 0 #0000;
      --tw-shadow-colored: 0 0 #0000;
      --tw-blur: ;
      --tw-brightness: ;
      --tw-contrast: ;
      --tw-grayscale: ;
      --tw-hue-rotate: ;
      --tw-invert: ;
      --tw-saturate: ;
      --tw-sepia: ;
      --tw-drop-shadow: ;
      --tw-backdrop-blur: ;
      --tw-backdrop-brightness: ;
      --tw-backdrop-contrast: ;
      --tw-backdrop-grayscale: ;
      --tw-backdrop-hue-rotate: ;
      --tw-backdrop-invert: ;
      --tw-backdrop-opacity: ;
      --tw-backdrop-saturate: ;
      --tw-backdrop-sepia:
    }

    ::backdrop {
      --tw-border-spacing-x: 0;
      --tw-border-spacing-y: 0;
      --tw-translate-x: 0;
      --tw-translate-y: 0;
      --tw-rotate: 0;
      --tw-skew-x: 0;
      --tw-skew-y: 0;
      --tw-scale-x: 1;
      --tw-scale-y: 1;
      --tw-pan-x: ;
      --tw-pan-y: ;
      --tw-pinch-zoom: ;
      --tw-scroll-snap-strictness: proximity;
      --tw-ordinal: ;
      --tw-slashed-zero: ;
      --tw-numeric-figure: ;
      --tw-numeric-spacing: ;
      --tw-numeric-fraction: ;
      --tw-ring-inset: ;
      --tw-ring-offset-width: 0px;
      --tw-ring-offset-color: #fff;
      --tw-ring-color: rgb(59 130 246 / 0.5);
      --tw-ring-offset-shadow: 0 0 #0000;
      --tw-ring-shadow: 0 0 #0000;
      --tw-shadow: 0 0 #0000;
      --tw-shadow-colored: 0 0 #0000;
      --tw-blur: ;
      --tw-brightness: ;
      --tw-contrast: ;
      --tw-grayscale: ;
      --tw-hue-rotate: ;
      --tw-invert: ;
      --tw-saturate: ;
      --tw-sepia: ;
      --tw-drop-shadow: ;
      --tw-backdrop-blur: ;
      --tw-backdrop-brightness: ;
      --tw-backdrop-contrast: ;
      --tw-backdrop-grayscale: ;
      --tw-backdrop-hue-rotate: ;
      --tw-backdrop-invert: ;
      --tw-backdrop-opacity: ;
      --tw-backdrop-saturate: ;
      --tw-backdrop-sepia:
    }

    .relative {
      position: relative
    }

    .mx-auto {
      margin-left: auto;
      margin-right: auto
    }

    .mx-6 {
      margin-left: 1.5rem;
      margin-right: 1.5rem
    }

    .ml-4 {
      margin-left: 1rem
    }

    .mt-16 {
      margin-top: 4rem
    }

    .mt-6 {
      margin-top: 1.5rem
    }

    .mt-4 {
      margin-top: 1rem
    }

    .-mt-px {
      margin-top: -1px
    }

    .mr-1 {
      margin-right: 0.25rem
    }

    .flex {
      display: flex
    }

    .inline-flex {
      display: inline-flex
    }

    .grid {
      display: grid
    }

    .h-16 {
      height: 4rem
    }

    .h-7 {
      height: 1.75rem
    }

    .h-6 {
      height: 1.5rem
    }

    .h-5 {
      height: 1.25rem
    }

    .min-h-screen {
      min-height: 100vh
    }

    .w-auto {
      width: auto
    }

    .w-16 {
      width: 4rem
    }

    .w-7 {
      width: 1.75rem
    }

    .w-6 {
      width: 1.5rem
    }

    .w-5 {
      width: 1.25rem
    }

    .max-w-7xl {
      max-width: 80rem
    }

    .shrink-0 {
      flex-shrink: 0
    }

    .scale-100 {
      --tw-scale-x: 1;
      --tw-scale-y: 1;
      transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
    }

    .grid-cols-1 {
      grid-template-columns: repeat(1, minmax(0, 1fr))
    }

    .items-center {
      align-items: center
    }

    .justify-center {
      justify-content: center
    }

    .gap-6 {
      gap: 1.5rem
    }

    .gap-4 {
      gap: 1rem
    }

    .self-center {
      align-self: center
    }

    .rounded-lg {
      border-radius: 0.5rem
    }

    .rounded-full {
      border-radius: 9999px
    }

    .bg-gray-100 {
      --tw-bg-opacity: 1;
      background-color: rgb(243 244 246 / var(--tw-bg-opacity))
    }

    .bg-white {
      --tw-bg-opacity: 1;
      background-color: rgb(255 255 255 / var(--tw-bg-opacity))
    }

    .bg-red-50 {
      --tw-bg-opacity: 1;
      background-color: rgb(254 242 242 / var(--tw-bg-opacity))
    }

    .bg-dots-darker {
      background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
    }

    .from-gray-700\/50 {
      --tw-gradient-from: rgb(55 65 81 / 0.5);
      --tw-gradient-to: rgb(55 65 81 / 0);
      --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
    }

    .via-transparent {
      --tw-gradient-to: rgb(0 0 0 / 0);
      --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
    }

    .bg-center {
      background-position: center
    }

    .stroke-red-500 {
      stroke: #ef4444
    }

    .stroke-gray-400 {
      stroke: #9ca3af
    }

    .p-6 {
      padding: 1.5rem
    }

    .px-6 {
      padding-left: 1.5rem;
      padding-right: 1.5rem
    }

    .text-center {
      text-align: center
    }

    .text-right {
      text-align: right
    }

    .text-xl {
      font-size: 1.25rem;
      line-height: 1.75rem
    }

    .text-sm {
      font-size: 0.875rem;
      line-height: 1.25rem
    }

    .font-semibold {
      font-weight: 600
    }

    .leading-relaxed {
      line-height: 1.625
    }

    .text-gray-600 {
      --tw-text-opacity: 1;
      color: rgb(75 85 99 / var(--tw-text-opacity))
    }

    .text-gray-900 {
      --tw-text-opacity: 1;
      color: rgb(17 24 39 / var(--tw-text-opacity))
    }

    .text-gray-500 {
      --tw-text-opacity: 1;
      color: rgb(107 114 128 / var(--tw-text-opacity))
    }

    .underline {
      -webkit-text-decoration-line: underline;
      text-decoration-line: underline
    }

    .antialiased {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale
    }

    .shadow-2xl {
      --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
      --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
    }

    .shadow-gray-500\/20 {
      --tw-shadow-color: rgb(107 114 128 / 0.2);
      --tw-shadow: var(--tw-shadow-colored)
    }

    .transition-all {
      transition-property: all;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 150ms
    }

    .selection\:bg-red-500 *::selection {
      --tw-bg-opacity: 1;
      background-color: rgb(239 68 68 / var(--tw-bg-opacity))
    }

    .selection\:text-white *::selection {
      --tw-text-opacity: 1;
      color: rgb(255 255 255 / var(--tw-text-opacity))
    }

    .selection\:bg-red-500::selection {
      --tw-bg-opacity: 1;
      background-color: rgb(239 68 68 / var(--tw-bg-opacity))
    }

    .selection\:text-white::selection {
      --tw-text-opacity: 1;
      color: rgb(255 255 255 / var(--tw-text-opacity))
    }

    .hover\:text-gray-900:hover {
      --tw-text-opacity: 1;
      color: rgb(17 24 39 / var(--tw-text-opacity))
    }

    .hover\:text-gray-700:hover {
      --tw-text-opacity: 1;
      color: rgb(55 65 81 / var(--tw-text-opacity))
    }

    .focus\:rounded-sm:focus {
      border-radius: 0.125rem
    }

    .focus\:outline:focus {
      outline-style: solid
    }

    .focus\:outline-2:focus {
      outline-width: 2px
    }

    .focus\:outline-red-500:focus {
      outline-color: #ef4444
    }

    .group:hover .group-hover\:stroke-gray-600 {
      stroke: #4b5563
    }

    .z-10 {
      z-index: 10
    }

    @media (prefers-reduced-motion: no-preference) {
      .motion-safe\:hover\:scale-\[1\.01\]:hover {
        --tw-scale-x: 1.01;
        --tw-scale-y: 1.01;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
      }
    }

    @media (prefers-color-scheme: dark) {
      .dark\:bg-gray-900 {
        --tw-bg-opacity: 1;
        background-color: rgb(17 24 39 / var(--tw-bg-opacity))
      }

      .dark\:bg-gray-800\/50 {
        background-color: rgb(31 41 55 / 0.5)
      }

      .dark\:bg-red-800\/20 {
        background-color: rgb(153 27 27 / 0.2)
      }

      .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
      }

      .dark\:bg-gradient-to-bl {
        background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
      }

      .dark\:stroke-gray-600 {
        stroke: #4b5563
      }

      .dark\:text-gray-400 {
        --tw-text-opacity: 1;
        color: rgb(156 163 175 / var(--tw-text-opacity))
      }

      .dark\:text-white {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity))
      }

      .dark\:shadow-none {
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
      }

      .dark\:ring-1 {
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
      }

      .dark\:ring-inset {
        --tw-ring-inset: inset
      }

      .dark\:ring-white\/5 {
        --tw-ring-color: rgb(255 255 255 / 0.05)
      }

      .dark\:hover\:text-white:hover {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity))
      }

      .group:hover .dark\:group-hover\:stroke-gray-400 {
        stroke: #9ca3af
      }
    }

    @media (min-width: 640px) {
      .sm\:fixed {
        position: fixed
      }

      .sm\:top-0 {
        top: 0px
      }

      .sm\:right-0 {
        right: 0px
      }

      .sm\:ml-0 {
        margin-left: 0px
      }

      .sm\:flex {
        display: flex
      }

      .sm\:items-center {
        align-items: center
      }

      .sm\:justify-center {
        justify-content: center
      }

      .sm\:justify-between {
        justify-content: space-between
      }

      .sm\:text-left {
        text-align: left
      }

      .sm\:text-right {
        text-align: right
      }
    }

    @media (min-width: 768px) {
      .md\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr))
      }
    }

    @media (min-width: 1024px) {
      .lg\:gap-8 {
        gap: 2rem
      }

      .lg\:p-8 {
        padding: 2rem
      }
    }
  </style>
</head>

<body class="antialised">

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-11">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="/" class="logo">
              <h4>Epi.Job</h4>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#about">About Us</a></li>
              <li class="scroll-to-section"><a href="#services">Jobs</a></li>
              <li class="scroll-to-section"><a href="#contact">Contact Us</a></li>
              <li>
                <div class="main-blue-button" style="display:inline-block;">
                  @if (Route::has('login'))
                  <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-center z-10 flex space-x-4">
                    @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                    &nbsp;&nbsp;
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                    @endauth
                  </div>
                  @endif
                </div>
              </li>
        </div>
        </ul>
        <!-- ***** Menu End ***** -->
        </nav>
      </div>
    </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>EpiJob • Apply for the job that suits you</h2>
                  </div>
                  <div class="col-lg-12">
                    <div class="main-green-button scroll-to-section">
                      <a href="#about">Discover EpiJob</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/banner-right-image.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="features" class="features section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="features-content">
            <div class="row">
              <div class="col-lg-3">
                <div class="features-item first-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0s">
                  <div class="first-number number">
                    <h6>01</h6>
                  </div>
                  <div class="icon"></div>
                  <h4>Reach Out</h4>
                  <div class="line-dec"></div>
                  <p>We help you to find the job that suits you.</p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="features-item second-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                  <div class="second-number number">
                    <h6>02</h6>
                  </div>
                  <div class="icon"></div>
                  <h4>Develop a Strategy</h4>
                  <div class="line-dec"></div>
                  <p>Our team does everything possible to offer you the best jobs for the professions of the future.</p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="features-item third-feature wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                  <div class="third-number number">
                    <h6>03</h6>
                  </div>
                  <div class="icon">
                    <img src="{{asset('assets/images/productivite.png')}}" alt="">
                  </div>
                  <h4>Productivite</h4>
                  <div class="line-dec"></div>
                  <p>with exceptional productivity we ensure follow-up of your job search efforts</p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="features-item fourth-feature last-features-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                  <div class="fourth-number number">
                    <h6>04</h6>
                  </div>
                  <div class="icon">
                    <img src="{{asset('assets/images/une-analyse.png')}}" alt="">
                  </div>
                  <h4>Analyze the result</h4>
                  <div class="line-dec"></div>
                  <p>We analyze the most popular jobs to offer you the best.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="skills-content">
            <div class="row">
              <div class="col-lg-3">
                <div class="skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                  <div class="progress" data-percentage="100">
                    <span class="progress-left">
                      <span class="progress-bar"></span>
                    </span>
                    <span class="progress-right">
                      <span class="progress-bar"></span>
                    </span>
                    <div class="progress-value">
                      <div>
                        100%<br>
                        <span>Expertise</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                  <div class="progress" data-percentage="90">
                    <span class="progress-left">
                      <span class="progress-bar"></span>
                    </span>
                    <span class="progress-right">
                      <span class="progress-bar"></span>
                    </span>
                    <div class="progress-value">
                      <div>
                        90%<br>
                        <span>Reliability</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                  <div class="progress" data-percentage="90">
                    <span class="progress-left">
                      <span class="progress-bar"></span>
                    </span>
                    <span class="progress-right">
                      <span class="progress-bar"></span>
                    </span>
                    <div class="progress-value">
                      <div>
                        90%<br>
                        <span>Our will</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="skill-item last-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                  <div class="progress" data-percentage="90">
                    <span class="progress-left">
                      <span class="progress-bar"></span>
                    </span>
                    <span class="progress-right">
                      <span class="progress-bar"></span>
                    </span>
                    <div class="progress-value">
                      <div>
                        90%<br>
                        <span>Your success</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
            <img src="assets/images/about-left-image.png" alt="">
          </div>
        </div>
        <div class="col-lg-6 align-self-center wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
          <div class="section-heading">
            <h6>About Us</h6>
            <h2>From <em>Epitech</em>, Epi•Job is a web site realised by <span>DePaul</span> and <span>Lys</span></h2>
          </div>
          <div class="row">
            <div class="col-lg-4 col-sm-4">
              <div class="about-item">
                <h4>2000+</h4>
                <h6>Partner companies</h6>
              </div>
            </div>
            <div class="col-lg-4 col-sm-4">
              <div class="about-item">
                <h4>7000+</h4>
                <h6>Users in France</h6>
              </div>
            </div>
            <div class="col-lg-4 col-sm-4">
              <div class="about-item">
                <h4>5000+</h4>
                <h6>Jobs found</h6>
              </div>
            </div>
          </div>
          <p>EpiJob is a site created for all your job searches in the field of IT and others by DePaul and Lys developer in training at Epitech Technology.</p>
          <div class="main-green-button"><a href="https://www.epitech.eu/">Discover Epitech</a></div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="our-services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h6>Main jobs</h6>
            <h2>Discover What We Do &amp; <span>Offer</span> To Our <em>Clients</em></h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
          <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="row">
              <div class="col-lg-4">
                <div class="icon">
                  <img src="assets/images/service-icon-01.png" alt="">
                </div>
              </div>
              <div class="col-lg-8">
                <div class="right-content">
                  <h4>Software developper Front-End</h4>
                  <p>Create exceptional and engaging user interfaces for our innovative products.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
            <div class="row">
              <div class="col-lg-4">
                <div class="icon">
                  <img src="assets/images/service-icon-02.png" alt="">
                </div>
              </div>
              <div class="col-lg-8">
                <div class="right-content">
                  <h4>Software developper Back-End</h4>
                  <p>Optimize, manage data and ensure solid foundations for our dynamic systems.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="row">
              <div class="col-lg-4">
                <div class="icon">
                  <img src="assets/images/service-icon-03.png" alt="">
                </div>
              </div>
              <div class="col-lg-8">
                <div class="right-content">
                  <h4>Software developper Full Stack</h4>
                  <p>From front to back, develop complete solutions for versatile projects.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="main-blue-button text-center"><a href="/login">MORE</a></div>
      </div>
    </div>
  </div>

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                  <h6>Contact Us</h6>
                  <h2>Fill Out The Form Below To <span>Get</span> In <em>Touch</em> With Us</h2>
                </div>
              </div>
              <form action="{{ route('send.email') }}" method="post">
                @csrf
                <div class="col-lg-9">
                  <div class="row">
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="surname" name="first_name" id="first_name" placeholder="Surname" autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="subject" name="subject" id="subject" placeholder="Subject" autocomplete="on">
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <textarea name="content" type="text" class="form-control" id="content" placeholder="Message" required=""></textarea>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="main-button ">Send Message Now</button>
                      </fieldset>
                    </div>
                    <!-- if success -->
                    <div class="btn mb-3" style="padding-top: 5px;padding-bottom: 5px;">
                      @if (Session::has('success'))
                      <div class="alert alert-success" role="alert" id="success-alert">
                        <ul>
                          <li>{{ Session::get('success') }}</li>
                        </ul>
                      </div>
                      @endif
                    </div>
                    <!-- if error -->
                    <div class="btn mb-3" style="padding-top: 5px;padding-bottom: 5px;">
                      @if (Session::has('error'))
                      <div class="alert alert-danger" role="alert" id="success-alert">
                        <ul>
                          <li>{{ Session::get('error') }}</li>
                        </ul>
                      </div>
                      @endif
                    </div>
                  </div>
                </div>
              </form>
              <div class="col-lg-3">
                <div class="contact-info">
                  <ul>
                    <li>
                      <div class="icon">
                        <img src="assets/images/contact-icon-01.png" alt="email icon">
                      </div>
                      <a href="#">info@epijob.eu</a>
                    </li>
                    <li>
                      <div class="icon">
                        <img src="assets/images/contact-icon-02.png" alt="phone">
                      </div>
                      <a href="#">01 44 08 00 50</a>
                    </li>
                    <li>
                      <div class="icon">
                        <img src="assets/images/contact-icon-03.png" alt="location">
                      </div>
                      <a href="#">24 rue Pasteur, 94270 Le KREMLIN BICÊTRE, France</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2023 PreMSc Epitech - Paris, Ltd. All Rights Reserved.

            <br>Web Designed by <a href="https://www.linkedin.com/in/guy-vincent-de-paul-mouyabi-ba2a0725b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app">DePaulwin!</a> and <a href="www.linkedin.com/in/lysweb">Lys</a>
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

</body>

</html>

<script>
    setTimeout(function() {
      var successAlert = document.getElementById('success-alert');
      if (successAlert) {
        successAlert.style.display = 'none';
      }
    }, 3000); // 3000 millisecondes (3 secondes)
  </script>