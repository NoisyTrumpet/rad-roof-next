
{{--
  Title: Page Header (RR)
  Description: Page Header with headline and style settings
  Category: layout
  Icon: money
  Keywords: page, header, title
--}}

@php
  // ACF
  $title = get_field('title') ?: 'Title...';
@endphp

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }}">
  ... Page Header Block ...
</div>
