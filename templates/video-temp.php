<?php
	$videoList=array(
		"https://www.youtube.com/embed/pjWvo0QnqeQ?si=Cdr2qzvhlFFNKN24",
		"https://www.youtube.com/embed/Yb47jZWPyDA?si=1OduVpG95msKCPOk",
		"https://www.youtube.com/embed/jEkX5WCkIPs?si=Og1Ra_mgVEod4Dcn",
		"https://www.youtube.com/embed/0oTejRa9OL4?si=P5w5U4DYk1OghHBf",
		"https://www.youtube.com/embed/vFrOoWuSl0M?si=uOdVPwFr-Mi5rnv3",
	);
?>
<style>
#carouselExampleIndicators{
  width:100%;
}
.carousel-indicators{
  float:right !important;
  position:relative !important;
  margin-right:0 !important;
  margin-top:20px !important;
}
.carousel-indicators [data-bs-target]{
  background-color:#1D3C34 !important;
  margin-left:0 !important;
  margin-right:0 !important;
  min-width: 60px !important;
  height:8px !important;
  border-top:20px solid transparent !important;
}
.carousel-indicators .active{
  height: 10px !important;
  margin-top: -1px !important;
}
.fa-circle-chevron-left{
  margin-top:0px !important;
  margin-left:40px !important;
  font-size:3em !important;
  color:#1D3C34 !important;
  cursor:pointer !important;
  margin-right:10px !important;
}
.fa-circle-chevron-right{
  margin-top:0px !important;
  margin-left:10px !important;
  font-size:3em !important;
  color:#1D3C34 !important;
  cursor:pointer !important;
  margin-right:10px !important;
}
.fa-solid:hover{
  color:#1D3C34 !important;
}
.carousel-control-next{
  display:none !important;
}
.carousel-control-prev{
  display:none !important;
}
.videobox {
    position: relative;
    width: 100%;
    height: 0;
    padding-bottom: 56.25%;
}

.videobox iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
@media screen and (max-width: 480px) {
  .carousel-indicators [data-bs-target]{
	  min-width: 30px !important;
	}
}
	
</style>
<script>
jQuery(document).ready(function($) {
	$(document).on("click", ".fa-circle-chevron-right", function() { $('#carouselExampleIndicators').carousel('next');
	})

	$(document).on("click", ".fa-circle-chevron-left", function() { $('#carouselExampleIndicators').carousel('prev');
	 })
})
</script>
<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-interval="false" >
  <div class="carousel-inner">
    <?php
    	$i=1;
		foreach($videoList as $vedio){
			if($i==1){
				$class="active";
			}
			else{
				$class="";
			}
			echo    '<div class="carousel-item '.$class.'">
					  <div class="videobox">
				      <iframe
				        src="'.$vedio.'">
				      </iframe>
					  </div>
				    </div>';
			$i++;
		}
    ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  <div class="carousel-indicators">
    <?php
    	$i=1;
    	foreach($videoList as $vedio){
    		if($i==1){
				$class="active";
			}
			else{
				$class="";
			}
			$slideto=$i-1;
			if($i==1){
				echo '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="'.$slideto.'" class="'.$class.'" aria-label="Slide '.$i.'" aria-current="true"></button>';
			}
			else{
				echo '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="'.$slideto.'" aria-label="Slide '.$i.'" ></button>';
			}
    		$i++;
    	}
    ?>
    <i class="fa-solid fa-circle-chevron-left"></i>
    <i class="fa-solid fa-circle-chevron-right"></i>
</div>
</div>

