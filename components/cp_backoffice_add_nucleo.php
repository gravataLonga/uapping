<main class="container-fluid main-flex overflow-hidden">
    <section class="row">
        <article class="col-12">
            <section class="row sec-top-nucleos">
                <article class="col-12 section-search-home-page-backoffice">
                    <section class="row justify-content-center">
                        <article class="col-12 px-4">
                        </article>
                    </section>
                </article>
            </section>
            <section class="row section-criar-nucleo justify-content-center">
                <article class="col-12 mt-4 mb-3 position-relative">
                    <h2 id="titulo_add_nucleos" class="text-center h2-nucleo_save"> Adicionar um Núcleo </h2>
                </article>
                <article class="col-12 px-4">
                    <form action="scripts/sc_criar_nucleo.php" method="post" id="criar_nucleo">
                        <section class="row justify-content-center">
                            <article id="art_add_nucleo" class="col-12">
                                <div class="div-icons-sign-up text-center position-relative">
                                    <img id="instagram_icon" class="icon-instagram" src="assets/img/instagram_icon.svg"
                                         alt="profile_icon">
                                    <img id="instagram_icon" class="icon-facebook" src="assets/img/facebook_icon.svg"
                                         alt="profile_icon">
                                    <img id="instagram_icon" class="icon-website" src="assets/img/website_icon.svg"
                                         alt="profile_icon">
                                </div>
                                <select required="required" class="custom-select select_criar_nucleo mb-3 mb-md-3"
                                        id="area"
                                        name="area" form="criar_nucleo">
                                    <?php
                                    require_once "connections/connection.php";
                                    $link = new_db_connection();
                                    $stmt = mysqli_stmt_init($link);
                                    $query = "SELECT id_interesse, nome_interesse FROM interesses";
                                    if (mysqli_stmt_prepare($stmt, $query)) {
                                        if (mysqli_stmt_execute($stmt)) {
                                            mysqli_stmt_bind_result($stmt, $id_interesse, $nome_interesse);
                                            while (mysqli_stmt_fetch($stmt)) {
                                                echo '<option value="' . $id_interesse . '">' . $nome_interesse . '</option>';
                                            }
                                        } else {
                                            echo "Error:" . mysqli_stmt_error($stmt);
                                        }
                                        mysqli_stmt_close($stmt);
                                    } else {
                                        echo("Error description: " . mysqli_error($link));
                                    }
                                    ?>
                                </select>
                                <select id="add_area_extra" class="custom-select select_criar_nucleo mb-3 mb-md-3"
                                        id="area"
                                        name="area" form="criar_nucleo" style="display: none">
                                    <?php
                                    require_once "connections/connection.php";
                                    $link = new_db_connection();
                                    $stmt = mysqli_stmt_init($link);
                                    $query = "SELECT id_interesse, nome_interesse FROM interesses";
                                    if (mysqli_stmt_prepare($stmt, $query)) {
                                        if (mysqli_stmt_execute($stmt)) {
                                            mysqli_stmt_bind_result($stmt, $id_interesse, $nome_interesse);
                                            while (mysqli_stmt_fetch($stmt)) {
                                                echo '<option value="' . $id_interesse . '">' . $nome_interesse . '</option>';
                                            }
                                        } else {
                                            echo "Error:" . mysqli_stmt_error($stmt);
                                        }
                                        mysqli_stmt_close($stmt);
                                    } else {
                                        echo("Error description: " . mysqli_error($link));
                                    }
                                    ?>
                                </select>
                                <article id="add_area" class="col-12 mb-3 p-0 add-area-btn">
                                    <div class="art-nucleo-criacao"
                                         style='background-image: url("assets/img/cover_criar_nucleo.svg");'>
                                        <img class="sinal-mais-criacoes"
                                             src="assets/criacoes_nucleos/sinal_mais_criacoes.svg">
                                    </div>
                                </article>
                                <input id="nome" class="input_backoffice mb-3 mb-md-3 input_edit_user" type="text"
                                       name="nome_nucleo"
                                       size="24" placeholder="nome" required="required" style="padding-right:1.6rem;">
                                <div class="div-input-sigla capa_evento">
                                    <input id="sigla" class="input_sigla mb-3 mb-md-3 input_edit_user" type="text"
                                           name="sigla_nucleo"
                                           size="24" placeholder="sigla" required="required"
                                           style="padding-right:1.6rem;">
                                    <label for="file-upload" class="mb-3" id="previewImg"> <img
                                                src="assets/img/inserir_nucleo_logo.svg"> </label>
                                    <input id="file-upload" class="input_novo_admin" type="file" name="capa_evento"
                                           size="24" required="required" onchange="previewFile(this);">
                                </div>
                                <textarea required="required" name="descricao" placeholder="descrição"
                                          class="form-control text-area-criar-nucleo mb-3 mb-md-3"
                                          id="exampleFormControlTextarea1"
                                          rows="5" style="padding-left:1.6rem;"></textarea>
                                <input id="nome" class="input_backoffice mb-3 mb-md-3 input_edit_user" type="text"
                                       name="instagram"
                                       size="24" placeholder="link do instagram" required="required">
                                <input id="nome" class="input_backoffice mb-3 mb-md-3 input_edit_user" type="text"
                                       name="facebook"
                                       size="24" placeholder="link do facebook" required="required">
                                <input id="nome" class="input_backoffice mb-3 mb-md-3 input_edit_user" type="text"
                                       name="website"
                                       size="24" placeholder="link do website" required="required">
                            </article>

                            <article id="art_add_membro" class="col-12" style="display: none">
                                <section id="nucleo_membros" class="row">
                                    <article class="col-12">
                                        <section id="art_nucleo_membros" class="row">
                                            <article class="col-12">
                                                <select required="required"
                                                        class="custom-select select_criar_nucleo mb-3 mb-md-3"
                                                        id="area_0"
                                                        name="area_0" form="criar_nucleo">
                                                    <?php
                                                    require_once "connections/connection.php";
                                                    $link = new_db_connection();
                                                    $stmt = mysqli_stmt_init($link);
                                                    $query = "SELECT id_interesse, nome_interesse FROM interesses";
                                                    if (mysqli_stmt_prepare($stmt, $query)) {
                                                        if (mysqli_stmt_execute($stmt)) {
                                                            mysqli_stmt_bind_result($stmt, $id_interesse, $nome_interesse);
                                                            while (mysqli_stmt_fetch($stmt)) {
                                                                echo '<option value="' . $id_interesse . '">' . $nome_interesse . '</option>';
                                                            }
                                                        } else {
                                                            echo "Error:" . mysqli_stmt_error($stmt);
                                                        }
                                                        mysqli_stmt_close($stmt);
                                                    } else {
                                                        echo("Error description: " . mysqli_error($link));
                                                    }
                                                    ?>
                                                </select>
                                                <div class="div-input-sigla capa_evento">
                                                    <input id="nome_1" class="input_sigla mb-3 mb-md-3 input_edit_user"
                                                           type="text" name="nome_1"
                                                           size="24" placeholder="nome" required="required"
                                                           style="padding-right:1.6rem;">
                                                    <label for="file-upload" class="mb-3" id="previewImg"> <img
                                                                src="assets/img/inserir_nucleo_logo.svg"> </label>
                                                    <input id="file-upload" class="input_novo_admin" type="file"
                                                           name="capa_evento"
                                                           size="24" required="required" onchange="previewFile(this);">
                                                </div>
                                            </article>
                                        </section>
                                    </article>
                                </section>

                                <section class="row">
                                    <article class="col-12 text-center">
                                        <img id="add_membro" class="img-fluid" src="assets/img/nucleo_add_membro.svg">
                                    </article>
                                </section>
                            </article>
                        </section>
                        <section class="row justify-content-center mt-2 mt-md-3">
                            <article class="col-md-12 mt-3 mt-md-5 px-4">
                                <button id="avancar_add_nucleo" class="mb-2 mb-md-2" type="button"> Avançar</button>
                                <button id="cancelar_criar_nucleo" type="button"> cancelar</button>
                                <input id="submit_nucleo" form="criar_nucleo" type="submit" class="mb-2 mb-md-2"
                                       style="display: none;"
                                       value="salvar">
                                <button id="voltar_add_nucleo" type="button" style="display: none;"> Voltar</button>
                            </article>
                        </section>
                    </form>
                </article>
            </section>
        </article>
    </section>
    <footer class="row justify-content-center py-5">
        <article class="col-3 text-center">
            <a href="https://www.facebook.com/" target="_blank"> <span
                        class="fab fa-facebook-f text-white fa-3x"></span> </a>
        </article>
        <article class="col-3 text-center mw-6rem">
            <a href="https://twitter.com/" target="_blank"> <span class="fab fa-twitter text-white fa-3x"></span> </a>
        </article>
        <article class="col-3 text-center">
            <a href="https://www.instagram.com/" target="_blank"> <span
                        class="fab fa-instagram text-white fa-3x"></span> </a>
        </article>
    </footer>
