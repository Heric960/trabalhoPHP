<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Trabalho</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <form action="../backend/controller/usercontroller.php" method="post" class="container my-4 needs-validation" novalidate>
    <h1 class="mb-4">Cadastro de Usuário</h1>

    <div class="mb-3">
      <label for="nome" class="form-label">Nome</label>
      <input type="text" class="form-control" id="nome" name="Nome" placeholder="Digite seu nome" required>
      <div class="invalid-feedback">Por favor, insira seu nome.</div>
    </div>

    <div class="mb-3">
      <label for="cpf" class="form-label">CPF</label>
      <input type="text" class="form-control" id="cpf" name="CPF" placeholder="Digite seu CPF" pattern="\d{11}" required>
      <div class="invalid-feedback">O CPF deve conter 11 dígitos numéricos.</div>
    </div>

    <div class="mb-3">
      <label for="rg" class="form-label">RG</label>
      <input type="text" class="form-control" id="rg" name="RG" placeholder="Digite seu RG">
    </div>

    <div class="mb-3">
      <label for="dataNascimento" class="form-label">Data de Nascimento</label>
      <input type="date" class="form-control" id="dataNascimento" name="Data_de_Nascimento" required>
      <div class="invalid-feedback">Por favor, insira sua data de nascimento.</div>
    </div>

    <div class="mb-3">
      <label for="telefone1" class="form-label">Telefone 1</label>
      <input type="number" class="form-control" id="telefone1" name="Telefone_1" placeholder="(XX) XXXXX-XXXX">
      <div class="invalid-feedback">Digite um número de telefone válido no formato (XX) XXXXX-XXXX.</div>
    </div>

    <div class="mb-3">
      <label for="telefone2" class="form-label">Telefone 2</label>
      <input type="number" class="form-control" id="telefone2" name="Telefone_2" placeholder="(XX) XXXXX-XXXX">
    </div>

    <div class="mb-3">
      <label for="nomePai" class="form-label">Nome do Pai</label>
      <input type="text" class="form-control" id="nomePai" name="Nome_Pai" placeholder="Digite o nome do pai">
    </div>

    <div class="mb-3">
      <label for="nomeMae" class="form-label">Nome da Mãe</label>
      <input type="text" class="form-control" id="nomeMae" name="Nome_Mae" placeholder="Digite o nome da mãe">
    </div>

    <div class="mb-3">
      <label for="curso" class="form-label">Curso</label>
      <select class="form-select" id="curso" name="Curso" required>
        <option value="" selected disabled>Selecione um curso</option>
        <option value="administracao">Administração</option>
        <option value="engenharia">Engenharia</option>
        <option value="medicina">Medicina</option>
        <option value="direito">Direito</option>
        <option value="informatica">Informática</option>
      </select>
      <div class="invalid-feedback">Por favor, selecione um curso.</div>
    </div>


    <div class="mb-3">
      <label for="logradouro" class="form-label">Logradouro</label>
      <input type="text" class="form-control" id="logradouro" name="Logradouro" placeholder="Digite o logradouro">
    </div>

    <div class="mb-3">
      <label for="numero" class="form-label">Número</label>
      <input type="number" class="form-control" id="numero" name="Numero" placeholder="Digite o número">
    </div>

    <div class="mb-3">
      <label for="complemento" class="form-label">Complemento</label>
      <input type="text" class="form-control" id="complemento" name="Complemento" placeholder="Digite o complemento">
    </div>

    <div class="mb-3">
      <label for="bairro" class="form-label">Bairro</label>
      <input type="text" class="form-control" id="bairro" name="Bairro" placeholder="Digite o bairro">
    </div>

    <div class="mb-3">
      <label for="cep" class="form-label">CEP</label>
      <input type="text" class="form-control" id="cep" name="CEP" placeholder="Digite o CEP">
      <div class="invalid-feedback">O CEP deve conter 8 dígitos numéricos.</div>
    </div>

    <button type="submit" class="btn btn-success">Salvar</button>
  </form>

  <!-- Script do Bootstrap para validação -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script>
    // Validação do formulário
    (function() {
      'use strict';
      const forms = document.querySelectorAll('.needs-validation');
      Array.from(forms).forEach(function(form) {
        form.addEventListener('submit', function(event) {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    })();
  </script>
</body>

</html>