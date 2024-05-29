//function para a preview da imagem na pagina de cadastro
function previewImage(){

    //é uma interface do JavaScript que permite que aplicativos da web leiam dados de arquivos de forma assíncrona. 
    var oFReader = new FileReader();

        //O método readAsDataURL do FileReader é utilizado para ler o conteúdo de um arquivo como uma URL de dados codificados em base64.
        oFReader.readAsDataURL(document.getElementById("fileInput").files[0]); 

        oFReader.onload = function (oFREvent) {
            document.getElementById("imgPreview").src = oFREvent.target.result;
        };


    document.getElementById("icon").innerHTML="<style>#icon{display:none;}</style>";
    document.getElementById("imgPreview").innerHTML="<style>#imgPreview{display:initial;}</style>";
}