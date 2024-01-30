<?php
  //Variáveis
  $nome = addslashes($_POST['nome']);
  $email = addslashes($_POST['email']);
  $telefone = addslashes($_POST['telefone']);


  //Emails para quem será enviado o formulário
  $para = "jonasfabricio13@gmail.com";
  $assunto = "Contato pelo Portfólio";

  $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone;

  $cabeca = "From: jonas_fab@hotmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

  if(mail($para,$assunto,$corpo,$cabeca)){
      echo("E-mail enviado com sucesso!");
  }else{
      echo("Houve um erro ao enviar o email!");
  }
?>