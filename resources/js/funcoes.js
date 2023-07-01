function goBack(){
    window.history.back();
}

function seeMore(){
    let texto_menor = document.querySelector("#texto_menor");
    let texto_maior = document.querySelector("#texto_maior");
    let ver_mais = document.querySelector("#ver_mais");

    texto_menor.classList.add("d-none");
    texto_menor.classList.remove("d-block");
    texto_maior.classList.remove("d-none");
    texto_maior.classList.add("d-block");
    ver_mais.classList.add("d-none");

}

function abrir(){
    setTimeout(abrirMenu, 500);
}

function abrirMenu(){
    $("#book_menu").dropdown("toggle");
}

function scroll(id){
    document.querySelector(id).scrollIntoView();
}



