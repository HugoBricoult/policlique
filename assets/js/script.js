const data = document.getElementById('text').value;
const aiAnalyze = () => {
    fetch('http://localhost:1880/text',{
        method : "POST",
        body: data
    })
}