$(document).ready(function () {
    var event1 = {
			id: 1,
            name: "Brighton",
            price: "£12.00",
            image: "brighton",
        },
        event2 = {
			id: 2,
            name: "Chessington",
            price: "£25.00",
            image: "chessington",
        },
        event3 = {
			id: 3,
            name: "Hastings",
            price: "£15.00",
            image: "hastings",
        },
        event4 = {
			id: 4,
            name: "Horniman",
            price: "£10.00",
            image: "horniman",
        },
        event5 = {
			id: 5,
            name: "Legoland",
            price: "£20.00",
            image: "legoland",
        },
        event6 = {
			id: 6,
            name: "Science",
            price: "£12.00",
            image: "science",
        },
        event7 = {
			id: 7,
            name: "Thopre Park",
            price: "£25.00",
            image: "thorpe",
        };
    events = [event1, event2, event3, event4, event5, event6, event7];
	
	// getList("#eventsList"); // Get list
	getCarousel("#eventsList"); // Get modal

	// Display output as list
    function getList(eventsList) {
        var output = ""; // Set variable to empty string

        for (var i = 0; i < events.length; i++) {
            // For length of result

            output +=
                "<div class='w3-col s6 m6 l4 event-container w3-center'> \
			<!-- Slide 1 --> \
			<div class='w3-card-4 event'> \
				<h3 class='w3-green w3-text-white'>" +
                events[i].name +
                "</h3> \
<!-- Image column --> \
                    <img src='images/website/events/" +
                events[i].image +
                ".jpg' alt=''> <!-- End image column --> \
				<!-- Description column --> \
					<dl> \
						<dt>Price per child</dt> \
						<dd aria-labelledby=''>" +
                events[i].price +
                "</dd> \
					</dl> \
                    <!-- End description column --> \
			</div> <!-- End slide 1 --> \
		</div>";
        }

        $(eventsList).html(output); // Insert content
    }
	
	
	// Display output as modal
    function getCarousel(elemId) {
        var output = ""; // Set variable to empty string

        for (var i = 0; i < events.length; i++) {
            // For length of result

			if(events[i].id == 1) { 
				output += "<div class='carousel-item active w3-row'>";
			} else {
				output += "<div class='carousel-item w3-row'>";
			}
      		output += "<div class='w3-col s12 m5 l5 w3-center desc'>";
      		output += "<dl><dt><h3>" + events[i].name + "</h3></dt>";
      		output += "<dd>Price per child</dd>";
			output += "<dd aria-labelledby='price' class='price'>" + events[i].price + "</dd></div>";
      		output += "<div class='w3-col s12 m7 l7'><img src='images/website/events/" + events[i].image + ".png' alt='Event image for " + events[i].name + "' class='w3-right'>";
    		output += "</dl></div></div>";
        }

        $(elemId).html(output); // Insert content
    }
    
	let d =
	$()
});
