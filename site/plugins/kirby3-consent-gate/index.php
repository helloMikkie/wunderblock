<?php

load([
	'fendinger\\consentgate' => 'src/consent-gate.php',
], __DIR__);

$fendinger_consent_gate_video_tag_original = Kirby\Text\KirbyTag::$types['video_tag_original'] = Kirby\Text\KirbyTag::$types['video'];
$fendinger_consent_gate_gist_tag_original = Kirby\Text\KirbyTag::$types['gist_tag_original'] = Kirby\Text\KirbyTag::$types['gist'];

Kirby::plugin('fendinger/consent-gate', [
	'options' => [
		'vendors' => [
			'youtube' => [
				'name' => 'YouTube',
				'logo' => '<svg width="40" height="40" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><g transform="matrix(0.588235,0,0,0.588235,0,0)"><path d="M79.919,16.136C78.978,12.641 76.222,9.885 72.727,8.944C66.342,7.196 40.8,7.196 40.8,7.196C40.8,7.196 15.258,7.196 8.872,8.877C5.444,9.818 2.621,12.641 1.68,16.136C0,22.521 0,35.763 0,35.763C0,35.763 0,49.071 1.68,55.39C2.621,58.885 5.377,61.641 8.872,62.582C15.325,64.329 40.8,64.329 40.8,64.329C40.8,64.329 66.342,64.329 72.727,62.649C76.222,61.708 78.978,58.952 79.919,55.457C81.6,49.071 81.6,35.83 81.6,35.83C81.6,35.83 81.667,22.521 79.919,16.136Z" fill="#f2f2f2"/><path d="M53.907,35.763L32.667,23.529L32.667,47.996L53.907,35.763Z" fill="#222"/></g></svg>',
				'privacy' => 'https://policies.google.com/privacy',
			],
			'vimeo' => [
				'name' => 'Vimeo',
				'logo' => '<svg width="40" height="40" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><g><path d="M48,43.2C48,45.851 45.851,48 43.2,48L4.8,48C2.149,48 -0,45.851 -0,43.2L-0,4.8C-0,2.149 2.149,-0 4.8,-0L43.2,-0C45.851,-0 48,2.149 48,4.8L48,43.2Z" fill="#fff"/><path d="M40.389,15.94C40.235,19.316 37.877,23.939 33.315,29.807C28.599,35.935 24.608,39 21.345,39C19.323,39 17.612,37.135 16.214,33.402C15.281,29.98 14.348,26.558 13.414,23.136C12.376,19.405 11.263,17.537 10.072,17.537C9.813,17.537 8.905,18.083 7.35,19.171L5.718,17.069C7.43,15.565 9.119,14.062 10.78,12.555C13.063,10.583 14.778,9.546 15.921,9.441C18.62,9.181 20.281,11.026 20.905,14.976C21.579,19.237 22.046,21.887 22.307,22.924C23.086,26.46 23.943,28.226 24.877,28.226C25.602,28.226 26.694,27.079 28.148,24.785C29.6,22.492 30.378,20.748 30.483,19.548C30.691,17.569 29.912,16.578 28.148,16.578C27.318,16.578 26.461,16.768 25.58,17.146C27.286,11.563 30.543,8.852 35.35,9.006C38.914,9.111 40.595,11.422 40.389,15.94Z" fill="#222"/></g></svg>',
				'privacy' => 'https://vimeo.com/privacy',
			],
			'github' => [
				'name' => 'GitHub',
				'logo' => '<svg width="48" height="48" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="M24.005,0C10.755,0 0.012,10.743 0.012,23.996C0.012,34.596 6.885,43.59 16.422,46.764C17.622,46.983 18,46.272 18,45.636C18,45.066 18.012,43.473 18,41.471C11.326,42.921 9.943,38.31 9.943,38.31C8.853,35.538 7.281,34.8 7.281,34.8C5.103,33.312 7.444,33.341 7.444,33.341C9.852,33.51 11.121,35.814 11.121,35.814C13.261,39.479 16.735,38.42 18.102,37.808C18.321,36.257 18.942,35.199 19.627,34.599C14.299,33.993 8.698,31.935 8.698,22.74C8.698,20.12 9.633,17.979 11.167,16.302C10.92,15.696 10.095,13.256 11.403,9.951C11.403,9.951 13.418,9.306 18,12.413C19.914,11.88 21.968,11.615 24.008,11.605C26.046,11.615 28.098,11.88 30.015,12.413C34.597,9.308 36.609,9.951 36.609,9.951C37.917,13.256 37.094,15.696 36.847,16.302C38.382,17.979 39.313,20.12 39.313,22.74C39.313,31.959 33.703,33.987 28.357,34.58C29.219,35.322 30,36.762 30,39L30,45.642C30,46.284 30.387,46.994 31.605,46.761C41.133,43.582 48,34.593 48,23.996C48,10.743 37.257,0 24.005,0Z" fill="#181616"/></svg>',
				'privacy' => 'https://docs.github.com/en/github/site-policy/github-privacy-statement',
			],
			'googlemaps' => [
				'name' => 'Google Maps',
				'logo' => '<svg width="48" height="48" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="M42.357,22.457L42.357,42.862L35.944,41.675L33.117,38.284L21.205,25.041L31.319,17.855C36.385,24.542 36.545,22.912 36.545,22.912C36.545,22.912 39.047,19.176 42.257,22.386L42.357,22.457Z" fill="#CCCCCC"/><path d="M17.879,20.916L38.908,47.981C38.786,47.993 38.662,48 38.537,48L4.156,48L17.879,20.916Z" fill="#128EF8"/><path d="M31.319,17.855L0.042,44.18L0.042,9.505C0.042,7.395 1.753,5.685 3.862,5.685L26.671,5.685C25.691,7.368 29.323,8.449 29.323,10.536C29.323,12.638 30.328,16.164 31.319,17.855Z" fill="#04B446"/><path d="M42.357,42.862L42.357,44.18C42.357,46.164 40.844,47.795 38.908,47.981L21.311,30.616L25.57,26.299L35.402,36L35.944,36.536L42.357,42.862Z" fill="#F2F2F2"/><path d="M30.236,21.571L25.57,26.299L21.311,30.616L4.156,48L3.862,48C1.753,48 0.042,46.289 0.042,44.18L26.691,17.174C27.19,18.028 30.622,17.163 31.319,17.855L32.601,19.503C33.226,20.17 29.698,20.863 30.236,21.571Z" fill="#FFD837"/><path d="M10.022,21.354C6.665,21.354 3.934,18.623 3.934,15.266C3.934,11.909 6.665,9.178 10.022,9.178C11.647,9.178 13.176,9.811 14.326,10.962L12.915,12.373C12.141,11.6 11.114,11.174 10.022,11.174C7.766,11.174 5.93,13.01 5.93,15.266C5.93,17.522 7.766,19.358 10.022,19.358C11.934,19.358 13.545,18.039 13.991,16.264L10.022,16.264L10.022,14.268L16.11,14.268L16.11,15.266C16.11,18.623 13.379,21.354 10.022,21.354Z" fill="#ffffff"/><path d="M26.671,5.685C28.647,2.286 32.329,0 36.545,0C42.848,0 47.958,5.11 47.958,11.413C47.958,12.994 47.636,14.499 47.056,15.869C46.474,17.238 45.633,18.47 44.595,19.503C43.73,20.422 42.955,21.394 42.257,22.386C37.689,28.895 36.545,36.326 36.545,36.326C36.545,36.326 35.302,28.258 30.236,21.571C29.698,20.863 29.118,20.169 28.492,19.503L28.494,19.503C27.796,18.811 27.19,18.028 26.691,17.174C25.699,15.483 25.131,13.515 25.131,11.413C25.131,9.326 25.691,7.368 26.671,5.685Z" fill="#F14336"/><path d="M36.545,5.339C39.899,5.339 42.618,8.059 42.618,11.414C42.618,14.768 39.899,17.487 36.545,17.487C33.19,17.487 30.47,14.768 30.47,11.414C30.47,8.059 33.19,5.339 36.545,5.339Z" fill="#7E2D25"/></svg>',
				'privacy' => '#',
			],
			'openstreetmap' => [
				'name' => 'OpenStreetMap',
				'logo' => '<svg width="48" height="48" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="M27.494,42.652C26.024,42.239 24.56,41.805 23.102,41.35C23.052,41.294 25.516,32.558 25.616,32.452C25.662,32.4 34.1,34.756 34.444,34.924C34.568,34.976 34.438,35.5 33.394,39.128C32.966,40.617 32.543,42.108 32.124,43.6C32.074,43.774 31.986,43.912 31.93,43.912C31.874,43.906 29.874,43.338 27.492,42.65L27.494,42.652ZM33.318,43.7C33.318,43.594 35.772,35.034 35.81,35.006C35.904,34.938 44.458,32.546 44.492,32.584C44.53,32.622 42.094,41.258 42.032,41.304C41.992,41.342 33.78,43.686 33.514,43.74C33.406,43.762 33.318,43.74 33.318,43.702L33.318,43.7ZM19.108,39.878C20.8,38.174 22.306,36.624 22.456,36.422C22.798,35.986 23.266,34.958 23.4,34.392C23.452,34.156 23.506,33.688 23.516,33.348L23.538,32.734L23.902,32.632C24.108,32.576 24.288,32.544 24.306,32.564C24.352,32.614 21.892,41.206 21.814,41.284C21.774,41.316 20.46,41.71 18.886,42.156L16.036,42.966L19.11,39.882L19.108,39.878ZM35.686,33.758C35.638,33.636 35.598,33.511 35.568,33.384L35.48,33.072L35.792,33.016C38.47,32.562 41.344,31.304 43.608,29.59C43.928,29.34 44.112,29.248 44.138,29.322C44.246,29.652 44.682,31.222 44.668,31.24C44.6,31.308 35.708,33.804 35.684,33.762L35.686,33.758ZM5.52,31.158C5.42,31.08 3.162,23.426 2.992,22.578C2.96,22.41 3.284,22.49 7.34,23.65C11.582,24.858 11.724,24.908 11.784,25.13C11.84,25.326 11.806,25.388 11.534,25.576C11.366,25.694 9.996,27.024 8.488,28.534C7.575,29.459 6.649,30.371 5.708,31.268C5.676,31.268 5.596,31.218 5.522,31.16L5.52,31.158ZM7.162,22.402C4.786,21.716 2.834,21.156 2.828,21.15C2.796,21.126 5.35,12.284 5.398,12.23C5.442,12.186 14.242,14.652 14.336,14.734C14.354,14.752 13.798,16.768 13.1,19.212C11.948,23.252 11.814,23.66 11.654,23.652C11.554,23.646 9.536,23.082 7.16,22.4L7.162,22.402ZM13.08,23.478C13.104,23.416 13.504,22.032 13.968,20.41L14.808,17.458L14.92,18.1C15.106,19.212 15.45,20.476 15.848,21.582C16.06,22.174 16.222,22.66 16.21,22.672C16.194,22.684 15.546,22.874 14.772,23.096C13.994,23.314 13.29,23.516 13.2,23.544C13.084,23.576 13.05,23.556 13.082,23.476L13.08,23.478ZM9.81,12.224C7.436,11.546 5.476,10.954 5.45,10.916C5.37,10.792 2.958,2.274 2.99,2.24C3.042,2.19 11.61,4.648 11.692,4.732C11.786,4.834 14.252,13.49 14.184,13.484L9.82,12.226L9.81,12.224ZM14.106,8.798L13.068,5.186L12.912,4.626L16.298,3.66C18.166,3.13 19.746,2.67 19.818,2.644C19.886,2.612 19.652,2.924 19.298,3.316C17.447,5.355 16.104,7.803 15.38,10.46C15.267,10.828 15.179,11.203 15.116,11.582C15.116,12.168 14.886,11.532 14.106,8.802L14.106,8.798Z" fill="#7EBC6F"/><path d="M5.344,47.938C4.64,47.76 4.276,47.47 2.402,45.602C0.17,43.376 0.028,43.158 0.036,41.998C0.036,40.708 -0.356,41.17 6.772,34.026C13.972,26.81 13.602,27.124 14.9,27.128C15.504,27.128 15.656,27.16 16.14,27.408L16.694,27.688L20.182,24.2L19.746,23.514C18.896,22.19 18.096,20.256 17.734,18.656C16.722,14.139 17.811,9.399 20.692,5.776C25.672,-0.464 34.61,-1.848 41.212,2.6C44.836,5.036 47.192,8.798 47.868,13.228C48.008,14.162 48.008,16.386 47.868,17.376C47.423,20.72 45.869,23.821 43.458,26.18C42.341,27.339 41.025,28.289 39.572,28.982C37.654,29.948 36.022,30.402 33.81,30.588C30.664,30.85 27.17,29.978 24.498,28.262L23.812,27.826L20.324,31.314L20.604,31.874C20.854,32.356 20.884,32.506 20.884,33.108C20.89,34.41 21.196,34.042 14.032,41.206C8.51,46.718 7.66,47.534 7.236,47.728C6.694,47.978 5.856,48.07 5.346,47.94L5.344,47.938ZM34.97,27.9C38.976,27.154 42.396,24.545 44.176,20.88C46.958,15.082 45.086,8.268 39.722,4.664C38.446,3.804 36.664,3.076 34.988,2.74C33.826,2.506 31.37,2.532 30.16,2.79C28.397,3.157 26.728,3.881 25.256,4.918C24.368,5.548 22.902,7.014 22.282,7.892C18.854,12.687 19.17,19.262 23.042,23.706C25.049,26.015 27.817,27.532 30.844,27.978C31.862,28.134 33.928,28.094 34.974,27.904L34.97,27.9Z"/></svg>',
				'privacy' => '#',
			],
			'twitter' => [
				'name' => 'Twitter',
				'logo' => '<svg width="48" height="48" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="M42.958,14.185C42.987,14.605 42.987,15.025 42.987,15.449C42.987,28.365 33.155,43.26 15.176,43.26L15.176,43.252C9.865,43.26 4.665,41.739 0.194,38.87C0.966,38.963 1.742,39.01 2.52,39.012C6.921,39.015 11.197,37.539 14.659,34.819C10.477,34.74 6.809,32.013 5.528,28.032C6.993,28.314 8.503,28.256 9.941,27.863C5.381,26.942 2.1,22.935 2.1,18.283L2.1,18.159C3.459,18.915 4.98,19.335 6.536,19.382C2.241,16.512 0.917,10.798 3.511,6.331C8.474,12.437 15.795,16.15 23.655,16.543C22.868,13.148 23.944,9.59 26.483,7.204C30.42,3.503 36.612,3.693 40.312,7.628C42.501,7.196 44.599,6.393 46.519,5.255C45.79,7.517 44.263,9.439 42.223,10.661C44.16,10.432 46.053,9.914 47.835,9.122C46.523,11.088 44.87,12.801 42.958,14.185Z" fill="#1D9BF0"/></svg>',
				'privacy' => '#',
			],
			'facebook' => [
				'name' => 'Facebook',
				'logo' => '<svg width="48" height="48" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg"><rect x="0" y="0" width="48" height="48" fill="#3B5998"/><path d="M41.193,22.047L40.456,29.02L34.881,29.02L34.881,49.255L26.508,49.255L26.508,29.021L22.333,29.021L22.333,22.048L26.508,22.048L26.508,17.849C26.508,12.177 28.865,8.788 35.569,8.788L41.144,8.788L41.144,15.761L37.657,15.761C35.055,15.761 34.883,16.743 34.883,18.561L34.883,22.048L41.193,22.048L41.193,22.047Z" fill="#ffffff"/></svg>',
				'privacy' => '#',
			],
			'unknown' => [
				'name' => 'Unbekannt',
				'logo' => '',
				'privacy' => 'javascript:void(0);',
			]
		],
	],
	'blueprints' => [
		'blocks/map' => __DIR__ . '/blueprints/blocks/map.yml',
		'blocks/twittertweet' => __DIR__ . '/blueprints/blocks/twittertweet.yml',
		'blocks/facebookpage' => __DIR__ . '/blueprints/blocks/facebookpage.yml',
	],
	'snippets' => [
		'consent-gate' => __DIR__ . '/snippets/consent-gate.php',
		'blocks/video-original' => kirby()->root() . '/kirby/config/blocks/video/video.php',
		'blocks/video' => __DIR__ . '/snippets/blocks/video.php',
		// 'blocks/image-original' => kirby()->root() . '/kirby/config/blocks/image/image.php',
		// 'blocks/image' => __DIR__ . '/snippets/blocks/image.php',
		'blocks/map' => __DIR__ . '/snippets/blocks/map.php',
		// 'blocks/twittertweet' => __DIR__ . '/snippets/blocks/twittertweet.php',
		'blocks/facebookpage' => __DIR__ . '/snippets/blocks/facebookpage.php',
	],
	'tags' => [
		'video' => [
			'attr' => $fendinger_consent_gate_video_tag_original['attr'],
			'html' => function($tag) use ($fendinger_consent_gate_video_tag_original)  {
				$video_html = $fendinger_consent_gate_video_tag_original['html']($tag);
				if (Str::contains($tag->value, 'youtu', true) === true) {
					return snippet('consent-gate', [
						'vendor' => 'youtube', 
						'content' => $video_html,
					], true);
				}
				if (Str::contains($tag->value, 'vimeo', true) === true) {
					return snippet('consent-gate', [
						'vendor' => 'vimeo',
						'content' => $video_html,
					], true);
				}
				return $video_html;
			},
		],
		'youtube' => [
			'attr' => $fendinger_consent_gate_video_tag_original['attr'],
			'html' => function($tag) use ($fendinger_consent_gate_video_tag_original)  {
				return kirbytag('video', $tag->value);
			},
		],
		'vimeo' => [
			'attr' => $fendinger_consent_gate_video_tag_original['attr'],
			'html' => function($tag) use ($fendinger_consent_gate_video_tag_original)  {
				return kirbytag('video', $tag->value);
			},
		],
		'gist' => [
			'attr' => $fendinger_consent_gate_gist_tag_original['attr'],
			'html' => function($tag) use ($fendinger_consent_gate_gist_tag_original) {
				$gist_html = $fendinger_consent_gate_gist_tag_original['html']($tag);
				return snippet('consent-gate', [
					'vendor' => 'github',
					'content' => $gist_html,
				], true);
			},
		],
		'map' => [
			'attr' => [
			],
			'html' => function($tag) {
				if (Str::contains($tag->value, 'goo', true) === true) {
					return snippet('consent-gate', [
						'vendor' => 'googlemaps',
						'content' => Fendinger\ConsentGate::getGooglemapsHtml($tag->value),
					], true);
				}
				if (Str::contains($tag->value, 'open', true) === true) {
					return snippet('consent-gate', [
						'vendor' => 'openstreetmap',
						'content' => Fendinger\ConsentGate::getOpenstreetmapHtml($tag->value),
					], true);
				}
			},
		],
		'twittertweet' => [
			'attr' => [
			],
			'html' => function($tag) {
				return snippet('consent-gate', [
					'vendor' => 'twitter',
					'content' => Fendinger\ConsentGate::getTwittertweetHtml($tag->value),
				], true);
			},
		],
		'facebookpage' => [
			'attr' => [
			],
			'html' => function($tag) {
				return snippet('consent-gate', [
					'vendor' => 'facebook',
					'content' => Fendinger\ConsentGate::getFacebookpageHtml($tag->value),
				], true);
			},
		],
	],
	'translations' => [
		'en' => require(__DIR__ . '/translations/en.php'),
		'de' => require(__DIR__ . '/translations/de.php'),
	],
]);