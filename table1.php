<!DOCTYPE html>
<html lang ="en">
    <head>
      <meta charset="utf-8">
      <style>
            .table {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
            td, th {
                border: 1px solid #dddddd;
                text-align: center;
                padding: 8px;
            }
            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>

    <title>Tables</title>

    </head>

    <h1>Tables PHP</h1>
    <h2>Таблица истинности PHP</h2>

    <body>
    
    <?php
    echo "<table class='table'>";

          echo "<tr>";
                echo "<th>A</th>";
                echo "<th>B</th>";
                echo "<th>!A</th>";
                echo "<th>A || B</th>";
                echo "<th>A && B</th>";
                echo "<th>A xor B</th>";
          echo "</tr>";
          
          echo "<tr>"; //Beginning $A = 0; $B = 0. Row 1.
          $A = 0;
          $B = 0;
                echo "<td>$A</td>";
                echo "<td>$B</td>";
             
          if ($A !== 1) {
                echo "<td>True!</td>"; //True if $A is not true
          }else{
                echo "<td>False!</td>";
          }     
          
          if ($A == 0 || $B == 1) {
                echo "<td>True!</td>"; //True if either $A or $B is not true
          }else{
                echo "<td>False!</td>";
          }           
      
          if ($A == 0 && $B == 0) {
                echo "<td>True!</td>"; //True if both $A and $B are true
          }else{
                echo "<td>False!</td>";
          }     
         
          if ($A == 0 xor $B == 1) {
                echo "<td>True!</td>"; //True if either $A or $B is true, but not both
          }else{
                echo "<td>False!</td>";
          }     
          echo "</tr>"; //Ending Row 1. 
          
          echo "<tr>"; //Beginning $A = 0; $B = 1. Row 2. 
          $A = 0;
          $B = 1;
                echo "<td>$A</td>";
                echo "<td>$B</td>";
             
          if ($A !== 1) {
                echo "<td>True!</td>"; 
          }else{
                echo "<td>False!</td>";
          }     
          
          if ($A == 0 || $B == 1) {
                echo "<td>True!</td>"; 
          }else{
                echo "<td>False!</td>";
          }     
      
          if ($A == 0 && $B == 0) {
                echo "<td>True!</td>"; 
          }else{
                echo "<td>False!</td>";
          }     
         
          if ($A == 0 xor $B == 1) {
                echo "<td>True!</td>"; 
          }else{
                echo "<td>False!</td>";
          }     
          echo "</tr>"; //Ending Row 2.
          
          echo "<tr>"; //Beginning $A = 1; $B = 0. Row 3.
          $A = 1;
          $B = 0;
                echo "<td>$A</td>";
                echo "<td>$B</td>";
             
          if ($A !== 1) {
                echo "<td>True!</td>"; 
          }else{
                echo "<td>False!</td>";
          }     
          
          if ($A == 0 || $B == 1) {
                echo "<td>True!</td>"; 
          }else{
                echo "<td>False!</td>";
          }           
      
          if ($A == 1 && $B == 0) {
                echo "<td>True!</td>"; 
          }else{
                echo "<td>False!</td>";
          }     
         
          if ($A == 0 xor $B == 0) {
                echo "<td>True!</td>"; 
          }else{
                echo "<td>False!</td>";
          }     
          echo "</tr>"; //Ending Row 3.
          
          echo "<tr>"; //Beginning $A = 1; $B = 1. Row 4.
          $A = 1;
          $B = 1;
          
                echo "<td>$A</td>";
                echo "<td>$B</td>";
             
          if ($A !== 1) {
                echo "<td>True!</td>"; 
          }else{
                echo "<td>False!</td>";
          }     
          
          if ($A == 0 || $B == 1) {
                echo "<td>True!</td>"; 
          }else{
                echo "<td>False!</td>";
          }           
      
          if ($A == 0 && $B == 0) {
                echo "<td>True!</td>"; 
          }else{
                echo "<td>False!</td>";
          }     
         
          if ($A == 0 xor $B == 1) {
                echo "<td>True!</td>"; 
          }else{
                echo "<td>False!</td>";
          }     
          echo "</tr>"; //Ending Row 4.
          
     echo "</table>";
     ?>

     </body>
</html>