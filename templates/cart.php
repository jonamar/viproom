<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<div class="container cart">
  <div class="row">

    <!-- cart-breadcrumb -->
    <div class="col-xs-12">
      <ul class="cart-breadcrumb">
        <div class="breadcrumb-connector"></div>
        <li>
          <span class="active">1</span>
          <p>Cart</p>
        </li>
        <li>
          <span>2</span>
          <p>Checkout</p>
        </li>
        <li>
          <span>3</span>          
          <p>Payment</p>
        </li>
        <li>
          <span>4</span>          
          <p>Complete</p>
        </li>
      </ul>
    </div><!-- .col -->
    
    <!-- Alert -->
    <div class="col-xs-12">
      <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <p><i class="fa fa-exclamation-circle"> </i> Please enter a valid coupon code.</p>
      </div>
    </div>

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
                <td>Total</td>
                <td><!--Remove--></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>$100000</td>
                <td><input class="text-center input-sm item-q" type="text" value="1"></td>
                <td>$100000</td>
                <td><a href="#">Remove</a></td>
              </tr>              
            </tbody>
          </table>
        </div>
      </div><!-- .cart-item -->

      <!-- Single Cart Item -->
      <div class="row cart-item">
        <img class="col-xs-3" src="http://placehold.it/340X250"/>
        <div class="col-xs-9">
          <h3>Space Suit</h3>
          <p>Space suits are great for keeping you alive in space. This suit has rocket packs, diet coke, and heating.</p>
          <table class="table text-center">
            <thead>
              <tr>
                <td>Price</td>
                <td>Quantity</td>
                <td>Total</td>
                <td><!--Remove--></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>$100000</td>
                <td><input class="text-center input-sm item-q" type="text" value="1"></td>
                <td>$100000</td>
                <td><a href="#">Remove</a></td>
              </tr>              
            </tbody>
          </table>
        </div>
      </div><!-- .cart-item -->

    <!-- coupon -->
    <div class="col-xs-offset-8 col-xs-4 coupon">
      <input class="text-center input-sm" type="text" placeholder="coupon code" />
      <a href="#" class="btn btn-default">Redeem Coupon</a>
    </div>

    <!-- footer -->
    <div class="col-xs-12 cart-footer">
      <div class="row">
        <div class="col-xs-2">
          <img class="img-responsive" src="/images/guarantee.png" alt="authenticity guarantee"/> 
        </div>
        <div class="col-xs-3">
          <p class="blurb">We Guarantee that VIP Room is authorized to sell this product and that every brand we sell is authentic.</p>
        </div>
        <div class="col-xs-offset-3 col-xs-2 border-left border-right text-center">
          <p class="subtotal"><strong>Subtotal</strong></p>
          <p class="lead">$200000</p>
        </div>
        <div class="col-xs-2 text-center">
          <a href="#" class="btn btn-default btn-sm">Continue Shopping</a>
          <a href="#" class="btn btn-success btn-lg">Checkout</a>
        </div>
      </div><!-- .row -->
    </div><!-- .col -->

  </div><!-- .row -->
</div><!-- .container -->

<?php include '../includes/footer.php'; ?>
