<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{{ $description }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $title }}" />
    <meta property="og:description" content="{{ $description }}" />
    <meta property="og:url" content="https://laraveldocker.com/" />
    <meta property="og:site_name" content="laraveldocker.com" />
    <meta property="og:image" content="https://laraveldocker.com/assets/images/laraveldocker-preview-image.png" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="{{ $description }}" />
    <meta name="twitter:title" content="{{ $title }}" />
    <meta name="twitter:site" content="@aschmelyun" />
    <meta name="twitter:image" content="https://laraveldocker.com/assets/images/laraveldocker-preview-image.png" />

    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon-16x16.png">
    <meta name="theme-color" content="#2d3748">

    <link rel="stylesheet" type="text/css" href="{{ $mix['/assets/css/app.css'] }}">
    <link
        rel="preload"
        href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;600i;700&display=swap"
        as="style"
        onload="this.onload=null;this.rel='stylesheet'"
    />
    <noscript>
        <link
            href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;600i;700&display=swap"
            rel="stylesheet"
            type="text/css"
        />
    </noscript>
    <script type="text/javascript" src="https://gumroad.com/js/gumroad.js"></script>
</head>