<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>View Entries</title> 
    <link href='http://localhost/blog/css/style.css' rel='stylesheet' type='text/css' />

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
                <h3 style="font-family:verdana">
                    <?=anchor(base_url().'index.php/blog/edit/'.$entry->id, $edit)?>
                    <?=anchor(base_url().'index.php/blog/delete/'.$entry->id, $delete)?>
                </h3>

                Autor: <?=$entry->author?><br />
                Fecha: <?=$entry->date?><hr />
            <?php endforeach; ?>
        <?php else : ?>
        </div>
        <h1>No existe ninguna entrada</h1>
    <?php endif; ?>
</body>
</html>