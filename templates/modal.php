<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<!-- The Two modals need to be included somewhere on the page – the exact placement is irrelevant -->
<?php include '../includes/sign-in.php'; ?>
<?php include '../includes/sign-up.php'; ?>



<div class="container">
  <div class="row">
    <div class="col-xs-offset-2 col-xs-8">
      <h1>Modal Setup Instructions</h1>
      <hr>
      <h3>Sign In</h3>
      <p>
        <a href="#" class="btn btn-default" data-toggle="modal" data-target="#sign-in-modal">Sign In</a>
      </p>
      <p>For sign-<strong>in</strong> button add: 
        <pre>data-toggle="modal" data-target="#sign-in-modal"</pre>
      </p>

      <br>

      <h3>Sign Up</h3>
      <p>
        <a href="#" class="btn btn-default" data-toggle="modal" data-target="#sign-up-modal">Sign Up</a>
      </p>
      <p>For sign-<strong>up</strong> button add: 
        <pre>data-toggle="modal" data-target="#sign-up-modal"</pre>
      </p>

      <br>

      <p><strong>NOTE:</strong> Check the php include templates <code>sign-in.php</code> and <code>sign-up.php</code> to view the content of the modal dialogs.</p>


  </div><!-- .row -->
</div><!-- .container -->

<?php include '../includes/footer.php'; ?>
