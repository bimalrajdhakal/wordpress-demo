<?php
/*
    Template Name:Home Page
 */
// custom field 
$homePageTitleValue = get_post_meta(17,'home_name_title',true);

get_header();?>

  <!-- Page Content starts here -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column starts here-->
      <div class="col-md-8">

        <h1 class="my-4"><?php echo $homePageTitleValue; ?></h1>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Post Title</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2017 by
            <a href="#">Start Bootstrap</a>
          </div>
        </div>

        <!-- Pagination starts here-->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>
        <!-- Pagination ends here-->

      </div>
      <!-- Blog Entries Column starts here-->

      <!-- Sidebar Widgets Column starts here-->
      <div class="col-md-4">
        <!-- News letter Subscription starts here  -->
        <div class="card my-4">
          <h5 class="card-header">Join Our Mailing List</h5>
          <div class="container">
              <p class="my-1">Keep up-to-date with our latest blog post</p>
              <button class="btn btn-danger btn-lg btn-block my-2" type="button" data-toggle="modal" data-target="#subscriptionModal">Click here to subscribe</button>
          </div>
          

        </div>
        <!-- News letter Subscription starts here  -->
        <!-- Search Widget starts here-->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
        <!-- Search Widget starts here-->

        <!-- Categories Widget starts here -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <a href="#">HTML</a>
                  </li>
                  <li>
                    <a href="#">IOS Development</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                  <li>
                    <a href="#">CSS</a>
                  </li>
                  <li>
                    <a href="#">Tutorials</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Categories Widget starts here -->

        <!-- Upcomming tutorials starts here-->
        <div class="card my-4">
          <h5 class="card-header">Upcomming Tutorials</h5>
          <div class="card-body">
             <div class="row">
               <div class="col-lg-12">
                 <ul class="list-unstyled mb-0">
                   <li>React Native</li>
                   <li>IOS APP Development</li>
                   <li>Linux Begineers to Master</li>
                 </ul>
               </div>
             </div>
          </div>
        </div>
      <!-- Upcomming tutorials starts here-->
      </div>
      <!-- Sidebar Widgets Column ends here-->

    </div>
    <!-- /.row ends here-->

  </div>
    <!-- Page Content ends here -->

      <!-- subscription modal starts here -->

  <div class="modal fade" id="subscriptionModal" tabindex="-1" role="dialog" aria-labelledby="subscriptionModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="subscriptionModalLabel">Subscribe to our news letter</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form>
                  <div class="form-group">
                    <label for="emailaddress" class="col-form-label">Email:</label>
                    <input type="email" class="form-control" id="emailaddress" placeholder="example@domain.com">
                  </div>
                </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </div>
    </div>

  <!-- Subscription modal ends here -->

<?php

get_footer();
?>
