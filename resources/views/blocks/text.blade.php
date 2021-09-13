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

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }} py-3 px-md-5 px-3">
    <div class="container-fluid">
            <div class="text-block-wrapper pb-5" style="@isfield('variants', 'underlined-primary')border-bottom: 2px solid #2f372b;@endfield @isfield('variants', 'underlined-secondary')border-bottom: 2px solid #ccaf88;@endfield;">
                <div class="text-block" >
                    <h2>{{ $title }}</h2>
                    <div>
                        {!! $content !!}
                    </div>
                    <!-- {{ $variants }} -->
                </div>
            </div>
    </div>
</div>