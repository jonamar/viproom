<!-- Modal -->
<div class="modal fade" id="sign-up-modal" tabindex="-1" role="dialog" aria-labelledby="sign-up-modal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body row">
        <div class="col-xs-7 border-right">
          <h2>Sign Up</h2>
          <form class="">
            <div class="form-group">
              <label for="email">Email</label>
              <input id="email" class="form-control" type="email" placeholder="Email" />
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input id="password" class="form-control" type="password" Placeholder="Password" />
            </div>
            <div class="form-group">
              <label for="password2">Confirm Password</label>
              <input id="password2" class="form-control" type="password" Placeholder="Confirm Password" />
            </div>
            <p>By signing up you agree to our <a href="#">terms</a></p>
            <button class="btn btn-primary" type="submit">Sign Up</button>
          </form>
        </div>
        <div class="col-xs-5">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <p>Password Rules:</p>
          <ul>
            <li>only alphabet letters and 0-9 numbers are allowed.</li>
            <li>minimum three characters</li>
          </ul>

          <hr>

          <p><strong>Already have an account?</strong></p>
          <p><a href="#" data-dismiss="modal" data-toggle="modal" data-target="#sign-in-modal">Click here to Sign in!</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
