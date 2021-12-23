{{--
  Title: Card Grid (RR)
  Description: Card Grid with headline and cards
  Category: layout
  Icon: money
  Keywords: grid, cards
--}}

@php
// ACF
$title = get_field('title') ?: 'Title...';
@endphp

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }} postion-relative" style="background-color: @isfield('background_color', 'light') #f0f0f0 !important @endfield @isfield('background_color', 'none') #fff !important @endfield; @isfield('has_angle', 'bottom')margin-bottom: 4rem;@endfield">
    <div class="container py-5">
        <h2 class="text-center mb-5">{!! $title !!}</h2>
        <div class="row">
            @hasfields('cards')
            @fields('cards')
            <div class="col-lg-4 col-md-6">
                @if(get_sub_field('link'))<a href="@sub('link', 'url')">@endif
                    <div class="card" style="border: none;">
                        <div class="card-img">
                            <img src="@sub('image', 'url')" alt="@sub('title')" style="max-width: 100%;">
                        </div>
                        <div class="card-body px-0">
                            <p class="serif-font h5 mb-4">@sub('title')</p>
                            <p>@sub('description')</p>
                        </div>
                    </div>
                @if(get_sub_field('link'))</a>@endif
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
