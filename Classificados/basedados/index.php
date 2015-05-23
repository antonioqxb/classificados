<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html manifest="./cache.manifest">
    <head>
        <meta charset="UTF-8">
        <title>Usando Base de Dados</title>
    </head>
    <body>
        
        <form>
            <table>
                <tr>
                    <td>Nome</td>
                    <td><input type="text" id="nome"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" id="email"></td>
                </tr>
                <tr>
                    <td>Telefone</td>
                    <td><input type="text" id="telefone"></td>
                </tr>
                <tr>
                    <td>Aniversário</td>
                    <td><input type="text" id="niver"></td>
                </tr>
                <tr>
                    <td>
                        <button type="button" id="registrar">Registrar</button>
                    </td>
                </tr>
            </table>
        </form>
        
        <hr />
        
        <table>
            <thead id="CabecalhoTabela">
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Aniversario</th>
                </tr>
            </thead>
            <tbody id="CorpoTabela">
                    
            </tbody>
            <tfoot id="RodapeTabela">
                    
            </tfoot>
        </table>
        
        
        <script src="jquery.js" type="text/javascript"></script>
        <script type="text/javascript">
            
            var db = null;                  
            
            $(function(){
                conectar();
                
                $('#registrar').click(function(){
                    var nome = $('#nome').val(),
                        email = $('#email').val(),
                        telefone = $('#telefone').val(),
                        niver = $('#niver').val();
                        
                    salvar(nome, email, telefone, niver);
                });
                
            });
            
            function conectar() {
                db = openDatabase("Agenda","1.0","Banco Temporário para clientes",20000);
                if(!db) {
                    alert("Base de Dados não criada!");
                }
            }
            
            
            function salvar( a, b, c, d) {
            dlaskldkaskl    
            }
            
            
        </script>
    </body>
</html>
