document.addEventListener("DOMContentLoaded", function() {
    const btn = document.getElementById("btn_close_model");

    btn.addEventListener("click", function(e){
        e.preventDefault();

        document.getElementById('editgirl-modal').classList.add('hidden')
    });

});
