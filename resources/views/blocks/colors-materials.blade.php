{{--
Title: Colors & Materials (RR)
Description: Colors & Materials Block
Category: layout
Icon: color-palette
Keywords: colors, materials, colors & materials, color, material
--}}

@php
$title = get_field('title') ?: 'Colors & Materials Title...';
$cta = get_field('cta') ?: 'Colors & Materials CTA...';
$cta2 = get_field('cta2') ?: 'Colors & Materials CTA2...';
$cta3 = get_field('cta3') ?: 'Colors & Materials CTA3...';
$cta4 = get_field('cta4') ?: 'Colors & Materials CTA4...';
// Get first word of title and make it lowercase
function getFirstWord($string) {
$arr = explode(' ', trim($string));

return isset($arr[0]) ? strtolower($arr[0]) : strtolower($string);
}
@endphp

<div id="{{ $block['id'] }}" class="bg-light pb-5">
  <div class="container-fluid bg-primary py-3">
    <p class="text-white text-center mb-0 h3 serif-font">@field('title')</p>
  </div>
  <div class="container">
    <nav>
      <div class="nav nav-tabs justify-content-center mt-5 mb-3" id="nav-tab" role="tablist">
        @fields('tabs')
        @php $sub_title = get_sub_field_object('title', get_the_ID()); @endphp
        <a class="nav-link text-uppercase @if (getFirstWord($sub_title['value']) === 'composition') active @endif"
          id="nav-{{ getFirstWord($sub_title['value']) }}-tab" data-toggle="tab"
          href="#nav-{{ getFirstWord($sub_title['value']) }}" role="tab"
          aria-controls="nav-{{ getFirstWord($sub_title['value']) }}"
          aria-selected="@if (getFirstWord($sub_title['value']) === 'composition')true @endif">@sub('title')</a>
        @endfields
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      @fields('tabs')
      @php $sub_title = get_sub_field_object('title', get_the_ID()); @endphp
      <div class="tab-pane fade @if (getFirstWord($sub_title['value']) === 'composition') active show @endif"
        id="nav-{{ getFirstWord($sub_title['value']) }}" role="tabpanel"
        aria-labelledby="nav-{{ getFirstWord($sub_title['value']) }}-tab">
        <div class="color-grid">
          <nav>
            <div class="nav" id="colors-nav-tab" role="tablist" aria-orientation="vertical">
              @php $count = 1; @endphp
              @fields('color_options')
              @php
              $sub_color = get_sub_field_object('color', get_the_ID());
              $color_slug = sanitize_title_with_dashes(get_sub_field('color'));
              $colorImage = get_sub_field('color_background_image')['url'];
              $fallbackImage = get_template_directory_uri() . '/assets/images/color-swatch-fallback.jpg';
              $image = $colorImage ?: $fallbackImage;
              @endphp
              <a class="nav-link p-1 @if ($count === 1)active @endif" id="v-pills-{{$color_slug}}-tab"
                data-toggle="pill" href="#v-pills-{{$color_slug}}" role="tab" aria-controls="v-pills-{{$color_slug}}"
                aria-selected="@if ($count === 1)true @endif">
                <img src="{{$image}}" alt="@sub('color')" class="img-fluid">
              </a>
              @php $count++; @endphp
              @endfields
            </div>
          </nav>
          <div class="div2 tab-content" id="colors-tabContent">
            @php $count = 1; @endphp
            @fields('color_options')
            @php
            $sub_color = get_sub_field_object('color', get_the_ID());
            $color_slug = sanitize_title_with_dashes(get_sub_field('color'));
            @endphp
            <div class="img-wrapper image-grid tab-pane fade @if ($count === 1) show active @endif"
              id="v-pills-{{$color_slug}}" role="tabpanel" aria-labelledby="v-pills-{{$color_slug}}-tab">
              <h3>@php the_sub_field('color') @endphp</h3>
              @fields('images')
              @php
              $sub_image = get_sub_field_object('image', get_the_ID());

              // Splice image array for first image
              $sub_image = array_splice($sub_image, 0, 1);

              @endphp
              <a href="@sub('image', 'url')" data-lightbox="{{ $block['id']}}">
                <img src="@sub('image', 'url')" alt="@sub('image', 'alt')" class="img-fluid">
              </a>
              @endfields
            </div>
            @php $count++; @endphp
            @endfields

          </div>
        </div>
      </div>
      @endfields
    </div>
    <div class="container text-center pt-5">
      @hasfield('cta_title')
      <p class="h5">
        @field('cta_title')
      </p>
      @endfield
    </div>
    <div class="cta-wrapper text-center pt-3">
      @hasfield('cta')
      <a class="btn btn-primary text-uppercase" href="{{$cta['url']}}">
        {{$cta['title']}}
      </a>
      @endfield
      @hasfield('cta2')
      <a class="btn btn-primary text-uppercase" href="{{$cta2['url']}}">
        {{$cta2['title']}}
      </a>
      @endfield
      @hasfield('cta3')
      <a class="btn btn-primary text-uppercase" href="{{$cta3['url']}}">
        {{$cta3['title']}}
      </a>
      @endfield
      @hasfield('cta4')
      <a class="btn btn-primary text-uppercase" href="{{$cta4['url']}}">
        {{$cta4['title']}}
      </a>
      @endfield
    </div>
  </div>
  <div class="angle-wrapper d-flex position-absolute">
    <div class="w-100 bgCol-left"></div>
    <div class="w-100 bgCol-right"></div>
  </div>
</div>
