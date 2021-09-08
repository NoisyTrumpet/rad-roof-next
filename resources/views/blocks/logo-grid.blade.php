{{--
  Title: Logo Grid (RR)
  Description: Logo Grid with headline and style settings
  Category: layout
  Icon: money
  Keywords: logos, grid
--}}

@php
// ACF
$title = get_field('title') ?: 'Title...';
@endphp

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }} bg-white">
    <div class="container py-5">
        <h2 class="text-center mb-5">{!! $title !!}</h2>

        <div class="row">
            @hasfields('images')
            @fields('images')
            <div class="col grid-item">
                <img src="@sub('image', 'url')" alt="@sub('image', 'alt')" class="logo-item" />
            </div>
            @endfields
            @endhasfields
        </div>
    </div>


</div>
