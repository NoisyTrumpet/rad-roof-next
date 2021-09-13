{{--
  Title: Logo Grid (RR)
  Description: Logo Grid with headline and style settings
  Category: layout
  Icon: money
  Keywords: logos, grid
--}}

@php
// ACF
$title = get_field('title') ?: '';
@endphp

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }} postion-relative" style="background-color: @isfield('background_color', 'light') #f0f0f0 !important @endfield @isfield('background_color', 'none') transparent !important @endfield; @isfield('has_angle', 'bottom')margin-bottom: 4rem;@endfield">
    <div class="container py-5">
        <h2 class="text-center mb-5" style="@isfield('has_angle', 'top')margin-top: 0rem;@endfield">{!! $title !!}</h2>
        <div class="row mx-auto" style="max-width: 900px;">
            @hasfields('images')
            @fields('images')
            <div class="col grid-item my-3">
                @isfield('logo_style', 'greyscale')
                <img src="@sub('image', 'url')" alt="@sub('image', 'alt')" class="logo-item grey-scale" />
                @endfield
                @isfield('logo_style', 'color')
                <img src="@sub('image', 'url')" alt="@sub('image', 'alt')" class="logo-item" />
                @endfield
            </div>
            @endfields
            @endhasfields
        </div>
    </div>
    @isfield('has_angle', 'bottom')
    <div class="angle-wrapper d-flex position-absolute">
        <div class="w-100 bgCol-left"></div>
        <div class="w-100 bgCol-right"></div>
    </div>
    @endfield
</div>
