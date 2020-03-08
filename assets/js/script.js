const aiAnalyze = async(stat) => {
    let data = document.getElementById('text').value;
    // L'erreur vient surement de la communication entre JS et NodeRed
    // Il faut surement parser le text en JSON avant de l'envoyer (ce que je n'ai pas fait)
    // data = {data}
    data = data;
    //const rep = await fetch('http://localhost:1880/text',{
    //    method : "POST",
    //    body: data
    //});
    fetch('http://localhost:1880/text',{
        method : "POST",
        body: data
    }).then(rs => rs.json()).then(val=>{
        let concepts = val.concepts;
        let categories = val.categories;
        let concept = "";
        for(let i = 0; i < concepts.length;i++){
            concept += " - "+concepts[i].text + "<br> ";
        }
        let categorie = "";
        for(let i = 0; i < categories.length;i++){
            categorie += " - "+categories[i].label + "<br>";
        }
        let response = "concepts :<br> "+concept+" <br> categories : <br>"+categorie;
        document.getElementById('target').innerHTML = response;
        stat.innerHTML = "done";
    });
    //return rep;
    //console.log(rep);
    return "";
}

const handleClick = () => {
    let stat = document.getElementById('stat');
    stat.style.display = "block";
    stat.innerHTML = "loop";
    let ans = aiAnalyze(stat);
}