<?php 
  include '../helpers/multihelper.php';
  $title = 'Suggestions';
  include '../partials/header.php'; ?>
<div class="big-red-box">
  <h1>Product Suggestion</h1>
  <p>Use the form below to suggest a new product!</p>
  <p>For general inquiries, please use the <a href="contact.php"><em>contact us</em></a> page.</p>
  <p>Note: because this is not a real site, the send button has been disabled.</p>
</div>
<div class="two-columns">
  <div class="main">
    <form action="mailto:someone@example.com" method="post" enctype="text/plain">
       <fieldset>
         <label for="name">Name</label>
         <input id="name" type="text" name="name" />

         <label for="email">Email</label>
         <input id="email" type="text" name="email" />

         <label for="product">Product</label>
         <input id="product" type="text" name="product" />

         <input type="submit" disabled="disabled" value="Send" />
       </fieldset>
    </form>
  </div>
  <div class="side">
    <ul>
      <li>
        <h2>Mission</h2>
        <p>Check out our <a href="mission.php">mission statement</a> to get an idea
           of what we're about!</p>
      </li>
      <li>
        <h2>Facts</h2>
        <p>If you'd like to learn a bit about our history, see our <a href="facts.php">Facts</a> page!</p>
      </li>
    </ul>
  </div>
</div> 
<?php include '../partials/footer.php'; ?>
