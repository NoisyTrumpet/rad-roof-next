
{{--
  Title: Team (RR)
  Description: Team with headline
  Category: layout
  Icon: money
  Keywords: team, members, staff
--}}

@php
  // ACF
  $title = get_field('title') ?: 'Title...';
@endphp

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }}">
  <div class="container py-5">
    <h2 class="text-center mb-5">{!! $title !!}</h2>
    <div class="row">
      @hasfields('team_members')
        @fields('team_members')
        <div class="col-lg-3 col-md-6">
          <div class="card @isfield('background_color', 'light') #fff !important @endfield; @isfield('background_color', 'dark') #f0f0f0 !important @endfield" style="border: none;">
            <div class="card-img bg-light">
              @hassub('image')
                <img src="@sub('image', 'url')" alt="@sub('name') - @sub('title')" style="max-width: 100%;">
              @else
                <img src="/wp-content/uploads/2021/09/secondary-logo.svg" alt="@sub('name') - @sub('title')" style="max-width: 100%; padding: 15% 5%;">
              @endsub
            </div>
            <div class="card-body px-0 text-center">
              <p class="serif-font h5 mb-1">@sub('name')</p>
              <p>@sub('title')</p>
            </div>
          </div>
        </div>
        @endfields
      @endhasfields
    </div>
  </div>
</div>
