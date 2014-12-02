<?php

global $wp_query;

$page_object = $wp_query->get_queried_object();

$my_page_id  = $wp_query->get_queried_object_id();



?>


<div class="sidebar-section booktable" >

	<h2 class="widgettitle">BOOK A TABLE</h2>




<div align="center">

	<div class="OTButton"><script type="text/javascript" src="http://www.toptable.co.uk/ism/link.aspx?rid=91155&restref=91155&bgimage=http://www.staging.perkinreveller.co.uk.gridhosted.co.uk/wp-content/themes/perkins/images/reserve-now.png&hover=1"></script><noscript id="OT_noscript"><a href="http://www.toptable.co.uk/perkin-reveller-reservations-london?rtype=ism&restref=91155" >Reserve now on toptable.co.uk</a></noscript>



<script>

  

  

jQuery(document).on("click", "a#OTReserveNow", function(e) { 

     

    e.preventDefault();

        

        var href = jQuery(this).attr("href");

        

   console.log("clicked book a table"); 

   var eventData = { 

       category : "OpenTable", 

       action : "OpenedBookingWindow", 

       label : "Sidebar", 

   } 

   //                          category ¬              action ¬            label ¬           value ¬    
   ga('send','event', {

   		'eventCategory' : eventData.category.toString(), 
   		'eventAction' : eventData.action.toString(), 
   		'eventLabel' : eventData.label.toString(), 
   		'eventValue' : 1, 
   		'hitCallback': function() {
	       		console.log('Sent!!');
		    	//callback function
		    	window.location=href;
		    },
   		'hitCallbackFail' : function () {
   			console.log("Unable to send Google Analytics data");
   			//callback function
   			window.location=href;
   		}
   	});
   
   // 

   

    

 

});



</script>



</div>

</div>



<p style="margin-top: 15px; "><a href='tel:+442031666949'>+44 (0)20 3166 6949</a></p>

<p style="margin-top: 15px; "><a href="mailto:info@perkinreveller.co.uk?subject=booking enquiry">info@perkinreveller.co.uk</a></p>

<p>Now accepting reservations for <Br />New Year's Eve!</p>

</div>

<?php dynamic_sidebar( 'perkin-sidebar' ); ?>
