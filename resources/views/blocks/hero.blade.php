{{--
  Title: Hero (RR)
  Description: Main Hero
  Category: layout
  Icon: money
  Keywords: hero, layout
--}}


<div id="{{ $block['id'] }}" class="{{ $block['classes'] }} hero jumbotron jumbotron-fluid text-center mb-0" style="background-image: @hasfield('hero_image', 'url')url(@field('hero_image', 'url'))@endfield; background-size: cover; background-position: center;">
    <div class="container">
        <div class="hero-content py-10">
            <h1 class="display-5 fw-normal text-white hero-title">@field('title')</h1>
            <div class="card-grid mx-auto mt-4">
                @hasfields('cards')
                @fields('cards')
                <div class="card-item">
                    <div class="hero-card bg-secondary p-2 mx-auto shadow-lg mb-5 bg-secondary rounded">
                        <div class="card-image-wrapper">
                            <img src="@sub('image', 'url')" alt="@sub('title')" class="card-image">
                            <img src="@sub('icon', 'url')" alt="@sub('title')" class="position-absolute top-50 start-50 translate-middle mw-50 card-icon">
                        </div>
                        <div class="card-body">
                            <p class="text-white mb-0">@sub('title')</p>
                        </div>
                    </div>
                </div>
                @endfields
                @endhasfields
            </div>
        </div>
    </div>
</div>
