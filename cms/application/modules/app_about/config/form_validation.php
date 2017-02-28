<?php

/***********************************************************
@author Raka Anggala W.S
@date 21/06/2014
@desc Configuration form validation field
      This config will use for every form submit
***********************************************************/
$config = array(
           'app_about' => array(
           array(
                    'field' => 'name',
                    'label' => 'Name',
                    'rules' => 'required|max_length[100]|xss_clean'
                 ),
            )
        )
?>