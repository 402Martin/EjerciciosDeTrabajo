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
    
        <div id="header">
            <div id="contentHeaderDiv">EJERCICIOS MOON</div>
        </div>
        <div id='divHeader2'>
            <div id="titleDiv">Usuarios</div>
        </div>
        <div id='view'>
        <div id='tableDiv'>
            <div id='optDiv'>
                <a href="http://localhost/controllers/controller.php?view=list">
                    <div id='divbtn'>
                        <img src="../img/trash.svg" id='imgTrash' />
                        <p id='pbtn1'>Eliminar selección</p>
                    </div>
                </a>
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
                <div id='editDiv' class='titletbl editDiv'>Editar</div>
            </div>
            <div id='tableDivrows'>
            <?php
            include '../models/users.php';
            $list = users::getAllUsers();
            $loc = 0;
            
            while ($row = $list->fetch_assoc()) { {
                    $loc++;
            ?>
                    <div id=<? echo $loc ?> class=<?php
                            if ($loc % 2 == 0) {
                                echo 'secElem';
                            }
                            if ($loc % 2 != 0) {
                                echo 'firstElem';
                            } ?>>
                        <div class='checkDiv' >
                            <div class='check'>
                                <img src="../img/clicked.svg" class='imgcheck' id = <?php echo $loc; ?> data-user-id = <?php echo $row['id']; ?> />
                            </div>
                        </div>
                        <div id='idDiv' class='elem'>
                            <? echo $row['id'] ?>
                        </div>
                        <div id='nameDiv' class='elem'>
                            <? echo $row['name'] ?>
                        </div>
                        <div id='mailDiv' class='elem'>
                            <? echo $row['mail'] ?>
                        </div>
                        <div id='phoneDiv' class='elem'>
                            <? echo $row['phone'] ?>
                        </div>
                        <a href="http://localhost/controllers/controller.php?view=edit&&userid=<?= $row['id'] ?>">
                        <div class='editDiv' data-user-id = <?php echo $row['id']; ?> >
                            <img src="../img/edit.svg" class='edit'>
                            <img src="../img/editIcon.svg" class='editHover'>
                        </div>
                        </a>
                    </div>
            <?php }
            }
            if($loc==0){
                ?>
                <div class='empty'>No hay usuarios agregados</div>
            <?php } ?>
        </div>
        </div>
        <a href="http://localhost/controllers/controller.php?view=add">
        <div id='divSave'>
            <p id='pbtn'>Nuevo</p>
        </div>
        </a>
    </div>

</body>

</html>