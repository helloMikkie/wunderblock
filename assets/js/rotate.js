const progressBar = document.querySelector('a.back-link')

const body = document.querySelector('body')

document.addEventListener('scroll', function(){
	const pixels = window.pageYOffset
	const pageHeight = body.getBoundingClientRect().height
	const scrollDistance = pageHeight - window.innerHeight

	const percentage = pixels / scrollDistance
	console.log('percentage: ' + percentage)
	
	progressBar.style.transform = "rotate(" + percentage * 500 + "deg)";
	
})