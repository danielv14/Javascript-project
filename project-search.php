<?php include('header.php'); ?>
                

  <div class='container' ng-app="root">
	<div class = "jumbotron">
  <div class = "jumbotron-fader">
  <div ng-controller="index">

        <h2 class="text-center">Search instagram photos by tag</h2>
        
        <div class="row">

              <div class="col-lg-12">
                <div class="input-group">
                  <input id="search" ng-model="search"  type="text" class="form-control" placeholder="Search for...">
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
  </div><!-- Container -->

<script src='js/jquery.js'></script>
<script src='js/instafeed.js'></script>
<script src='js/angular.js'></script>
<script src="js/search.js"></script>

<?php include('footer.php'); ?>