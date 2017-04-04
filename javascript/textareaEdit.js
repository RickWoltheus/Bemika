
$('.newPost button[data-func]').click(function(){
    document.execCommand( $(this).data('func'), false 	);
  });

  $('.newPost select[data-func]').change(function(){
    var $value = $(this).find(':selected').val();
    document.execCommand( $(this).data('func'), false, $value);
  });

  

  $("#submit").click(function() {
    $("#resultEditor").val($("#editor").html());
  });
  
// Creates new hyperlink. */
function linkSel() {
	var linkURL = prompt("Enter URL:", "http://"); 
  document.execCommand("CreateLink", false, linkURL);
}

/* FUNCTION: unlinkSel()
Removes hyperlink. */
function unlinkSel() {
	document.execCommand("Unlink", false, null);
}

