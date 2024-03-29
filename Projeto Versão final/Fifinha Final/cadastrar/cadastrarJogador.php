<!doctype html>
<html lang="br">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
	 crossorigin="anonymous">
        
        <?php
        
        include '..\home\conexao.php';
        
        ?>

	<title> FIFINHA</TITLE>
</head>
<h1 style="font-family: sans-serif; font-weight: bold; color:black; padding-left: 500px;">Cadastrar Jogador</h1>

<body background="..\imagens\didico.jpg" style="height: 100%; background-repeat: no-repeat; background-size: cover; background-position: center">
	<form action="..\insert\insertJogador.php" method="post">
		<div class="container">
			<div style="padding-left: 300px" class="col-6">
				<div class="form-group">
					<label style="color: white; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputName">Nome</label>
					<input type="text" class="form-control" name="nome" placeholder="Nome">
				</div>
				<div class="form-group">
					<label style="color: white; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputPassword4">CPF</label>
					<input type="text" class="form-control" name="cpf" placeholder="CPF">
				</div>
				<div class="form-group">
					<label style="color: white; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputAddress">Peso</label>
					<input type="text" class="form-control" name="peso" placeholder="90 kg">
				</div>
				<div class="form-group">
					<label style="color: white; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputAddress2">Altura</label>
					<input type="text" class="form-control" name="altura" placeholder="1.90">
				</div>
				<div class="form-group">
					<label style="color: white; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputAddress2">Posição</label>
					<input type="text" class="form-control" name="posicao" placeholder="Atacante">
				</div>
				<div class="form-group">
					<label style="color: white; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputAddress2">Salario</label>
					<input type="text" class="form-control" name="salario" placeholder="10.000">
				</div>
                                <div class="form-group">
					<label style="color: white; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputAddress2">Clube</label>
                                        <select class="form-control" name="idClube">
                                            <option> </option>
                                                <?php
                                                    $sql = 'SELECT * FROM clubes';
                                                    $result = $db->query($sql,MYSQLI_ASSOC);
                                                    while($dados = $result->fetch_assoc()){ ?>
                                                    <option value ="<?php echo $dados ['idClube']; ?>"><?php echo $dados ['nomeClube']; ?>
                                                    </option> <?php
                                                    }
                                                ?>
                                        </select>
                            </div>
                            <div class="form-group">
                                        <input type="hidden" class="form-control" name="idEndereco" value=" <?php echo $dadosEndereco[0]; ?> ">
				</div>
				<div class="form-group">
					<label style="color: black; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputPassword4">CEP</label>
					<input type="text" class="form-control" name="cep">
				</div>
				<div class="form-group">
					<label style="color: black; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputAddress">Numero</label>
					<input type="text" class="form-control" name="numero">
				</div>
				<div class="form-group">
					<label style="color: black; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputAddress2">rua</label>
					<input type="text" class="form-control" name="rua">
				</div>
				<button type="submit" class="btn btn-primary">Cadastrar</button>

			</div>
		</div>
	</form>

</body>

</html>