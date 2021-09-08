{{--
  Title: Full Width Image (RR)
  Description: Full width image
  Category: layout
  Icon: money
  Keywords: image
--}}

@php
// ACF
$image = get_field('full_width_image') ?: 'Image...';
@endphp

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }} bg-light w-100">
    @hasfields('cards')
    @fields('cards')
        <div class="img-wrapper mx-auto">
            <img src="@sub('image', 'url')" style="max-width: 100%;">
        </div>
    @endfields
    @endhasfields
</div>