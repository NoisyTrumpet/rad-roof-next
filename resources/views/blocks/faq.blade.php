
{{--
  Title: FAQ (RR)
  Description: FAQ with headline
  Category: layout
  Icon: money
  Keywords: faq
--}}

@php
  // ACF
  $title = get_field('title') ?: 'Title...';
  $i = 1;
@endphp

<div id="{{ $block['id'] }}" class="{{ $block['classes'] }} position-relavtive py-3" style="background-color: @isfield('background_color', 'light') #f0f0f0 !important @endfield @isfield('background_color', 'none') transparent !important @endfield;">
  <h3 class="text-center">@field('title')</h3>
  <div class="faq-accordion m-auto">
    @hasfields('questions')
	    <div id="accordion">
        @fields('questions')
		      <div class="question">
		        <div class="quest-header" id="heading-@php echo $i;@endphp">
		          <h5 class="my-1">
		            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse-@php echo $i;@endphp" aria-expanded="true" aria-controls="collapse-@php echo $i;@endphp">
		              @sub('question')
		            </button>
		          </h5>
		        </div>
		        <div id="collapse-@php echo $i;@endphp" class="collapse" aria-labelledby="heading-@php echo $i;@endphp" data-parent="#accordion">
		          <div class="quest-answer ml-4 pb-4 pt-3">
                @sub('answer')
		          </div>
		        </div>
          </div>    
	        @php $i++; @endphp
	      @endfields
      </div>
    @endhasfields
  </div>
  @isfield('has_angle', 'bottom')
    <div class="angle-wrapper d-flex position-absolute">
        <div class="w-100 bgCol-left"></div>
        <div class="w-100 bgCol-right"></div>
    </div>
    @endfield
</div>
