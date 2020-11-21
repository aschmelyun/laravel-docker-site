<section class="text-lg text-gray-600 leading-relaxed mb-12">
    <h2 class="text-3xl text-gray-800 font-bold pb-3 leading-snug lg:leading-relaxed">Full course includes <span class="fancy-underline">22 videos</span></h2>
    <ul class="text-lg text-gray-800 font-normal">
        @foreach($contents as $idx => $content)
            <li class="bg-gray-200 py-3 px-4 border border-white border-l-0 border-r-0 border-t-0 text-base lg:text-lg"><span class="text-gray-500 font-bold">{{ $idx + 1 }}.</span> {{ $content }}</li>
        @endforeach
    </ul>
</section>
