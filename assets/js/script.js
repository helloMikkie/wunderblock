

function updateBackground() {
	let d = new Date();
	let hr = d.getHours();
    // let hr = new Date().getHours(),
    const body = document.body
	const headline = document.querySelector('.logo-type')

    let bstyle = body.style
    let headingStyle = headline.style



if (hr < 1) {
	bstyle.backgroundColor = "#4EBEAA";
	headingStyle.color = "#ABF2BF";

} else if (hr < 2) {
	bstyle.backgroundColor = "#ABF2BF";
	headingStyle.color = "#FFEA2F";

} else if (hr < 3) {
	bstyle.backgroundColor = "#FFEA2F";
	headingStyle.color = "#21D4DF";

} else if (hr < 4) {
	bstyle.backgroundColor = "#21D4DF";
	headingStyle.color = "#82A8FB";
} else if (hr < 5) {
	bstyle.backgroundColor = "#82A8FB";
	headingStyle.color = "#AD00FF";
} else if (hr < 6) {
	bstyle.backgroundColor = "#C344FF";
	headingStyle.color = "#CECECC";
} else if (hr < 7) {
	bstyle.backgroundColor = "#CECECC";
	headingStyle.color = "#FFCD93";
} else if (hr < 8) {
	bstyle.backgroundColor = "#FFCD93";
	headingStyle.color = "#9D7AFF";
} else if (hr < 9) {
	bstyle.backgroundColor = "#9D7AFF";
	headingStyle.color = "#CBBF00";
} else if (hr < 10) {
	bstyle.backgroundColor = "#F1E522";
	headingStyle.color = "#FF35AE";
} else if (hr < 11) {
	bstyle.backgroundColor = "#FF35AE";
	headingStyle.color = "#7EAD91";
} else if (hr < 12) {
	bstyle.backgroundColor = "#7EAD91";
	headingStyle.color = "#FF0000";
} else if (hr < 13) {
	bstyle.backgroundColor = "#FF0000";
	headingStyle.color = "#AEA7A7";
} else if (hr < 14) {
	bstyle.backgroundColor = "#AEA7A7";
	headingStyle.color = "#E200FF";
} else if (hr < 15) {
	bstyle.backgroundColor = "#E200FF";
	headingStyle.color = "#04C3FF";
} else if (hr < 16) {
	bstyle.backgroundColor = "#04C3FF";
	headingStyle.color = "#08FE79";

} else if (hr < 17) {
	bstyle.backgroundColor = "#08FE79";
	headingStyle.color = "#FFA8BD";

} else if (hr < 18) {
	bstyle.backgroundColor = "#FFA8BD";
	headingStyle.color = "#FFDEFF";


} else if (hr < 19) {
	bstyle.backgroundColor = "#FFDEFF";
	headingStyle.color = "#52B0D8";


} else if (hr < 20) {
	bstyle.backgroundColor = "#52B0D8";
	headingStyle.color = "#FFF84E";


} else if (hr < 21) {
	bstyle.backgroundColor = "#FFF84E";
	headingStyle.color = "#FF60A3";



} else if (hr < 22) {
	bstyle.backgroundColor = "#FF60A3";
	headingStyle.color = "#CAF2FF";

} else if (hr < 23) {
	bstyle.backgroundColor = "#CAF2FF";
	headingStyle.color = "#FFBD1B";
} else {
	bstyle.backgroundColor = "#FFBD1B";
	headingStyle.color = "#4EBEAA";
}

console.log(hr)
} // endfunction

setInterval(updateBackground, 1000 * 60);
updateBackground();
