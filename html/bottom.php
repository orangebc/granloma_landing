<!-- jQuery -->
<script src="js/jquery.nivo.slider.pack.js"></script>
<!-- Bootstrap JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		slices: 4,
		directionNav: false,
		pauseTime: 2000,
		startSlide: 0,
		controlNav: false,
		pauseOnHover: false
	});
});
(function(){
	$("#toggled").click( function(){
		$("#privacy").toggle("slideDown");
	})
	$(".toggle_form").click(function(){
		$("#form").toggle("slideDown");
	})
	$(".form__close").click(function(){
		$("#form").hide("slideUp");
	})
})();
</script>
<script type="text/javascript" src="js/methods.js"></script>
<script src="js/functions.min.js"></script>