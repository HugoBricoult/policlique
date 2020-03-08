
const aiAnalyze = async() => {
    let data = document.getElementById('text').value;
    console.log(data)
    // L'erreur vient surement de la communication entre JS et NodeRed
    // Il faut surement parser le text en JSON avant de l'envoyer (ce que je n'ai pas fait)
    // data = {data}
    const rep = await fetch('http://0.0.0.0:1880/text',{
        method : "POST",
        body: data
    });
    return rep;
}

const handleClick = () => {
    let ans = aiAnalyze();
    document.getElementById('target').value = ans
}