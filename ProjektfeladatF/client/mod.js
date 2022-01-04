fetch('../server/readFegyverek.php')
    .then(response => response.json())
    .then(data => render(data))
    
function render(data){
    console.log(data)
    let tblStr = ''
    for(let obj of data)
        tblStr += `<tr><td>${obj.id}</td><td>${obj.nev}</td><td>${obj.kaliber}</td><td>${obj.knev}</td></tr>`
        document.querySelector('tbody').innerHTML = tblStr
} 

