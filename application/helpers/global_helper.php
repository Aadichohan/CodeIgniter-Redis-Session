<?php

if (! defined ( 'BASEPATH' ))
    exit ( 'No direct script access allowed' );

function dd( $arr, $is_bool = TRUE, $title = '' )
{
 if( $title )
 {
  echo '<strong>'.$title.'</strong>';
 }

 echo '<pre>';
 print_r( $arr );
 echo '</pre>';

 if( $is_bool )
  exit();
}