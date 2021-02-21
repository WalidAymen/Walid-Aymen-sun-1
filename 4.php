<style>
table, th, td {
  border: 1px solid black;
}
</style>


<table>
<?php
for ($i=1;$i<=12;$i++) { //the x dimention ?> 
<tr>
    <?php for ($j=1;$j<=12;$j++) { //the y dimention?>
                <td>
                <?= "$i * $j =".$i*$j; ?>
                </td>  
        <?php } ?>
</tr>
<?php }
?>
</table>