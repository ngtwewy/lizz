window.onload = function () {
  // 幻灯
  var swiper = new Swiper('.swiper-container', {
    pagination: {
      el: '.swiper-pagination',
    },
  });

  var marginTop = 0;
  function scrolling() {
    var scrollingBox = document.querySelector(".hot-item-panel");
		marginTop--;
		scrollingBox.style.marginTop = marginTop + "px";
		// console.log("sssss", marginTop);
		if(marginTop <= -90){
			marginTop = 0;
		}
		// if (origin == scrollingBox.scrollTop) {
		// 	if (!reachedBottom) {
		// 		scrollingBox.innerHTML += scrollingBox.innerHTML;
		// 		reachedBottom = true;
		// 		bottom = origin;
		// 	} else {
		// 		scrollingBox.scrollTop = bottom;
		// 	}
		// }
	}
	setInterval(scrolling, 50);


}