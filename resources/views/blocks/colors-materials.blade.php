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
              @fields('color_options')
              @php $sub_color = get_sub_field_object('color', get_the_ID());
              @endphp
              <a class="nav-link p-1" id="v-pills-@sub('color')-tab" data-toggle="pill" href="#v-pills-@sub('color')"
                role="tab" aria-controls="v-pills-@sub('color')"
                aria-selected="@if ($sub_color['value'] === 'tera-cotta')true @endif">
                <img src="@sub('color_background_image', 'url')" alt="@sub('color')" class="img-fluid">
              </a>
              @endfields
            </div>
          </nav>
          <div class="div2 tab-content" id="colors-tabContent">
            @fields('color_options')
            @php $sub_color = get_sub_field_object('color', get_the_ID()); @endphp
            <div
              class="img-wrapper image-grid tab-pane fade @if ($sub_color['value'] === 'tera-cotta') show active @endif"
              id="v-pills-@sub('color')" role="tabpanel" aria-labelledby="v-pills-@sub('color')-tab">
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
            @endfields

          </div>
        </div>
      </div>
      @endfields
    </div>
    <div class="cta-wrapper text-center pt-5">
      @hasfield('cta')
      <a class="btn btn-primary text-uppercase" href="{{$cta['url']}}">
        {{$cta['title']}}
      </a>
      @endfield
    </div>
  </div>
  <div class="angle-wrapper d-flex position-absolute">
    <div class="w-100 bgCol-left"></div>
    <div class="w-100 bgCol-right"></div>
  </div>
</div>
