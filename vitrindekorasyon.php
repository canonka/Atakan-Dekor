<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: sans-serif, Comic Sans MS, Tahoma, Verdana;
  margin: 0;
}
* {
  box-sizing: border-box;
}
.row{
	width:1000;
}
.row > .column {
  padding: 15px 15px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width:250px;
  height:230px;
}

.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer
}
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}
.prev {
  left: 0;
  border-radius: 3px 0 0 3px;
}
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: 4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}
h2{
	padding-top:10px;
	margin-top : -20px;
	font-size:20px;
	opacity:0.7;
	filter:alpha(opacity=70);
	color:#000000;
	height : 40px;
	width : 300px;
	background-color:#666666;
	margin-left : auto;
	margin-right : auto;
}
</style>
<body>

<h2 style="text-align:center">Sizin için yaptıklarımız...</h2>

<div class="row">
  
  <?php 
for($sayi = 1; $sayi <= 50; $sayi++) 
{ 
  echo '<div class="column">
    <img src="img/vitrin/'.$sayi.'.jpg" style="width:100%" onclick="openModal();currentSlide('.$sayi.')" class="hover-shadow cursor">
  </div>';
}
  ?>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">
<?php
for($sayi = 1; $sayi <= 50; $sayi++) 
{ 
echo '<div class="mySlides">
		<div class="numbertext">'.$sayi.' / 50</div>
		<img src="img/vitrin/'.$sayi.'.jpg" style="width:100%">
      </div>';
}
?>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

<?php
for($sayi = 1; $sayi <= 50; $sayi++) 
{ 
echo '<div class="column">
        <img class="demo cursor" src="img/vitrin/'.$sayi.'.jpg" style="width:100%" onclick="currentSlide('.$sayi.')" alt="'.$sayi.'.resim">
     </div>';
}
?>
  </div>
</div>

<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    
</body>
</html>
