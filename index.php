
<?php
    require_once('App/View/header.html');

?>
    <main>
        <div class="conatiner mb-5 ml-5 mr-5">
            <div class="row">
                <form action="">
                    <select name="users" class="form-control" onchange="showUser(this.value)">
                        <option value="">Selecione uma pessoa:</option>
                        <?php
                        $connect = mysqli_connect('localhost', 'root', '', 'php_ajax');
                        if (!$connect) {
                            die('Erro de conexão: ' . mysqli_connect_errno($connect));
                        }
                        mysqli_select_db( $connect, "php_ajax");
                        $sql = "SELECT * FROM users";
                        $result = mysqli_query( $connect, $sql);
                        foreach ($result as $res) {
                            extract($res);
                            echo '<option value="' . $id . '">' . $FirstName . '</option>';
                        }
                        ?>
                    </select>
                </form>

            </div>
        </div>


    </main>





    <div id="txtHint" class="container ml-5">
        <p class="color-black">As informações das pessoas aparecerão aqui...</p>
    </div>


    <?php
      require_once('App/View/footer.html');

?>

   