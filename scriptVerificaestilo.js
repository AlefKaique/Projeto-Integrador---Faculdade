// Verifica se há um filtro salvo no armazenamento local
var selectedFilter = localStorage.getItem('selectedFilter');
var selectedImage = localStorage.getItem('selectedImage');

// Se houver um filtro salvo, aplica-o ao corpo da página
if (selectedFilter) {
    document.body.classList.add(selectedFilter);
}

// Se houver uma imagem de fundo salva, aplica-a ao corpo da página
if (selectedImage) {
    document.body.style.backgroundImage = `url('${selectedImage}')`;
}
