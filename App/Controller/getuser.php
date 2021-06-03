<div class="container ml-5">
    <div class="row">
        <?php
        $q = intval($_GET['q']);

        $connect = mysqli_connect('localhost', 'root', '', 'php_ajax');
        if (!$connect) {
            die('Erro de conexão: ' . mysqli_connect_errno($connect));
        }

        mysqli_select_db( $connect, "php_ajax");
        $sql = "SELECT * FROM users WHERE id = '" . $q . "'";
        $result = mysqli_query($connect, $sql);

        echo "<table class='table table-striped'>
             <tr>
                 <th scope='col'>Primeiro Nome</th>
                 <th scope='col'>Segundo Nome</th>
                 <th scope='col'>Idade</th>
                 <th scope='col'>Cidade</th>
                 <th scope='col'>Carreira</th>
             </tr>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td scope='row'>" . $row['FirstName'] . "</td>";
            echo "<td>" . $row['LastName'] . "</td>";
            echo "<td>" . $row['Age'] . "</td>";
            echo "<td>" . $row['Hometown'] . "</td>";
            echo "<td>" . $row['Job'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_close($connect);
        ?>
    </div>
</div>
