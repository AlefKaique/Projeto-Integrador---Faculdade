function Mudarestado(el) {
    var image = document.getElementById("menu-icon");
    var display = document.getElementById(el).style.display;
    var fundo = document.getElementById("caixa");
    var text_title = document.getElementById("texto-login")
    if(display == "block"){
        document.getElementById(el).style.display = 'none';
        image.src = "imagens/white-hamburger-menu-icon-24.png";
        text_title.innerHTML = "Login";
    }else{
        document.getElementById(el).style.display = 'block';
        image.src = "imagens/x.png"; 
        fundo.style.display = 'block';
        text_title.innerHTML = "Menu";
    }            

    

}
