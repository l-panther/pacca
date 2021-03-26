$(document).ready(function() {
    // Map will display location and infor window for company
    // User will be used for access to gealocation. If granted, use function

    // Function will get user latitude and longitude and show map as a marker

    // ============================ MAP ============================ //
	let page = location.href,
		path = page.indexOf("index");
	if (page != -1) {
		
		let paccaLat = 51.4737375,
		paccaLon = -0.1070301,
		mapOptions = {
			// Variable for map options
			center: new google.maps.LatLng(paccaLat, paccaLon), // Co-ordinates for company to centered on map
			mapTypeControl: true, // Control for map
			zoom: 15, // Zoom level
			viewMapControl: true,
			streetViewControl: true, // Street view control
			panControl: true,
			zoomControl: true,
			scaleControl: true,
			overviewMapControl: true,
			rotateControl: true
		};

		// ============================ MARKER ============================ //
		let markerCenter = new google.maps.LatLng(paccaLat, paccaLon),
		marker = new google.maps.Marker({
			// New marker
			position: markerCenter // Position for marker
		});


		// ============================ INFO WINDOW ============================ //
		var infowindow = new google.maps.InfoWindow({
			// New info window
			content:
				"<h3 class='w3-medium'><b>Pacca Out of School Club</b></h3><br>336 Akerman Road, London<br>SW9 6RE<br><br><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star grey'></i>" // Content for window
		});

		// ============================ GEOLOCATION ============================ //
		var message = document.getElementById("nogeolocation"); // variable for kessage
		var map = new google.maps.Map( document.getElementById("map-canvas"), mapOptions); // Variable for new map. Set to id with map options
		marker.setMap(map); 


		if (navigator.geolocation) {
			// If accesss to geolocation
			navigator.geolocation.getCurrentPosition(showPosition); // Use get current position with function and argument
		} else {
			// Else
			message.innerHTML = "Geolocation is not supported by this browser."; // Show message
		}


		function showPosition(position) {
			// Get position function

			let user = new google.maps.LatLng(
				position.coords.latitude,
				position.coords.longitude
			),
			userMarker = new google.maps.Marker({
				// New marker
				position: user, // Position for marker
				icon: "images/website/main/user-marker.png" // Image for icon
			}),
			userInfo = new google.maps.InfoWindow({
				// New info window
				content: "You are here" // Content for window
			});

			userMarker.setMap(map); // Set marker to map
			userInfo.open(map, userMarker); // Open marker

			google.maps.event.addListener(userMarker, "click", function() {
				// Add listener for click on marker
				infowindow.open(map, user); // Open info window
			});
		}

		infowindow.open(map, marker); // Open info window

		function showError(error) {
			switch (error.code) {
				case error.PERMISSION_DENIED:
					message.innerHTML = "User denied the request for Geolocation.";
					break;
				case error.POSITION_UNAVAILABLE:
					message.innerHTML = "Location information is unavailable.";
					break;
				case error.TIMEOUT:
					message.innerHTML =
						"The request to get user location timed out.";
					break;
				case error.UNKNOWN_ERROR:
					message.innerHTML = "An unknown error occurred.";
					break;
			}
		}

		google.maps.event.addListener(marker, "click", function() {
			// Add listener for click on marker
			infowindow.open(map, marker); // Open info window
		});


	}

});
