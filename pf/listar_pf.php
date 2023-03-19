
<div class="d-flex justify-content-between mb-3">
    <h1>XML Salvo!</h1>
</div>


<table class='table table-hover table-striped table-bordered'>
        
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>CPF</th>
            <th>Data de Nascinemto</th>
        </tr> 
<?php

        
        $data_convertida = implode('/', array_reverse(explode('-', $_POST['data'])));
        print "<tr>";

            print "<td>" . $_POST['id'] . "</td>";
            print "<td>" .$_POST['nome']. "</td>";
            print "<td>" .$_POST['sobrenome']. "</td>";
            print "<td>" .$_POST['cpf']. "</td>";
            print "<td>" .$data_convertida. "</td>";

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

        //no de sobrenome
        $sobrenomeNodeValue = $dom->createTextNode($_POST['sobrenome']);
        $sobrenomeNode = $dom->createElement('sobrenome');
        $sobrenomeNode->appendChild($sobrenomeNodeValue);

        //no de cpf
        $cpfNodeValue = $dom->createTextNode($_POST['cpf']);
        $cpfNode = $dom->createElement('cpf');
        $cpfNode->appendChild($cpfNodeValue);

        //no de data_nascimento
        $dataNodeValue = $dom->createTextNode($data_convertida);
        $dataNode = $dom->createElement('data');
        $dataNode->appendChild($dataNodeValue);


        //no de pf
        $pfNode = $dom->createElement('pf');
        $pfNode->appendChild($idNode);
        $pfNode->appendChild($nomeNode);
        $pfNode->appendChild($sobrenomeNode);
        $pfNode->appendChild($cpfNode);
        $pfNode->appendChild($dataNode);
        //criação do nó ROOT
        $rootNode = $dom->createElement('root');
        $rootNode->appendChild($pfNode);
        $dom->appendChild($rootNode);

        $xml = $dom->saveXML();
        //salva xml
        // echo $xml;
        $arquivo = $_POST['id'] . '.xml';
        // $dom->save($arquivo);
        $dom->save("./xmls/" . $arquivo);

        echo 'Arquivo salvo com o nome: ' . $arquivo;
        
        echo '</br>';

        echo '<form action= ./xmls/' .$arquivo .' target="_blank">
                <input  class="btn btn-success mt-3 mb-3" type="submit" value="Ir para arquivo" />
              </form>'
?>
</table>



<!-- <button ahref="file:///C:/xampp/htdocs/pf_pj/Pedro.xml" class="btn btn-success">Gerar novo XML</button> -->
