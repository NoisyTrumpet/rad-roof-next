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

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }} bg-light w-100 mx-0 my-10 p-0">
    @hasfield('full_width_image')
        <div class="img-wrapper mx-auto">
            <img src="@field('full_width_image', 'url')" alt="@field('full_width_image', 'alt')" style="max-width: 100%;">
        </div>
    @endfield
</div>