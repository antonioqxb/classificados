<?php define('D','.'); ?>
<?php require_once D . '/includes/Config.php'; ?>
<?php require_once D . '/includes/Application.php'; ?>
<?php 


?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Cadastro de Usuários - Upside Solutions&trade;</title>
        <?php Css::Load(); ?>
        <?php Css::Load("registro.css"); ?>
    </head>
    <body>
        
        <nav id="BarraSuperior" class="nav nav-justified">
            <div class="col-lg-10">
                <span>Classificados do Sertão Central&trade;</span>
                <a class="Link" href="index.php">Ofertas</a>
            </div>
            <div class="col-lg-2">
                <!-- fb:login-button id="BtnFacebook" scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button -->
                <!-- a href="#" class="oculto" id="NomeSocial"></a-->
            </div>
        </nav>
        
        <div id="Pagina" class=" container-fluid">
            <div id="PainelLogin" class="row">
                
            </div>
            <div id="PainelDadosPessoais" class="row">
                <div class="col-lg-12">
                    <form>
                        <h2 class="form-signin-heading">Novo Usuário</h2>
                        
                        <input type="hidden" name="token" value="<?=$request->SessionValue("token");?>" />
                        <fieldset>
                        <legend>Dados Pessoais</legend>
                        <div class="row ">
                            <div class="col-lg-6">
                                <label for="cmpNome">Nome</label>
                                <input type="text" class="form-control" id="cmpNome" placeholder="Digite seu nome">
                            </div>
                            <div class="col-lg-2">
                                <label for="cmpTipo">Tipo de Pessoa</label>
                                <select name="tipoPessoa" id="cmpTipo" class="form-control">
                                    <option value="u">Escolha</option>
                                    <option value="f">Pessoa Física</option>
                                    <option value="j">Pessoa Juridica</option>                                
                                </select> 
                            </div>
                            <div class="col-lg-4">
                                <label for="cmpDocumento" id="lblDocumento">Documento</label>
                                <input type="text" id="cmpDocumento" class="form-control" placeholder="Nº Documento" disabled />
                            </div>
                        </div>
                        <div class="row descolar oculto" id="divDadosEmpresa">
                            <div class="col-lg-6">
                                <label for="cmpRazaoSocial">Razão Social</label>
                                <input type="text" id="cmpRazaoSocial" class="form-control" placeholder="Razão Social da sua empresa" />
                            </div>
                            <div class="col-lg-6">
                                <label for="cmpNomeFantasia">Nome Fantasia</label>
                                <input type="text" id="cmpNomeFantasia" class="form-control" placeholder="Nome Fantasia da sua empresa" />
                            </div>
                        </div>
                        <div class="row descolar">
                            <div class="col-lg-2">
                                <label for="cmpData">Data de Nascimento</label>
                                <input type="text" id="cmpData" class="form-control" placeholder="Seu aniversário">
                            </div>
                            <div class="col-lg-5">
                                <label for="cmpTelefone">Telefone</label>
                                <input type="text" id="cmpTelefone" class="form-control" placeholder="Seu telefone">
                            </div>
                            <div class="col-lg-5">
                                <label for="cmpCelular">Celular</label>
                                <input type="text" id="cmpCelular" class="form-control" placeholder="Seu celular">
                            </div>
                        </div>
                        </fieldset>
                        
                        <fieldset class="descolar">
                        <legend>Endereço</legend>
                        <div class="row descolar">
                            <div class="col-lg-8">
                                <label for="cmpLogradouro">Logradouro</label>
                                <input type="text" id="cmpLogradouro" class="form-control" placeholder="Digite seu endereço completo, incluído nº, complementos etc" />
                            </div>
                            <div class="col-lg-4">
                                <label for="cmpBairro">Bairro</label>
                                <input type="text" id="cmpBairro" class="form-control" placeholder="Bairro ou distrito" />
                            </div>
                        </div>
                        <div class="row descolar">
                            <div class="col-lg-8">
                                <label for="cmpComplemento">Complemento</label>
                                <textarea class="form-control" id="cmpComplemento">
                                </textarea>
                            </div>
                            <div class="col-lg-4">
                                <label for="cmpCidade">Cidade</label>
                                <select id="cmpCidade" class="form-control">
                                    <option value="0">Escolha</option>
                                </select>
                            </div>
                        </div>
                        </fieldset>
                        
                        <div class="row ">
                            <div class="col-lg-12">
                                <button id="BtnEnviar" class="btn btn-lg btn-primary descolar" type="button">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
                
        <?php JS::Load(); ?>
        <?php JS::Load('mask.js'); ?>
        <script type="text/javascript">
            $(function(){
                $('#cmpData').mask('00/00/0000');
                $('#cmpTelefone').mask('(00) 0000-0000');
                $('#cmpTipo').change(function(){
                    var tipo = $(this).val();
                    $("#cmpDocumento").val("");
                    if(tipo=='f'){
                        $('#lblDocumento').text('CPF');
                        $('#divDadosEmpresa').hide();
                        $('#cmpDocumento').attr('disabled',false).mask('000.000.000-00');
                    }
                    if(tipo=='j'){
                        $('#lblDocumento').text('CNPJ');
                        $('#cmpDocumento').attr('disabled',false).mask('00.000.000/0000-00');
                        $('#divDadosEmpresa').show();
                    }
                });
            });        
        </script>
        <?php JS::Load("registro.js"); ?>
    </body>
</html>
