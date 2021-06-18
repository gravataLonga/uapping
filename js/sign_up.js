var sign_up_page;
var check;

window.onload = function (){
    sign_up_page = 1;
    check = false;
    document.getElementById("submit").disabled = true;

    document.getElementById("submit").onmouseover = function (){
        if (document.getElementById("submit").disabled === false){
            document.getElementById("submit").style.background = "linear-gradient(90deg, rgba(0,172,121,1) 0%, rgba(0,162,46,1) 100%)";
        } else{
            document.getElementById("submit").style.background = "linear-gradient(90deg, rgba(0,116,82,1) 0%, rgba(0,112,32,1) 100%)";
        }
    }

    document.getElementById("submit").onmouseout = function (){
        if (document.getElementById("submit").disabled === false) {
            document.getElementById("submit").style.background = "linear-gradient(90deg, rgba(0,205,144,1) 0%, rgba(0,195,55,1) 100%)";
        } else{
            document.getElementById("submit").style.background = "linear-gradient(90deg, rgba(0,116,82,1) 0%, rgba(0,112,32,1) 100%)";
        }
    }

    document.getElementById("header_3").style.display = "none";
    document.getElementById("header_4").style.display = "none";

    document.getElementById("nome").style.display = "block";
    document.getElementById("username").style.display = "block";
    document.getElementById("email").style.display = "block";
    document.getElementById("pass").style.display = "block";
    document.getElementById("pass_confirm").style.display = "block";

    document.getElementById("avancar_sign_up").onclick = function (){
        sign_up("avancar");
    }

    document.getElementById("voltar_sign_up").onclick = function (){
        sign_up("recuar");
    }

    document.getElementById("d1").onclick = function (){
        if (check === false){
            document.getElementById("credenciais").style.display = "block";
            check = true;
        }else {
            document.getElementById("credenciais").style.display = "none";
            document.getElementById("credenciais").value = "";
            check = false;
        }
    }

    document.getElementById("d2").onclick = function (){
        if (document.getElementById("submit").disabled === true){
            document.getElementById("submit").disabled = false;
            document.getElementById("submit").style.background = "linear-gradient(90deg, rgba(0,205,144,1) 0%, rgba(0,195,55,1) 100%)";
        }else {
            document.getElementById("submit").disabled = true;
            document.getElementById("submit").style.background = "linear-gradient(90deg, rgba(0,116,82,1) 0%, rgba(0,112,32,1) 100%)";
        }
    }
}

function sign_up(direct){
    if (direct === "avancar"){
        switch (sign_up_page){
            case 1: document.getElementById("nome").style.display = "none";
                document.getElementById("username").style.display = "none";
                document.getElementById("email").style.display = "none";
                document.getElementById("pass").style.display = "none";
                document.getElementById("pass_confirm").style.display = "none";
                document.getElementById("header_1").style.display = "none";

                document.getElementById("departamentos").style.display = "inline-block";
                document.getElementById("cursos").style.display = "inline-block";
                document.getElementById("hr_meca").style.display = "block";
                document.getElementById("check").style.display = "block";

                document.getElementById("header_3").style.display = "block";
                document.getElementById("header_6").innerHTML = "Insere os teus";
                document.getElementById("header_3").innerHTML = "Dados da UA";
                sign_up_page = 2; break;
            case 2: document.getElementById("departamentos").style.display = "none";
                document.getElementById("cursos").style.display = "none";
                document.getElementById("hr_meca").style.display = "none";
                document.getElementById("check").style.display = "none";
                document.getElementById("credenciais").style.display = "none";

                document.getElementById("interesses").style.display = "flex";

                document.getElementById("header_6").innerHTML = "Seleciona os teus";
                document.getElementById("header_3").innerHTML = "Interesses";
                sign_up_page = 3; break;
            case 3: document.getElementById("termos_sign_up").style.display = "flex";
                document.getElementById("submit").style.display = "block";
                document.getElementById("avancar_sign_up").style.display = "none";
                document.getElementById("check_2").style.display = "block";
                document.getElementById("interesses").style.display = "none";

                document.getElementById("header_6").style.display = "none";
                document.getElementById("header_3").style.display = "none";
                document.getElementById("header_4").style.display = "block";
                document.getElementById("header_4").innerHTML = "Termos";
                sign_up_page = 4; break;
        }
    } else{
        switch (sign_up_page){
            case 1: window.location.href = 'index.php';
            case 2: document.getElementById("nome").style.display = "block";
                document.getElementById("username").style.display = "block";
                document.getElementById("email").style.display = "block";
                document.getElementById("pass").style.display = "block";
                document.getElementById("pass_confirm").style.display = "block";

                document.getElementById("departamentos").style.display = "none";
                document.getElementById("cursos").style.display = "none";
                document.getElementById("hr_meca").style.display = "none";
                document.getElementById("check").style.display = "none";

                document.getElementById("header_1").style.display = "block";
                document.getElementById("header_6").innerHTML = "Cria a tua conta";
                document.getElementById("header_3").style.display = "none";

                sign_up_page = 1; break;
            case 3: document.getElementById("departamentos").style.display = "inline-block";
                document.getElementById("cursos").style.display = "inline-block";
                document.getElementById("hr_meca").style.display = "block";
                document.getElementById("check").style.display = "block";
                document.getElementById("interesses").style.display = "none";

                document.getElementById("header_6").innerHTML = "Insere os teus";
                document.getElementById("header_3").innerHTML = "Dados da UA";
                if (check === true){
                    document.getElementById("credenciais").style.display = "block";
                }
                sign_up_page = 2; break;
            case 4: document.getElementById("termos_sign_up").style.display = "none";
                document.getElementById("submit").style.display = "none";
                document.getElementById("avancar_sign_up").style.display = "block";
                document.getElementById("check_2").style.display = "none";

                document.getElementById("interesses").style.display = "flex";

                document.getElementById("header_6").style.display = "block";
                document.getElementById("header_3").style.display = "block";
                document.getElementById("header_4").style.display = "none";
                document.getElementById("header_6").innerHTML = "Seleciona os teus";
                document.getElementById("header_3").innerHTML = "Interesses";
                sign_up_page = 3; break;
        }
    }
}