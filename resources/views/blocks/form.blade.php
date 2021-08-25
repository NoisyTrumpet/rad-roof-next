
{{--
  Title: Form (RR)
  Description: Form with headline and subtitle
  Category: layout
  Icon: money
  Keywords: form, contact
--}}

@php
  // ACF
  $title = get_field('title') ?: 'Title...';
@endphp

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }}">
  ... Form Block ...
</div>
