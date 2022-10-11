

function updateBackground() {
	let d = new Date();
	let hr = d.getHours();
    // let hr = new Date().getHours(),


const allLinkTags = document.querySelectorAll('.block-type-text a')
 

allLinkTags.forEach(function(tag){

  

if (hr < 1) {

	tag.style.borderColor = "#ABF2BF";

} else if (hr < 2) {
	tag.style.borderColor = "#FFEA2F"; 

} else if (hr < 3) {
	tag.style.borderColor = "#21D4DF";

} else if (hr < 4) {

	tag.style.borderColor = "#82A8FB";
} else if (hr < 5) {

	tag.style.borderColor = "#AD00FF";
} else if (hr < 6) {

	tag.style.borderColor = "#CECECC";
} else if (hr < 7) {

	tag.style.borderColor = "#FFCD93";
} else if (hr < 8) {

	tag.style.borderColor = "#9D7AFF";
} else if (hr < 9) {

	tag.style.borderColor = "#CBBF00";
} else if (hr < 10) {

	tag.style.borderColor = "#FF35AE";
} else if (hr < 11) {
	
	tag.style.borderColor = "#7EAD91";
} else if (hr < 12) {

	tag.style.borderColor= "#FF0000";
} else if (hr < 13) {

	tag.style.borderColor = "#AEA7A7";
} else if (hr < 14) {

	tag.style.borderColor = "#E200FF";
} else if (hr < 15) {
	
	tag.style.borderColor = "#04C3FF";
} else if (hr < 16) {

tag.style.borderColor = "#08FE79"
	

} else if (hr < 17) {
	tag.style.borderColor = "#FFA8BD"
	

} else if (hr < 18) {
	tag.style.borderColor = "#FFDEFF"
	

} else if (hr < 19) {

	tag.style.borderColor = "#52B0D8";
 

} else if (hr < 20) {

	tag.style.borderColor = "#FFF84E";
   

} else if (hr < 21) {

	tag.style.borderColor = "#FF60A3";



} else if (hr < 22) {

	tag.style.borderColor = "#CAF2FF";
    
 
} else if (hr < 23) {

	tag.style.borderColor = "#FFBD1B";

} else {
	tag.style.borderColor = "#4EBEAA"
	
}


})
console.log(hr)
} // endfunction

setInterval(updateBackground, 1000 * 60);
updateBackground();
