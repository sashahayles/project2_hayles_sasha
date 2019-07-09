<style type="text/css">

*{
  margin: 0;
  padding: 0;
  border: 0;
}
/*social icons */
.socialicons{
  background:white;
  text-align:right;
  padding: 10px 20px;
}
.socialicons img{
  width: 35px;
}

header nav .active a {
  color: #1a616a;
}

/*about page menu */
.side-menu ul{
  list-style-type: none;
  margin: 20px;
  padding: 50px 0px;

}
.side-menu li a {
  display: inline-block;
  padding: 7px 16px;
  text-decoration: none;
  color: black;
  margin: 5px 10px;
  font-family: 'Playfair Display', serif;
  font-size:16px;
}
.side-menu{
  text-decoration: none;
  font-size:16px;
  display: inline-block;
  padding: 10px;
  margin: 20px;
}
.side-menu header {
  color: black;
  float: left;
  height: 100vh;
  padding: 25vh 0;

}
.side-menu a:hover {
  background:white;
  color: #b5cb6f;
  transition: 1s;
}
</style>

<header>
  <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li class="active"><a href="about.html">About</a></li>
      <li><a href="portfolio.html">portfolio</a></li>
      <li><a href="photography.html">Photography</a></li>
    </ul>
  </nav>
</header>

<div class="siteform">
	<h1>Missing fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</div>
