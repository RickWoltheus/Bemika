
      <div class="wrapper">
          <ul id="results"><!-- results appear here --></ul>
          <div align="center">
              <button id="load_more_button"><img src="img/ajax-loader.gif"  class="animation_image" style="float:left;">Load More</button> <!-- load button -->
          </div>
      </div>

      <script type="text/javascript">
      var track_page = 1; //track user click as page number, righ now page number 1
      load_contents(track_page); //load content
      
      $("#load_more_button").click(function (e) { //user clicks on button
      	track_page++; //page number increment everytime user clicks load button
      	load_contents(track_page); //load content
      });
      
      //Ajax load function
      function load_contents(track_page){
      	$('.animation_image').show(); //show loading image
      	
      	$.post( '?action=fetch_pages', {'page': track_page, 'class': 'Article'}, function(data){
      		
      		if(data.trim().length == 0){
      			//display text and disable load button if nothing to load
      			$("#load_more_button").text("You have reached end of the record!").prop("disabled", true);
      		}
      		
      		$("#results").append(data); //append data into #results element
      		
      		//scroll page to button element
      		$("html, body").animate({scrollTop: $("#load_more_button").offset().top}, 800);
      	
      		//hide loading image
      		$('.animation_image').hide(); //hide loading image once data is received
      	});
      }
      </script>