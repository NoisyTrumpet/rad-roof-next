
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
    <div class="d-flex position-absolute formBg">
      <div class="w-100 bgCol-left"></div>
      <div class="w-100 bgCol-right"></div>
    </div>
    <div class="formBlock">
        <div class="text-center formHeader">
          <h2>@field('title')</h2>
          <p>@field('subtitle')</p>
        </div>
        @shortcode('[wpforms id="1434"]')
    </div>
  </div>
</div>
