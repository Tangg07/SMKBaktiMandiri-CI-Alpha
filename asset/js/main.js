$(document).ready(function(){
  $('.button-collapse').sideNav({
      menuWidth: 280, // Default is 240
      opacity: .5,
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true  // Choose whether you can drag to open on touch screens
    });

  $('.kontak').leanModal({
       dismissible: true, // Modal can be dismissed by clicking outside of the modal
       opacity: .5, // Opacity of modal background
       in_duration: 300, // Transition in duration
       out_duration: 200, // Transition out duration
       starting_top: '40%', // Starting top style attribute
       ending_top: '10%', // Ending top style attribute
     });

  $('.slider').slider({
    indicators: true,
    interval : 6000,
    full_width: true,
    height: 480,
  });
});
