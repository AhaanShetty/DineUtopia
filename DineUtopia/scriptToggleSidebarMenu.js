$(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar,#content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
        
var check = function() {
  if (document.getElementById('pwd').value ==
    document.getElementById('cnfpwd').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = '';
    $('#submit-button').prop('disabled', false);
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
    $('#submit-button').prop('disabled', true);
  }
}