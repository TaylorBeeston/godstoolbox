<?php
  header("Content-type: text/css; charset: UTF-8");

  $dark_text  = '#080708';
  $color1     = '#3772FF';
  $color2     = '#DF2935';
  $color3     = '#FDCA40';
  $light_text = '#E6E8E6';
  $success    = '#8FF7A7';
  $failure    = '#DA1313';
?>

/* global styles */

html, body {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
}

body {
  box-sizing: border-box;
  font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
  background-color: <?php echo $color2; ?>;
  font-size: 1.2em;
  color: <?php echo $dark_text; ?>;
}

/* typography */
em {
  color: <?php echo $light_text; ?>;
  text-shadow: 0 0 50px, 0 0 25px, 0 0 3px black;
}

h1, h2, h3, h4, h5, h6 {
  display: flex;
  justify-content: center;
}

a {
  text-decoration: none;
  color: <?php echo $dark_text; ?>;
}

/* header styles */

#header {
  padding: 10px;
  background-color: <?php echo $color1; ?>;
}

#logo {
  float: left;
  display: flex;
  justify-content: initial;
  align-content: center;
}

#logo img {
  width: 75px;
  height: 75px;
}

#logo a {
  text-decoration: none;
}

#logotext {
  color: <?php echo $light_text; ?>;
  font-size: 1.5em;
  text-shadow: 0 0 50px, 0 0 25px;
  margin-top: 20px;
}

#cart {
  float: right;
  text-decoration: underline;
  color: <?php echo $light_text; ?>;
  font-size: 1.1em;
}

#header-nav {
  width: 100%;
  background-color: <?php echo $color1; ?>;
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}

#header-nav > li {
  float: left;
}

#header-nav a, .dropbtn {
  display: inline-block;
  text-decoration: none;
  text-align: center;
  padding: 15px;
  margin: 5px;
  border-radius: 10px;
  font-size: 1.1em;
  color: <?php echo $light_text; ?>;
  text-shadow:0 0 50px;
  transition: background-color 2s;
}

#header-nav a:hover {
  background-color: rgba(255, 255, 255, 0.1);
}

#header-nav > li.menu-right {
  float:right;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: <?php echo $color1; ?>;
  min-width: 160px;
  z-index: 1;
  box-shadow: 0 0 10px;
  border-radius: 10px;
}

.dropdown-content a {
  display: block;
  text-align: left;
}

.dropdown:hover .dropdown-content {
  display: block;
}

/* F-Design styles */

.two-columns {
  display: flex;
  justify-content: space-around;
}

.two-columns > .main {
  width: 75%;
  padding: 15px;
  background-color: <?php echo $color3; ?>;
  border-radius: 0 50px 0 0;
}

.two-columns > .side {
  width: 25%;
  background-color: <?php echo $color2; ?>;
}

/* show only one column at a time on small screens */
@media only screen and (max-width: 992px) {
  .two-columns { flex-wrap: wrap; }
  .two-columns > .main { width: 100%; border-radius: 0; }
  .two-columns > .side { width: 100%; }
}

.big-red-box {
  background-color: <?php echo $color2; ?>;
  color: <?php echo $dark_text; ?>;
}

.big-red-box > a {
  display: block;
  text-align: center;
  width: 50%;
  margin: auto;
  padding: 25px;
  background-color: rgba(255, 255, 255, .5);
  border-radius: 25px;
  font-size: 1.2em;
  transition: box-shadow 2s;
}

.big-red-box a:hover {
  box-shadow: 0 0 25px <?php echo $light_text; ?>;
}

.big-yellow-box {
  background-color: <?php echo $color3; ?>;
  color: <?php echo $dark_text; ?>;
}

.big-text {
  display: flex;
  justify-content: center;
  font-size: 1.9em;
  padding: 10px;
  margin: auto;
}

.small-text {
  display: flex;
  justify-content: center;
  font-size: 1.3em;
  padding: 5px;
  margin: auto;
}

/* social media icon styles */

.social-media-icons img {
  height: 50px;
  width: 50px;
}

/* alert box styles */

.success {
  background-color: <?php echo $success; ?>;
  border-radius: 25px;
  width: 80%;
  margin: 20px auto;
  padding: 15px;
}

.failure {
  background-color: <?php echo $failure; ?>;
  border-radius: 25px;
  width: 80%;
  margin: 20px auto;
  padding: 15px;
}

/* sidebar styles */

.side li {
  list-style: none;
  width: 75%;
  padding: 10px;
  margin: 0 auto 50px;
  box-shadow: 0 0 10px;
  border-radius: 10px;
}

.side h2 {
  color: <?php echo $light_text; ?>;
  text-shadow: 0 0 50px;
}

.side li > a {
  color: <?php echo $light_text; ?>;
}

/* window shop styles */

.window-shopping {
  width: 80%;
  background-color: <?php echo $light_text; ?>;
  border-radius: 10px;
  margin: 25px auto;
  padding: 20px;
  box-shadow: 0 0 10px;
}

.window-shopping > a {
  margin: auto;
  text-decoration: none;
  color: <?php echo $dark_text; ?>;
}

.window-shopping img {
  width: 80%;
  border-radius: 10px;
  margin: auto;
  display: flex;
  justify-content: center;
}

/* small window styles */

