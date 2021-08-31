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

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }} px-0 py-5 text-center">
    <div class="container">
        <div class="hero-content">
            <h1 class="display-5 fw-bold">@field('title')</h1>
        </div>
    </div>
    @hasfield('background_image', 'url')
    <figure class="background_image">
        <img src="@field('background_image', 'url')" alt="@field('background_image', 'alt')" class="hero-bg" />
    </figure>
    @endfield
</div>
