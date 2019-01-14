<?php 

foreach ($karyawan as $karyawan):
echo $karyawan->karyawan_id; echo " ";
echo $karyawan->karyawan_name; echo " ";
echo $karyawan->karyawan_address; echo " ";
echo $karyawan->telpon_karyawan; echo " ";
echo "<br />";
endforeach;