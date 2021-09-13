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

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }}">
    <div class="container py-5">
        <div class="text-block-wrapper">
            <div class="text-block">
                <h2>{{ $title }}</h2>
                <div>
                    {!! $content !!}
                </div>
                <!-- {{ $variants }} -->
            </div>
        </div>
    </div>
</div>
