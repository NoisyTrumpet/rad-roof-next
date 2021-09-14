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
    <h2 class="text-center py-3 mt-4" style="@isfield('has_angle', 'top') margin-top: 100px !important; @endfield">@field('section_title')</h3>
        @endfield
        <div class="container-fluid">
            <div class="row position-relative justify-content-center" style="z-index: -3; background-color:@isfield('background_color', 'secondary') #ccaf88 !important @endfield @isfield('background_color', 'primary') #2f372b !important @endfield @isfield('background_color', 'light') #f0f0f0 !important @endfield @isfield('background_color', 'none') transparent !important @endfield; @isfield('image_side', 'left')flex-direction: row-reverse;@endfield">
                @isfield('has_angle', 'top')
                <div class="col-lg-6 order-lg-1 order-2 align-self-center py-1 mt-1 pt-lg-5 pb-lg-3 mt-lg-5" style="width: 100%; max-width: 800px;">
                    <div class="text-block px-0 px-lg-4">
                        <h2>{{ $title }}</h2>
                        <div class="py-1 font-size-@field('font_size')">
                            {!! $content !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 px-0 order-lg-2 order-1 @isfield('image_side', 'left') text-right @endfield @isfield('image_side', 'right') text-left @endfield" style="width: 100%; max-width: 800px; z-index: -2;">
                <img src="@field('image', 'url')" alt="@field('image', 'alt')" style="width: 100%;">
            </div>
            @endfield
            @isfield('has_angle', 'none')
            <div class="col-lg-6 order-1 align-self-center text-color-@field('background_color')" style="width: 100%; max-width: 800px;">
                <div class="text-block px-0 px-lg-4 pt-0 pt-md-3">
                    <h2>{{ $title }}</h2>
                    <div class="py-1 font-size-@field('font_size')">
                        {!! $content !!}
                    </div>
                    <div class="col-lg-6 px-0 order-2 @isfield('image_side', 'left') text-right @endfield @isfield('image_side', 'right') text-left @endfield" style="z-index: -2; width: 100%; max-width: 800px;">
                        <img src="@field('image', 'url')" alt="@field('image', 'alt')" style="width: 100%;">
                    </div>

                </div>
            </div>
            @endfield
        </div>
        <style>
            .textFields {
                padding-top: 5%;
            }

            .text-color-none,
            .text-color-light {
                color: #000;
            }

            .text-color-primary,
            .text-color-secondary {
                color: #fff;
            }

            .font-size-medium {
                font-size: 1.25rem;
            }

            .font-size-large {
                font-size: 1.45rem;
            }

            .font-size-xlarge {
                font-size: 2rem;
            }

            @media (min-width: 768px) and (max-width: 1400px) {
                .textFields {
                    padding-top: 8%;
                }
            }

        </style>
