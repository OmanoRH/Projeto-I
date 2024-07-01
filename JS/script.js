//function para a preview da imagem na pagina de cadastro
function previewImage(){

    //é uma interface do JavaScript que permite que aplicativos da web leiam dados de arquivos de forma assíncrona. 
    var oFReader = new FileReader();

    var fileInput = document.getElementById("fileInput");
    var imgPreview = document.getElementById("imgPreview");
    var icon = document.getElementById("icon");
    var removImg = document.getElementById("removImg");

        //O método readAsDataURL do FileReader é utilizado para ler o conteúdo de um arquivo como uma URL de dados codificados em base64.
        oFReader.readAsDataURL(document.getElementById("fileInput").files[0]); 

        oFReader.onload = function (oFREvent) {
            document.getElementById("imgPreview").src = oFREvent.target.result;
            imgPreview.src = oFREvent.target.result;
            imgPreview.style.display = 'block'; // mostra a imagem
            icon.style.display = 'none'; // esconde o icone
            removImg.style.display = 'block'; // mostra o botão de remover
        };
}

function removImg() {
    document.getElementById("fileInput").value = "";
    document.getElementById("imgPreview").src = "";
    document.getElementById("imgPreview").style.display = 'none';
    document.getElementById("icon").style.display = 'block';
    document.getElementById("removImg").style.display = 'none';
}