<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title><?=$entry->title?></title> 
        <link rel="shortcut icon" type="image/ico" href="http://localhost/blog/assets/images/favicon.ico"/>     
</head>
<body class="viewContenido">
        <div class="show_entries">
                <!--Inserta la vista que contiene el menu principal-->
                <?php include('menu.php')
                ;?>
                <!--Muestra datos de la entrada y muestra un formulario para enviar comentarios-->
                <h2><?=$entry->title?></h2>
                 <div class="imagenEntradas"><?php echo'<img src="'.$entry->image.'" />' ?> </div>
                <p><?=$entry->content?></p>
                Autor: <?=$entry->author?><br />
                Fecha: <?=$entry->date?><br />
                Tags: <?=tags($entry->tags)?><hr class="style13"/>
                <?php if($this->session->userdata('is_logged_in')) : ?>
                        <div class="enviarComentario">
                                Comentario:
                                <?=form_open(base_url().'index.php/blog/comment/')?>
                                <?=form_hidden('id_blog', $this->uri->segment(3))?>
                                <?=form_textarea('comment','','class="editTextArea" placeholder="¡Escribe tu comentario!"')?>
                                <?=form_submit('submit','Enviar ')?>
                                <?=form_close()?>
                        </div>

                <?php endif; ?>
                <!--Muestra los comentarios guardados en la base de datosm en caso de no existir muestra un mensaje-->
                <?php
                if(!empty($comments)){                        
                        echo '<h3>Comentarios</h3>';
                        foreach($comments as $comment)
                                echo $comment->comment.'<br />'.'<h4>Autor: '.$comment->author.'<br />'.
                        ($comment->date).'</h4>'.'<hr class="style13" />';
                }
                else
                        echo '<h3>No existen comentarios.</h3>';
                ?>
        </div>

</body>
</html>