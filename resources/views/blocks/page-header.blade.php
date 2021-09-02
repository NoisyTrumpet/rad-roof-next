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

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }} jumbotron jumbotron-fluid text-center" style="background-image: @hasfield('image', 'url')url(@field('image', 'url'))@endfield; background-size: cover; background-position: center;">
    <div class="container">
        <div class="hero-content">
            <h1 class="display-5 fw-bold text-white shadow-md">@field('title')</h1>
            <div class="display-flex">
                <div class="card">
                    Roof Repairs
                </div>
                <div class="card">
                    New Roof/Roof Replacement
                </div>
            </div>
        </div>
    </div>
</div>
