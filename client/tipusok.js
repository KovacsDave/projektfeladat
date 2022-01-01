fetch('../server/read.php')
    .then(response => response.json())
    .then(data => render(data))
    
function render(data){
    console.log(data)
    let tblStr = ''
    for(let obj of data)
        tblStr += `<tr><td>${obj.tid}</td><td>${obj.tnev}</td><td>${obj.cal}</td><td>${obj.nev}</td><td>${obj.kid}</td></tr>`
        document.querySelector('tbody').innerHTML = tblStr
} 