<div id="login" align="center">
<h2>Login<h2>
<form method="post" action="login.php">
<table cellspacing="10">
    <tr>
    <td>Usuário:</td>
    <td><input type="text" name="usuario" placeholder="Nome de usuario" class="bd1">
    </tr><br>
    <tr>
    <td>Senha:</td>
    <td><input type="password" name="senha" placeholder="Digite sua senha" class="bd2" ></td>
    </tr>
</table>
    <input type="submit" value="Acessar" class="bth">
    <a href="?pagina=cadastro" class="btc">cadastrar</a>
</div>
</form>
<br>

<?php
if (isset($_GET['erro'])){ ?>
<div class="alert" role="alert">
Usuario e/ou senha inválidos</div>
<?php
}?>