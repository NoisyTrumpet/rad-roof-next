
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
  $photos = get_field('photos');
  $display = get_field('display');
@endphp

@if ($display === 'carousel')

  <div id="{{ $block['id'] }}" class="{{ $block['classes'] }} photo-gallery-carousel">
    @hasfield('title')
      <h2 class="text-center mb-5">{!! $title !!}</h2>
    @endfield
    <div class="slider">
      @hasfields('photos')
        @foreach( $photos as $image )
          <a href="{{ $image['url'] }}" data-lightbox="{{ $block['id'] }}">
            <img src="{{ $image['sizes']['thumbnail-large'] }}" alt="{{ $image['alt'] }}" class="img-fluid" />
          </a>
        @endforeach
      @endhasfields
    </div>
  </div>

@else

  <div id="{{ $block['id'] }}" class="{{ $block['classes'] }} photo-gallery-grid container">
    @hasfield('title')
      <h2 class="text-center mb-5">{!! $title !!}</h2>
    @endfield
    <div class="row">
      @hasfields('photos')
        @foreach( $photos as $image )
          <div class="col-6 col-md-4 col-lg-3">
            <a href="{{ $image['url'] }}" data-lightbox="{{ $block['id'] }}">
              <img src="{{ $image['sizes']['thumbnail-large'] }}" alt="{{ $image['alt'] }}" class="img-fluid" />
            </a>
          </div>
        @endforeach
      @endhasfields
    </div>
  </div>

@endif