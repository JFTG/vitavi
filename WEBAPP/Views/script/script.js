$(document).ready(function() {

  $('select').material_select();
  $('.datepicker').pickadate();
  $('.slider').slider({full_width: true});
  $('.modal-trigger').leanModal();
  $('.button-collapse').sideNav({
    menuWidth: 200,
    edge: 'left',
    closeOnClick: true
  });
});
