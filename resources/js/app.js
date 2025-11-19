import Dropzone from "dropzone";

Dropzone.autoDiscover = false;

const dropzoneElement = document.querySelector("#dropzone");

if (dropzoneElement) {
    const dropzone = new Dropzone("#dropzone", {
        dictDefaultMessage: "Arrastra tus archivos aquí para subirlos",
        acceptedFiles: ".png,.jpg,.jpeg",
        uploadMultiple: false,
        addRemoveLinks: true,
        dictRemoveFile: "Eliminar archivo"
    });

    dropzone.on("success", function(file, response) {
        console.log("Archivo subido con éxito:", response);
    });
    
    dropzone.on("error", function(file, errorMessage) {
        console.error("Error al subir el archivo:", errorMessage);
    });

    dropzone.on("removedfile", function(file) {
        console.log("Archivo eliminado:", file);
    });

    dropzone.on("sending", function(file, xhr, formData) {
        console.log("Enviando archivo:", file);
    });

    
}