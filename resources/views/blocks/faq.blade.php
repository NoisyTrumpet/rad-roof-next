
{{--
  Title: FAQ (RR)
  Description: FAQ with headline
  Category: layout
  Icon: money
  Keywords: faq
--}}

@php
  // ACF
  $title = get_field('title') ?: 'Title...';
@endphp

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }}">
  ... FAQ Block ...
</div>
