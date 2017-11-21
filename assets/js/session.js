// console.log("session.js");

var validMapModes = [ "Switchboard", "patient-forms", "NGSVideos",
		"Telemedicine" ];

window.session = {};

// Object.observe(window.session,function(changes)
// {
// 	console.log(JSON.stringify(changes));
// });

function createDefaultSession(pos, userData) {
	var modeOverlay = {
		'name' : 'overlay'
	};

	var modeNearest = {
		'name' : 'nearest'
	// 'lat': undefined,
	// 'lon': undefined,
	// 'zoom' : 13
	};

	var modeBlank = {
		name : 'blank',
		lat : pos !== undefined ? pos.coords.latitude : 39.833333,
		lon : pos !== undefined ? pos.coords.longitude : -98.583333,
		zoom : 7,
		mapMode : 'Switchboard',
		city : '',
		isLocationEnabled : (pos !== undefined && pos.code === undefined) ? true : false,
		first_name: userData.first_name,
		last_name: userData.last_name
	};

	var modeSearch = {
		'name' : 'search',
		'searchTerm' : '',
		'searchLocation' : 'newport beach'
	};

	if ((window.session === undefined || window.session.mode === undefined)
			|| (userData !== undefined && userData.first_name !== undefined)) {
		window.session = {
			mode : modeBlank
		};
		localStorage.setItem('session', JSON.stringify(window.session));

		// if (pos === undefined || pos.code !== undefined) {
		// 	geoModule.init(session.saveSession);
		// }
	}
}

function validateSession(pos) {
	if (typeof window.session === 'undefined') {
		createDefaultSession(pos);
		return;
	}
	if (typeof window.session.mode === 'undefined') {
		createDefaultSession(pos);
		return;
	}
	if (validMapModes.indexOf(window.session.mode.mapMode) == -1) {
		createDefaultSession(pos);
		return;
	}
}

function saveSession(pos) {
	if (pos !== undefined && pos.coords !== undefined) {
		session.isLocationEnabled = true;
		localStorage.setItem('position', JSON.stringify(pos.coords));
	}
	validateSession();
	localStorage.setItem('session', JSON.stringify(window.session));
}

function loadSession() {
	if (localStorage.getItem("session")) {
		window.session = JSON.parse(localStorage.getItem('session'));
		// console.log(window.session);
		validateSession();
	} else {
		createDefaultSession();
	}
}

loadSession();

// console.log("session.js - end");

