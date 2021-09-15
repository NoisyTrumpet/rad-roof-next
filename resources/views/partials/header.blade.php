@query([
'post_type' => 'location',
'order' => 'ASC',
'orderby' => 'title',
])

@hasoption('enabled')
<div class="container-fluid text-center py-3 bg-secondary text-white text-uppercase">
    @option('content')
</div>
@endoption
<header class="banner d-flex flex-wrap justify-content-center" role="banner">
    <div class="container-fluid d-lg-flex d-block justify-content-between align-items-center">
        @hasoption('logo')
        <div class="logo d-flex p-2">
            <a class="brand m-auto" href="{{ home_url('/') }}">
                <img src="@option('logo', 'url')" alt="{{ get_bloginfo('name', 'display') }}" width="149.32" height="70.55" />
            </a>
        </div>
        @endoption
        <div class="d-md-flex d-block p-2 justify-content-center mx-auto text-center">
            {{-- @foreach($location as $location)
            <div class="flex mx-2">
                <a class="text-secondary text-uppercase" href="@permalink">@title:</a> <a class="text-dark text-bold" href="@field('phone_link')">@field('phone_number')
                </a>
            </div>
            @endforeach --}}
            @posts
            <div class="flex flex-md-column flex-sm-column mx-2">
                <p class="text-secondary text-uppercase d-inline-flex mb-0" href="@permalink">@title:</p> <a class="text-dark text-bold" href="@field('phone_link')">@field('phone_number')
                </a>
                @if(get_the_title() != 'San Antonio')
                <span class="fw-bold d-md-inline-flex d-none pl-2"> | </span>
                @endif
            </div>
            @endposts
        </div>
        @hasoption('call_to_action')
        <div class="d-lg-flex d-none flex-column justify-content-center">
            <a class="btn btn-secondary text-uppercase" href="@option('call_to_action', 'url')">@option('call_to_action', 'title')</a>
        </div>
        @endoption
    </div>
    <div class="bg-primary w-100">
        <div>
            <nav class="navbar navbar-expand-lg text-uppercase align-items-center">

                @hasoption('call_to_action')
                <div class=" d-lg-none d-flex flex-column justify-content-center">
                    <a class="btn btn-secondary text-uppercase" href="@option('call_to_action', 'url')">@option('call_to_action', 'title')</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    @fa('bars', 'fas text-white fa-2x mb-0')
                </button>
                @endoption
                @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu($primarymenu) !!}
                @endif
            </nav>
        </div>
    </div>
</header>
