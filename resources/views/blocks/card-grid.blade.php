
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
  $description = get_field('cards.description') ?: 'Description...';
  #cardTitle = get_field('cards.title') ?: 'Card Title...';
  $image = get_field('cards.image') ?: 'Image...';
@endphp

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }}">
  <div class="container">
    <div class="card-grid-content py-10">
      <h1 class="display-5 fw-normal text-white shadow-lg">{{title}}</h1>
      <div>
        @hasoptions('cards')
        @options('cards')
        <div class="card-item card-img p-10">
          <img src="@sub('image', 'url')" alt="{{title}}" class="w-100" />
        </div>
        <div class="card-item card-description p-10">
          <p>{{title}}</p>
          <p>{{description}}</p>
        </div>
        @endoptions
        @endhasoptions
      </div>
    </div>
  </div>
</div>
