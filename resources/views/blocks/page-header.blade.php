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

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }} jumbotron jumbotron-fluid text-center py-0 mb-0" style="background-image: @hasfield('background_image', 'url')url(@field('background_image', 'url'))@endfield; background-size: cover; background-position: center;">
    <div class="position-relative overlay">
        <div class="container d-flex align-items-center justify-content-center">
            <div class="hero-content">
                <h1 class="display-5 fw-bold text-white shadow">@field('title')</h1>
            </div>
        </div>
        <div class="dualBars position-relative">
            @isfield('divider', 'white-left')
                <div class="white-left d-flex position-absolute"></div>
            @endfield
            @isfield('divider', 'primary-left')
                <div class="primary-left d-flex position-absolute"></div>
            @endfield
            @isfield('divider', 'secondary-left')
                <div class="secondary-left d-flex position-absolute"></div>
            @endfield
            @isfield('divider', 'white-right')
                <div class="white-left d-flex position-absolute" style="transform: scaleX(-1);"></div>
            @endfield
            @isfield('divider', 'primary-right')
                <div class="primary-left d-flex position-absolute" style="transform: scaleX(-1);"></div>
            @endfield
            @isfield('divider', 'secondary-right')
                <div class="secondary-left d-flex position-absolute" style="transform: scaleX(-1);"></div>
            @endfield
        </div>
    </div>
</div>
