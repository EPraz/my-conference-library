(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	 const callToActionBtns = document.querySelectorAll(".list_menu");

	 callToActionBtns.forEach((btn) => {
		 btn.addEventListener("click", (e) => {
			 callToActionBtns.forEach(f => f.classList.remove('active'));
			 e.target.parentElement.classList.toggle("active");
			 let id;
			 if (e.target.nodeName === "I") {
				 id = e.target.parentElement;
			 } else {
				 id = e.target;
			 }
			 // console.log(id.getAttribute("href"));
			 // console.log(String(id.getAttribute("href").substring(1)))
			 let id_final = String(id.getAttribute("href").substring(1))
			 document.getElementById(`${id_final}`).classList.toggle("active")
			 document.getElementById(`${id_final}`).classList.toggle("in")
		 });
	 });


	//  

	const listViewButton = document.querySelector('.list-view-button');
	const gridViewButton = document.querySelector('.grid-view-button');
	const list = document.querySelector('ol');

	listViewButton.onclick = function () {
		list.classList.remove('grid-view-filter');
		list.classList.add('list-view-filter');
		document.querySelector('.xxx').style.display = "flex";
		document.querySelector('.zzz').style.display = "none";
	}

	gridViewButton.onclick = function () {
		list.classList.remove('list-view-filter');
		list.classList.add('grid-view-filter');
		document.querySelector('.zzz').style.display = "flex";
		document.querySelector('.xxx').style.display = "none";
	}
})( jQuery );
