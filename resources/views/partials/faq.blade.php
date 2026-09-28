{{-- FAQ accordion + FAQPage structured data. Verwacht: $faqs = [['vraag' => '...', 'antwoord' => '...'], ...] --}}
<div class="space-y-4">
    @foreach($faqs as $faq)
        <details class="group border-b border-zwart/10 pb-4">
            <summary class="flex items-center justify-between cursor-pointer py-4 list-none [&::-webkit-details-marker]:hidden">
                <h3 class="font-serif text-lg font-bold pr-4">{{ $faq['vraag'] }}</h3>
                <div class="w-8 h-8 bg-roze-light rounded-full flex items-center justify-center shrink-0 transition-transform duration-300 group-open:rotate-45">
                    <svg class="w-4 h-4 text-roze-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                </div>
            </summary>
            <div class="pb-2">
                <p class="text-zwart/60 leading-relaxed">{{ $faq['antwoord'] }}</p>
            </div>
        </details>
    @endforeach
</div>

@php
    $faqSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => array_map(fn ($faq) => [
            '@type' => 'Question',
            'name' => $faq['vraag'],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => $faq['antwoord']],
        ], $faqs),
    ];
@endphp
<script type="application/ld+json">{!! json_encode($faqSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG) !!}</script>
