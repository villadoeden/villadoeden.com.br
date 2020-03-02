<?php
if($_POST)
{

	$to_Email   	= "reservas@villadoeden.com.br"; //Replace with recipient email address
	$subject        =  "Avaliação Via Site";

	//Sanitize input data using PHP filter_var().
	$user_Name = $_POST["name"];
	$user_Email = $_POST["email"];
	$user_Message = $_POST["message"];
	$user_tel = $_POST["telefone"];


	//INICIO CONTEUDO EMAIL

	$message = '
		<html>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title>Villa do Éden - Avaliação </title>
		</head>

		<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
			<center>
				<table style="padding:40px 20px;background:#F4F4F4;width:100%;font-family:arial" cellpadding="0" cellspacing="0">

						<tbody>
							<tr>
								<td>

									<table style="max-width:540px;min-width:320px" align="center" cellspacing="0">
										<tbody>

											<tr>
												<td style="background:#fff;border:1px solid #D8D8D8;padding:30px 30px" align="center">

													<table align="center">
														<tbody>

															<tr>
																<td style="border-bottom:1px solid #D8D8D8;color:#666;text-align:center;padding-bottom:30px">

																	<table style="margin:auto" align="center">
																		<tbody>
																			<tr>
																				<td style="color:#005f84;font-size:22px;font-weight:bold;text-align:center;font-family:arial">
																				   Contato via Site
																				</td>
																			</tr>
																		</tbody>
																	</table>
																</td>
															</tr>

															<tr>
													   <td style="color:#666;padding:15px; padding-bottom:0;font-size:14px;line-height:20px;font-family:arial;text-align:left">

															<div style="font-style:normal;padding-bottom:15px;font-family:arial;line-height:20px;text-align:left">

																<p><span style="font-weight:bold;font-size:16px">Nome:</span> '.$user_Name.'</p>
																<p><span style="font-weight:bold;font-size:16px">Email:</span> '.$user_Email.'</p>
																<p><span style="font-weight:bold;font-size:16px">Telefone:</span> '.$user_tel.'</p>
																<p><span style="font-weight:bold;font-size:16px;">Perguntas ou comentários abaixo:</span> </p>
                                                       			<p style="margin-bottom:0;"> '.nl2br($user_Message).' </p>
															  </div>

																</td>
															</tr>

														</tbody>
													</table>

												</td>
											</tr>


										</tbody>
									</table>
								</td>
							</tr>

							<tr>
								<td>
									<table style="max-width:650px" align="center">
										<tbody>
											<tr>
												<td style="color:#b4b4b4;font-size:11px;padding-top:10px;line-height:15px;font-family:arial">
													<span> &copy; Villa do &Eacute;den - '.date("Y").' - Todos os Direitos Reservados </span>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
					</tbody>
				</table>
			</center>
		</body>
	</html>';

	// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
	// O return-path deve ser ser o mesmo e-mail do remetente.
	$headers = "MIME-Version: 1.1\r\n";
	$headers .= "Content-type: text/html; charset=UTC-8\n";
	$headers .= "From: $user_Email\r\n"; // remetente
	$headers .= "Return-Path: $to_Email\r\n"; // return-path
	$sentMail = @mail($to_Email, $subject, $message, $headers);


	if(!$sentMail)
	{
		$output = '<br>Falha ao enviar o email, tente mais tarde.';
		echo $output;
	}else{
		$output = '<br>Olá '.$user_Name .'! <br> Obrigado por entrar em contato. Entraremos em contato o mais breve possível';
		echo $output;
	}

	include 'b2b/includes/abrir.php';
	$data = date('Y-m-d');
	$depoimento = nl2br($user_Message);
	$nome = $user_Name;
	$mostrar = 'N';
	$insere="insert into depoimentos (data, depoimento, nome, mostrar) values ('$data', '$depoimento', '$nome', '$mostrar')";
	$conexao->exec($insere);

}
?>
