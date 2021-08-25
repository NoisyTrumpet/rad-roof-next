
{{--
  Title: Map (RR)
  Description: Map with headline
  Category: layout
  Icon: money
  Keywords: map
--}}

@php
  // ACF
  $title = get_field('title') ?: 'Title...';
@endphp

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }}">
  ... Map Block ...
</div>
