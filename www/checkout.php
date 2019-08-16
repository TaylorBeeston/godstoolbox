<?php 
  include '../helpers/multihelper.php';
  $title = 'Checkout';
  include '../partials/header.php'; ?>
<div class="big-red-box">
  <h1>Checkout</h1>
  <p>Please enter your information to purchase your products!</p>
  <h1>THIS IS NOT A REAL SITE! PLEASE DO NOT ENTER REAL PAYMENT INFORMATION!</h1>
</div>
<div class="two-columns">
  <div class="main">
    <form action="#" method="post" enctype="text/plain">
       <fieldset>
         <legend>Shipping/Billing Information</legend>
         <label for="name">Name</label>
         <input id="name" type="text" name="name" />

         <label for="address1">Address</label>
         <input id="address1" type="text" name="address1" />
         <input type="text" name="address2" />

         <label for="zip">Zip Code</label>
         <input id="zip" type="text" name="zip" />

         <label for="state">State</label>
         <input id="state" type="text" name="state" maxlength="2" />
       </fieldset>
       <fieldset>
         <legend>Payment Information</legend>
         
         <label for="cardnumber">Card Number</label>
         <input id="cardnumber" type="text" name="cardnumber" />
         
         <label for="expirationmonth">Expiration Date</label>
         <div>
           <select id="expirationmonth" name="expirationmonth">
             <option value="january">January</option>
             <option value="february">February</option>
             <option value="march">March</option>
             <option value="april">April</option>
             <option value="may">May</option>
             <option value="june">June</option>
             <option value="july">July</option>
             <option value="august">August</option>
             <option value="september">September</option>
             <option value="october">October</option>
             <option value="november">November</option>
             <option value="december">December</option>
           </select>
           <select name="expirationyear">
             <option value="2019">2019</option>
             <option value="2020">2020</option>
             <option value="2021">2021</option>
             <option value="2022">2022</option>
             <option value="2023">2023</option>
             <option value="2024">2024</option>
             <option value="2025">2025</option>
             <option value="2026">2026</option>
             <option value="2027">2027</option>
             <option value="2028">2028</option>
             <option value="2029">2029</option>
             <option value="2030">2030</option>
           </select>
         </div>

       <label for="securitycode">Secuity Code</label>
       <input id="securitycode" type="text" name="securitycode" />
       </fieldset>
       <input type="submit" disabled="disabled" value="Buy" />
    </form>
  </div>
  <div class="side hide-small">
    <h3>Suggested Products</h3>
    <?php smallWindow($items[rand(0, count($items))]); ?>
    <?php smallWindow($items[rand(0, count($items))]); ?>
  </div>
</div> 
<?php include '../partials/footer.php'; ?>
