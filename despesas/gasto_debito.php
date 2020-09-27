<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Menu</title>
    <link rel="shortcut icon" href="../imagens/moeda.png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/alerta.css">
    <link rel="stylesheet" href="../css/despesas_debito.css">
</head>
<body>
    <?php
          $caminho[] = '<a href="menu_despesas.php">Menu Despesas</a>';
          $caminho[] = "<a href='#'> Despesas Débito </a>";
          require_once('../alerta/alert.php');
          require_once('../navbar.php'); 
          require_once('../guia.php');
    ?>
    <header>
        <section>
            <h1>Despesas Débito</h1>
        </section>
        <section>
            <h4>
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-graph-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5z"/>
                </svg>
                R$: <span id="valor">100,00</span>
            </h4>
        </section>
    </header>
    <!-- Modal -->
    <div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cadastro de Despesas</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form id="idFormCadastro">
          <div class="modal-body">
            <p id="alertaCadastro">
                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-award" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M9.669.864L8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193l-1.51-.229L8 1.126l-1.355.702-1.51.229-.684 1.365-1.086 1.072L3.614 6l-.25 1.506 1.087 1.072.684 1.365 1.51.229L8 10.874l1.356-.702 1.509-.229.684-1.365 1.086-1.072L12.387 6l.248-1.506-1.086-1.072-.684-1.365z"/>
                  <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                </svg>
                Compra cadastrada
            </p>
            <label class="clLableCadastro">Valor R$:</label>
            <label class="clLableCadastro">Quantidade:</label>
            <input type="number" placeholder="1,00" name="nmMoney" required step="0.05">
            <input type="number" name="nmQuantidade" required step="1" value="1">
            <label class="clLableCadastro">Compra:</label>
            <label class="clLableCadastro">Local:</label>
            <input type="text" placeholder="almoço" name="nmAlmoço" required maxlength="30">
            <input type="text" placeholder="Cometa Supermercado" name="nmLocal" required maxlength="30">
            <label class="clLableCadastro">Data:</label>
            <label class="clLableCadastro">Tipo:</label>
            <input type="date" name="nmData" required>
            <select name="nmTipo">
                <option value="0">Outros</option>
                <option value="1">Comida</option>
                <option value="2">Saúde</option>
                <option value="3">Transporte</option>
                <option value="4">Educação</option>
                <option value="5">Higiene</option>
                <option value="6">Lazer</option>
                <option value="7">Investimento</option>
            </select><br>
            <label class="clLableCadastro clLabelEnd">Observaçõa:</label>
            <textarea></textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary">Cadastrar</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
          <img src="../imagens/delete.png" height="100px">
              <p>Deseja Excluir o(s) Iten(s) Selecionado(s)?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
            <button type="button" class="btn btn-primary">Sim</button>
          </div>
        </div>
      </div>
    </div>
    <main>
        <section>
            <form>
                <label class="clLabelPesquisa">De:</label>
                <input type="date" name="nmDataInicial" required class="clIptData">
                <label class="clLabelPesquisa">A:</label>
                <input type="date" name="nmDataFinal" class="clIptData">
                <label class="clLabelPesquisa">Tipo:</label>
                <select name="nmTipoPesquisa" class="clIptData">
                    <option value="100">Todos</option>
                    <option value="0">Outros</option>
                    <option value="1">Comida</option>
                    <option value="2">Saúde</option>
                    <option value="3">Transporte</option>
                    <option value="4">Educação</option>
                    <option value="5">Higiene</option>
                    <option value="6">Lazer</option>
                    <option value="7">Investimento</option>
                </select>
                <button type="submit">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                      <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                    </svg>
                </button>
                <button type="button">
                     <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-clockwise" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                      <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                    </svg>                
                </button>
            </form>
        </section>
        <section id="idSectionButtons">
            <div>
            <button type="button" data-toggle="modal" data-target="#modalCadastro" title="cadastrar despesas">
                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-bag-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5H2z"/>
                  <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z"/>
                </svg>
            </button>
            </div>
            <div>
            <label for="idExcluir">
               <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-card-checklist" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                  <path fill-rule="evenodd" d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                </svg>
            </label>
            <button type="button" data-toggle="modal" data-target="#modalDelete" title="Excluir itens">
                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                </svg>
            </button>
            </div>
        </section>
        <section>
            <table>
                <tr id="trStart">
                    <th>R$</th>
                    <th>Descrição</th>
                    <th>Data</th>
                    <th>Tipo</th>
                    <th><input type="checkbox" name="nmExcluir" id="idExcluir"></th>
                </tr>
                <tr>
                    <td>10,00</td>
                    <td>Almoço</td>
                    <td>13/10/2020</td>
                    <td>Comida</td>
                    <td><input type="checkbox" name="nmExcluir"></td>
                </tr>
                <tr>
                    <td>10,00</td>
                    <td>Batata frita pedigão Batata frita pedigão</td>
                    <td>13/10/2020</td>
                    <td>Comida</td>
                    <td><input type="checkbox" name="nmExcluir"></td>
                </tr>
                <tr>
                    <td>10,00</td>
                    <td>Almoço</td>
                    <td>13/10/2020</td>
                    <td>Comida</td>
                    <td><input type="checkbox" name="nmExcluir"></td>
                </tr>
                <tr>
                    <td>10,00</td>
                    <td>Almoço</td>
                    <td>13/10/2020</td>
                    <td>Comida</td>
                    <td><input type="checkbox" name="nmExcluir"></td>
                </tr>
                <tr>
                    <td>10,00</td>
                    <td>Almoço</td>
                    <td>13/10/2020</td>
                    <td>Comida</td>
                    <td><input type="checkbox" name="nmExcluir"></td>
                </tr>
                <tr>
                    <td>10,00</td>
                    <td>Almoço</td>
                    <td>13/10/2020</td>
                    <td>Comida</td>
                    <td><input type="checkbox" name="nmExcluir"></td>
                </tr>
                <tr>
                    <td>10,00</td>
                    <td>Almoço</td>
                    <td>13/10/2020</td>
                    <td>Comida</td>
                    <td><input type="checkbox" name="nmExcluir"></td>
                </tr>
                <tr>
                    <td>10,00</td>
                    <td>Almoço</td>
                    <td>13/10/2020</td>
                    <td>Comida</td>
                    <td><input type="checkbox" name="nmExcluir"></td>
                </tr>
                <tr>
                    <td>10,00</td>
                    <td>Almoço</td>
                    <td>13/10/2020</td>
                    <td>Comida</td>
                    <td><input type="checkbox" name="nmExcluir"></td>
                </tr>
                <tr>
                    <td>10,00</td>
                    <td>Almoço</td>
                    <td>13/10/2020</td>
                    <td>Comida</td>
                    <td><input type="checkbox" name="nmExcluir"></td>
                </tr>
                <tr>
                    <td>10,00</td>
                    <td>Almoço</td>
                    <td>13/10/2020</td>
                    <td>Comida</td>
                    <td><input type="checkbox" name="nmExcluir"></td>
                </tr>
                <tr>
                    <td>10,00</td>
                    <td>Almoço</td>
                    <td>13/10/2020</td>
                    <td>Comida</td>
                    <td><input type="checkbox" name="nmExcluir"></td>
                </tr>
                <tr>
                    <td>10,00</td>
                    <td>Almoço</td>
                    <td>13/10/2020</td>
                    <td>Comida</td>
                    <td><input type="checkbox" name="nmExcluir"></td>
                </tr>
                <tr>
                    <td>10,00</td>
                    <td>Almoço</td>
                    <td>13/10/2020</td>
                    <td>Comida</td>
                    <td><input type="checkbox" name="nmExcluir"></td>
                </tr>
                <tr>
                    <td>10,00</td>
                    <td>Almoço</td>
                    <td>13/10/2020</td>
                    <td>Comida</td>
                    <td><input type="checkbox" name="nmExcluir"></td>
                </tr>
            </table>
        </section>
    </main>
    <script src="../js/jQuery_v3.5.1.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/debito.js"></script>
</body>
</html>