</main>

<script>
    /*var n = 1;

    var seccao_membros = document.getElementById('nucleo_membros');
    document.getElementById('add_membro').onclick = function () {
        document.getElementById('area_'+(n-1)).id = 'area_' + n;
        //document.getElementById('area_'+(n)).id = 'area_' + (n+1);

        seccao_membros.innerHTML += document.getElementById('art_nucleo_membros').innerHTML;
        n++;
        document.getElementById('area_'+(n-1)).id='area_'+n;

        if (n>3) {
            document.getElementById('area_'+(n-1)).id='area_'+(n-2);
        }*/


       /* if (n === 1) {
            document.getElementById('area_').id = 'area_' + n;
        }
        seccao_membros.innerHTML += document.getElementById('art_nucleo_membros').innerHTML;
        document.getElementById('area_' + n).id = 'area_' + nn;
        n++;
        console.log(n);
        if (n !== 1) {
            nn++;
        }
        console.log(nn);*/
    }


    /*var p_id_n = 0;
    var id_n = 1;
    var att_n = 1;*/

    /*document.getElementById("add_membro").onclick = function (){
        document.getElementById("area_" + p_id_n).id = "area_" + id_n;
        document.getElementById("area_" + id_n).setAttribute("name", "area_" + att_n);
        document.getElementById("nucleo_membros").innerHTML += document.getElementById("art_nucleo_membros").innerHTML;
        p_id_n++;
        id_n++;
        att_n++;
    }*/

    document.getElementById("avancar_add_nucleo").onclick = function () {
        document.getElementById("art_add_nucleo").style.display = "none";
        document.getElementById("art_add_membro").style.display = "block";
        document.getElementById("avancar_add_nucleo").style.display = "none";
        document.getElementById("cancelar_criar_nucleo").style.display = "none";
        document.getElementById("voltar_add_nucleo").style.display = "block";
        document.getElementById("submit_nucleo").style.display = "block";
        document.getElementById("titulo_add_nucleos").innerHTML = "Adicionar um Membros";
    }

    document.getElementById("voltar_add_nucleo").onclick = function () {
        document.getElementById("art_add_nucleo").style.display = "block";
        document.getElementById("art_add_membro").style.display = "none";
        document.getElementById("avancar_add_nucleo").style.display = "block";
        document.getElementById("cancelar_criar_nucleo").style.display = "block";
        document.getElementById("voltar_add_nucleo").style.display = "none";
        document.getElementById("submit_nucleo").style.display = "none";
        document.getElementById("titulo_add_nucleos").innerHTML = "Adicionar um Núcleo";
    }

    document.getElementById("add_area").onclick = function () {
        document.getElementById("add_area").style.display = "none";
        document.getElementById("add_area_extra").style.display = "block";
    }

    document.getElementById("cancelar_criar_nucleo").onclick = function () {
        window.history.back();
    }
</script>