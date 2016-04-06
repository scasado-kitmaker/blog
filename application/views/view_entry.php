<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title><?=$entry->title?></title>      
</head>
<body class="viewContenido">
        <?php include('menu.php');?>

        <h2><?=$entry->title?></h2>
        <p><?=$entry->content?></p>
        Autor: <?=$entry->author?><br />
        Fecha: <?=$entry->date?><br />
        Tags: <?=tags($entry->tags)?><hr />
        <?php if($this->session->userdata('is_logged_in')) : ?>
                <div class="enviarComentario">
                Comentario:
                <?=form_open(base_url().'index.php/blog/comment/')?>
                <?=form_hidden('id_blog', $this->uri->segment(3))?>
                <?=form_textarea('comment')?>
                <?=form_submit('submit','Send')?>
                <?=form_close()?>
                </div>
                
        <?php endif; ?>
        <?php
        if(!empty($comments)){
                echo '<h3>Comments</h3>';
                foreach($comments as $comment)
                        echo '<h4>'.$comment->author.'</h4>'.
                $comment->comment.'<br />'.
                convertDateTimetoTimeAgo($comment->date).'<hr />';
        }
        else
                echo '<h3>No existen comentarios</h3>';
        ?>

</body>
</html>