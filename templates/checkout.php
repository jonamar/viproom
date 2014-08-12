<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<div class="container checkout">

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
          <span class="active">2</span>
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

    <form role="form">

      <!-- billing address -->
      <div class="col-xs-6 border-right">
        <h2>Billing Address</h2>
        <div class="form-group">
          <div class="row">
            <div class="col-xs-6">
              <label>First Name*</label>
              <input type="text" class="form-control" placeholder="First Name">              
            </div>
            <div class="col-xs-6">              
              <label>Last Name*</label>
              <input type="text" class="form-control" placeholder="Last Name">            
            </div>
          </div>
        </div>
        <div class="form-group">
          <label>Company Name</label>
          <input type="text" class="form-control" placeholder="Company Name (optional)">
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-xs-6">
              <label>Address 1*</label>
              <input type="text" class="form-control" placeholder="Address 1">
            </div>
            <div class="col-xs-6">
              <label>Address 2</label>
              <input type="text" class="form-control" placeholder="Address 2 (optional)">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-xs-6">
              <label>Town/City*</label>
              <input type="text" class="form-control" placeholder="Town/City">
            </div>
            <div class="col-xs-6">
              <label>Postal Code*</label>
              <input type="text" class="form-control" placeholder="Postal Code">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-xs-6">
              <label>Country*</label>
              <select class="form-control">
                <?php include '../includes/countries.php'; ?>
              </select>
            </div>
            <div class="col-xs-6">
              <label>Region*</label>
              <select class="form-control">
                <option>Hong Kong Island</option>
                <option>Kowloon</option>
                <option>New Territories</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-xs-6">
              <label>Email*</label>
              <input type="text" class="form-control" placeholder="Email">
            </div>
            <div class="col-xs-6">
              <label>Phone*</label>
              <input type="text" class="form-control" placeholder="Phone">
            </div>
          </div>
        </div>      
      </div><!-- .col -->
      
      <!-- shipping address -->
      <div class="col-xs-6">
        <div class="row">
          <div class="col-xs-7">
            <h2>Shipping Address</h2>
          </div>
          <div class="col-xs-5">
            <div class="checkbox">
              <label>
                <input type="checkbox"> Ship to Billing Address
              </label>
            </div>                
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-xs-6">
              <label>First Name*</label>
              <input type="text" class="form-control" placeholder="First Name">              
            </div>
            <div class="col-xs-6">              
              <label>Last Name*</label>
              <input type="text" class="form-control" placeholder="Last Name">            
            </div>
          </div>
        </div>
        <div class="form-group">
          <label>Company Name</label>
          <input type="text" class="form-control" placeholder="Company Name (optional)">
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-xs-6">
              <label>Address 1*</label>
              <input type="text" class="form-control" placeholder="Address 1">
            </div>
            <div class="col-xs-6">
              <label>Address 2</label>
              <input type="text" class="form-control" placeholder="Address 2 (optional)">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-xs-6">
              <label>Town/City*</label>
              <input type="text" class="form-control" placeholder="Town/City">
            </div>
            <div class="col-xs-6">
              <label>Postal Code*</label>
              <input type="text" class="form-control" placeholder="Postal Code">
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-xs-6">
              <label>Country*</label>
              <select class="form-control">
                <?php include '../includes/countries.php'; ?>
              </select>
            </div>
            <div class="col-xs-6">
              <label>Region*</label>
              <select class="form-control">
                <option>Hong Kong Island</option>
                <option>Kowloon</option>
                <option>New Territories</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="row">
            <div class="col-xs-6">
              <label>Email*</label>
              <input type="text" class="form-control" placeholder="Email">
            </div>
            <div class="col-xs-6">
              <label>Phone*</label>
              <input type="text" class="form-control" placeholder="Phone">
            </div>
          </div>
        </div>      
        <div class="form-group">
          <label>Order Notes</label>
          <textarea class="form-control" rows="3"></textarea>
        </div>
      </div><!-- .col -->
    
      <div class="row">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-lg btn-success pull-right">Proceed to Payment</button>
        </div>
      </div>
    </form>
    
  </div><!-- .row -->
</div><!-- .container -->

<?php include '../includes/footer.php'; ?>
