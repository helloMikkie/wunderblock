const $body = document.querySelector('body');
$body.addEventListener('cookies:saved', function(event) {
  console.log('Saved cookie features:', event.detail);
})

// Example output (array)
// Saved cookie features: ['essential', 'analytics', 'mapbox']