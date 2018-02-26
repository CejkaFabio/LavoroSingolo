function Delete(id)
{
    $("#pippo").load("Delete.php?identificator="+id);
    $("#tabella").load("Select.php");
}

function Update(id,nome,cognome,mail){
    $("#form").text("");
    $("#prova").load("Update.php?id="+row+"&nome="+name+"&cognome="+cognome+"&email="+email,function(){
        $("#tabella").load("Select.php");
    });
}
