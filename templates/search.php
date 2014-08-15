<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<!-- Sidebar -->
<aside class="sticky-sidebar" data-spy="affix" data-offset-top="175">
  <?php include '../includes/sidebar.php' ?>
</aside>


<div class="container">
  <div class="row">
  
    <!-- Sidear -->
    <div class="col-xs-3">

      <h3>Categories</h3>
      <hr>

      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">New</a></h4>
          </div>
          <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body">
              <ul>
                <li>Sub Category</li>
                <li>Sub Category</li>
                <li>Sub Category</li>
                <li>Sub Category</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Fashion</a></h4>
          </div>
          <div id="collapseTwo" class="panel-collapse collapse">
            <div class="panel-body">
              <ul>
                <li>Sub Category</li>
                <li>Sub Category</li>
                <li>Sub Category</li>
                <li>Sub Category</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Beauty</a></h4>
          </div>
          <div id="collapseThree" class="panel-collapse collapse">
            <div class="panel-body">
              <ul>
                <li>Sub Category</li>
                <li>Sub Category</li>
                <li>Sub Category</li>
                <li>Sub Category</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Sport</a></h4>
          </div>
          <div id="collapseFour" class="panel-collapse collapse">
            <div class="panel-body">
              <ul>
                <li>Sub Category</li>
                <li>Sub Category</li>
                <li>Sub Category</li>
                <li>Sub Category</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Lifestyle</a></h4>
          </div>
          <div id="collapseFive" class="panel-collapse collapse">
            <div class="panel-body">
              <ul>
                <li>Sub Category</li>
                <li>Sub Category</li>
                <li>Sub Category</li>
                <li>Sub Category</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Home &amp; Living</a></h4>
          </div>
          <div id="collapseSix" class="panel-collapse collapse">
            <div class="panel-body">
              <ul>
                <li>Sub Category</li>
                <li>Sub Category</li>
                <li>Sub Category</li>
                <li>Sub Category</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Wine &amp; Gourmet</a></h4>
          </div>
          <div id="collapseSeven" class="panel-collapse collapse">
            <div class="panel-body">
              <ul>
                <li>Sub Category</li>
                <li>Sub Category</li>
                <li>Sub Category</li>
                <li>Sub Category</li>
              </ul>
            </div>
          </div>
        </div>
      </div>


      <h3>Refine Search</h3>
      <hr>

      <h4>Attributes</h4>

      <div class="checkbox">
        <label>
          <input type="checkbox" value=""> For Men
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" value=""> For Women
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" value=""> For Boys
        </label>
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" value=""> For Girls
        </label>
      </div>

      <h4>Price</h4>
      <div class="radio">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
          Less than $20 
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
          $20-100
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
          $100-500
        </label>
      </div>
      <div class="radio">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
          $500 +
        </label>
      </div>
      
    </div>



    <!-- Main Content -->
    <div class="col-xs-9">
     
      <!-- Featured Products Carousel -->  
      <div class="row">   
        <div id="product-carousel" class="carousel slide col-xs-12" data-ride="carousel" data-interval="2000">
          <!-- Carousel Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#product-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#product-carousel" data-slide-to="1"></li>
            <li data-target="#product-carousel" data-slide-to="2"></li>
          </ol>
          <!-- Carousel Wrapper for slides -->
          <div class="carousel-inner">
            <a class="item active" href="#">
              <img src="http://placehold.it/698X250" alt="...">
              <div class="carousel-caption">
                <h2>test1</h2>
                <p><span class="btn btn-primary">Learn More</span></p>
              </div>
            </a>
            <a class="item" href="#">
              <img src="http://placehold.it/698X250" alt="...">
              <div class="carousel-caption">
                <h2>test1</h2>
                <p><span class="btn btn-primary">Learn More</span></p>
              </div>
            </a>
            <a class="item" href="#">
              <img src="http://placehold.it/698X250" alt="...">
              <div class="carousel-caption">
                <h2>test1</h2>
                <p><span class="btn btn-primary">Learn More</span></p>
              </div>
            </a>
          </div>
        </div>
      </div><!-- .row -->


      
      <!-- Title and Sorting -->
      <div class="row">
        <h3 class="text-primary col-xs-9">Search Results Title</h3>
        <div class="col-xs-3">
          <select class="form-control pull-right">
            <option>Relevance</option>
            <option>Price: Low to High</option>
            <option>Price: Hight to Low</option>
            <option>Popularity</option>
            <option>Highest Rating</option>
          </select>
        </div>
      </div><!-- .row -->
       


      <!-- Product Cards Grid -->
      <div class="row">

        <!-- 15 Tiles for Feng shui harmony -->
        <?php include '../includes/search-product-tile.php'; ?>
        <?php include '../includes/search-product-tile.php'; ?>
        <?php include '../includes/search-product-tile.php'; ?>

        <?php include '../includes/search-product-tile.php'; ?>
        <?php include '../includes/search-product-tile.php'; ?>
        <?php include '../includes/search-product-tile.php'; ?>

        <?php include '../includes/search-product-tile.php'; ?>
        <?php include '../includes/search-product-tile.php'; ?>
        <?php include '../includes/search-product-tile.php'; ?>

        <?php include '../includes/search-product-tile.php'; ?>
        <?php include '../includes/search-product-tile.php'; ?>
        <?php include '../includes/search-product-tile.php'; ?>

        <?php include '../includes/search-product-tile.php'; ?>
        <?php include '../includes/search-product-tile.php'; ?>
        <?php include '../includes/search-product-tile.php'; ?>
        
        <div class="col-xs-12">
          <ul class="pagination">
            <li class="disabled"><a href="#">&laquo;</a></li>
            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li class="disabled"><a href="#">...</a></li>
            <li><a href="#">12</a></li>
            <li><a href="#">&raquo;</a></li>
          </ul>          
        </div>

      </div><!-- .row -->

    </div><!-- .col-xs-9 -->
  </div><!-- .row -->
</div><!-- .container -->

<?php include '../includes/footer.php'; ?>
