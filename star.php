<html>
<head>
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<style>
div.stars {
  display: ;

}

 

input.star { display: none; }

 

label.star {

float:right;

  padding: 10px;

  font-size: 36px;

  color: #444;

  transition: all .2s;

}

 

input.star:checked ~ label.star:before {

  content: '\f005';

  color: #FD4;

  transition: all .25s;

}

 

input.star-5:checked ~ label.star:before {

  color: #FE7;

  text-shadow: 0 0 20px #952;

}

 

input.star-1:checked ~ label.star:before { color: #F62; }

 

label.star:hover { transform: rotate(-15deg) scale(1.3); }

 

label.star:before {

  content: '\f006';

  font-family: FontAwesome;

}
</style>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class=" col-lg-4 col-md-4"><p style="color:#000000">Rate the recipe</p></div>
<div class=" col-lg-6 col-md-6" style="border:solid">
 <center>  <form method="post">

    <input class="star star-5" id="star-5" type="radio" name="star" value="1"/>

    <label class="star star-5" for="star-5"></label>

    <input class="star star-4" id="star-4" type="radio" name="star" value="2"/>

    <label class="star star-4" for="star-4"></label>

    <input class="star star-3" id="star-3" type="radio" name="star" value="3"/>

    <label class="star star-3" for="star-3"></label>

    <input class="star star-2" id="star-2" type="radio" name="star" value="4"/>

    <label class="star star-2" for="star-2"></label>

    <input class="star star-1" id="star-1" type="radio" name="star" value="5"/>

    <label class="star star-1" for="star-1"></label>

  </form></center>
  </div>
  <div class=" col-lg-2 col-md-2"></div>
 </div>
</div>
</body>
</html>

