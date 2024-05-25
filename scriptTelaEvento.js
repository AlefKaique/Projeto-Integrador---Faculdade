function Mudarestado(el) {
    var image = document.getElementById("menu-icon");
    var display = document.getElementById(el).style.display;
    var fundo = document.getElementById("central");
    var text_title = document.getElementById("texto-login");
    var fundo2 = document.getElementById("central-2");
    if(display == "flex"){
        document.getElementById(el).style.display = 'none';
        image.src = "imagens/white-hamburger-menu-icon-24.png";
        text_title.innerHTML = "Agenda de Eventos";
    }else{
        document.getElementById(el).style.display = 'flex';
        image.src = "imagens/x.png"; 
        fundo.style.display = 'flex';
        text_title.innerHTML = "Menu";
        fundo2.style.display = 'none';
    }            
}

function MudarEsportes(al){
    var display = document.getElementById(al).style.display;
    var fundo = document.getElementById("central");
    if(display == "flex"){
        document.getElementById(al).style.display = 'none';
    }else{
        document.getElementById(al).style.display = 'flex';
        fundo.style.display = 'none';
    }
}

function MudarEsportes2(al){
    var display = document.getElementById(al).style.display;
    var fundo = document.getElementById("central-2");
    if(display == "flex"){
        document.getElementById(al).style.display = 'none';
    }else{
        document.getElementById(al).style.display = 'flex';
        fundo.style.display = 'none';
    }
}
