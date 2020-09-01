function validation()
{
    var id=document.f1.user.value;
    var ps=document.f1.pass.value;
    if(id.length=="" && ps.length=="") {
        alert("Töltse ki a mezőket");
        return false;
    }
    else
    {
        if(id.length=="") {
            alert("Felhasználó név mező üres");
            return false;
        }
        if (ps.length=="") {
            alert("Jelszó mező üres");
            return false;
        }
    }
}