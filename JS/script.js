function previewImage(){

    var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("fileInput").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("imgPreview").src = oFREvent.target.result;
        };


    document.getElementById("icon").innerHTML="<style>#icon{display:none;}</style>";
    document.getElementById("imgPreview").innerHTML="<style>#imgPreview{display:initial;}</style>";
}