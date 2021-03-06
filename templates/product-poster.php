<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<!-- Core Details -->
<div class="container margin-bottom">
    <div class="row">

      <!-- Right Column / Gallery -->
      <div class="col-xs-offset-1 col-xs-4">
        <div class="poster">
          <div class="banner new">
            <p>
              New
            </p>
          </div><!-- .banner -->
          <img class="width-100" src="http://placehold.it/300x400" alt="">
        </div>
      </div>

      <!-- Left Column -->
      <div class="col-xs-6 col-xs-offset-1">

        <!-- Header -->
        <header class="row">
          <h3 class="col-xs-8" id="title">Geo Black Bear</h3>
          <ul class="col-xs-4 list-inline">
            <li><a href="#"><i class="fa fa-twitter vr-fa-square"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook vr-fa-square"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest vr-fa-square"></i></a></li>
          </ul>
          <div class="col-xs-12">
            <hr>
          </div>
        </header><!-- .row -->

        <!-- Price and Details -->
        <div class="row">
          <div class="col-xs-7">
            <p class="h3 text-primary">HK$ 397</p>
            <p class="lead">By THREE OF THE POSSESSED</p>
          </div>
          <div class="col-xs-5">
            <img class="pull-right width-66" src="/images/guarantee.png" alt="authenticity guarantee"/>
          </div>
          <div class="col-xs-12">
            <hr>
          </div>
        </div><!-- .row -->

        <!-- Size -->
        <div class="row">
          <div class="col-xs-12">
            <h4>Size</h4>
            <ul class="nav nav-pills">
              <li class="active"><a href="#">A4 <small>(21x30cm)</small></a></li>
              <li><a href="#">A3 <small>(21x30cm)</small></a></li>
              <li><a href="#">A2 <small>(21x30cm)</small></a></li>
              <li><a href="#">A1 <small>(21x30cm)</small></a></li>
            </ul><!-- .nav-pills -->
            <hr>
          </div>
        </div><!-- .row -->

        <!-- Quantity and Purchase -->
        <div class="row">
          <div class="col-xs-4">
            <h4>Quantity</h4>
            <div class="input-group">
              <span class="input-group-btn">
                <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                  <span class="glyphicon glyphicon-minus"></span>
                </button>
              </span>
              <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
              <span class="input-group-btn">
                <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                  <span class="glyphicon glyphicon-plus"></span>
                </button>
              </span>
            </div><!-- .input-group -->
          </div>
          <div class="col-xs-offset-1 col-xs-7">
            <button class="btn btn-danger width-100 margin-bottom-small" type="submit">Add to Shopping Cart</button>
            <button class="btn btn-default width-100" type="submit">Add to Wishlist</button>
          </div>
        </div><!-- .row -->
      </div>
    </div><!-- .row -->
</div><!-- .container -->

<!-- Sidebar -->
<aside class="sticky-sidebar" data-spy="affix" data-offset-top="600">
  <?php include '../includes/sidebar.php' ?>
</aside>

