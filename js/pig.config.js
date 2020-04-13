var options = {
    urlForSize: function(filename, size) {
      return 'img/gallery/' + size + '/' + filename;
    },
    // ...
};

var imageData = [
    {filename: 'blue.jpg', aspectRatio: 1.777},
    {filename: 'red.jpg', aspectRatio: 1.5},
    {filename: 'blue.jpg', aspectRatio: 1},
    {filename: 'red.jpg', aspectRatio: 1},
    {filename: 'blue.jpg', aspectRatio: 2.4},
    {filename: 'red.jpg', aspectRatio: 1.5},
    {filename: 'blue.jpg', aspectRatio: 1.777},
    {filename: 'red.jpg', aspectRatio: 1.5},
    {filename: 'blue.jpg', aspectRatio: 1},
    {filename: 'red.jpg', aspectRatio: 1},
    {filename: 'blue.jpg', aspectRatio: 1},
    {filename: 'red.jpg', aspectRatio: 1.5},
    // {filename: 'green.jpg', aspectRatio: 1.777},
    // {filename: 'orange.jpg', aspectRatio: 1.777},
    // {filename: 'yellow.jpg', aspectRatio: 1},
    // {filename: 'purple.jpg', aspectRatio: 2.4},
];

var pig = new Pig(imageData, options).enable();