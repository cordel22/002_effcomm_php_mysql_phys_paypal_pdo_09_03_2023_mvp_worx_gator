
<?php

/* 
  p 349 / 366
  Since a payment has already been authorized, the administrative setup script
only needs to identify the transaction ID associated with the prior authorization
and use a payment request type of PRIOR_AUTH_CAPTURE. Here, then, is
the complete gateway_setup_admin.php, which should be stored in a secure
location (such as the same place you used for gateway_setup.php):
 */

//  Create an array for the information:
$data = array();
$data['x_trans_id'] = $trans_id;
$data['x_type'] = 'PRIOR_AUTH_CAPTURE';


?>




