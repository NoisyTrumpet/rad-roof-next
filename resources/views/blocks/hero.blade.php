{{--
  Title: Hero (RR)
  Description: Main Hero
  Category: layout
  Icon: money
  Keywords: hero, layout
--}}


<div id="{{ $block['id'] }}" class="{{ $block['classes'] }} hero jumbotron jumbotron-fluid text-center mb-0" style="background-image: @hasfield('hero_image', 'url')url(@field('hero_image', 'url'))@endfield; background-size: cover; background-position: 0 75%;">
    <div class="container">
        <div class="hero-content">
            <h1 class="text-white hero-title">@field('title')</h1>
            <div class="card-grid mt-4">
                @hasfields('cards')
                @fields('cards')
                <div class="card-item">
                    <a href="@sub('link', 'url')" aria-label="@sub('title')" class="hero-card bg-secondary p-2 mx-auto shadow-lg bg-secondary rounded">
                        <div class="card-image-wrapper">
                            <img src="@sub('image', 'url')" alt="@sub('title')" class="card-image">
                            <img src="@sub('icon', 'url')" alt="@sub('title')" class="position-absolute top-50 start-50 translate-middle mw-50 card-icon">
                        </div>
                        <div class="card-body">
                            <p class="text-white mb-0 serif-font h5">@sub('title')</p>
                        </div>
                    </a>
                </div>
                @endfields
                @endhasfields
            </div>
        </div>
    </div>
</div>
