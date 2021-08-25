
{{--
  Title: Locations (RR)
  Description: Locations with headline and style settings
  Category: layout
  Icon: money
  Keywords: locations, contact
--}}

@php
  // ACF
  $title = get_field('title') ?: 'Title...';
@endphp

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }}">
  ... Locations Block ...
</div>
