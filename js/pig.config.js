var imageData = [
  {filename: 'gallery-09.jpg', aspectRatio: 1.777},
  
  {filename: 'gallery-02.jpg', aspectRatio: 0.75},

  {filename: 'gallery-03.jpg', aspectRatio: 1},
  {filename: 'gallery-04.jpg', aspectRatio: 1},
  
  {filename: 'gallery-06.jpg', aspectRatio: 1},
  {filename: 'gallery-07.jpg', aspectRatio: 1},

  {filename: 'gallery-08.jpg', aspectRatio: 1.333},
  {filename: 'gallery-01.jpg', aspectRatio: 0.75},
  {filename: 'gallery-05.jpg', aspectRatio: 1},
  {filename: 'gallery-10.jpg', aspectRatio: 2.638},
];

// var pig = new Pig(imageData, {
//   urlForSize: function(filename, size) {
//       return '../img/gallery/' + size + '/' + filename;
//       }},).enable();

var options = {
  // containerId: 'pig',
  // classPrefix: 'pig',
  // figureTagName: 'figure',
  spaceBetweenImages: 16,
  // transitionSpeed: 500,
  primaryImageBufferHeight: 1000,
  secondaryImageBufferHeight: 300,
  thumbnailSize: 20,
  
  urlForSize: function(filename, size) {
    return './img/home/' + size + '/' + filename;
  },

  // onClickHander: function(filename) { },

  getMinAspectRatio: function(lastWindowWidth) {
    if (lastWindowWidth < 600)  // Phones
      return 2;
    else if (lastWindowWidth < 900)  // Tablets
      return 3;
    else if (lastWindowWidth <  1300)  // Laptops
      return 3;
    return 4;  // Large desktops
  },

  getImageSize: function(lastWindowWidth) {
    if (lastWindowWidth < 600)  // Phones
      return 250;
    else if (lastWindowWidth < 1200) // Tablets and latops
      return 500;
    return 720;  // Large desktops
  }
};

var pig = new Pig(imageData, options).enable();