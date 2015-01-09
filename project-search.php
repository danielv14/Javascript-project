<?php include('header.php'); ?>


  <div class='container' ng-app="root">
	<div class = "jumbotron">
  <div class = "jumbotron-fader">
  <div ng-controller="index">

        <h1 class="text-center">Search Instagram Photos</h1>
        
        <div class="row">

              <div class="col-lg-12">
                <div class="input-group">
                  <input id="search" ng-model="search"  type="text" class="form-control search" placeholder="Search for..." ng-keypress="searchTag()">
                  <span class="input-group-btn">
                    <button ng-click="searchTag()" ng-enter="search" id="submit" class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                  </span>
                </div><!-- /input-group -->
              </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->

        </div> <!-- Jumbo fader -->
      </div> <!-- Jumbo -->
      </div>
    
  
  <center><div id='instafeed'></div></center>
  </div>
  </div>


<?php include('footer.php'); ?>