<?php
session_start();
include_once("header.php");
include_once("../models/conexao.php");
include_once("../models/bancopedidos.php");
include_once("../models/bancofuncionario.php");
include_once("../models/bancoCliente.php");

$codUsuFK = $_SESSION["codigoUsuario"];
$funcionario = listabuscafunUsuario ($conexao,$codUsuFK);
?>
<div>
<br><br>
<div class="row g-3">
  <div class="col-md-3">
    <label for="inputcodFun" class="form-label">Código</label>
    <input type="text"class="form-control" id="inputcodFun">
  </div>
  <div class="col-md-9">
    <label for="inputnomeFun" class="form-label">Funcionário</label>
    <input type="text" class="form-control" id="inputnomeFun">
  </div>
  <div class="col-md-2">
    <label for="inputcodCli" class="form-label">Código Cliente</label>
    <input type="text" class="form-control" id="inputcodCli" placeholder="Digite o cod. do cliente">
  </div>
  <form class>
  <div class="col-md-2">
  <a href="cadastropedidos.php?codCliente=1">
  <button type="button" class="btn btn-info me-md-2 btn-link">Buscar</button>
  </a>
  </div>
  </div>
  <?php
  $codCliente = isset($_GET["codCliente"])?$_GET["codCliente"]:"";
  if($codCliente){
  $clientes = listadeclienteCod($conexao,$codCliente);
  }
  ?>
  <div class="col-md-7">
    <label for="inputnomeCli" class="form-label">Cliente</label>
    <input type="text" class="form-control" id="inputnomeCli" placeholder="Insira o nome do cliente (ex: Ingridy)">
  </div>
  <form class>
  <div class="col-md-1">
  <br>
  </div>

  <div class="col-md-2">
    <label for="inputcodCli" class="form-label">Código do jogo</label>
    <input type="text" class="form-control" id="inputcodCli" placeholder="Digite o cod. do cliente">
  </div>
  <form class>
  <div class="col-md-1">
  <br>
  <button class="btn btn-outline-success" type="submit">Procurar</button>
  <br>
</form>
</div>

  <div class="col-md-4">
    <label for="inputnomeJog" class="form-label">Jogo</label>
    <input type="text" class="form-control" id="inputnomeJog">
  </div>
  <br>
  <div class="col-md-1">
    <label for="inputquantidadeJog" class="form-label">Quantidade</label>
    <select id="inputquantidadeJog" class="form-select">
      <option selected>Quantos jogos?</option>
      <option value=1>1</option>
      <option value=2>2</option>
      <option value=3>3</option>
      <option value=4>4</option>
      <option value=5>5</option>
    </select>
    <br>
  </div>
  <div class="col-md-4">
    <label for="inputZip" class="form-label">Valor Unitário</label>
    <input type="text" class="form-control" id="inputZip">
  </div>

  <div class="col-md-4">
    <label for="inputZip" class="form-label">Total</label>
    <input type="text" class="form-control" id="inputZip">
  </div>

<br>
  <div class="col-12">
    <button type="submit" class="btn btn-success">Confirmar</button>
  </div>
</form>
<?php
include_once("footer.php");