<script>
function chkdt(flddt)
{
var dateParts = flddt.split("-");
var fielddate = new Date(dateParts[2], dateParts[1] - 1, dateParts[0]);
var aprildt1 = "<?php echo $aprildt; ?>";
aprildate=new Date(aprildt1);
console.log(aprildate);
console.log(fielddate);
if(fielddate<aprildate)
{
    alert("Sorry Vai !");
	$('#dt').val('');
}
else
{  
} 
}
</script>