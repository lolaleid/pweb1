<?php

$message = [];
$meses = array('janeiro','fevereiro','março','abril','maio','junho','julho','agosto','setembro', 'outubro', 'novembro','dezembro');
$nmes = date('m')-1;

	if(!empty($_POST['sendpost'])){

		

		$espec = array(1, 6, 7, 10, 12, 15, 22);
		$just = array(3, 5);
		$opcao = $_POST['opcao'];

		$esp = in_array($opcao, $espec);
		$jus = in_array($opcao, $just);

		if ($esp && empty($_POST['especificacao'])) {
			$message['msg'] = "Especificação é obrigatória!";
		}elseif($jus && empty($_POST['justificativa'])){
			$message['msg'] = "Justificativa é obrigatória!";
		}else{
			$today = mktime((int)date("d"), (int)date("m"), (int)date("Y"), (int)time());
    		srand($today);
    		$protocolo =  rand();
		}
	}

?>