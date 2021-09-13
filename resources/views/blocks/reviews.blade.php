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

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }} bg-primary pt-5 pb-2">
    <div class="container-fluid quote">
        <p class="text-secondary text-center">"{{$quote}}"</p>
        <p class="text-secondary text-center fw-bold">- {{$customer}}</p>
    </div>
    <div class="angle-wrapper d-flex position-absolute">
        <div class="w-100 bgCol-left"></div>
        <div class="w-100 bgCol-right"></div>
    </div>
</div>
