<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Cadastro</title>
</head>
<body class="bg-dark">
	    <div class="container bg-light p-5">
 <h1>Cadastro Pessoal</h1>
 <form method="POST" action="processa.php">
 	               <div class="row">
                    <div class="form-group col-3">
 	<label>Nome:</label><br>
 	<input type="text" name="nome" placeholder="Nome completo" required>
 	<br><br>
  <label>CPF: </label><br>
  <input type="text" id="cpf" name="cpf" placeholder="Digite aqui o CPF" required="maxlength">
 <br><br>
<label>Data de Nascimento:</label><br>
  <input type="date" id="data" name="data">
  <br><br>
<input type="submit" value="Cadastrar" onclick="validaCPF();">
</form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <script>

        function mascara(i) {
            var v = i.value;
            if (isNaN(v[v.length - 1])) { // impede entrar outro caractere que não seja número
                i.value = v.substring(0, v.length - 1);
                return;
            }
            i.setAttribute("maxlength", "14");
            if (v.length == 3 || v.length == 7) i.value += ".";
            if (v.length == 11) i.value += "-";
        }


        function TestaCPF() {
            var valor = document.getElementById('cpf').value.replace(/\.|\-/gi, "");
            var strCPF = valor.toString();
            var Soma;
            var Resto;
            Soma = 0;
            if (strCPF == "00000000000") {
                return false;
            }
            for (i = 1; i <= 9; i++) {
                Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (11 - i);
            }
            Resto = (Soma * 10) % 11;
            if ((Resto == 10) || (Resto == 11)) {
                Resto = 0;
            }
            if (Resto != parseInt(strCPF.substring(9, 10))) {
                return false;
            }
            Soma = 0;
            for (i = 1; i <= 10; i++) {
                Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (12 - i);
            }
            Resto = (Soma * 10) % 11;
            if ((Resto == 10) || (Resto == 11)) {
                Resto = 0;
            }
            if (Resto != parseInt(strCPF.substring(10, 11))) {
                return false
            }
            return true;
        }

        function validaCPF() {
            var valor = document.getElementById('cpf').value;
            var strCPF = valor.toString();
            if (strCPF == "") {
                alert("Voce não digitou o numero do cpf.");
            } else
                if (TestaCPF()) {
                    alert(strCPF + "\nCPF válido.");
                } else {
                    alert(strCPF + "\nCPF inválido.");
                }
        }
    </script>


</body>
</html>