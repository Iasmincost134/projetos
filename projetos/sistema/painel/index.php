<?php 
@session_start();
require_once('../conexao.php');
if(@$_SESSION['nome'] == ""){	
	echo '<script>window.location="../index.php"</script>';
	exit();
}

require_once("cabecalho.php");
?>

<form id="form-config">
<div class="row">
	<div class="col-md-4">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Nome Site</label>
			<input name="nome" type="text" class="form-control" placeholder="Nome do Site" value="<?php echo $nome_sistema ?>" required>
		</div>
	</div>

	<div class="col-md-4">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Email Site</label>
			<input name="email" type="email" class="form-control" placeholder="Email do Site" value="<?php echo $email_sistema ?>" required>
		</div>
	</div>

	<div class="col-md-2 col-6">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Senha Site</label>
			<input name="senha" type="password" class="form-control" placeholder="Senha do Site" value="<?php echo $senha_sistema ?>" required>
		</div>
	</div>

	<div class="col-md-2 col-6">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Telefone Site</label>
			<input name="telefone" id="telefone" type="text" class="form-control" placeholder="Telefone do Site" value="<?php echo $telefone_sistema ?>">
		</div>
	</div>
<div class="row">
	<div class="col-md-4">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Endereço</label>
			<input name="endereco" type="text" class="form-control" placeholder="Av. Paulista 12.00o" value="<?php echo $endereco_sistema ?>" required>
		</div>
	</div>

	<div class="col-md-4">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Instagram</label>
			<input name="instagram" type="text" class="form-control" placeholder="Instagram se Houver" value="<?php echo $instagram_sistema ?>" required>
		</div>
	</div>

	<div class="col-md-2 col-6">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Twitter</label>
			<input name="twitter" type="text" class="form-control" placeholder="Twitter se Houver" value="<?php echo $twitter_sistema ?>" required>
		</div>
	</div>
<div class="row">
	<div class="col-md-3">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Facebook</label>
			<input name="facebook" type="text" class="form-control" placeholder="" value="<?php echo $facebook_sistema ?>" required>
		</div>
	</div>

	<div class="col-md-3">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Linkedin</label>
			<input name="linkedin" type="text" class="form-control" placeholder="" value="<?php echo $linkedin_sistema ?>" required>
		</div>
	</div>

	<div class="col-md-3">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Youtube</label>
			<input name="youtube" type="text" class="form-control" placeholder="" value="<?php echo $youtube_sistema ?>" required>
		</div>
	</div>

    <div class="col-md-3">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Cor Template Hexadecimal</label>
			<input name="cor" id="cor" type="text" class="form-control" placeholder="" value="<?php echo $cor_sistema ?>">
		</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Texto Rodapé Site</label>
			<input name="rodape" type="text" class="form-control" placeholder="Texto inserido no rodapé" value="<?php echo $texto_rodape ?>" required>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-3">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Título Contato</label>
			<input name="contato" type="text" class="form-control" placeholder="" value="<?php echo $titulo_sistema ?>" required>
		</div>
	</div>

	<div class="col-md-3">
		<div class="mb-3">
			<label for="exampleFormControlInput1" class="form-label">Subtítulo Contato</label>
			<input name="subtitulo" type="text" class="form-control" placeholder="" value="<?php echo $subtitulo_sistema ?>" required>
		</div>
	</div>
</div>