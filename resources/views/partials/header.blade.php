@query([
'post_type' => 'location'
])

@hasoption('enabled')
<div class="container-fluid text-center py-3 bg-secondary text-white text-uppercase">
    @option('content')
</div>
@endoption
<header class="banner d-flex flex-wrap justify-content-center" role="banner">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        @hasoption('logo')
        <div class="logo d-flex p-2">
            <a class="brand" href="{{ home_url('/') }}">
                <img src="@option('logo', 'url')" alt="{{ get_bloginfo('name', 'display') }}" />
            </a>
        </div>
        @endoption
        <div class="d-flex p-2">
            @posts
            <div class="flex mx-2">
                <a class="text-secondary" href="@field('address_link')">@title</a>: <a class="text-dark" href="@field('phone_link')">@field('phone_number')</a>
            </div>
            @endposts
        </div>
        @hasoption('call_to_action')
        <a class="btn btn-secondary text-uppercase" href="@option('call_to_action', 'url')">@option('call_to_action', 'title')</a>
        @endoption
    </div>
    <div class="bg-primary w-100">
        <div class="container">
            <nav class="navbar navbar-expand-lg text-secondary">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                @if (has_nav_menu('primary_navigation'))
                {!! wp_nav_menu($primarymenu) !!}
                @endif
            </nav>
        </div>
    </div>
</header>
