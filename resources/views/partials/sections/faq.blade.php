<section class="text-lg text-gray-600 leading-relaxed mb-6">
    <h2 class="text-3xl text-gray-800 font-bold pb-6 leading-snug lg:leading-relaxed">Frequently Asked <span class="fancy-underline">Questions</span></h2>
    @foreach($faqs as $faq)
        <h5 class="text-lg text-gray-800 font-semibold pb-2 leading-none italic">{{ $faq->question }}</h5>
        <p class="pb-8">{{ $faq->answer }}</p>
    @endforeach
</section>