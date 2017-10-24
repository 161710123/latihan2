<?php

require_once 'index1.php';

$konstrak = new konstrak ('fadlan','jakarta','XI RPL1','sibuk');
echo "nama :".$konstrak->get_nama() . '<br>';
echo "tempatlahir :".$konstrak->get_tempatlahir() . '<br>';
echo "kelas :".$konstrak->get_kelas() . '<br>';
echo "status :".$konstrak->get_status() . '<br>';



?>