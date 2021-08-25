
{{--
  Title: Card Grid (RR)
  Description: Card Grid with headline and cards
  Category: layout
  Icon: money
  Keywords: grid, cards
--}}

@php
  // ACF
  $title = get_field('title') ?: 'Title...';
@endphp

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }}">
  ... Card Grid Block ...
</div>
