{{--
  Title: Text Image Block (RR)
  Description: Text Image Block
  Category: layout
  Icon: money
  Keywords: text, text-image
--}}

@php
$title = get_field('title') ?: 'Title...';
$content = get_field('content') ?: 'Content...';
$image = get_field('image', 'url') ?: 'Image...';
@endphp

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }}">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6" style="padding-top: 200px;">
                <div class="text-block">
                    <h2>{{ $title }}</h2>
                    <div>
                        {!! $content !!}
                    </div>
                </div>
            </div>
            <div class="col-md-6 px-0">
                <img src="@field('image', 'url')" alt="{!!$title!!}" style="width: 100%">
            </div>
        </div>
    </div>
</div>
