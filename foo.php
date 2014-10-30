Template: twentyeleven


                <!--
                <div id="slideshow">
				<?php 
				$count = count($images);
				for($k = 0; $k < $count; $k++):

				switch($k){
				case 0:
				$style = "first-img";
				break;

				case 1:
				$style = "second-img";
				break;

				case 2:
				$style = "third-img";
				break;
				}
				?>
				<div>
				<?php if($k == 0){ ?>
				<img src="<?php echo $images[0]; ?>" alt="" class="first-img" />
				<img src="<?php echo $images[1]; ?>" alt="" class="second-img" />
				<img src="<?php echo $images[2]; ?>" alt="" class="third-img" />
				<?php }elseif($k == 1){ ?>
				<img src="<?php echo $images[1]; ?>" alt="" class="first-img" />
				<img src="<?php echo $images[2]; ?>" alt="" class="second-img" />
				<img src="<?php echo $images[0]; ?>" alt="" class="third-img" />
				<?php }elseif($k == 2){ ?>
				<img src="<?php echo $images[2]; ?>" alt="" class="first-img" />
				<img src="<?php echo $images[0]; ?>" alt="" class="second-img" />
				<img src="<?php echo $images[1]; ?>" alt="" class="third-img" />
				<?php }else{ ?>
				<img src="<?php echo $images[0]; ?>" alt="" class="first-img" />
				<img src="<?php echo $images[1]; ?>" alt="" class="second-img" />
				<img src="<?php echo $images[2]; ?>" alt="" class="third-img" />
				<?php } ?>
				</div>
				<?php endfor; ?>
                </div>
				-->