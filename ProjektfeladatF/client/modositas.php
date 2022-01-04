
    <script src="mod.js"></script>
<div class="container">
<h1 class="d-flex justify-content-center">Módosítás</h1>

<table class="table table-stripped bg-dark table-dark">
    <thead>
        <th>ID</th>
        <th>Név</th>
        <th>Kaliber</th>
        <th>Kategória</th>
    </thead>
    <tbody id="lista"></tbody>
</table>
</div>
<script>
        fetch('../server/readFegyverek.php')
            .then(response => response.json())
            .then(data => render(data))
    
        function render(data){
            //console.log(data)
            let tblStr = ''
            for(let obj of data)
                tblStr += `<tr><td>${obj.id}</td><td>${obj.nev}</td><td>${obj.kaliber}</td><td class="border border-danger"contenteditable>${obj.knev}</td>
                        <td class="btn btn-success" id="${obj.id}" onclick="update(this)">módosítás</td></tr>`
                document.querySelector('tbody').innerHTML = tblStr
                } 
                
    function update(obj){
            //console.log(obj.id)
            let id=obj.id    
            let leiras = obj.previousElementSibling.textContent
            //console.log(leiras)
            fetch(`../server/modosit.php?id=${id}&leiras=${leiras}`)
                .then(response => response.text())
                .then(data => console.log(data))
                }
    </script>