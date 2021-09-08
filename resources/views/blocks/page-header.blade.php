{{--
  Title: Page Header (RR)
  Description: Page Header with headline and style settings
  Category: layout
  Icon: money
  Keywords: page, header, title
--}}

@php
// ACF

@endphp

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }} jumbotron jumbotron-fluid text-center mb-0" style="background-image: @hasfield('background_image', 'url')url(@field('background_image', 'url'))@endfield; background-size: cover; background-position: center;">
    <div class="container d-flex align-items-center justify-content-center">
        <div class="hero-content">
            <h1 class="display-5 fw-bold text-white shadow-md">@field('title')</h1>
        </div>
    </div>
    <div class="gradientBar position-relative">
        <div class="dualBars position-absolute"></div>
    </div>
</div>
