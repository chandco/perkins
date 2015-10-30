<?php 
get_header(); 
?>

<div id="content"><div id="top-scrollpoint"></div>

<div id="inner-content">
	<div class="main-column">
<?php  

if(have_posts()){
	while(have_posts()){ 
		the_post();
?>
    <div  class="post-item">
      <p class="edit"><?php edit_post_link(); ?></p>
      <span><?php //the_author_posts_link(); echo ' : '; the_date(); ?></span>
      <h3>
	  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
	  </h3>
      <?php the_content(); ?>
	</div>
<?php  

	} 

}
?>

	</div><!--#main-column-->


            <div class="right-column">
                <div class="sidebar-section">
                    <h3>BOOK A TABLE</h3>
                    <img src="images/formsplitter.jpg" height="42" width="324" alt="">
                    <p>Please select the number of guests dining and<br> the required date.</p>
                    <form action="" method="POST" id="bookingform">
                        <div><label>Number of Guests</label><select><option></option><option></option></select></div>
                        <div><p>For larger parties please reserve by telephone</p></div>
                        <div style="position:relative;right:40px;margin-bottom:14px;">
                        <div><label>Month</label><select><option>June 2012</option><option></option></select></div>
                        <div><label>Date</label><select><option>13 Wed (Today)</option><option></option></select></div>
                        <div><label>Session</label><select><option>Breakfast</option><option></option></select></div>
                        </div>
                        <div><input type="submit" value="Check Availability"></div>
                    </form>
                </div>    
        
                <div class="sidebar-section">
                    <h3 class="saa">FOLLOW US ON TWITTER</h3>
                    <img src="images/formsplitter.jpg" height="42" width="324" alt="">
                    <div class="post"><p>At vero eos et accusamus et iusto dignissimos ducimus qui blanditiis praet <a href="" class="red">hyp;/wjlb.url</a></p></div>
                    <div class="post"><p>At vero eos et accusamus et iusto dignissimos ducimus qui blanditiis praet <a href="" class="red">hyp;/wjlb.url</a></p></div>
                    <div class="post"><p>At vero eos et accusamus et iusto dignissimos ducimus qui blanditiis praet <a href="" class="red">hyp;/wjlb.url</a></p></div>
                    <br>
                </div>                
            
            </div>
            
            <div class="clear"></div>


</div>    



<?php get_footer(); ?>
