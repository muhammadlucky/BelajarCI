<?php 

foreach ($supplier as $supplier):
echo $supplier->supplier_id; echo " ";
echo $supplier->supplier_name; echo " ";
echo $supplier->supplier_address; echo " ";
echo "<br />";
endforeach;