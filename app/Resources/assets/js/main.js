var $ = require('jquery');

//require('bootstrap-sass');
require('materialize-css');

// var req = require('redirectjs');

// $("#redirectjs").click(function () {
//   req.redirectTo('https://github.com/nioperas06/redirectjs');
// })


  $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });