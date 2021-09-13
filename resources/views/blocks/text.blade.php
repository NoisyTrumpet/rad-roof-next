{{--
  Title: Text Block (RR)
  Description: Text Block
  Category: layout
  Icon: money
  Keywords: text
--}}

@php
$title = get_field('title') ?: 'Title...';
$content = get_field('content') ?: 'Content...';
$variants = get_field('variants') ?: 'Variants...';
@endphp

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }}" style="background-color:@isfield('background_color', 'secondary') #ccaf88 !important @endfield @isfield('background_color', 'primary') #2f372b !important @endfield @isfield('background_color', 'light') #f0f0f0 !important @endfield @isfield('background_color', 'none') transparent !important @endfield;">
    <div class="container-fluid py-3 px-md-5 px-3 text-color-@field('background_color')">
        <div class="text-block-wrapper pb-5 border-@field('variants')" style="@isfield('has_angle', 'bottom')padding-bottom: 0 !important;@endfield">
            <div class="text-block" >
                <h2>{{ $title }}</h2>
                <div>
                    {!! $content !!}
                </div>
                <!-- {{ $variants }} -->
            </div>
        </div>
    </div>
    @isfield('has_angle', 'bottom')
    <div class="text-angle-wrapper d-flex position-absolute">
        @isfield('background_color', 'none')
            <div class="w-100 white-bg-left"></div>
            <div class="wight white-bg-right"></div>
        @endfield
        @isfield('background_color', 'light')
            <div class="w-100 light-bg-left"></div>
            <div class="wight light-bg-right"></div>
        @endfield
        @isfield('background_color', 'primary')
            <div class="w-100 primary-bg-left"></div>
            <div class="w-1ht primary-bg-right"></div>
        @endfield
        @isfield('background_color', 'secondary')
            <div class="w-100 secondary-bg-left"></div>
            <div class="w-100 secondary-bg-right"></div>
        @endfield
    </div>
    @endfield
</div>