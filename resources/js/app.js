import Dropzone from "dropzone";

Dropzone.autoDiscover = false;

const dropzoneElement = document.querySelector("#dropzone");

if (dropzoneElement) {
    const dropzone = new Dropzone("#dropzone", {
        dictDefaultMessage: "Arrastra tus archivos aquí para subirlos",
        acceptedFiles: ".png,.jpg,.jpeg",
        uploadMultiple: false,
        addRemoveLinks: true,
        dictRemoveFile: "Eliminar archivo",

        init: function() {
            if(document.querySelector("[name=image]").value.trim()) {
                const imagePublished = {};
                imagePublished.size = 1234;
                imagePublished.name = document.querySelector("[name=image]").value;
                this.options.addedfile.call(this, imagePublished);
                this.options.thumbnail.call(this, imagePublished, `/images/posts/${imagePublished.name}`);

                imagePublished.previewElement.classList.add("dz-success", "dz-complete");
            }
        }
    });

    dropzone.on("success", function(file, response) {
        console.log("Archivo subido con éxito:", response.fileName);
        document.querySelector("[name=image]").value = response.fileName;
    });
    
    dropzone.on("error", function(file, errorMessage) {
        console.error("Error al subir el archivo:", errorMessage);
        document.querySelector("[name=image]").value = "";
    });

    dropzone.on("removedfile", function(file) {
        console.log("Archivo eliminado:", file);
    });
    
}