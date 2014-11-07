<?php
namespace ArcherSys\Accounts;
 class GravatarPackage{
     public $email;
     const DEFAULT_IMAGE = "data:image/jpeg;base64,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";
     public $size;
     function __construct($email,$size){
         $this->email = $email;
         $this->size = $size;
         $this->grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( DEFAULT_IMAGE ) . "&s=" . $size;

     }
     function dumpGravatar(){
         echo "<img src=\"". $this->grav_url. "\" alt=\"\" />";
     }
 }
?>