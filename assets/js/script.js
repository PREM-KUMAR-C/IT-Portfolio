/* 2022 Shakthi Prakash Copyright all rights reserved
Author       : Shakthi
Name: Shakthi - IT Portfolio
*/

"use strict";

// modal variables
const modal = document.querySelector("[data-modal]");
const modalCloseBtn = document.querySelector("[data-modal-close]");
const modalCloseOverlay = document.querySelector("[data-modal-overlay]");

// modal function
const modalCloseFunc = function () {
	modal.classList.add("closed");
};

// modal eventListener
modalCloseOverlay.addEventListener("click", modalCloseFunc);
modalCloseBtn.addEventListener("click", modalCloseFunc);


// mobile menu variables
const mobileMenuOpenBtn = document.querySelectorAll(
	"[data-mobile-menu-open-btn]"
);
const mobileMenu = document.querySelectorAll("[data-mobile-menu]");
const mobileMenuCloseBtn = document.querySelectorAll(
	"[data-mobile-menu-close-btn]"
);
const overlay = document.querySelector("[data-overlay]");

for (let i = 0; i < mobileMenuOpenBtn.length; i++) {
	// mobile menu function
	const mobileMenuCloseFunc = function () {
		mobileMenu[i].classList.remove("active");
		overlay.classList.remove("active");
	};

	mobileMenuOpenBtn[i].addEventListener("click", function () {
		mobileMenu[i].classList.add("active");
		overlay.classList.add("active");
	});

	mobileMenuCloseBtn[i].addEventListener("click", mobileMenuCloseFunc);
	overlay.addEventListener("click", mobileMenuCloseFunc);
}

