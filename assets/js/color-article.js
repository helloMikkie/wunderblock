

function updateBackground() {
	let d = new Date();
	let hr = d.getHours();
    // let hr = new Date().getHours(),

	const headline = document.querySelector('.logo-type')
	const buttonTag = document.querySelector('.back-link')
    let headingStyle = headline.style
	let buttonTagStyle = buttonTag.style
	



  

if (hr < 1) {
	buttonTagStyle.backgroundColor = "#4EBEAA"
	headingStyle.color = "#4EBEAA";

} else if (hr < 2) {
	buttonTagStyle.backgroundColor = "#ABF2BF"
	headingStyle.color = "#ABF2BF";

} else if (hr < 3) {
	buttonTagStyle.backgroundColor = "#FFEA2F"
	headingStyle.color = "#FFEA2F";

} else if (hr < 4) {
	buttonTagStyle.backgroundColor = "#21D4DF"
	headingStyle.color = "#21D4DF";
} else if (hr < 5) {
	buttonTagStyle.backgroundColor = "#82A8FB"
	headingStyle.color = "#82A8FB";
} else if (hr < 6) {
	buttonTagStyle.backgroundColor = "#AD00FF"
	headingStyle.color = "#AD00FF";
} else if (hr < 7) {
	buttonTagStyle.backgroundColor = "#CECECC"
	headingStyle.color = "#CECECC";
} else if (hr < 8) {
	buttonTagStyle.backgroundColor = "#FFBB6B"
	headingStyle.color = "#FFBB6B";
} else if (hr < 9) {
	buttonTagStyle.backgroundColor = "#9D7AFF"
	headingStyle.color = "#9D7AFF";
} else if (hr < 10) {
	buttonTagStyle.backgroundColor = "#D9CC04"
	headingStyle.color = "#D9CC04";
} else if (hr < 11) {
	buttonTagStyle.backgroundColor = "#FF35AE"
	headingStyle.color = "#FF35AE";
} else if (hr < 12) {
	buttonTagStyle.backgroundColor = "#7EAD91"
	headingStyle.color = "#7EAD91";
} else if (hr < 13) {
	buttonTagStyle.backgroundColor = "#FF0000"
	headingStyle.color = "#FF0000";
} else if (hr < 14) {
	buttonTagStyle.backgroundColor = "#AEA7A7"
	headingStyle.color = "#AEA7A7";
} else if (hr < 15) {
	buttonTagStyle.backgroundColor = "#E200FF"
	headingStyle.color = "#E200FF";
} else if (hr < 16) {
	buttonTagStyle.backgroundColor = "#04C3FF"
	headingStyle.color = "#04C3FF";

} else if (hr < 17) {
	buttonTagStyle.backgroundColor = "#08FE79"
	headingStyle.color = "#08FE79";

} else if (hr < 18) {
	buttonTagStyle.backgroundColor = "#FFA8BD"
	headingStyle.color = "#FFA8BD";
} else if (hr < 19) {
	buttonTagStyle.backgroundColor = "#FFC0FF"
	headingStyle.color = "#FFC0FF";
 

} else if (hr < 20) {
	buttonTagStyle.backgroundColor = "#52B0D8"
	headingStyle.color = "#52B0D8";
   

} else if (hr < 21) {
	buttonTagStyle.backgroundColor = "#FFF84E"
	headingStyle.color = "#FFF84E";



} else if (hr < 22) {
	buttonTagStyle.backgroundColor = "#FF60A3"
	headingStyle.color = "#FF60A3";
    
 
} else if (hr < 23) {
	buttonTagStyle.backgroundColor = "#ADEBFF"
	headingStyle.color = "#ADEBFF";

} else {
	buttonTagStyle.backgroundColor = "#FFBD1B"
	headingStyle.color = "#FFBD1B";
}



console.log(hr)
} // endfunction

setInterval(updateBackground, 1000 * 60);
updateBackground();
