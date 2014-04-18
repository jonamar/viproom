<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<!-- Core Details -->
<div class="container">
    <div class="row">

      <!-- Right Column / Gallery -->
      <div class="col-xs-5">
        <div class="carousel slide article-slide" id="article-photo-carousel">

          <!-- Wrapper for slides -->
          <div class="carousel-inner cont-slider">
            <div class="item active">
              <img src="http://placehold.it/600" alt="">
            </div>
            <div class="item">
              <img src="http://placehold.it/600" alt="">
            </div>
            <div class="item">
              <img src="http://placehold.it/600" alt="">
            </div>
            <div class="item">
              <img src="http://placehold.it/600" alt="">
            </div>
          </div>

          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li class="active" data-slide-to="0" data-target="#article-photo-carousel">
              <img alt="" src="http://placehold.it/600">
            </li>
            <li class="" data-slide-to="1" data-target="#article-photo-carousel">
              <img alt="" src="http://placehold.it/600">
            </li>
            <li class="" data-slide-to="2" data-target="#article-photo-carousel">
              <img alt="" src="http://placehold.it/600">
            </li>
            <li class="" data-slide-to="3" data-target="#article-photo-carousel">
              <img alt="" src="http://placehold.it/600">
            </li>
          </ol>
        </div>
      </div>

      <!-- Left Column -->
      <div class="col-xs-6 col-xs-offset-1">

        <!-- Header -->
        <header class="row">
          <h3 class="col-xs-8">Burberry Prorsum</h3>
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
            <p class="h3 text-primary">HK$ 4,937</p>
            <ul>
              <li>Pink Silicone</li>
              <li>Floral embellishment, gold studs</li>
              <li>Adjustable push-stud fastening</li>
              <li>Designer color: Pale Cameo Pink</li>
            </ul>
          </div>
          <div class="col-xs-5">
            <img class="pull-right" src="/images/guarantee.png" alt="authenticity guarantee"/>
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
              <li class="active"><a href="#">70</a></li>
              <li><a href="#">75</a></li>
              <li><a href="#">80</a></li>
              <li><a href="#">85</a></li>
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
            <button class="btn btn-danger" type="submit">Add to Shopping Cart</button>
            <button class="btn btn-default" type="submit">Add to Wishlist</button>
          </div>
        </div><!-- .row -->
      </div>
    </div><!-- .row -->
</div><!-- .container -->

<!-- Curator Recommendations and Comments -->
<div class="container">
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
    <div class="col-xs-6">
      <hr>
      <h4>Most Recent Comments</h4>
      <p><i span="fa fa-comments text-primary"></i> 13 Comments</p>
    </div><!-- .col-xs-6 -->
  </div><!-- .row -->
</div><!-- .container -->

<!-- You might like -->
<div class="container">
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

<!-- Size chart -->
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <hr>
    </div>
    <div class="col-xs-12">
      <h4>Size Chart</h4>
    </div><!-- .col-xs-12 -->
    <img class="col-xs-9" src="http://placehold.it/728x250" />
  </div><!-- .row -->
</div><!-- .container -->

<!-- Product Details and Photos -->
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <hr>
    </div>
    <div class="col-xs-9">
      <h4>Product Details &amp; Photos</h4>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div><!-- .col-xs-9 -->
    <img class="col-xs-6" src="http://placehold.it/600x700" />
    <img class="col-xs-6" src="http://placehold.it/600x700" />
    <img class="col-xs-6" src="http://placehold.it/600x700" />
    <img class="col-xs-6" src="http://placehold.it/600x700" />
  </div><!-- .row -->
</div><!-- .container -->

<!-- Care and Instructions -->
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <hr>
    </div>
    <div class="col-xs-9">
      <h4>Care &amp; Instructions</h4>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div><!-- .col-xs-9 -->
    <div class="col-xs-6">
      <img src="http://placehold.it/455x250" />
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </p>
    </div><!-- .col-xs-6 -->
    <div class="col-xs-6">
      <img src="http://placehold.it/455x250" />
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </p>
    </div><!-- .col-xs-6 -->
    <div class="col-xs-6">
      <img src="http://placehold.it/455x250" />
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </p>
    </div><!-- .col-xs-6 -->
    <div class="col-xs-6">
      <img src="http://placehold.it/455x250" />
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </p>
    </div><!-- .col-xs-6 -->
  </div><!-- .row -->
</div><!-- .container -->

<!-- Brand Information and Guarantee -->
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <hr>
    </div>
    <div class="col-xs-9">
      <h4>Brand Information &amp; Guarantee</h4>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div><!-- .col-xs-9 -->
    <img class="col-xs-offset-1 col-xs-2" src="http://placehold.it/400" />
    <img class="col-xs-2" src="/images/guarantee.png" />
    <div class="col-xs-offset-1 col-xs-9">
      <h4>Brand Information &amp; Guarantee</h4>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div><!-- .col-xs-9 -->
  </div><!-- .row -->
</div><!-- .container -->

<aside class="affix">
  test
</aside>


<?php include '../includes/footer.php'; ?>
