const data = document.getElementById('text').value;
const aiAnalyze = async() => {
    const rep = await fetch('http://localhost:1880/text',{
        method : "POST",
        body: data
    });
    return rep;
}

const handleClick = () => {
    let ans = aiAnalyze();
    document.getElementById('target').value = ans
}