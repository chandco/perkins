<?php

global $wp_query;

$page_object = $wp_query->get_queried_object();

$my_page_id  = $wp_query->get_queried_object_id();



#echo $my_page_id;



switch($my_page_id){

	case 11:

	$style = "gallery-footer";

	break;	

	

	case 4:

	$style = "news-footer";

	break;

	

	case 5:

	$style = "about-footer";

	break;	

	

	case 6:

	$style = "restaurant-footer";

	break;	

	

	case 7:

	$style = "bar-footer";

	break;	

	

	case 10://41

	$style = "menu-footer";

	break;	

	

	case 88:

	$style = "book-footer";

	break;	

	

	

	case 189:

	$style = "contact-footer";

	break;

	

	default;

	$style = "home-footer";

	break;

}





?>



<div id="footer" class="<?php echo $style; ?>">

  <div id="footer-top"></div>

  <h3 class="page-header">BE SOCIAL, IT'S THE <span class="red">PERKIN SPIRIT</span>!</h3>

  <p>There’s no need to confine our merrymaking within the walls of the Perkin Reveller!  No matter where you are, you can get in touch, share a story or find out what’s going on at the restaurant, by simply following us on Twitter or checking our Facebook page. </p>

  <img src="<?php bloginfo('stylesheet_directory'); ?>/images/social.png" height="71" width="156" alt="" usemap="#social" class="social">

  <map name="social">

    <area shape="rect" coords="25,16,54,65" href="http://www.facebook.com/ThePerkinReveller" target="_blank" alt="Facebook" title="Facebook">

    <area shape="rect" coords="82,18,130,56" href="https://twitter.com/PerkinReveller" target="_blank" alt="Twitter" title="Twitter">

  </map>

<a style="position: absolute;
top: 165px;
left: 685px;" href="http://www.perkinreveller.co.uk/newsletter-sign-up/#form" ><img src="http://www.perkinreveller.co.uk/wp-content/uploads/perkin-news.png" alt="Sign up to our newsletter" title="Newsletter" /></a>

  <p>020 3166 6949 &nbsp; <span class="red">|</span>&nbsp;&nbsp;<a href="mailto:info@perkinreveller.co.uk" title="Perkin Reveller Email" style="color:#fff; text-decoration:none;">info@perkinreveller.co.uk</a>&nbsp;&nbsp;<span class="red">|</span>&nbsp;&nbsp;<a target="_blank" href="http://www.hrp.org.uk/" title="Historic Royal Palaces" style="color:#fff; text-decoration:none;">Historic Royal Palaces</a></p>

</div>

</div>

<!-- END: Page Wrapper --> 









</body>



</html>