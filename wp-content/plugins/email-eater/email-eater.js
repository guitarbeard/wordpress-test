function submit_me(){
  jQuery.post(email_eater_ajax.ajaxurl, jQuery('#emailEaterForm').serialize(),
  function(data){
    data = jQuery.parseJSON(data);
    if (data.error) {
      jQuery('#emailEaterMessage').addClass('error').removeClass('hidden').text(data.error.msg);
      jQuery('#emailInput').select();
      throw data.error.msg;
    }
    jQuery('#emailInput').val('');
    jQuery('#emailEaterMessage').removeClass('hidden error').text(data.msg);
  });
  return false;
}
