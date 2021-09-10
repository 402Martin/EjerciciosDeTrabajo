<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/listStyles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link href="../css/fontawesome/css/all.css" rel="stylesheet">
    <script type="text/javascript" src="../js/jquery-latest.js"></script>
    <script type="text/javascript" src="../js/scriptlist.js"></script>
    <!-- <script type="text/javascript" src="../js/scriptAgregar.js"></script> -->
</head>

<body>
    <div id='view'>
        <div id="header">
            <div id="contentHeaderDiv">EJERCICIOS MOON</div>
        </div>
        <div id='divHeader2'>
            <div id="titleDiv">Usuarios</div>
        </div>

        <div id='tableDiv'>
            <div id='optDiv'>
                <div id='divbtn'>
                    <img src="../img/trash.svg" id='imgTrash' />
                    <p id='pbtn1'>Eliminar selección</p>
                </div>
                <div id='InpPhone' class='divAdd'>
                    <img src="../img/search.svg" id='imgsearch' />
                    <input type='text' id='txtPhone' class='inpAdd' placeholder="Búsqueda de usuario">
                </div>
            </div>

            <div id='titlesTblDiv'>
                <div id='idDivHead' class='titletbl'>ID</div>
                <div id='nameDiv' class='titletbl'>Nombre</div>
                <div id='mailDiv' class='titletbl'>Mail</div>
                <div id='phoneDiv' class='titletbl'>Teléfono</div>
                <div id='editDiv' class='titletbl'>Editar</div>
            </div>
            <?php
            include '../models/users.php';
            $list = users::getAllUsers();
            $loc = 0;
            while ($row = $list->fetch_assoc()) { {
                    $loc++;
            ?>
                    <div id=<?php
                            if ($loc % 2 == 0) {
                                echo 'secElem';
                            }
                            if ($loc % 2 != 0) {
                                echo 'firstElem';
                            } ?>>
                        <div class='checkDiv' >
                            <div class='check'>
                                <img src="../img/clicked.svg" class='imgcheck' id = <?php echo $loc; ?> data-user-id = <?php echo $row['ID']; ?> />
                            </div>
                        </div>
                        <div id='idDiv' class='elem'>
                            <? echo $row['ID'] ?>
                        </div>
                        <div id='nameDiv' class='elem'>
                            <? echo $row['Name'] ?>
                        </div>
                        <div id='mailDiv' class='elem'>
                            <? echo $row['Mail'] ?>
                        </div>
                        <div id='phoneDiv' class='elem'>
                            <? echo $row['Phone'] ?>
                        </div>
                        <div id='editDiv'>
                            <img src="../img/edit.svg" class='edit'>
                        </div>
                    </div>
            <?php }
            } ?>
            <div id='secElem'>
                <div class='checkDiv'>
                    <div class='uncheck'>
                        <img src="../img/unclicked.svg" class='imgcheck' />
                    </div>
                    <div class='check'>
                        <img src="../img/clicked.svg" class='imgcheck' />
                    </div>
                </div>
                <div id='idDiv' class='elem'>ID</div>
                <div id='nameDiv' class='elem'>Nombre</div>
                <div id='mailDiv' class='elem'>Mail</div>
                <div id='phoneDiv' class='elem'>Teléfono</div>
                <div id='editDiv'>
                    <img src="../img/edit.svg" class='edit'>
                </div>
            </div>
        </div>

        <div id='divSave'>
            <p id='pbtn'>Nuevo</p>
        </div>
    </div>

</body>

</html>