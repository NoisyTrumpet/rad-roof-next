
{{--
  Title: Form (RR)
  Description: Form with headline and subtitle
  Category: layout
  Icon: money
  Keywords: form, contact
--}}

@php
  // ACF
  $title = get_field('title') ?: 'Title...';
@endphp

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }}">
  <div class="position-relative formContainer">
    <div class="d-flex position-absolute formBg" style="background-color:@isfield('background_color', 'secondary') #ccae88 !important @endfield @isfield('background_color', 'primary') #2f372b !important @endfield @isfield('background_color', 'light') #f0f0f0 !important @endfield @isfield('background_color', 'none') transparent !important @endfield;">
        <div class="w-100 bgCol-left"></div>
        <div class="w-100 bgCol-right"></div>
    </div>
    <div class="formBlock">
        <div class="text-center formHeader .angle-@field('angle_adjustment')">
          <h2>@field('title')</h2>
          <p>@field('subtitle')</p>
        </div>
        @field('form_id')
    </div>
  </div>
</div>
