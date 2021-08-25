
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
@endphp

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }}">
  ... Reviews Block ...
</div>
