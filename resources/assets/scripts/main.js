// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

// import then needed Font Awesome functionality
import { library, dom } from '@fortawesome/fontawesome-svg-core';

// import the Facebook and Twitter icons
import { faBars, faChevronLeft, faChevronRight, faTimes, faCircleNotch, faPlus, faMinus } from '@fortawesome/free-solid-svg-icons';

// add the imported icons to the library
library.add(faBars, faChevronLeft, faChevronRight, faTimes, faCircleNotch, faPlus, faMinus);

// tell FontAwesome to watch the DOM and add the SVGs when it detects icon markup
dom.watch();

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
//  Add slideDown animation to Bootstrap dropdown when expanding.
 $('.dropdown').on('show.bs.dropdown', function() {
  $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
});

// Add slideUp animation to Bootstrap dropdown when collapsing.
$('.dropdown').on('hide.bs.dropdown', function() {
  $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
});

// Replace Link with data-href attribute
const link = $('a[data-href]');

// Replace the .dropdown-toggle .nav-link href attribute with the data-href attribute
link.attr('href', link.attr('data-href'));




jQuery(function($) {
  if ($(window).width() > 769) {
    // When clicking on the dropdown-toggle nav-link, navigate to the data-href attribute
link.on('click', function() {
  window.location.href = $(this).attr('data-href');
});
  }
});
