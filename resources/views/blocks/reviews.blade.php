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

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }} bg-primary py-5">
    <div class="container">
        <p class="text-secondary text-center">"{{$quote}}"</p>
        <p class="text-secondary text-center fw-bold">- {{$customer}}</p>
    </div>
</div>
