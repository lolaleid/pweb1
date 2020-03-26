
<?php
    require_once('controler.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Guia de Requerimento</title>
	<meta charset="utf-8">
	<meta name="description" content="Guia de Requerimento ">

	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<img src="https://www.infoenem.com.br/wp-content/uploads/2016/04/ifce.jpg" alt="Logo do IFCE - Campus Cedro">
		<h3>Guia de Requerimento</h3>
		<div>Protocolo N.º </div>
		<input type="number" value="<?= !empty($protocolo) ? $protocolo : ''; ?>" disabled>
	</header>
	<main>
        <?php if(!empty($message)):?>
            <div><?= $message['msg']; ?></div>
        <?php endif;?>
        
		<form action="" method="post">
			<section>
                <!--DADOS DO REQUERENTE-->
				<fieldset>
					<label for="requerente">REQUERENTE</label>
					<input type="text" name="name" value="<?= !empty($_POST['name']) ? $_POST['name'] : ''; ?>">

					<label for="matricula">Nº DE MATRICULA</label>
					<input type="number" name="matricula" value="<?= !empty($_POST['matricula']) ? $_POST['matricula'] : ''; ?>">

					<label for="dataNasc">DATA DE NASCIMENTO</label>
					<input type="date" name="dataNasc" value="<?= !empty($_POST['dataNasc']) ? $_POST['dataNasc'] : ''; ?>">

					<label for="naturalidade">NATURALIDADE</label>
					<input type="text" name="naturalidade" value="<?= !empty($_POST['naturalidade']) ? $_POST['naturalidade'] : ''; ?>">

					<label for="filiacao">FILIAÇÃO</label>
					<input type="text" name="filiacao" value="<?= !empty($_POST['filiacao']) ? $_POST['filiacao'] : ''; ?>">

					<label for="curso">CURSO</label>
					<input type="text" name="curso" value="<?= !empty($_POST['curso']) ? $_POST['curso'] : ''; ?>">

					<label for="periodo">PERÍODO</label>
					<input type="number" name="periodo" value="<?= !empty($_POST['periodo']) ? $_POST['periodo'] : ''; ?>">

					<label for="turno">TURNO</label>
					<input type="number" name="turno" value="<?= !empty($_POST['turno']) ? $_POST['turno'] : ''; ?>">

					<label for="telefone">TELEFONE</label>
					<input type="tel" name="telefone1" value="<?= !empty($_POST['telefone1']) ? $_POST['telefone1'] : ''; ?>">
					<input type="tel" name="telefone2" value="<?= !empty($_POST['telefone2']) ? $_POST['telefone2'] : ''; ?>">

					<label for="email">E-MAIL</label>
					<input type="email" name="email" value="<?= !empty($_POST['email']) ? $_POST['email'] : ''; ?>">
				</fieldset>
			</section>
			<section>
                <!--MOTIVO DO REQUERIMENTO-->
				<fieldset>
					<legend>Assinale:</legend>
					<table class="direita">
						<!--OPÇÃO 1-->
						<tr>
							<th><input type="radio" name="opcao" value="1"></th>
							<th><label for="opt1">2ª VIA (ESPECIFICAR)</label></th>
							<th>CAA</th>
						</tr>
						<!--OPÇÃO 2-->
						<tr>
							<th><input type="radio" name="opcao" value="2"></th>
							<th><label for="opt2">APROVEITAMENTO DE DISCIPLINA (ANEXAR HISTÓRICO ESCOLAR E PROGRAMA DA DISCIPLINA)</label></th>
							<th>COORDENAÇÃO DO CURSO</th>
						</tr>
						<!--OPÇÃO 3-->
						<tr>
                            <th><input type="radio" name="opcao" value="3"></th>
                            <th><label for="opt3">MATRÍCULA FORA DO PRAZO (JUSTIFICAR)</label></th>
                            <th>CAA</th>
                        </tr>
						<!--OPÇÃO 4-->
						<tr>
                            <th><input type="radio" name="opcao" value="4"></th>
                            <th><label for="opt4">CANCELAMENTO DA MATRÍCULA</label></th>
                            <th>CAA</th>
                        </tr>
						<!--OPÇÃO 5-->
						<tr>
                            <th><input type="radio" name="opcao" value="5"></th>
                            <th><label for="opt5">COLAÇÃO DE GRAU / COLAÇÃO ESPECIAL (JUSTIFICAR)</label></th>
                            <th>CAA</th>
                        </tr>
						<!--OPÇÃO 6-->
						<tr>
                            <th><input type="radio" name="opcao" value="6"></th>
                            <th><label for="opt6">DECLARAÇÃO (ESPECIFICAR)</label></th>
                            <th>CAA</th>
                        </tr>
						<!--OPÇÃO 7-->
						<tr>
                            <th><input type="radio" name="opcao" value="7"></th>
                            <th><label for="opt7">DIPLOMA (ESPECIFICAR)</label></th>
                            <th>CAA</th>
                        </tr>
						<!--OPÇÃO 8-->
						<tr>
                            <th><input type="radio" name="opcao" value="8"></th>
                            <th><label for="opt8">HISTÓRICO ESCOLAR</label></th>
                            <th>CAA</th>
                        </tr>
						<!--OPÇÃO 9-->
						<tr>
                            <th><input type="radio" name="opcao" value="9"></th>
                            <th><label for="opt9">REABERTURA DE MATRÍCULA</label></th>
                            <th>CAA</th>
                        </tr>
						<!--OPÇÃO 10-->
						<tr>
                            <th><input type="radio" name="opcao" value="10"></th>
                            <th><label for="opt10">SEGUNDA CHAMADA (ANEXAR JUSTIFICATIVA E ESPECIFICAR)</label></th>
                            <th>COORDENAÇÃO DO CURSO</th>
                        </tr>
						<!--OPÇÃO 11-->
						<tr>
                            <th><input type="radio" name="opcao" value="11"></th>
                            <th><label for="opt11">REINGRESSO</label></th>
                            <th>CAA</th>
                        </tr>
                    </table>
					<table class="esquerda">
                        <!--OPÇÃO 12-->
                        <tr>
                            <th><input type="radio" name="opcao" value="12"></th>
                            <th><label for="opt12">TRANCAMENTO DE DISCIPLINA (ESPECIFICAR)</label></th>
                            <th>COORDENAÇÃO DO CURSO</th>
                        </tr>
                        <!--OPÇÃO 13-->
                        <tr>
                            <th><input type="radio" name="opcao" value="13"></th>
                            <th><label for="opt13">TRANCAMENTO DE MATRÍCULA (ANEXAR DOCUMENTAÇÃO COMPROBATÓRIA)</label></th>
                            <th>COORDENAÇÃO PEDAGÓGICA</th>
                        </tr>
                        <!--OPÇÃO 14-->
                        <tr>
                            <th><input type="radio" name="opcao" value="14"></th>
                            <th><label for="opt14">TRANSFERÊNCIA PARA OUTRA INSTITUIÇÃO</label></th>
                            <th>CAA</th>
                        </tr>
                        <!--OPÇÃO 15-->
                        <tr>
                            <th><input type="radio" name="opcao" value="15"></th>
                            <th><label for="opt2">VALIDAÇÃO DE CONHECIMENTO (ESPECIFICAR)</label></th>
                            <th>COORDENAÇÃO DO CURSO</th>
                        </tr>
                        <!--OPÇÃO 16-->
                        <tr>
                            <th><input type="radio" name="opcao" value="16"></th>
                            <th><label for="opt16">REAJUSTE</label></th>
                            <th>CAA</th>
                        </tr>
                        <!--OPÇÃO 17-->
                        <tr>
                            <th><input type="radio" name="opcao" value="17"></th>
                            <th><label for="opt17">RECORREÇÃO DE PROVA</label></th>
                            <th>COORDENAÇÃO DO CURSO</th>
                        </tr>
                        <!--OPÇÃO 18-->
                        <tr>
                            <th><input type="radio" name="opcao" value="18"></th>
                            <th><label for="opt18">AUXÍLIO - TRANSPORTE</label></th>
                            <th>CAA</th>
                        </tr>
                        <!--OPÇÃO 19-->
                        <tr>
                            <th><input type="radio" name="opcao" value="19"></th>
                            <th><label for="opt19">AUXÍLIO - MORADIA</label></th>
                            <th>CAA</th>
                        </tr>
                        <!--OPÇÃO 20-->
                        <tr>
                            <th><input type="radio" name="opcao" value="20"></th>
                            <th><label for="opt20">AUXÍLIO ÓCULOS</label></th>
                            <th>CAA</th>
                        </tr>
                        <!--OPÇÃO 21-->
                        <tr>
                            <th><input type="radio" name="opcao" value="21"></th>
                            <th><label for="opt21">AUXÍLIO - PAIS E MÃES</label></th>
                            <th>COORDENAÇÃO DO CURSO</th>
                        </tr>
                        <!--OPÇÃO 22-->
                        <tr>
                            <th><input type="radio" name="opcao" value="22"></th>
                            <th><label for="opt22">OUTROS (ESPECIFICAR)</label></th>
                            <th>CAA</th>
                        </tr>
                    </table>
				</fieldset>

                <!--CAMPO DE JUSTIFICATIVA E ESPECIFICAÇÃO-->
                <label for="espeficicacao">ESPECIFICAR</label>
                <textarea name="especificacao" style="resize: none"></textarea>

                <label for="justificativa">JUSTIFICAR</label>
                <textarea name="justificativa" style="resize: none"></textarea>
			</section>
            <section>
                <!--CHECKBOX DE CONSENTIMENTO-->
                <label for="consent"><b>DECLARO CONHECER O REGIMENTO DESTA IFE, BEM COMO O PRAZO NECESSÁRIO À TRAMITAÇÃO DO PROCESSO</b>></label>

                <!--CAMPOS PARA ASSINATURA-->
                <div class="assinatura"></div>
                <label for="assinatura1">REQUERENTE (ASS. LEGÍVEL)</label>
                <div class="assinatura"></div>
                <label for="assinatura2">FUNCIONÁRIO (ASS. LEGÍVEL)</label>

                <!--CAMPO DE LOCAL E DATA-->
                <div><?="<label for='date'>CEDRO - CE, ".date('d')." DE ".$meses[$nmes]." DE ".date('Y')."</label>";?>
                </div>
            </section>
            <section>
                <fieldset>
                    <label for="visto1">VISTO (COORDENAÇÃO DE ASSUNTOS ESTUDANTIS)</label>
                    <input type="radio" name="chave">
                    <div>O requerente NÃO deve chave de armário</div>
                    <input type="radio" name="chave">
                    <div>O requerente deve chave do armário:</div>
                    <input type="number" disabled>
                    <div class="assinatura"></div>
                    <label for="assinatura1">Responsável (ass. legível)</label>
                </fieldset>
                <fieldset>
                    <label for="visto1">VISTO (BIBLIOTECA)</label>
                    <input type="radio" name="livros">
                    <div>O requerente NÃO deve livros na biblioteca</div>
                    <input type="radio" name="livros">
                    <div>O requerente deve livros na biblioteca:</div>
                    <input type="number" disabled>
                    <div class="assinatura"></div>
                    <label for="assinatura1">Responsável (ass. legível)</label>
                </fieldset>
            </section>

            <button type="submit" name="sendpost" value="enviar">Enviar</button>
		</form>	
	</main>
</body>
</html>