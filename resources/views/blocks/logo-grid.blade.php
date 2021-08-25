
{{--
  Title: Logo Grid (RR)
  Description: Logo Grid with headline and style settings
  Category: layout
  Icon: money
  Keywords: logos, grid
--}}

@php
  // ACF
  $title = get_field('title') ?: 'Title...';
@endphp

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }}">
  ... Logo Grid Block ...
</div>
