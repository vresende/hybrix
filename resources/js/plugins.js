/*
Template Name: Hybrix - Admin & Dashboard Template
Author: Themesbrand
Version: 1.1.0
Website: https://Themesbrand.com/
Contact: Themesbrand@gmail.com
File: Common Plugins Js File
*/

//Common plugins
if (document.querySelectorAll('[data-choices]') || document.querySelectorAll("[data-provider]")) {
  document.writeln("<script type='text/javascript' src='build/libs/choices.js/public/assets/scripts/choices.min.js'></script>");
  document.writeln("<script type='text/javascript' src='build/libs/flatpickr/flatpickr.min.js'></script>");
}
