$(document).ready(function(){
    $('.flip').click(function(){
        $(this).find('.detail-box').toggleClass('flipped');
        $(this).find('.see-more-container').css("cursor", "pointer");
    });
});

$(function() {

	/***
	 * Weather Forecast using Openweather map API and 
	 * Place Information using Foursquare API
	 */

	var appendthis = ("<div class='modal-overlay js-modal-close'></div>");

	$(".see-more-container[data-modal-id]").click(function(e) {
		e.preventDefault();
		$("body").append(appendthis);
		$(".modal-overlay").fadeTo(500, 0.7);
		//$(".js-modalbox").fadeIn(500);
		var modalBox = $(this).attr('data-modal-id');
		$("#" + modalBox).fadeIn($(this).data());

		/**
		 * Using Openweather map API
		 */

		var cityNameId = $(this).attr('id');
		splitCityId = cityNameId.split('|');
		cityName = splitCityId[0];
		cityId = splitCityId[1];
		apiKey = "0464f9af0ec513f24d901e6993346a4b";

		var city_name;
    	var temp;
      	var pressure;
      	var wind_speed;
      	var country_name;
		var weather_description;
		var weather_icon;  
		var weather_date;

		$.getJSON("http://api.openweathermap.org/data/2.5/forecast?id=" + cityId + "&lang=en&units=metric&cnt=6" +"&appId=" + apiKey, function(data){
			city_name = data["city"]["name"];
			country_name = data["city"]["country"];
			weather_date = data["list"][0]["dt_txt"];

			console.log("weather data", data);

			$('#city-name-heading').html(
				'<div class="city-weather-info">' 
				+ '<span>' + city_name + ", " + country_name  +'</span>'
				+ '</div>'
				
			)

			$('#weather-status-heading').html(
				'<div class="weather-heading">'
				+ '<i class="fas fa-cloud-sun"></i>&nbsp;<span>' + " Weather Forecast " + '</span>'
				+ '</div>'
			)
			
			var result = data.list;
			$("#list-weather-icons").html('');
			result.forEach(function (res){
				console.log(res.weather[0].icon+".png")

				var weatherDays = [
					"Sunday",
					"Monday",
					"Tuesday",
					"Wednesday",
					"Thursday",
					"Friday",
					"Saturday",
				];

				var weatherMonths = [
					"Jan",
					"Feb",
					"Mar",
					"Apr",
					"May",
					"Jun",
					"Jul",
					"Aug",
					"Sept",
					"Oct",
					"Nov",
					"Dec",
				];

				function formatAMPM(date) {
					var hours = date.getHours();
					var minutes = date.getMinutes();
					var ampm = hours >= 12 ? 'pm' : 'am';
					hours = hours % 12;
					hours = hours ? hours : 12; // the hour '0' should be '12'
					minutes = minutes < 10 ? '0'+minutes : minutes;
					var strTime = hours + ':' + minutes + ' ' + ampm;
					return strTime;
				  }
				

				let current_datetime = new Date(res.dt_txt);
				let current_day = current_datetime.getDay();
				let current_month = current_datetime.getMonth();
				let formatted_date = current_datetime.getDate() + "-" + (current_datetime.getMonth() + 1) + "-" + current_datetime.getFullYear() + current_datetime.get;
				let final_date_string = weatherDays[current_day];
				let final_month_yr = current_datetime.getDate() + " " + weatherMonths[current_month]  + " " + current_datetime.getFullYear();
				let final_datetime = formatAMPM(new Date(res.dt_txt));

				$("#list-weather-icons").append('<div class="col">'
					+ "<span style=font-weight:bold>" + final_date_string + ", " + "<br />" + final_month_yr  + "</span> <br />"
					+ "<span style=font-weight:bold>" + final_datetime + "</span> <br />"
					+ "<img src=http://openweathermap.org/img/w/" + res.weather[0].icon + ".png />"
					+ "&nbsp;<span style=font-weight:bold>" + res.main.temp + "°C" + "</span>"
					+ "<br />"
					+ "<div class='details-weather'>"
					+ "<span>Feels like</span>" + " - " + "<span style='font-weight: 600'>" + res.main.temp + "°C" + "</span> <br/>"
					+ "<span>Wind</span>" + " - " + "<span style='font-weight: 600'>" + res.wind.speed + "m/s" + "</span><br />"
					+ "<span>Humidity</span>" + "  - " + "<span style='font-weight: 600'>" + res.main.humidity + "%" + "</span><br />"
					+ "<span>Pressure</span>" + " - " + "<span style='font-weight: 600'>" + res.main.pressure + " hPa" + "</span>"
					+ "</div>"
				
				+ '</div>');
			});

		});


		/**
		 * Using Foursquare API
		 */

		 var clientSecret = "PLW5WN1VV3MZRJ3YDBBQBEHONH1AN0J2HQXQWVQEW1QNPAEU";
		 clientId = "EGRIXVHSNPWUBUWPWNUAYSIX045MHC5MT112Y2YF0JA1AVTT";
		 host = "https://api.foursquare.com/v2/venues/search";
		 ver = '20191128';
		 category= '4deefb944765f83613cdba6e'

		 $('#venue-heading').html(
			'<div class="places-heading">'
			+ '<i class="fas fa-map-marked-alt"></i>&nbsp;<span>' + " Places to Visit " + '</span>'
			+ '</div>'
		)
		 
		 $.getJSON(host + "?near=" + cityName + ",JP" + "&limit=5&category=" + category + "&client_id=" + clientId + "&client_secret=" + clientSecret + "&v=" + ver, function(data){
			
			console.log("places data", data);
			
			var places = data.response.venues;
			$("#list-places").html('');
			places.forEach(function(res) {

				$('#list-places').append(
					'<div class="col list-places-container">'
					+ "<span>" +
					res.name
					+ "</span>"
					+ "<span>"
					+	res.location.formattedAddress[0] + " " + res.location.formattedAddress[1] + " " +  res.location.formattedAddress[2] + " " + res.location.formattedAddress[3]
					+ "</span>"
					+ '</div>'
				)
			})


		 });


	});

	$(".close, .js-modal-close, .modal-overlay").click(function() {
		$(".modal-box, .modal-overlay").fadeOut(500, function() {
            $(".modal-overlay").remove();
            $(".modal-overlay").css("display", "none");
		});
	});

	$(window).resize(function() {
		$(".modal-box").css({
			top: ($(window).height() - $(".modal-box").outerHeight()) / 2,
			left: ($(window).width() - $(".modal-box").outerWidth()) / 2
		});
	});

	$(window).resize();

});