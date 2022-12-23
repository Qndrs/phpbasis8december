<?php
$nummers = [0,1,2,3,4,[10,[100,['prijs'=>1000,2000],300],30,50],6,7,8,9] ;
$naam = 'vervelende array' ;
function loopdoor( $naam, $ding ){
    $regels = '';
    if( is_array( $ding ) || is_object( $ding) ):
      $wat = ( is_array( $ding )? '[array]' : '[object]' );
      $regels .= '<strong>'.$naam.' '.$wat.'</strong><ul>';
      foreach( $ding as $k => $v ):
        $regels .= loopdoor( $k, $v );
      endforeach;
      $regels .= '</ul>';
    else:
      $regels .= '<li><strong>'.$naam.'</strong> => '.$ding.'</li>';
      // $regels = $regels . '<li><strong>'.$naam.'</strong> => '.$ding.'</li>';
    endif;
    return $regels;
  }
echo loopdoor($naam, $nummers) ;