<?php
    echo link_tag("CI3/bootstrap/css/bootstrap.min.css");
    echo "<h1>Formulaire d'inscription</h1>";
    echo validation_errors("<div class='alert alert-danger'>","</div>");
    $arrayForm=array(
        "id"=>"form"
    );
    
    echo "<form method ='post'id='form'>"; 
   
   echo form_label("Entrez votre prenom","nom");
    $data =array(
        "id"=>"label1",
        "name"=>"pname",
        "value"=>set_value('pname')
    );
    echo form_input($data);
    echo "<br>";
    echo form_label("Entrez votre nom","nom");
    $dataInput=array(
        "id"=>"input2",
        "name"=>"nom"
    );
    echo form_input($dataInput);
    echo"<br>";
    echo form_label("Entrez votre pseudo","pseudo");
    $dataPseudo =array(
       "id"=>"pseudo",
       "name"=>"pseudo"
    );
    echo form_input($dataPseudo);
    echo "<br>";
    $label2 =array(
        "id"=>"label2"
    );
    echo form_label("Entrez votre adresse email","email",$label2);
    $mail=array(
        "type"=>"email",
        "name"=>"email"
    );
    echo form_input($mail);
    echo "<br>";
    echo form_submit("soumettre","envoyer");
    echo form_reset("effacer","effacer");
?>