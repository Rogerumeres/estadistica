function saludo()
{
    alert("hola");
}
function eliminar(url)
{
    if(confirm("Realmente desea eliminar este registro?"))
    {
        window.location=url;
    }
}