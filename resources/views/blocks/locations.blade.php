{{--
  Title: Locations (RR)
  Description: Locations with headline and style settings
  Category: layout
  Icon: money
  Keywords: locations, contact
--}}

@query([
'post_type' => 'location'
])

@php
  // ACF
  $title = get_field('title') ?: 'Title...';
@endphp

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }}">
  <div class="position-relative text-center">
    <h2 class="mb-4">@field('title')</h2>
  <div class="d-flex position-absolute locationBg" style="background-image: @hasfield('section_bg_image', 'url')url(@field('section_bg_image', 'url'))@endfield; background-size: cover; background-position: center;">
    <div class="w-100 bgCol-left"></div>
    <div class="w-100 bgCol-right"></div>
  </div>
  <div class="container-fluid locationsBlock">
    <div class="d-flex flex-column flex-md-row justify-content-around align-items-center p-2">
      <div class="p-2 txMap">
        <img src="@field('texas_map', 'url')" alt="@field('texas_map', 'alt')" width="100%" height="auto" />
      </div>
      @posts
      <div class="m-2">
        <h3><a class="text-secondary text-uppercase" href="@permalink">@title</a></h3>
        <p><a class="addressLink" href="@php the_field('address_link', get_the_ID()); @endphp">@php the_field('address_first', get_the_ID()); @endphp</a></p>
        <p class="text-light">@php the_field('address_second', get_the_ID()); @endphp</p>
        </a>
        <p><a class="phoneLink text-bold" href="@php the_field('phone_link', get_the_ID()); @endphp">@php the_field('phone_number', get_the_ID()); @endphp</a></p>
        <p class="text-light">@php the_field('days', get_the_ID()); @endphp</p>
        <p class="text-light">@php the_field('open_time', get_the_ID()); @endphp - @php the_field('close_time', get_the_ID()); @endphp</p>
      </div>
      @endposts
    </div>
  </div>
  </div>
</div>
