$(document).ready(function () {
    var activity1 = {
			id: 1,
            name: "Cooking",
            price: "£12.00",
            image: "cooking"
        },
        activity2 = {
			id: 2,
            name: "Cricket",
            price: "£5.00",
            image: "cricket"
        },
        activity3 = {
			id: 3,
            name: "Football",
            price: "£5.00",
            image: "football"
        },
        activity4 = {
			id: 4,
            name: "French",
            price: "£12.00",
            image: "french"
        },
        activity5 = {
			id: 5,
            name: "Gardening",
            price: "£6.00",
            image: "gardening"
        },
        activity6 = {
			id: 6,
            name: "Homework",
            price: "£12.00",
            image: "homework"
        },
        activity7 = {
			id: 7,
            name: "Spanish",
            price: "£12.00",
            image: "spanish"
        };
    activities = [
        activity1,
        activity2,
        activity3,
        activity4,
        activity5,
        activity6,
        activity7
    ];
	
	 
	getTable("#activityList");
	// getList("#activityList"); // Get list
	// getCarousel("#activityList"); // Get list

	// Display output as card
    function getTable(elemId) {
        var output = "<table><tr><th scope='col'>Activity</th><th scope='col'>Price Per Child</th></tr>"; // Set variable to empty string

		
        for (var i = 0; i < activities.length; i++) {
            // For length of result

            output += "<tr><td>" + activities[i].name + "</td>";
            output += "<td>" + activities[i].price + "</td></tr>";
        }
		
		output += "";

        $(elemId).html(output); // Insert content
    }
	
	
	// Display output as card
    function getList(elemId) {
        var output = ""; // Set variable to empty string

        for (var i = 0; i < activities.length; i++) {
            // For length of result

            output +=
                "<div class='w3-col s6 m6 l4 activity-container w3-center'> \
			<!-- Slide 1 --> \
			<div class='activity'> \
				<h3>" +
                activities[i].name +
                "</h3> \
				<!-- Image column --> \
				<img src='images/website/activities/" +
                activities[i].image +
                ".jpg' alt=''> <!-- End image column --> \
				<!-- Description column --> \
				<div class=''> \
					<dl> \
						<dt>Price per child</dt> \
						<dd aria-labelledby=''>" +
                activities[i].price +
                "</dd> \
					</dl> \
				</div> <!-- End description column --> \
			</div> <!-- End slide 1 --> \
		</div>";
        }

        $(elemId).html(output); // Insert content
    }
	
	
	// Display output as modal
    function getCarousel(elemId) {
        var output = ""; // Set variable to empty string

        for (var i = 0; i < activities.length; i++) {
            // For length of result

			if(activities[i].id == 1) { 
				output += "<div class='carousel-item active w3-row'>";
			} else {
				output += "<div class='carousel-item w3-row'>";
			}
      		output += "<div  class='w3-col s12 m6 l6 w3-center'>";
      		output += "<dl><dt id='price'>" + activities[i].name + "</dt>";
      		output += "<dd id='price'>Price per child</dd>";
			output += "<dd aria-labelledby='price'>" + activities[i].price + "</dd></div>";
      		output += "<div class='w3-col s12 m6 l6'><img src='images/website/activities/" + activities[i].image + ".jpg' alt='" + activities[i].name + "' class='w3-right'>";
    		output += "</dl></div></div>";
        }

        $(elemId).html(output); // Insert content
    }
    
});
