{{--
  Title: Text Image Block (RR)
  Description: Text Image Block
  Category: layout
  Icon: money
  Keywords: text, text-image
--}}

@php
$title = get_field('title') ?: '';
$content = get_field('content') ?: 'Content...';
$image = get_field('image', 'url') ?: 'Image...';
@endphp

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }}">
    @hasfield('section_title')
        <h2 class="text-center py-3 mt-4">@field('section_title')</h3>
    @endfield
    <div class="container-fluid">
        <div class="row position-relative justify-content-center" style="background-color:@isfield('background_color', 'secondary') #ccaf88 !important @endfield @isfield('background_color', 'primary') #2f372b !important @endfield @isfield('background_color', 'light') #f0f0f0 !important @endfield @isfield('background_color', 'none') transparent !important @endfield; z-index: -3; @isfield('image_side', 'left')flex-direction: row-reverse;@endfield">
            @isfield('page_check', 'home')
            <div class="col-lg-6 order-lg-1 order-2 align-self-center py-1 mt-1 pt-lg-5 pb-lg-3 mt-lg-5" style="width: 100%; max-width: 800px;">
                <div class="text-block">
                    <h2>{{ $title }}</h2>
                    <div>
                        {!! $content !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-6 px-0 order-lg-2 order-1 @isfield('image_side', 'left') text-right @endfield @isfield('image_side', 'right') text-left @endfield" style="z-index: -2;">
                <img src="@field('image', 'url')" alt="@field('image', 'alt')" style="width: 100%; max-width: 800px;">
            </div>
            @endfield
            @isfield('page_check', 'other')
            <div class="col-lg-6 order-1 align-self-center" style="width: 100%; max-width: 800px; color: #fff @isfield('background_color', 'light') #000 !important @endfield @isfield('background_color', 'none') #000 !important @endfield">
                <div class="text-block px-0 px-lg-5">
                    <h2>{{ $title }}</h2>
                    <div class="@isfield('font_size', 'large')h3 @endfield py-5">
                        {!! $content !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-6 px-0 order-2 @isfield('image_side', 'left') text-right @endfield @isfield('image_side', 'right') text-left @endfield" style="z-index: -2; width: 100%; max-width: 800px;">
                <img src="@field('image', 'url')" alt="@field('image', 'alt')" style="width: 100%;">
            </div>
            @endfield
        </div>
    </div>
</div>
<style>
    .textFields {
        padding-top: 5%;
    }

    @media (min-width: 768px) and (max-width: 1400px) {
        .textFields {
            padding-top: 8%;
        }
    }

</style>
