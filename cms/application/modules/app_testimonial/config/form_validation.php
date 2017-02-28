<?php

/***********************************************************
@author Raka Anggala W.S
@date 21/06/2014
@desc Configuration form validation field
      This config will use for every form submit
***********************************************************/
$config = array(
          'app_testimonial' => array(
          array(
                    'field' => 'charter_id',
                    'label' => 'Charter Name',
                    'rules' => 'required|xss_clean'
                 ),
           array(
                    'field' => 'user',
                    'label' => 'User Name',
                    'rules' => 'required|max_length[50]|xss_clean'
                 ),
           array(
                    'field' => 'comment',
                    'label' => 'Comment',
                    'rules' => 'required|xss_clean'
                 )
            )
        )
?>