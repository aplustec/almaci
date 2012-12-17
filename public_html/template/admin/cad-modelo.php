<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Almaci Uniformes</title>
<link href="css/template.css" rel="stylesheet" type="text/css" />
<link href="menu/css/superfish.css" rel="stylesheet" type="text/css" media="screen" />
<link href="menu/css/style.css" rel="stylesheet" type="text/css" />
<link id="textContentCss" href="menu/css/menu-text-01-Default.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="fancy/css/jquery.fancybox.css" media="screen" />
<link href="css/tabela.css" rel="stylesheet" type="text/css" />
<link href="css/form.css" rel="stylesheet" type="text/css" />
<link href="css/nav.css" rel="stylesheet" type="text/css" />

   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript" src="fancy/js/jquery.fancybox.js"></script>
<script type="text/javascript" src="fancy/js/control.js"></script>

<script src="menu/js/superfish.js" type="text/javascript"></script>
<script src="menu/js/scriptsInit.js" type="text/javascript"></script>
        
        

</head>

<body>
<div id="header">
<div id="topo">
  <h1>Almaci Uniformes</h1>
</div>

<div id="menu">

<ul class="sf-menu">
         <li><a href="principal.php">PRINCIPAL</a></li>

        <li>
            <a href="#">PRODUTOS</a>
            <ul>
               <li><a href="principal.php">Ver Modelos</a></li>
               <li><a href="cad-modelo.php">Novo Modelo</a></li>
            </ul>
         </li>
       
         <li>
            <a href="#">CONFIGURAÇÃO</a>
            <ul>
               <li><a href="troca-senha.php">Alterar senha</a></li>
            </ul>
         </li>
         <li><a href="#">SAIR</a></li>
  </ul>  

  </div>
</div>
<div id="container2">
  <div id="title">Cadastrar novo modelo</div>
  <div id="formulario">
      <form id="form1" name="form1" method="post" action="">
    <table width="1019" border="0">
      <tr>
        <td height="30" valign="bottom" class="label">Modelo</td>
      </tr>
      <tr>
        <td height="30" valign="bottom"><label for="titulo"></label>
          <input name="titulo" type="text" class="input" id="titulo" /></td>
      </tr>
      <tr>
        <td height="30" valign="bottom"><span class="label">Inserir Imagem</span></td>
      </tr>
      <tr>
        <td><input name="image1" type="file" id="image1" />
        <label><em><span class="info"><strong>(400 x 596 px Arquivo - JPG)</strong></span></em></label></td>
      </tr>
            <tr>
        <td height="30" valign="bottom"><span class="label">Legenda da imagem</span></td>
      </tr>
      <tr>
        <td><input name="legenda" type="text" class="input" id="legenda" /></td>
      </tr>
      <tr>
        <td height="45"><input name="cadastrar" type="submit" class="bt" id="cadastrar" value="Cadastrar" /></td>
      </tr>
    </table>
    <br />
    </form>


  </div>
</div>
<div id="footer">Desenvolvido por Aplus Tecnologia - (31) 3245-5764</div>
</body>
</html>