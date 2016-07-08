<html>
<head>
<style>
 .hidden { display: none; }
</style>
<script src="js/jquery.js" type="text/javascript"></script>
<script>
var hero_items = 
 [
   ["http://www.google.com", "screen1", "screen1.png"],
   ["http://www.google.com", "screen2", "screen2.png"],
<script src="js/jquery.js" type="text/javascript"></script>
<script>
var hero_items = 
 [
   ["http://www.google.com", "screen1", "screen1.png"],
   ["http://www.google.com", "screen2", "screen2.png"],
   ["http://www.google.com", "screen3", "screen3.png"],
   ["http://www.google.com", "screen4", "screen4.png"]
 ];
function hero_put_bg_credit(){
  //alert('in hero function');
  var hero_item = hero_items[Math.floor(Math.random()*hero_items.length)];
  var hero_img_path="url('images/" + hero_item[2] + "')";
  jQuery('div.hero__bg').css('background-image',hero_img_path);
  jQuery("div.hero--credit p").html('<a href="' + hero_item[0] + '">' + hero_item [1] + '</a>');
}
</script>

<script>
$( document ).ready(function() {
 hero_put_bg_credit();
 $('div.hero__bg').removeClass('hidden');
});
</script>

</head>
<body>
<img src="http://deelay.me/1000/http://www.sandiego.gov/sites/all/themes/sandiego/assets/dist/img/home-hero-1.jpg" />
This is only a test
<div style="height:200px; width:300px; background-image:url('images/hero.jpg');" class="hero__bg hidden">
<div style="position:absolute;top:300px;left:30px;" class="hero--credit"><p></p></div>
</div>
</body>
</html>
