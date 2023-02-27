
/* 2022 Shakthi Prakash Copyright all rights reserved
Author       : Shakthi
Name: Shakthi - Personel Portfolio
*/
	
//Portfolio item filter

const filterContainer = document.querySelector(".portfolio-filter"),
	filterBtns = filterContainer.children,
	totalFilterBtn = filterBtns.length,
	portfolioItems = document.querySelectorAll(".portfolio-item"),
	totalPortfolioItem = portfolioItems.length;

for (let i = 0; i < totalFilterBtn; i++) {
	filterBtns[i].addEventListener("click", function () {
		filterContainer.querySelector(".active").classList.remove("active");
		this.classList.add("active");

		const filterValue = this.getAttribute("data-filter");
		for (let k = 0; k < totalPortfolioItem; k++) {
			if (filterValue === portfolioItems[k].getAttribute("data-category")) {
				portfolioItems[k].classList.remove("hide");
				portfolioItems[k].classList.add("show");
			} else {
				portfolioItems[k].classList.remove("show");
				portfolioItems[k].classList.add("hide");
			}
			if (filterValue === "all") {
				portfolioItems[k].classList.remove("hide");
				portfolioItems[k].classList.add("show");
			}
		}
	});
}

//PORTFOLIO LIGHTBOX
const lightbox = document.querySelector(".lightbox"),
	lightboxImg = lightbox.querySelector(".lightbox-img"),
	lightboxClose = lightbox.querySelector(".lightbox-close"),
	lightboxText = lightbox.querySelector(".caption-text"),
	lightboxCounter = lightbox.querySelector(".caption-counter");
let itemIndex = 0;

for (let i = 0; i < totalPortfolioItem; i++) {
	portfolioItems[i].addEventListener("click", function () {
		itemIndex = i;
		changeItem();
		toggleLightbox();
	});
}
function nextItem() {
	if (itemIndex == totalPortfolioItem - 1) {
		itemIndex = 0;
	} else {
		itemIndex++;
	}
	changeItem();
}
function prevItem() {
	if (itemIndex == 0) {
		itemIndex = totalPortfolioItem - 1;
	} else {
		itemIndex--;
	}
	changeItem();
}
function toggleLightbox() {
	lightbox.classList.toggle("open");
}
function changeItem() {
	imgSrc = portfolioItems[itemIndex]
		.querySelector(".portfolio-img img")
		.getAttribute("src");
	lightboxImg.src = imgSrc;
	lightboxText.innerHTML =
		portfolioItems[itemIndex].querySelector("h4").innerHTML;
	lightboxCounter.innerHTML = itemIndex + 1 + " of " + totalPortfolioItem;
}

//CLOSE LIGHTBOX
lightbox.addEventListener("click", function (event) {
	if (event.target === lightboxClose || event.target === lightbox) {
		toggleLightbox();
	}
});







//navbar response

const containerArray = document.querySelectorAll('section');
const containerPos = {};

containerArray.forEach((section) => {
    containerPos[section.id] = section.offsetTop;
});

window.onscroll = () => {
    var scrollPosition =
        document.documentElement.scrollTop || document.body.scrollTop;
    for (id in containerPos) {
        if (containerPos[id] <= scrollPosition) {
            document.querySelector('.active').classList.remove('active');
            document.querySelector(`a[href*=${id}]`).classList.add('active');
        }
    }
};
