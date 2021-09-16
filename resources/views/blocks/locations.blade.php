{{--
  Title: Locations (RR)
  Description: Locations with headline and style settings
  Category: layout
  Icon: money
  Keywords: locations, contact
--}}

@query([
'post_type' => 'location',
'order' => 'ASC',
'orderby' => 'title',
])

@php
// ACF
$title = get_field('title') ?: 'Title...';
@endphp

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }}">
    <div class="position-relative text-center">
        <h2 class="py-3 mb-0 position-relative" style="background-color: @isfield('heading_background', 'primary') #ccae88;@endfield">@field('title')</h2>
        <div class="d-flex position-absolute locationBg" style="background-image: @hasfield('section_bg_image', 'url')url(@field('section_bg_image', 'url'))@endfield; background-size: cover; background-position: center;">
            <div class="w-100 bgCol-left"></div>
            <div class="w-100 bgCol-right"></div>
        </div>
        <div class="container-fluid locationsBlock">
            <div class="d-flex flex-column flex-md-row justify-content-around align-items-center p-2">
                <div class="p-2 txMap">
                    <img src="@field('texas_map', 'url')" alt="@field('texas_map', 'alt')" width="100%" height="auto" />
                </div>
                @posts
                <div class="m-2">
                    <svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 349.97 512">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: #fff;
                                }

                            </style>
                        </defs>
                        <path class="cls-1" d="M277.52,398.77a242.23,242.23,0,0,0-39.94-10.17c9.34-11,19.29-23.13,29.29-36.13C322,280.78,350,221.06,350,175,350,78.5,271.47,0,175,0S0,78.5,0,175c0,46.33,28,106.13,83.11,177.72,10,12.92,19.86,25,29.16,35.91a242.26,242.26,0,0,0-39.82,10.15c-41.6,14.86-50.33,34.83-50.33,49s8.73,34.1,50.33,49C100.07,506.56,136.48,512,175,512s74.91-5.44,102.53-15.31c41.6-14.86,50.33-34.83,50.33-49S319.12,413.64,277.52,398.77ZM30,175C30,95,95,30,175,30S320,95,320,175c0,38.69-26.51,93.64-76.66,158.91A983.28,983.28,0,0,1,175,413.08a967.92,967.92,0,0,1-68.09-78.68C56.58,269.11,30,214,30,175ZM267.42,468.44C243,477.19,210.13,482,175,482s-68-4.81-92.44-13.56c-22.17-7.92-30.43-16.9-30.43-20.71S60.38,434.94,82.55,427c15.12-5.4,33.44-9.29,53.53-11.49,16.29,17.8,27.57,28.82,28.44,29.67L175,455.43l10.47-10.25c.87-.85,12.09-11.88,28.33-29.65,20.12,2.19,38.47,6.08,53.61,11.49,22.17,7.92,30.43,16.91,30.43,20.71S289.59,460.52,267.42,468.44Z" transform="translate(0 0)" />
                        <path class="cls-1" d="M269.62,175A94.63,94.63,0,1,0,175,269.62,94.74,94.74,0,0,0,269.62,175Zm-159.26,0A64.63,64.63,0,1,1,175,239.62,64.71,64.71,0,0,1,110.36,175Z" transform="translate(0 0)" />
                    </svg>
                    <h3><a class="text-secondary serif-font" href="/@title/">@title</a></h3>
                    <p><a class="addressLink" href="@php the_field('address_link', get_the_ID()); @endphp">@php the_field('address_first', get_the_ID()); @endphp<br>@php the_field('address_second', get_the_ID()); @endphp</a></p>
                    </a>
                    <p><a class="phoneLink text-bold" href="@php the_field('phone_link', get_the_ID()); @endphp">@php the_field('phone_number', get_the_ID()); @endphp</a></p>
                    <p class="text-light">@php the_field('days', get_the_ID()); @endphp</p>
                    <p class="text-light">@php the_field('open_time', get_the_ID()); @endphp - @php the_field('close_time', get_the_ID()); @endphp</p>
                </div>
                @endposts
            </div>
        </div>
    </div>
</div>
