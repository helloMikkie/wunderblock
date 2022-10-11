document.addEventListener("mousemove", function (event) {
	const mouseX = event.pageX;
	const mouseY = event.pageY;

	const w = window.innerWidth;
	const h = window.innerHeight;
	// console.log(w * 0.2 - 2 * mouseX);

	const heading = document.querySelector(".logo-type");

	if (mouseX > w/3) {
		heading.style.filter = "blur(" + mouseX * 0.01 + "px)";
	} else if (mouseX < w / 10) {
		heading.style.filter = "blur(5px)";
	}
	
});
