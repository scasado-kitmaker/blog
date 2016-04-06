<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>View Entries</title>    
    <link rel="shortcut icon" type="image/ico" href="http://localhost/blog/images/favicon.ico"/> 
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
            } elseif ($this->session->userdata('username')=='admin') {
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
        <h1>No entries</h1>
    </div>
<?php endif; ?>
</body>
</html>