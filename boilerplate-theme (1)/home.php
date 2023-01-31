<?php
/*
Template Name: home
*/

?>

<?php get_header(); ?>






<section class="hero-image">


   
	<script>
	
	$(window).on('load', $(function() {
  // Owl Carousel
  var owl = $(".owl-carousel2");
  owl.owlCarousel({
    items: 1,
    margin: 0,
    loop: true,
	nav: true,
	navigation : true,
	responsive:{
        0:{
            items:1,
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
	  
  });
		
  
}) );

	</script>
	
<div class="home-demo">
  <div class="owl-carousel2 owl-theme">
   
	  
	  
	  	<?php if ( have_rows( 'cta' ) ) : ?>
	<?php while ( have_rows( 'cta' ) ) :
		the_row(); ?>
		<div class="item hero-text">
		<?php if ( $name_or_title = get_sub_field( 'name_or_title' ) ) : ?>
			<h1 class="hom"><?php echo esc_html( $name_or_title ); ?></h1>
		<?php endif; ?>

		<?php if ( $description = get_sub_field( 'description' ) ) : ?>
		
			<p class="des"><?php echo $description; ?>  </p>
		<?php endif; ?>

		<?php
		$link = get_sub_field( 'button' );
		if ( $link ) : ?>
			<div class="button">
			<a class="ton" href="<?php echo esc_url( $link ); ?>"> Get In Touch </a></div>
		<?php endif; ?>
</div>
	<?php endwhile; ?>
<?php endif; ?>
	  
    
    
  </div>
</div>
	
	
	
</section>







<section class="content-sec" >
	
	
		 <script>
$(document).ready(function() {
  $("#owl-example").owlCarousel({
    autoPlay: true, // auto slide show
    items : 9, // items above 1000px browser width
    itemsDesktop : [1000,6.5], // items between 1000px and 901px
    itemsDesktopSmall : [900,4], // betweem 900px and 601px
    itemsTablet: [600,3.5], // items between 600 and 0
    itemsMobile : [320,1.5], // itemsMobile disabled - inherit from itemsTablet option
    itemsScaleUp: true, // will show slider only if items on screen < items value i.e 7 in this case
	 nav: false
  });

});
		 	 
          </script>	
	
	
			
	


<div id="owl-example" class="owl-carousel bottom owl-theme">
	<?php if ( have_rows( 'logo_section' ) ) : ?>
	<?php while ( have_rows( 'logo_section' ) ) :
		the_row(); ?>
		
		<?php
		$image = get_sub_field( 'image' );
		if ( $image ) : ?>
			 <div class="item logo-cli"><img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" /> </div>
		<?php endif; ?>

	<?php endwhile; ?>
<?php endif; ?>

	

  <span id="section1">
	
	</span>
 
	
</div>


	
	
	<h1 class="work">Work with us</h1>

	<div class="row row-sec">
				
				
		

<?php if ( have_rows( 'work_with_us_desc' ) ) : ?>
	<?php while ( have_rows( 'work_with_us_desc' ) ) :
		the_row(); ?>
		
				
		<?php
		$image = get_sub_field( 'image' );
		if ( $image ) : ?>
				 <div class="col-xs-6 col-md-4 th-section">
			<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
		<?php endif; ?>

		<?php if ( $name_or_title = get_sub_field( 'name_or_title' ) ) : ?>
			<h2><?php echo esc_html( $name_or_title ); ?></h2>
		<?php endif; ?>

		<?php if ( $description = get_sub_field( 'description' ) ) : ?>
			<p><?php echo $description; ?></p>
					 </div>
		<?php endif; ?>

	<?php endwhile; ?>
<?php endif; ?>
	  
</div>
	  	 			
	
		  <div class="container workdone" di="section-1">	
			 <div class="row">
			  
			  <?php if ( have_rows( 'our_work' ) ) : ?>
	<?php while ( have_rows( 'our_work' ) ) :
		the_row(); ?>
		
		<?php
		$image = get_sub_field( 'image' );
		if ( $image ) : ?>
			   <div class="col-xs-6 col-md-4 th-section">
			<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
		<?php endif; ?>

		<?php if ( $name_or_title = get_sub_field( 'name_or_title' ) ) : ?>
			<h2 class="work"> <?php echo esc_html( $name_or_title ); ?></h2>
		<?php endif; ?>

		<?php if ( $description = get_sub_field( 'description' ) ) : ?>
			<p class="work-disc">
				  <?php echo $description; ?>
				   </p>   
		<?php endif; ?>
</div>		
	<?php endwhile; ?>
<?php endif; ?>
				
			  
				<div class="ctb">
					
					<style>
					
.ctb {margin: 0px 267px 60px;}
button#cta {padding: 12px 29px;}
					</style>
					
					<button id="cta"> Get Our Number</button>
					
					
			
			<script>
  document.getElementById("cta").onclick = function() {
    alert("064 733 1047");
  };
</script>
					
					
					
					
				 </div> 
						 
				 
		 </div>
					
	
			
									
				

</div>
			
		
	
</section>



<section class="content-third" id="section2">
	
	<style>
	.content-third {
    padding: 174px 0px 116px;
    background: #E6E6E6;
}
	
	</style>
	
	<div class="container">
			<h1 class="work">Work with us</h1>

			 <div class="row">

	
	 <div class="col-sm-4">
		 <p>
			Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
aliquip ex ea commodo consequat.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
sunt in culpa qui officia deserunt mollit anim id est laborum. 
		 </p>
		 
	</div>
     <div class="col-sm-4">
		 <p>
			Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
aliquip ex ea commodo consequat.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
sunt in culpa qui officia deserunt mollit anim id est laborum. 
		 </p>
	
	
	</div>
      <div class="col-sm-4">
		  	 <p>
			Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
aliquip ex ea commodo consequat.
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
sunt in culpa qui officia deserunt mollit anim id est laborum. 
		 </p>
		  
		  
		  </div>	 
				 	</div>
		 	</div>

	
	<script>
$(document).ready(function(){
  $("a").on('click', function(event) {

    if (this.hash !== "") {
      event.preventDefault();

      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
	

</section>


<?php get_footer(); ?>