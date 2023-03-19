
<div class="d-flex justify-content-between mb-3">
    <h1>XML gerado!</h1>
</div>
<!-- ?page=listar -->

<table class='table table-hover table-striped table-bordered'>
        
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Nome Fantasia</th>
            <th>CNPJ</th>
        </tr>
<?php

        print "<tr>";

            print "<td>" . $_POST['id'] . "</td>";
            print "<td>" .$_POST['nome']. "</td>";
            print "<td>" .$_POST['nome_fantasia']. "</td>";
            print "<td>" .$_POST['cnpj']. "</td>";

        print "</tr>";

        //instancia do documento
        $dom = new DOMDocument('1.0', 'UTF-8');
        $dom->formatOutput = true;

        //no de id
        $idNodeValue = $dom->createTextNode($_POST['id']);
        $idNode = $dom->createElement('id');
        $idNode->appendChild($idNodeValue);

        //no de nome
        $nomeNodeValue = $dom->createTextNode($_POST['nome']);
        $nomeNode = $dom->createElement('nome');
        $nomeNode->appendChild($nomeNodeValue);

        //no de nome fantasia
        $nomeFantasiaNodeValue = $dom->createTextNode($_POST['nome_fantasia']);
        $nomeFantasiaNode = $dom->createElement('nome_fantasia');
        $nomeFantasiaNode->appendChild($nomeFantasiaNodeValue);

        //no de cnpj
        $cnpjNodeValue = $dom->createTextNode($_POST['cnpj']);
        $cnpjNode = $dom->createElement('cnpj');
        $cnpjNode->appendChild($cnpjNodeValue);

        //no de pj
        $pjNode = $dom->createElement('pj');
        $pjNode->appendChild($idNode);
        $pjNode->appendChild($nomeNode);
        $pjNode->appendChild($nomeFantasiaNode);
        $pjNode->appendChild($cnpjNode);
        //criação do nó ROOT
        $rootNode = $dom->createElement('root');
        $rootNode->appendChild($pjNode);
        $dom->appendChild($rootNode);

        $xml = $dom->saveXML();

        //salva xml
        $arquivo = $_POST['id'] . '.xml';
        $dom->save("./xmls/" . $arquivo);

        echo 'Arquivo salvo com o nome: ' . $arquivo;
        
        echo '</br>';

        echo '<form action= ./xmls/' .$arquivo .' target="_blank">
                <input  class="btn btn-success mt-3 mb-3" type="submit" value="Ir para arquivo" />
              </form>'

?>
</table>