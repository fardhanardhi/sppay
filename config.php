<?php

 $url    = 'http://localhost/sppay'; //Sesuaikan dengan url project
 $dbhost = 'localhost';  //host untuk database, biasanya localhost
 $dbuser = 'root';  //username untuk mengakses database, jika dilokal biasanya 'root'
 $dbpass = '';  //password untuk mengakses databae, jika dilokal biasanya kosong
 $dbname = 'db_sppay';  //nama database yang akan digunakan


 $koneksi = new mysqli($dbhost,$dbuser,$dbpass,$dbname);  //koneksi Database

 //Check koneksi, berhasil atau tidak
 if( $koneksi->connect_error )
 {
  die( 'Oops!! Koneksi Gagal : '. $koneksi->connect_error );
 }

 $url = rtrim($url,'/');
 ?>