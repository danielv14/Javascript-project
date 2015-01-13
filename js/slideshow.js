feed = new InstagramFeed({
                get: 'tagged',
                tagName: 'vsco',
                clientId: '8660306ba1294d659b72dd9ee027ebcb',
                target: 'instafeed',
                sortBy: 'most-liked',
                limit: '30',
                resolution: 'standard_resolution',
  template: '<div id="slideshow"><img src="{{image}}" /></div>',
  after: function () {
                              var images = $("#instafeed").find('img');
                            $.each(images, function(index, image) {
                              var delay = (index * 75) + 'ms';
                              $(image).css('-webkit-animation-delay', delay);
                              $(image).css('-moz-animation-delay', delay);
                              $(image).css('-ms-animation-delay', delay);
                              $(image).css('-o-animation-delay', delay);
                              $(image).css('animation-delay', delay);
                              $(image).addClass('animated fadein');
                            });
                          }, 

  mock: true,
  custom: {
    images: [],
    currentImage: 0,
    showImage: function () {
      var imageresult, image;
      image = this.options.custom.images[this.options.custom.currentImage];
      imageresult = this._makeTemplate(this.options.template, {
        model: image,
        image: image.images[this.options.resolution].url,
      });
      $("#instafeed").html(imageresult);
    }
  },
  success: function (data) {
    this.options.custom.images = data.data; 
    this.options.custom.showImage.call(this);
  }

});
feed.run();

$(".prev").click(function () {

  var length, current;
  current = feed.options.custom.currentImage;
  length = feed.options.custom.images.length;
  if (current > 0) {
    feed.options.custom.currentImage--
    feed.options.custom.showImage.call(feed);
  }
  var images = $("#instafeed").find('div');
                            $.each(images, function(index, image) {
                              var delay = (index * 75) + 'ms';
                              $(image).css('-webkit-animation-delay', delay);
                              $(image).css('-moz-animation-delay', delay);
                              $(image).css('-ms-animation-delay', delay);
                              $(image).css('-o-animation-delay', delay);
                              $(image).css('animation-delay', delay);
                              $(image).addClass('animated fadeleft');
                            });
});

$(".next").click(function () {

  var length, current;
  current = feed.options.custom.currentImage;
  length = feed.options.custom.images.length;
  if (current < length - 1) {
    feed.options.custom.currentImage++;
    feed.options.custom.showImage.call(feed);
  }
  var images = $("#instafeed").find('img');
                            $.each(images, function(index, image) {
                              var delay = (index * 75) + 'ms';
                              $(image).css('-webkit-animation-delay', delay);
                              $(image).css('-moz-animation-delay', delay);
                              $(image).css('-ms-animation-delay', delay);
                              $(image).css('-o-animation-delay', delay);
                              $(image).css('animation-delay', delay);
                              $(image).addClass('animated fadein');
                            });
});