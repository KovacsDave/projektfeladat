
    <h1 class="d-flex justify-content-center">Fegyver törlése</h1>
   <table class="table table-stripped bg-dark table-dark">
   <thead>
        <th>ID</th>
        <th>Típus neve</th>
        <th>Kaliber</th>
    </thead>
    <tbody id="listatorles"></tbody>
</table>
    <script>
        fetch('../server/readTipusok.php')
            .then(response => response.json())
            .then(data => render(data))
    
        function render(data){
            //console.log(data)
            let tblStr = ''
            for(let obj of data)
                tblStr += `<tr><td>${obj.id}</td><td>${obj.nev}</td><td>${obj.kaliber}</td>
                                <td class="btn btn-danger" id="${obj.id}" onclick="del(this)">Delete</td></tr>`
                document.querySelector('tbody').innerHTML = tblStr
                } 
                
    function del(obj){
                    //console.log(obj.id)
        fetch(`../server/delete.php?id=${obj.id}`)
            .then(response => response.text())
            .then(data => console.log(data))
                }
    </script>