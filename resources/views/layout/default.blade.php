<!DOCTYPE html>
<html lang="en-US">
@include('partials.head')
<body class="antialiased {{ $bodyClasses ?? '' }}">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KH2MK5X"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
@include('partials.intro')
@include('partials.cta')
<div class="container mx-auto mt-8 mb-12 lg:mb-24">
    <div class="w-10/12 lg:w-2/3 mx-auto">
        @include('partials.sections.about')
        @include('partials.sections.contents')
        @include('partials.sections.instructor')
        @include('partials.sections.faq')
        @include('partials.sections.purchase')
        @include('partials.sections.contact')
    </div>
</div>
</body>
</html>