{{--
  Title: Colors & Materials (RR)
  Description: Colors & Materials Block
  Category: layout
  Icon: color-palette
  Keywords: colors, materials, colors & materials, color, material
--}}

@php
$title = get_field('title') ?: 'Colors & Materials Title...';
@endphp

<div id="{{ $block['id']}}">
    <div class="container-fluid bg-primary py-3">
        <p class="text-white text-center mb-0 h3 serif-font">{{ $title }}</p>
    </div>
    <div class="container">
        <ul class="nav nav-tabs" id="colors-tabs" role="tablist">
            @fields('tabs')
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="tab-">
                    @sub('title')
                </button>
            </li>
            @endfields
        </ul>
    </div>
</div>
