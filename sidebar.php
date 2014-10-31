<?php

global $wp_query;

$page_object = $wp_query->get_queried_object();

$my_page_id  = $wp_query->get_queried_object_id();



?>





<div class="sidebar-section" id="food-menu">

	<h2 class="widgettitle">MENUS</h2>

<img src="http://www.perkinreveller.co.uk/wp-content/themes/perkins/images/formsplitter.jpg" style="position: relative; top:-10px;" />

	<ul class="show-on-menu-page">

		<li><a href="/lunch-menu/">Lunch</a></li>

		<li><a href="/a-la-carte/">Dinner</a></li>

		<li><a href="/desserts/">Desserts</a></li>

		<li><a href="/afternoon-tea/">Afternoon Tea</a></li>

<li><a href="/sunday-lunch/">Sunday Menu</a></li>	

	</ul>

<div style="clear: both;"></div>

</div>



<div class="sidebar-section" id="drinks-menu">

	<h2 class="widgettitle">Bar Menus</h2>

<img src="http://www.perkinreveller.co.uk/wp-content/themes/perkins/images/formsplitter.jpg" style="position: relative; top:-10px;" />

	<ul class="show-on-menu-page">

		<li><a href="/bar-food/">Bar Food</a></li>

		<li><a href="/wine-list/">Wine List</a></li>

		<li><a href="/punch-bowls/">Punch Bowls</a></li>

		<li><a href="/gin-mills/">Gin Mill</a></li>

		<li><a href="/prohibition/">Prohibition</a></li>

		<li><a href="/vintage-cocktails/">Vintage</a></li>

                <li><a href="/tiki-dancefloor/">Tiki Bar</a></li>

		<li><a href="/beer-street/">Beer Street</a></li>

               	

	</ul>

<div style="clear: both;"></div>

</div>



<div class="sidebar-section booktable" >

	<h2 class="widgettitle">BOOK A TABLE</h2>

<img src="http://www.perkinreveller.co.uk/wp-content/themes/perkins/images/formsplitter.jpg" style="position: relative; top:-10px;" />

<div align="center">

	<div class="OTButton"><script type="text/javascript" src="http://www.toptable.co.uk/ism/link.aspx?rid=91155&restref=91155&bgimage=http://www.toptable.co.uk/img/frontDoor/ot_btn_red.png&hover=1"></script><noscript id="OT_noscript"><a href="http://www.toptable.co.uk/perkin-reveller-reservations-london?rtype=ism&restref=91155" >Reserve now on toptable.co.uk</a></noscript>



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

   _gaq.push(['_trackEvent',   eventData.category,     eventData.action,   eventData.label,        1 ]); 

         window.setTimeout(function(){

       window.location=href;

   },300);

    

 

});



</script>



</div>

</div>



<p style="margin-top: 15px; font-size: 22px;">+44 (0)20 3166 6949</p>

<p style="margin-top: 15px; font-size: 22px;"><a href="mailto:info@perkinreveller.co.uk?subject=booking enquiry">info@perkinreveller.co.uk</a></p>

</div>



<div class="sidebar-section twitter" >

	<h2 class="widgettitle">TWITTER</h2>

<a class="twitter-timeline" href="https://twitter.com/PerkinReveller" data-widget-id="261083629164298241">Tweets by @PerkinReveller</a>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>



</div>



<?php if (get_the_ID() == "1034"): ?> 

<div class="sidebar-section instagram">

<h2 class="widgettitle">Instagram</h2>

<img src="http://www.perkinreveller.co.uk/wp-content/themes/perkins/images/formsplitter.jpg" style="position: relative; top:-10px;" />

<?php if ( !function_exists('dynamic_sidebar')

|| !dynamic_sidebar() ) : ?>

<?php endif; ?>

</div>

<?php endif; ?>