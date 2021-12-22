
{{--
  Title: Photo Gallery (RR)
  Description: Photo Gallery with headline and style settings
  Category: layout
  Icon: format-gallery
  Keywords: photo gallery, slider, carousel
--}}

@php
  // ACF
  $title = get_field('title');
  $description = get_field('gallery_desc');
  $titlePadding = get_field('gallery_desc') ? 'mb-3' : 'mb-5';
  $photos = get_field('photos');
  $display = get_field('display');
  $border = get_field('border');
  $padding = get_field('padding');
@endphp

@if ($display === 'carousel')

  <div id="{{ $block['id'] }}" class="{{ $block['classes'] }} photo-gallery-carousel py-@field('padding')">
    @hasfield('title')
      <h2 class="text-center {{ $titlePadding }}">{!! $title !!}</h2>
    @endfield
    @hasfield('gallery_desc')
      <div class="text-center mb-5">{!! $description !!}</div>
    @endfield
    <div class="slider">
      @hasfields('photos')
        @foreach( $photos as $image )
          <a href="{{ $image['url'] }}" data-lightbox="{{ $block['id'] }}">
            <img src="{{ $image['sizes']['thumbnail-large'] }}" alt="{{ $image['alt'] }}" class="img-fluid border-@field('border')" />
          </a>
        @endforeach
      @endhasfields
    </div>
  </div>

@else

  <div id="{{ $block['id'] }}" class="{{ $block['classes'] }} photo-gallery-grid container">
    @hasfield('title')
      <h2 class="text-center {{ $titlePadding }}">{!! $title !!}</h2>
    @endfield
    @hasfield('gallery_desc')
      <div class="text-center mb-5">{!! $description !!}</div>
    @endfield
    <div class="row">
      @hasfields('photos')
        @foreach( $photos as $image )
          <div class="img-wrapper col-6 col-md-4 col-lg-3">
            <a href="{{ $image['url'] }}" data-lightbox="{{ $block['id'] }}">
              <img src="{{ $image['sizes']['thumbnail-large'] }}" alt="{{ $image['alt'] }}" class="img-fluid border-@field('border')" />
            </a>
          </div>
        @endforeach
      @endhasfields
    </div>
  </div>

@endif