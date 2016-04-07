<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>View Entries</title> 
    <link href='http://localhost/blog/css/style.css' rel='stylesheet' type='text/css' />
    <link rel="shortcut icon" type="image/ico" href="http://localhost/blog/images/favicon.ico"/>
    <script src="http://localhost/blog/js/jquery-2.2.3.js"></script>


    <!--jQuery de google en caso de que el local no funcione
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>-->

    <!--prueba para ocultar el contenido de las etiquetas
    <script>
        $(document).ready(function(){
            $("p").click(function(){
                $(this).hide();
            });
        });
    </script>
    -->



</head>
<body>

    <div class="show_entries">
        <?php include('menu.php');?>        
        <?php if (!empty($entries)) : ?>
            <?php foreach($entries as $entry) : ?>
                <?php 
                if (isset($my_entries) && in_array($entry->id, $my_entries)) {

                    $edit   = 'Editar'; 
                    $delete = 'Borrar';
                } elseif ($this->session->userdata('name')=='admin') {
                    $edit   = 'Editar'; 
                    $delete = 'Borrar';
                }
                else {
                    $edit   = ' ';
                    $delete = ' ';
                }

                ?>                    
                <h2 class="tituloShowEntries"><?=anchor(base_url().'index.php/blog/view/'.$entry->id,$entry->title)?></h2>
                <p><?=$entry->content?></p>

                Autor: <?=$entry->author?><br />
                Fecha: <?=$entry->date?>
                <h3>
                    <?=anchor(base_url().'index.php/blog/edit/'.$entry->id, '<img  src="http://localhost/blog/images/edit.png">')?>
                    <?=anchor(base_url().'index.php/blog/delete/'.$entry->id,'<img  src="http://localhost/blog/images/delete.png">')?>
                </h3>
                <hr class="style13"/>
            <?php endforeach; ?>
        <?php else : ?>
        </div>
        <h1>No existe ninguna entrada</h1>
    <?php endif; ?>
</body>
</html>