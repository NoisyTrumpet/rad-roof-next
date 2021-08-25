
{{--
  Title: Team (RR)
  Description: Team with headline
  Category: layout
  Icon: money
  Keywords: team, members, staff
--}}

@php
  // ACF
  $title = get_field('title') ?: 'Title...';
@endphp

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }}">
  ... Team Block ...
</div>
