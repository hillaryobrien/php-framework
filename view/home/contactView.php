
<!-- page content -->
<div class="col-md-9">
  <div class="well pageContent">
      <form method="post" action="<?php print APP_DOC_ROOT . '/home/contact'; ?>">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" class="form-control" id="phone" placeholder="Phone">
          </div>
          <div class="form-group">
            <label for="comments">Comments</label>
              <textarea class="form-control" id="comments" name="comments"></textarea>
          </div>

          <button type="submit" name="submit" class="btn btn-default">Submit</button>
        </form>
  </div>
</div>
<!-- end page content -->