<!-- Curator Recommendations and Comments -->
<div class="container margin-bottom">
  <div class="row">
    <div class="col-xs-6">
      <hr>
      <h4>Curator Recommendations</h4>
      <div class="media">
        <a class="pull-left" href="#">
          <img class="media-object" src="http://placehold.it/70" alt="...">
        </a>
        <div class="media-body">
          <p class="media-heading"><strong><a href="#">Ni Ni recommends this product:</a></strong></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div><!-- .media -->
      <div class="media">
        <a class="pull-left" href="#">
          <img class="media-object" src="http://placehold.it/70" alt="...">
        </a>
        <div class="media-body">
          <p class="media-heading"><strong><a href="#">Bing Bing recommends this product:</a></strong></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div><!-- .media -->
    </div><!-- .col-xs-6 -->
    <div class="col-xs-6 comments">
      <hr>
      <div class="row">
        <div class="col-xs-12">
          <h4 class="pull-left">Most Recent Comments</h4>
          <p class="pull-right"><i class="fa fa-comments text-primary-lighter"></i> 4 Comments</p>
        </div>
      </div>
      <div class="row comment">
        <div class="col-xs-12">
          <p class="author"><strong><a href="#">Mei says:</a></strong></p>
          <p class="time">1 hour ago</p>
          <div class="well well-sm">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div><!-- .comment -->
      <div class="row comment">
        <div class="col-xs-12">
          <p class="author"><strong><a href="#">Lauren says:</a></strong></p>
          <p class="time">1 hour ago</p>
          <div class="well well-sm">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div><!-- .comment -->
      <div class="row comment hide">
        <div class="col-xs-12">
          <p class="author"><strong><a href="#">Mei says:</a></strong></p>
          <p class="time">1 hour ago</p>
          <div class="well well-sm">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div><!-- .comment -->
      <div class="row comment hide">
        <div class="col-xs-12">
          <p class="author"><strong><a href="#">Mei says:</a></strong></p>
          <p class="time">1 hour ago</p>
          <div class="well well-sm">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div><!-- .comment -->
      <div class="row">
        <div class="col-xs-12">
          <button class="btn btn-link pull-right" id="comments-show-hide"><i class="fa fa-arrow-circle-down"></i> View More Comments</strong></button>
        </div>
      </div><!-- .show-hide -->
    </div><!-- .col-xs-6 -->
  </div><!-- .row -->
</div><!-- .container -->

<!-- You might like -->
<div class="container margin-bottom">
  <div class="row">
    <div class="col-xs-12">
      <hr>
    </div>
    <div class="col-xs-12">
      <h4>You Might like</h4>
    </div><!-- .col-xs-12 -->
    <img class="col-xs-3" src="http://placehold.it/250" />
    <img class="col-xs-3" src="http://placehold.it/250" />
    <img class="col-xs-3" src="http://placehold.it/250" />
    <img class="col-xs-3" src="http://placehold.it/250" />
  </div><!-- .row -->
</div><!-- .container -->

<!-- Poster Details & About the Artist -->
<div class="container margin-bottom">
  <div class="row">
    <div class="col-xs-6">
      <hr>
      <h4>Poster Details</h4>
      <dl class="dl-horizontal poster-details">
        <div class="margin-bottom-small">
          <dt>Material</dt>
          <dd>Pure-white paper with a grammage of 200 g / m 2 </dd>
        </div>
        <div class="margin-bottom-small">
          <dt>Finish</dt>
          <dd>Satin</dd>
        </div>
        <div>
          <dt>Print</dt>
          <dd>Printed with the latest high-end Epson printers</dd>
        </div>
      </dl>
    </div><!-- .col-xs-6 -->
    <div class="col-xs-6">
      <hr>
      <h4>About the Artists</h4>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div><!-- .col-xs-6 -->
  </div><!-- .row -->
</div><!-- .container -->

<!-- Product Details and Photos -->
<div class="container margin-bottom">
  <div class="row">
    <div class="col-xs-12">
      <hr>
    </div>
    <div class="col-xs-9">
      <h4>Product Details &amp; Photos</h4>
      <p class="margin-bottom">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div><!-- .col-xs-9 -->
    <img class="col-xs-6 margin-bottom" src="http://placehold.it/600x700" />
    <img class="col-xs-6 margin-bottom" src="http://placehold.it/600x700" />
    <img class="col-xs-6" src="http://placehold.it/600x700" />
    <img class="col-xs-6" src="http://placehold.it/600x700" />
  </div><!-- .row -->
</div><!-- .container -->

<!-- Brand Information and Guarantee -->
<div class="container margin-bottom">
  <div class="row">
    <div class="col-xs-12">
      <hr>
    </div>
    <div class="col-xs-9">
      <h4>Brand Information &amp; Guarantee</h4>
      <p class="margin-bottom">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div><!-- .col-xs-9 -->
    <img class="col-xs-offset-1 col-xs-2" src="http://placehold.it/130" />
    <img class="col-xs-2" src="/images/guarantee.png" />
    <div class="col-xs-offset-1 col-xs-9">
      <h4>Brand Information &amp; Guarantee</h4>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div><!-- .col-xs-9 -->
  </div><!-- .row -->
</div><!-- .container -->

<?php include '../includes/footer.php'; ?>
