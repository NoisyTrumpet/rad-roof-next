
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
  <h3 class="text-center py-3">{!! $title !!}</h3>
    @field('location')
</div>
<style>
    .map p {
        margin-bottom: -10px !important;
    }
</style>
