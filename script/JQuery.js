function Delete(id)
{
    $("#pippo").load("Delete.php?identificator="+id);
    $("#tabella").load("Select.php");
}
