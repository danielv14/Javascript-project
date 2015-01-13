$(document).ready(function(){$(".fancybox").fancybox(); });

var instaSearch = angular.module("root", []);

instaSearch.controller("index", ["$scope", function ($scope) {
  $scope.search;
  
  var tag = $scope.search;
 
  
  function loadInstagram(SearchedTag){
    var feed = new InstagramFeed({
                get: 'tagged',
                tagName: SearchedTag,
                clientId: '8660306ba1294d659b72dd9ee027ebcb',
                target: 'instafeed',
                sortBy: 'most-liked',
                limit: '30',
                resolution: 'standard_resolution',
                template: '<a class="fancybox" rel="group" href="{{image}}"><img src="{{image}}"/><div class="likes"><i class="fa fa-heart"></i> {{likes}}</div></a>',
                  after: function () {
                              var images = $("#instafeed").find('a');
                            $.each(images, function(index, image) {
                              var delay = (index * 75) + 'ms';
                              $(image).css('-webkit-animation-delay', delay);
                              $(image).css('-moz-animation-delay', delay);
                              $(image).css('-ms-animation-delay', delay);
                              $(image).css('-o-animation-delay', delay);
                              $(image).css('animation-delay', delay);
                              $(image).addClass('animated fadeup');
                            });
                          }, 
    }).run();
  };
  
function clearFeed(){
    document.getElementById('instafeed').innerHTML = "";
  }
  
  // Empty the feed and load new feed by searched tag.
  $scope.searchTag = function(){
      clearFeed();
      tag = $scope.search;
      loadInstagram(tag);
  };
  


}]);

 

   