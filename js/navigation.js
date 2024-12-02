/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
(function ($) {
	const menuToggle = $(".menu-toggle");
	const mainMenuContainer = $(".menu-main-container");
	const siteNavgation = $('.main-navigation');
	const dropdownIcon = $(".dropdown-icon");

	$(menuToggle).on("click", function (e) {
		e.preventDefault();
		siteNavgation.toggleClass("toggled");
		$(this).attr("aria-expanded", siteNavgation.hasClass("toggled"));

		if (siteNavgation.hasClass("toggled")) {
			$(mainMenuContainer).slideDown();
		} else {
			$(mainMenuContainer).slideUp();
		}
	});

	$(dropdownIcon).on("click", function (e) {
		e.preventDefault();
		$(this).toggleClass("toggled");
		$(this).parent().find(".sub-menu").slideToggle();
	});

}(jQuery));
