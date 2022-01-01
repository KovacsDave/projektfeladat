<form class="form-inline border p-3">
    <input type="text" name="" id="fegyver" class="form-control" placeholder="Írd be az új fegyver nevét!">
    <input class="btn btn-primary" type="button" onclick="uj()" value="Mentés">
</form>
<div class="msg"></div>

<script>
    function uj(){
document.querySelector('.msg').innerHTML=""

        let ujfegy = document.getElementById("fegyver").value;
        console.log(ujfegy);
        if(ujfegy.length>0){
            fetch(`../server/insertAgazat.php?nev=${ujfegy}`)
            .then(response => response.text())
            .then(data => document.querySelector('.msg').innerHTML = data? "Sikeres adatbeírás!" : "Adatbeírás meghiúsult!")
        }
    }
</script>