function Mudarestado(el) {
    var image = document.getElementById("menu-icon");
    var display = document.getElementById(el).style.display;
    var fundo = document.getElementById("tudo");
    var text_title = document.getElementById("texto-login");
    if(display == "flex"){
        document.getElementById(el).style.display = 'none';
        image.src = "imagens/white-hamburger-menu-icon-24.png";
        text_title.innerHTML = "Nossa Localização";
    }else{
        document.getElementById(el).style.display = 'flex';
        image.src = "imagens/x.png"; 
        fundo.style.display = 'flex';
        text_title.innerHTML = "Menu";
    }            
}
