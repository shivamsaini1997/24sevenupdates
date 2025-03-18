<!doctype html>
<html class="no-js" lang="en">

<head>
    <script async custom-element="amp-auto-ads"
        src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
</script>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @stack('title')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('meta')
    <meta property="og:image" content="{{ asset('frontend/assets/img/logo/24Sevenupdates.png') }}" />
    <meta property="og:url" content="https://24sevenupdates.in/" />
    <meta property="og:type" content="news" />
    <meta property="og:site_name" content="24 Seven Updates" />
    <meta name="robots" content="index, follow"/>
    <meta name="author" content="24 Seven Updates">
    <meta name="publisher" content="24 Seven Updates">
    <!-- CSS here -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VDG55YKSKC"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-VDG55YKSKC');
    </script>
          @if($schemaData)
          <script type="application/ld+json">
              {!! $schemaData !!}
          </script>
      @endif
  
      @if($schemaDataCategory)
          <script type="application/ld+json">
              {!! $schemaDataCategory !!}
          </script>
      @endif
      @if($homedata)
          <script type="application/ld+json">
              {!! $homedata !!}
          </script>
      @endif
      <meta name="google-adsense-account" content="ca-pub-8484522932303009">

      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8484522932303009"
     crossorigin="anonymous"></script>
</head>

<body>
    <amp-auto-ads type="adsense"
        data-ad-client="ca-pub-8484522932303009">
</amp-auto-ads>
