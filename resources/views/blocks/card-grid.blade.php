
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
  $cards = get_field('cards');
  $description = get_field('description') ?: 'Description...';
  $image = get_field('image') ?: 'Image...';
@endphp

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }}">
  <div class="container">
    <div class="card-grid-content py-10">
      <h1 class="display-5 fw-normal text-white shadow-lg">@field('title')</h1>
      <div>
        @hasoptions('cards')
        @options('cards')
        <div class="card-item card-img">
          <img src="@sub('image', 'url')" alt="@sub('title')" class="w-100" />
        </div>
        <div class="card-item card-description">
          <p>@sub('title')</p>
          <p>@sub('description')</p>
        </div>
        @endoptions
        @endhasoptions
      </div>
    </div>
  </div>
</div>
