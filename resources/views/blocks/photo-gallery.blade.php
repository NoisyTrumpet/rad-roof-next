
{{--
  Title: Photo Gallery (RR)
  Description: Photo Gallery with headline and style settings
  Category: layout
  Icon: money
  Keywords: photo gallery, slider, carousel
--}}

@php
  // ACF
  $title = get_field('title') ?: 'Title...';
@endphp

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }}">
  ... Photo Gallery Block ...
</div>
