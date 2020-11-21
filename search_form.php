<?php include 'db.php'; ?>

<div class="main">
   <div class="header">
      <?php include './alart.php'; ?>
   </div>
   <div class="container">
      <form class="booking-form" action='result.php' method="POST">

         <label>From</label>
         <input type="text" id="from" name="from" placeholder="EG. DHAKA" />

         <label>To</label>
         <input type="text" id="to" name="to" placeholder="EG. COX'S BAZAR" />

         <label>Date</label>
         <input type="date" id="date" name="date" placeholder="Pick a date" />

         <label>Quantity</label>
         <input type="number" name="quantity" id="quantity" value="1" min="1">

         <div class="form-submit">
            <input type="submit" name="submit" id="submit" class="submit" value="Search now" />
         </div>

      </form>
   </div>
</div>