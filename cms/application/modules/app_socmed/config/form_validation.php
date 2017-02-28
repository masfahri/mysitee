<?php

/***********************************************************
@author Raka Anggala W.S
@date 21/06/2014
@desc Configuration form validation field
      This config will use for every form submit
***********************************************************/
$config = array(

           'app_socmed' => array(
             array(
                    'field' => 'socmed_link',
                    'label' => 'Social Link',
                    'rules' => 'max_length[200]|trim|required|xss_clean'
                 )
            )
          )
?>