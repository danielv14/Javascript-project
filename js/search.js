var instaSearch = angular.module("root", []);

instaSearch.controller("index", ["$scope", function ($scope) {
  $scope.search;
  
  var tag = $scope.search;
  var loadButton = document.getElementById('load-more');
  
  function loadInstagram(tagName){
    var feed = new Instafeed({
                get: 'tagged',
                tagName: tagName,
                clientId: '8660306ba1294d659b72dd9ee027ebcb',
                target: 'instafeed',
                sortBy: 'most-liked',
                limit: '30',
                template: '<a href="{{link}}" target="_blank"><img src="{{image}}" /><div class="likes"><i class="fa fa-heart"></i> {{likes}}</div></a>',
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
  
  // Empty instafeed element and reload with relevant tag
  $scope.searchTag = function(){
      clearFeed();
      tag = $scope.search;
      loadInstagram(tag);
  };
  
  $scope.clear = function(){
      $scope.search = '';
       document.getElementById('search').focus();
  };
  
  instaSearch.directive('ngEnter', function () {
    return function ($scope, element, attrs) {
        element.bind("keydown keypress", function (event) {
            if(event.which === 13) {
                $scope.searchTag();
                event.preventDefault();
             }
         });
     };
  });
}]);

 

   