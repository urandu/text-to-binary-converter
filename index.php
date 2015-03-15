<?php
/*
written by urandu bildad namawa email:bildadnamawa@gmail.com website:http://www.urandu.foundit.co.ke
this code is for free and you are free to modify it and play around with it.you can also add new ideas and help fix the bugs.
*/
#conversion from binary to text
?>
<html>
	<head>
		<style>
			#left 
				{
				float:left; width:45%;
				min-width: 300px;
				padding:10px;
				margin:auto;
				}
			#right
				{
				float:right; width:45%;
				min-width: 300px;
				padding:10px;
				margin:auto;
				}
			#site_title 
				{ 
					text-decoration: none;
					color: white;
				}
			body
				{
					min-width:900px;
					margin:0px;
				}
			footer 
				{
					   position:absolute;
					   bottom:0;
					   width:100%;
					   height:60px;   /* Height of the footer */
					   background:#09C;
				}
			header 
				{
					width: 100%;
					height: 100px;
					font-size: 25px;
					font-family: sans-serif;
					text-align:center;
					background-color: #09C;
					color: white;
				}
			ul#list-nav {
			  list-style:none;
			  margin:20px;
			  padding:0;
			  width:525px
			}
			ul#list-nav li {
			  display:inline
			}
			ul#list-nav li a {
			  text-decoration:none;
			  padding:5px 0;
			  width:100px;
			  background:#09C;
			  color:#eee;
			  float:left;
			  text-align:center;
			  border-left:1px solid #fff;
			}
			ul#list-nav li a:hover {
			  background:#a2b3a1;
			  color:#000
			}
		</style>
	</head>
	<body>
		<header>
			<h1><a id='site_title' href='index.php'>Binary converter!</a></h1>
		</header>
		<ul id="list-nav">
	 		  <li><a href="http://urandu.foundit.co.ke">Urandu.com</a></li>
			  <li><a href="http://foundit.co.ke">Foundit</a></li>
		</ul></br></br>
		This is a simple tool that converts a text string to its binary equivalent and vice versa...
		<strong>Nb*</strong> this tool is just for fun.
		<div id="right">
			<form method="post" action="trevnoc.php" >
				<h3><label for="textstring">convert from binary to text string</label></h3></br>
				<textarea max="1000" rows="10" cols="50" name="textstring" value="" ><?php if(isset($b)){ echo (trim($b));} ?></textarea></br>
				<input type="submit" name="submit" value="convert to text"/></br>
				ensure that the input is a stream of 0`s and 1`s divided into 8 or 7 bits seperated by spaces
			</form>
		</div>
		<div id="left">
			<form method="post" action="convert.php" >
				<h3><label  max="1000" for="textstring">convert to binary from text string</label></h3></br>
				<textarea rows="10" cols="50" name="textstring" value="" ><?php  if(isset($bildad)){ echo ($bildad);} ?></textarea></br>
				<input type="submit" name="submit" value="convert to binary"/>
				</br>
				Enter your string here
			</form>
		</div>
	</body>
	<footer>
	</footer>
<html/>
