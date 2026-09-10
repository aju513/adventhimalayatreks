<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Advent Himalaya Treks</title>
  <!-- favicon -->
  <link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16" />
  <link rel="shortcut icon" href="favicon/favicon.icon" type="image/x-icon" />
  <link rel="icon" href="favicon/favicon.ico" type="image/x-icon" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Signika:wght@300..700&display=swap" rel="stylesheet">
  <link rel="preload" as="font" type="font/woff2" crossorigin href="/fonts/icomoon/icomoon.woff2?6aeu05" />
  <!-- Fancy App installation -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/fancybox/fancybox.css" />
  <!-- swiper installation -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
  <!-- Vite client for HMR and CSS injection in development -->
  <script type="module" src="http://localhost:5176/@vite/client"></script>
  <!-- Reference processed CSS served by Vite -->
  <link rel="stylesheet" href="http://localhost:5176/css/main.css">
  <!-- JavaScript for functionality -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
  <script type="module" src="http://localhost:5174/js/custom.js"></script>
  <!-- Tocbot CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tocbot@4.18.2/dist/tocbot.css">
  <!-- Tocbot JS -->
  <script src="https://cdn.jsdelivr.net/npm/tocbot@4.18.2/dist/tocbot.min.js"></script>
  <!--date picker CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css" />
  <!--date picker  JS -->
  <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>

  <style>
    @font-face {
      font-family: 'icomoon';
      src: url('/fonts/icomoon/icomoon.eot?6aeu05');
      src: url('/fonts/icomoon/icomoon.eot?6aeu05#iefix') format('embedded-opentype'),
        url('/fonts/icomoon/icomoon.woff2?6aeu05') format('woff2'),
        url('/fonts/icomoon/icomoon.woff?6aeu05') format('woff'),
        url('/fonts/icomoon/icomoon.ttf?6aeu05') format('truetype'),
        url('/fonts/icomoon/icomoon.svg?6aeu05#icomoon') format('svg');
      font-weight: normal;
      font-style: normal;
      font-display: block;
    }

    [class^="icon-"],
    [class*=" icon-"] {
      /* use !important to prevent issues with browser extensions that change fonts */
      font-family: 'icomoon' !important;
      speak: never;
      font-style: normal;
      font-weight: normal;
      font-variant: normal;
      text-transform: none;
      line-height: 1;

      /* Better Font Rendering =========== */
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    .icon-equipment-trekking-pole:before {
      content: "\e944";
    }

    .icon-tag:before {
      content: "\e927";
    }

    .icon-include:before {
      content: "\e904";
    }

    .icon-map-pin-house:before {
      content: "\e947";
    }

    .icon-mail-outline:before {
      content: "\e948";
    }

    .icon-phone-outline:before {
      content: "\e949";
    }

    .icon-calendar:before {
      content: "\e942";
    }

    .icon-gauge:before {
      content: "\e943";
    }

    .icon-paper-plane:before {
      content: "\e940";
    }

    .icon-blog-toc:before {
      content: "\e93f";
    }

    .icon-loading:before {
      content: "\e915";
    }

    .icon-nav-cost-details:before {
      content: "\e934";
    }

    .icon-nav-addon:before {
      content: "\e933";
    }

    .icon-nav-altitiude:before {
      content: "\e935";
    }

    .icon-nav-route:before {
      content: "\e936";
    }

    .icon-nav-itinerary:before {
      content: "\e937";
    }

    .icon-nav-gallery:before {
      content: "\e938";
    }

    .icon-nav-overview:before {
      content: "\e939";
    }

    .icon-nav-faq:before {
      content: "\e93a";
    }

    .icon-nav-additional:before {
      content: "\e93c";
    }

    .icon-nav-review:before {
      content: "\e93d";
    }

    .icon-nav-available:before {
      content: "\e93e";
    }

    .icon-meal:before {
      content: "\e932";
    }

    .icon-distance:before {
      content: "\e931";
    }

    .icon-accomodation:before {
      content: "\e92f";
    }

    .icon-calendar-lines:before {
      content: "\e922";
    }

    .icon-bus:before {
      content: "\e92d";
    }

    .icon-exclude:before {
      content: "\e92e";
      color: #ffac79;
    }

    .icon-flag:before {
      content: "\e928";
    }

    .icon-video:before {
      content: "\e929";
    }

    .icon-gallery:before {
      content: "\e92a";
    }

    .icon-customize-trip:before {
      content: "\e92b";
    }

    .icon-download:before {
      content: "\e92c";
    }

    .icon-group-size:before {
      content: "\e926";
    }

    .icon-star-ratings:before {
      content: "\e925";
      color: #ffc20e;
    }

    .icon-dot-rating:before {
      content: "\e91b";
    }

    .icon-travel-style:before {
      content: "\e91c";
    }

    .icon-trip-grade:before {
      content: "\e91d";
    }

    .icon-best-time:before {
      content: "\e91e";
    }

    .icon-country:before {
      content: "\e91f";
    }

    .icon-duration:before {
      content: "\e920";
    }

    .icon-end:before {
      content: "\e921";
    }

    .icon-max-altitude:before {
      content: "\e923";
    }

    .icon-start:before {
      content: "\e924";
    }

    .icon-envelope-fill:before {
      content: "\e916";
    }

    .icon-phone-fill:before {
      content: "\e918";
    }

    .icon-link:before {
      content: "\e913";
    }

    .icon-share:before {
      content: "\e914";
    }

    .icon-user-outline:before {
      content: "\e912";
    }

    .icon-magnify-glass:before {
      content: "\e910";
    }

    .icon-tik-tok:before {
      content: "\e907";
    }

    .icon-pintrest:before {
      content: "\e909";
      color: #c1404a;
    }

    .icon-youtube:before {
      content: "\e90a";
    }

    .icon-linkedin:before {
      content: "\e90b";
    }

    .icon-instagram:before {
      content: "\e90c";
    }

    .icon-x-logo:before {
      content: "\e90d";
    }

    .icon-twitter:before {
      content: "\e90e";
    }

    .icon-facebook:before {
      content: "\e90f";
    }

    .icon-arrow-right:before {
      content: "\e906";
    }

    .icon-whatsapp-outline:before {
      content: "\e903";
    }

    .icon-chat-outline:before {
      content: "\e905";
    }

    .icon-map-pin:before {
      content: "\e902";
    }

    .icon-info:before {
      content: "\e901";
    }

    .icon-calendar-month:before {
      content: "\e96b";
      color: #4d4d4d;
    }

    .icon-search:before {
      content: "\e941";
    }

    .icon-location-fill:before {
      content: "\e919";
    }

    .icon-slanted-arrow:before {
      content: "\e959";
    }

    .icon-heart-outline:before {
      content: "\e967";
    }

    .icon-star:before {
      content: "\e900";
      color: #ffc20e;
    }

    .icon-cross:before {
      content: "\e911";
      color: #5b518f;
    }

    .icon-burger-menu:before {
      content: "\e930";
      color: #ec6b74;
    }

    .icon-heart-circle:before {
      content: "\e955";
    }

    .icon-angle-down:before {
      content: "\e908";
    }

    .icon-play:before {
      content: "\e93b";
      color: #f7931e;
    }

    .icon-outline-marker:before {
      content: "\e952";
    }

    .icon-envelope-outline:before {
      content: "\e953";
    }

    .icon-minus:before {
      content: "\e917";
    }

    .icon-plus:before {
      content: "\e91a";
    }
  </style>
</head>

<body>

  <main id="main">
