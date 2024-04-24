$(document).ready(function() {
  $('button[name="verAcompanantes"]').click(function() {
    var idp = $(this).data('idp');
    verAcompanantes(idp);
  });
});

function verAcompanantes(idp) {
  $.get("<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?idp=" + idp, function(data) {
    $("#modalacompanantes .modal-body").html(data);
    $("#modalacompanantes").modal("show");
  });
}