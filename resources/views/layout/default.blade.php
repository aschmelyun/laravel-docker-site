<!DOCTYPE html>
<html lang="en-US">
@include('partials.head')
<body class="antialiased {{ $bodyClasses ?? '' }}">
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