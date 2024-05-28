// Função para restaurar a imagem original e remover todos os filtros aplicados
function restoreOriginalImage() {
    var body = document.body;

    // Remova todas as classes de filtro
    body.classList.remove("protanopia-filter", "deuteranopia-filter", "tritanopia-filter");

    // Restaure a imagem de fundo original
    body.style.backgroundImage = "url('imagens/background.png')";

    // Remova a preferência de filtro do armazenamento local, se houver
    localStorage.removeItem('selectedFilter');
}

// Função para alternar filtro
function toggleFilter(linkId, filterClass) {
    var body = document.body;
    var link = document.getElementById(linkId);

    // Verifica se o filtro já está aplicado
    var isFilterApplied = body.classList.contains(filterClass);

    // Alterna a aplicação do filtro
    if (isFilterApplied) {
        body.classList.remove(filterClass);
        // Se o filtro está sendo removido, restaura a imagem original
        restoreOriginalImage();
    } else {
        // Se o filtro está sendo aplicado, adiciona a classe de filtro
        body.classList.add(filterClass);
        // Aplica a nova imagem de fundo
        applyNewBackground(linkId);
        // Salva a preferência do usuário no localStorage
        localStorage.setItem("selectedFilter", filterClass);
    }
}

// Função para aplicar nova imagem de fundo
function applyNewBackground(linkId) {
    var body = document.body;
    var fot =  document.getElementById("rodape");
    var imageUrl = "";

    // Determine qual imagem de fundo aplicar com base no linkId
    switch (linkId) {
        case "protanopia-link":
            imageUrl = "imagens/Backgroundprota.png";
            break;
        case "tritanopia-link":
            imageUrl = "imagens/backgroundtrita.png";
            break;
        case "deuteranopia-link":
            imageUrl = "imagens/BackgroundDeute.png";
            break;
        default:
            imageUrl = "imagens/background.png";
    }

    // Aplica a nova imagem de fundo
    body.style.backgroundImage = `url('${imageUrl}')`;
    fot.style.bottom = 'auto'
}

// Função para aplicar filtro e salvar a escolha no armazenamento local
function applyFilterAndSave(linkId, filterClass, imageUrl) {
    var body = document.body;
    var isFilterApplied = body.classList.contains(filterClass);

    // Verifica se o filtro está sendo aplicado ou removido
    if (isFilterApplied) {
        toggleFilter(linkId, filterClass); // Remove o filtro
        // Remove a preferência de imagem do armazenamento local
        localStorage.removeItem('selectedImage');
    } else {
        toggleFilter(linkId, filterClass); // Aplica o filtro
        // Salva a URL da imagem no armazenamento local
        localStorage.setItem('selectedImage', imageUrl);
    }
}

// Adiciona eventos de clique aos links de correção de daltonismo
document.getElementById("protanopia-link").addEventListener("click", function(event) {
    event.preventDefault(); // Evita que o link seja seguido
    var imageUrl = "imagens/Backgroundprota.png"; // URL da imagem correspondente ao filtro
    applyFilterAndSave("protanopia-link", "protanopia-filter", imageUrl);
});

document.getElementById("tritanopia-link").addEventListener("click", function(event) {
    event.preventDefault(); // Evita que o link seja seguido
    var imageUrl = "imagens/backgroundtrita.png"; // URL da imagem correspondente ao filtro
    applyFilterAndSave("tritanopia-link", "tritanopia-filter", imageUrl);
});

document.getElementById("deuteranopia-link").addEventListener("click", function(event) {
    event.preventDefault(); // Evita que o link seja seguido
    var imageUrl = "imagens/BackgroundDeute.png"; // URL da imagem correspondente ao filtro
    applyFilterAndSave("deuteranopia-link", "deuteranopia-filter", imageUrl);
});
