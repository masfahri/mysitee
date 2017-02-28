<?php

/***********************************************************
@author Raka Anggala W.S
@date 21/06/2014
@desc Configuration form validation field
      This config will use for every form submit
***********************************************************/
$config = array(
           'app_resume' => array(
           array(
                    'field' => 'school',
                    'label' => 'School',
                    'rules' => 'required|max_length[100]|xss_clean'
                 ),
           array(
                    'field' => 'experience',
                    'label' => 'experience',
                    'rules' => 'required|max_length[100]|xss_clean'
                 ),
            )
        )
?>