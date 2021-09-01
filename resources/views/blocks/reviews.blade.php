{{--
  Title: Reviews (RR)
  Description: Reviews with headline
  Category: layout
  Icon: money
  Keywords: reviews, testimonial, quote
--}}

@php
// ACF
$title = get_field('title') ?: 'Title...';
$quote = get_field('quote') ?: 'Quote...';
$customer = get_field('customer') ?: 'Customer...';
@endphp

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }} bg-primary py-5 position-relative">
    <div class="container">
        <p class="text-secondary text-center">"{{$quote}}"</p>
        <p class="text-secondary text-center fw-bold">- {{$customer}}</p>
    </div>
    <div class="angle-wrapper" style="position: absolute; top: 99.6%; bottom: 0; left: 0; right: 0; max-width: 100%; width: 100%; z-index: 3;">
        <svg id="abe06b65-4903-4271-bb11-e4807cf81d84" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920.31 200.62">
            <polygon points="960 0.39 0 0 0 200.39 960 0.39" style="fill: #2f372b" />
            <polygon points="959.33 0.39 1920 0.05 1920.31 200.62 959.33 0.39" style="fill: #2f372b" />
        </svg>
    </div>

</div>
