fetch('../server/readKategoriak.php')
    .then(response => response.json())
    .then(data => render(data))

    function render(data){
        let select = '<option value="0">Válasszon ki egy kategóriát!</option>'
        for(let obj of data)
            select += `<option value="${obj.id}">${obj.nev}</option>`
            document.getElementById('lista').innerHTML = select

document.getElementById('lista').addEventListener('change',myFilter)
    }
    function myFilter(e){
        console.log(e.target.value)
            fetch(`../server/readFiltered.php?id=${e.target.value}`)
            .then(response => response.json())
            .then(data => renderTable(data))
    }
    function renderTable(data){
        console.log(data)
        let tblStr = ''
        for(let obj of data)
            tblStr += `<tr><td>${obj.tid}</td><td>${obj.tnev}</td><td>${obj.cal}</td></tr>`
            document.querySelector('tbody').innerHTML = tblStr
    } 