<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Mostrar entradas</title> 
    <link href='http://localhost/blog/public/assets/css/style.css' rel='stylesheet' type='text/css' />
    <link rel="shortcut icon" type="image/ico" href="http://localhost/blog/public/assets/images/favicon.ico"/>
    <script src="http://localhost/blog/public/assets/js/jquery-2.2.3.js"></script>


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
        <!--Inserta la vista que contiene el menu principal-->
        <?php include('menu.php');?>        
        <?php if (!empty($entries)) : ?>


            <!--Prueba reproductor html5
            <video width="400" controls>
                <source src="http://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                <source src="mov_bbb.ogg" type="video/ogg">
                Your browser does not support HTML5 video.
            </video>
            -->


                  <?php foreach($entries as $entry) : ?>
                    <?php 
                    if (isset($my_entries) && in_array($entry->id, $my_entries)) {

                        $edit   = '<img  src="http://localhost/blog/public/assets/images/edit.png">'; 
                        $delete = '<img  src="http://localhost/blog/public/assets/images/delete.png">';
                    } elseif ($this->session->userdata('name')=='admin') {
                        $edit   = '<img  src="http://localhost/blog/public/assets/images/edit.png">'; 
                        $delete = '<img  src="http://localhost/blog/public/assets/images/delete.png">';
                    }
                    else {
                        $edit   = ' ';
                        $delete = ' ';
                    }

                    ?>                    
                    <h2 class="tituloShowEntries">
                        <?=anchor(base_url().'index.php/blog/view/'.$entry->id,$entry->title,'style="text-decoration: none; color:black;"')?>

                    </h2>
                    <div class="imagenEntradas"><?php echo'<img src="'.$entry->image.'" />' ?> </div>
                    <p>

                        <p>
                            <?=$entry->content?>
                            <?=$entry->editInfo?>
                        </p>

                        Autor: <?=$entry->author?><br />
                        Fecha: <?=$entry->date?>
                        <h3>
                            <?=anchor(base_url().'index.php/blog/edit/'.$entry->id, $edit )?>
                            <?=anchor(base_url().'index.php/blog/delete/'.$entry->id,$delete)?>
                            <?=anchor(base_url().'index.php/blog/view/'.$entry->id,'<img  src="http://localhost/blog/public/assets/images/comment.png">')?>

                        </h3>

                        <hr class="style13"/>
                    <?php endforeach; ?>
                <?php else : ?>
                </div>
                <h1>No existe ninguna entrada</h1>
            <?php endif; ?>
        </body>
        </html>