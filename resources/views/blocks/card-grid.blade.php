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

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }} bg-light">
    <div class="container py-5">
        <h2 class="text-center">{!! $title !!}</h2>
        <div class="row">
            @hasfields('cards')
            @fields('cards')
            <div class="col-md-4">
                <div class="card bg-light" style="border: none;">
                    <div class="card-img">
                        <img src="@sub('image', 'url')" alt="@sub('title')" style="max-width: 100%;">
                    </div>
                    <div class="card-body px-0">
                        <h4>@sub('title')</h4>
                        <p>@sub('description')</p>
                    </div>
                </div>
            </div>
            @endfields
            @endhasfields
        </div>
    </div>
</div>
