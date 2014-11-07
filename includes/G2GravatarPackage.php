<?php
 require "includes/GravatarPackage.php";
 use ArcherSys\Accounts\GravatarPackage;
 class G2GravatarPackage extends GravatarPackage{
     final function isValidGravatarUser(){
         return property_exists($this,'email');
     }
 }
?>