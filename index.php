<?php require_once("../model/banco.php");?>

<!DOCTYPE html>

<html lang="pt.br">
    
<?php include("head.php"); ?>

<body>
    
    <?php new Banco();?>
    
    
    <?php include("menu.php")?>
    <table class="table">
        <thead>
            <tr>
                <!--<th>Nome</th>-->
                
                <tr>
            <td>
               <font size="3" face="Verdana, Arial, Helvetica, sans-serif">Nome:</font>
            </td>
            <td>
               <font size="2">
                   
                  <input name="Nome" type="text" id="Nome" class="formbutton">
               </font>
            </td>
         </tr>
                
                
                
                
                <tr>
                <!--<th>Autor</th>-->
                
                 <tr>
            <td>
               <font size="3" face="Verdana, Arial, Helvetica, sans-serif">Autor:</font>
            </td>
            <td>
               <font size="2">
                  <input name="Autor" type="text" id="Autor" class="formbutton">
               </font>
            </td>
         </tr>
                
                
                
                <tr>
                <!--<th>Quantidade de Páginas</th>-->
                
                 <tr>
            <td>
               <font size="3" face="Verdana, Arial, Helvetica, sans-serif">Qtd de Páginas:</font>
            </td>
            <td>
               <font size="2">
                  <input name="Quantidade" type="text" id="Quantidade" class="formbutton">
               </font>
            </td>
         </tr>
                
                
                
                <tr>
                <!--<th>Preço</th>-->
                
                
                  <td>
               <font size="3" face="Verdana, Arial, Helvetica, sans-serif">Preço:</font>
            </td>
            <td>
               <font size="2">
                  <input name="Preco" type="text" id="Preco" class="formbutton">
               </font>
            </td>
         </tr>
                
                
                
                
                <tr>
                <!--<th>Data</th>-->
                
                
                     <td>
               <font size="3" face="Verdana, Arial, Helvetica, sans-serif">Data:</font>
            </td>
            <td>
               <font size="2">
                  <input name="Data" type="text" id="Data" class="formbutton">
               </font>
            </td>
         </tr>
                
                
                <tr>
                <!--<th>Flag</th>-->
                
                          <td>
               <font size="3" face="Verdana, Arial, Helvetica, sans-serif">Flag:</font>
            </td>
            <td>
               <font size="2">
                  <input name="Flag" type="text" id="Flag" class="formbutton">
               </font>
            </td>
         </tr>
                
                
                
                <tr>
                <!--<th>Opções</th>-->
                
                               <td>
               <font size="3" face="Verdana, Arial, Helvetica, sans-serif">Opções:</font>
            </td>
            <td>
               <font size="2">
                  <input name="opcoes" type="text" id="opcoes" class="formbutton">
               </font>
            </td>
         </tr>
                
                
            </tr>
        </thead>
    </table>
</body>

</html>
