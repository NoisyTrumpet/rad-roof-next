{{--
  Title: Text Image Block (RR)
  Description: Text Image Block
  Category: layout
  Icon: money
  Keywords: text, text-image
--}}

@php
$page = 
$title = get_field('title') ?: 'Title...';
$content = get_field('content') ?: 'Content...';
$image = get_field('image', 'url') ?: 'Image...';
@endphp

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }}">
    <div class="container-fluid">
        <div class="row" style="@isfield('image_side', 'left')flex-direction: row-reverse;@endfield">
            @isfield('page_check', 'home')
            <div class="col-lg-6 order-lg-1 order-2 align-self-center py-1 mt-1 pt-lg-5 pb-lg-3 mt-lg-5">
                <div class="text-block">
                    <h2>{{ $title }}</h2>
                    <div>
                        {!! $content !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-6 px-0 order-lg-2 order-1" style="z-index: -2;">
                <img src="@field('image', 'url')" alt="@field('image', 'alt')" style="width: 100%;">
            </div>
            @endfield
            @isfield('page_check', 'other')
            <div class="col-lg-6 order-1 align-self-center">
                <div class="text-block">
                    <h2>{{ $title }}</h2>
                    <div>
                        {!! $content !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-6 px-0 order-2" style="z-index: -2;">
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
