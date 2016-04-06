<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>View Entries</title>     
</head>
<body>
    <?php include('menu.php');?>
    <div class="show_entries">

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
            <h3>
                <?=anchor(base_url().'index.php/blog/edit/'.$entry->id, $edit)?>
                <?=anchor(base_url().'index.php/blog/delete/'.$entry->id, $delete)?>
            </h3>
            Autor: <?=$entry->author?><br />
            Fecha: <?=$entry->date?><hr />
        <?php endforeach; ?>
    <?php else : ?>
        <h1>No entries</h1>
    </div>
<?php endif; ?>
</body>
</html>