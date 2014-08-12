<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<div class="container payments">
  <div class="row">

    <!-- cart-breadcrumb -->
    <div class="col-xs-12">
      <ul class="cart-breadcrumb">
        <div class="breadcrumb-connector"></div>
        <li>
          <span class="completed">1</span>
          <p>Cart</p>
        </li>
        <li>
          <span class="completed">2</span>
          <p>Checkout</p>
        </li>
        <li>
          <span class="active">3</span>          
          <p>Payment</p>
        </li>
        <li>2
          <span>4</span>          
          <p>Complete</p>
        </li>
      </ul>
    </div><!-- .col -->
    
    <!-- Cart Listing -->
    <div class="col-xs-12 cart-list">

      <!-- Single Cart Item -->
      <div class="row cart-item">
        <img class="col-xs-3" src="http://placehold.it/340X250"/>
        <div class="col-xs-9">
          <h3>Mars Suit</h3>
          <p>Mars suits are great for keeping you alive on mars. This suit has sun glasses, coke classic, and air conditioning.</p>
          <table class="table text-center">
            <thead>
              <tr>
                <td>Price</td>
                <td>Quantity</td>
                <td>Shipping</td>
                <td>Total</td>
                <td><!--Remove--></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>$100000</td>
                <td>1 <br> 
                  <small><a href="#"><i class="fa fa-pencil"> </i> change</a></small>
                </td>
                <td>$0</td>
                <td>$100000</td>
                <td><a href="#">Remove</a></td>
              </tr>              
            </tbody>
          </table>
        </div>
      </div><!-- .cart-item -->

    <!-- payment -->
    <div class="col-xs-12 cart-payments">
      <h4>Please select how you would like to make a payment.</h4>
      <div class="row">
        <div class="col-xs-3">
          <label>
            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <img class="img-responsive" src="/images/pay-pal.png"/> 
            <p>PayPal</p>
            <p><small>Accepts: VISA, MASTER, PayPal, UnionPay, AMEX</small></p>
          </label>
        </div>
        <div class="col-xs-3">
          <label>
            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <img class="img-responsive" src="/images/pay-dollar.png"/> 
            <p>Pay Dollar</p>
            <p><small>For Non Hong Kong Residents</small></p>
          </label>
        </div>
        <div class="col-xs-3">
          <label>
            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <img class="img-responsive" src="/images/pay-ali.png"/> 
            <p>AliPay</p>
          </label>
        </div>
      </div><!-- .row -->
    </div><!-- .col -->

    <!-- footer -->
    <div class="col-xs-12 cart-footer">
      <div class="row">
        <div class="col-xs-2">
          <img class="img-responsive" src="/images/guarantee.png" alt="authenticity guarantee"/> 
        </div>
        <div class="col-xs-2">
          <p class="blurb">We Guarantee that VIP Room is authorized to sell this product and that every brand we sell is authentic.</p>
        </div>
        <div class="col-xs-2 border-left border-right text-center">
          <i class="fa fa-tasks"> </i>
          <p class="subtotal"><strong>Subtotal</strong></p>
          <p class="lead">$100000</p>
        </div>
        <div class="col-xs-2 border-left border-right text-center">
          <i class="fa fa-gift"> </i>
          <p class="subtotal"><strong>Delivery</strong></p>
          <p class="lead">$0</p>
        </div>
        <div class="col-xs-2 border-left border-right text-center">
          <i class="fa fa-check"> </i>
          <p class="subtotal"><strong>Order Total</strong></p>
          <p class="lead">$100000</p>
        </div>
        <div class="col-xs-2 text-center">
          <a href="#" class="btn btn-success btn-lg">Pay Now</a>
        </div>
      </div><!-- .row -->
    </div><!-- .col -->

  </div><!-- .row -->
</div><!-- .container -->

<?php include '../includes/footer.php'; ?>