.small-window {
  width: 80%;
  max-width: 150px;
  background-color: <?php echo $light_text; ?>;
  color: <?php echo $dark_text; ?> !important;
  border-radius: 10px;
  margin: 25px auto;
  padding: 20px;
  box-shadow: 0 0 20px;
}

.small-window span {
  color: <?php echo $dark_text; ?>;
  font-size: 1.2em;
  text-shadow: 0 0 15px;
}

.small-window img {
  width: 80%;
  border-radius: 10px;
  margin: 10px auto;
  display: flex;
  justify-content: center;
}

/* big window styles */

.big-window {
  width: 80%;
  background-color: <?php echo $light_text; ?>;
  border-radius: 10px;
  margin: 25px auto;
  padding: 20px;
  box-shadow: 0 0 20px;
}

.big-window img {
  width: 80%;
  border-radius: 10px;
  margin: 10px auto;
  display: flex;
  justify-content: center;
}

/* item window styles */

.browse {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}

.item-window {
  width: 80%;
  max-width: 250px;
  background-color: <?php echo $light_text; ?>;
  border-radius: 10px;
  margin: 25px;
  padding: 20px;
  box-shadow: 0 0 20px;
}

.item-window span {
  font-size: 1.2em;
  text-shadow: 0 0 15px;
}

.item-window img {
  width: 80%;
  border-radius: 10px;
  margin: 10px auto;
  display: flex;
  justify-content: center;
}

/* item cart styles */

.item-cart {
  display: flex;
  justify-content: initial;
}

.add1, .sub1 {
  background-color: rgba(255, 255, 255, 0.9);
  border-radius: 5px;
  width: 25px;
  text-align: center;
  padding: 5px;
  margin: 5px;
  box-shadow: 0 0 2px;
  font-size: 1.2em;
  transition: box-shadow 2s;
}

.add1:hover, .sub1:hover {
  box-shadow: 0 0 10px;
}

#qty {
  border-radius: 5px;
  width: 50px;
  padding: 5px;
  margin: 5px;
  font-size: 1.2em;
}

.item-cart input[type=submit] {
  border-radius: 5px;
  font-size: 1.0em;
  padding: 5px;
  margin: 5px;
  transition: box-shadow 2s;
}

.item-cart input[type=submit]:hover {
  box-shadow: 0 0 10px;
}

/* cart styles */

.cart {
  width: 80%;
  background-color: <?php echo $light_text; ?>;
  color: <?php echo $dark_text; ?>;
  border-radius: 10px;
  margin: 25px auto;
  padding: 20px;
  box-shadow: 0 0 20px;

}

.cart-item {
  display: flex;
  justify-content: space-between;
  align-content: center;
  margin: 5px auto;
  padding: 5px;
  border-style: outset;
}

.cart-item span {
  color: <?php echo $dark_text; ?>;
  font-size: 1.4em;
  min-width: 50px;
}

.cart-item div {
  display: flex;
  justify-content: initial;
  align-content: center;
}

.cart-item img {
  width: 40px;
  height: 40px;
  border-radius: 10px;
  margin: 0 5px;
}

.cart-buttons {
  width: 85%;
  margin: auto;
  display: flex;
  justify-content: space-between;
}

.cart-buttons a {
  padding: 25px;
  width: 30%;
  text-align: center;
  font-size: 1.2em;
  margin: 0 25px;
  border-radius: 10px;
  background-color: <?php echo $light_text; ?>;
  box-shadow: 0 0 20px;
  transition: background-color 2s;
}

.cart-buttons a:hover {
  background-color: <?php echo $success; ?>;
}

#remove-from-cart {
  padding: 0 10px;
  margin-top: -15px;
  background-color: <?php echo $color2; ?>;
}

/* list styles */

.big-list {
  list-style: none;
  background-color: rgba(255, 255, 255, 0.1);
  box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
}

.big-list > li {
  padding: 10px;
  margin: 25px auto;
  border-radius: 10px;
}

/* form styles */

form {
  margin: 10px auto;
  padding: 5px;
}

form * {
  display: block;
  width: 80%;
  margin: auto;
}

form div {
  display: flex;
  justify-content: space-around;
}

input[type=text], input[type=email], input[type=password], textarea {
  border-radius: 10px;
  font-size: 1.2em;
  margin-bottom: 10px;
}

input[type=file] {
  font-size: 1.2em;
  margin: 10px auto;
  width: 80%
}

select {
  font-size: 1.0em;
  border-radius: 10px;
  padding: 5px;
  margin: 5px;
}

input[type=submit] {
  border-radius: 10px;
  font-size: 1.2em;
  background-color: <?php echo $light_text; ?>;
}

fieldset {
  border-radius: 10px;
}

.signup-button {
  display: block;
  width: 50%;
  text-decoration: underline;
  padding: 15px;
  border-radius: 10px;
  background-color: <?php echo $light_text; ?>;
  box-shadow: 0 0 10px;
  margin: 25px auto;
  text-align: center;
}

/* footer styles */

#footer {
  display: flex;
  justify-content: space-between;
  background-color: <?php echo $color1; ?>;
  width: 100%;
}

#footer .last_modified {
  text-shadow:0 0 50px;
  color: <?php echo $light_text; ?>;
}

#footer > div {
  margin: 25px;
}

/* extra breakpoints */

/* hide on small screens */
@media only screen and (max-width: 992px) {
  .hide-small { display: none; }
}
