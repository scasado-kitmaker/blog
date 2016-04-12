<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Mis entradas</title>    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/ico" href="http://localhost/blog/assets/images/favicon.ico"/> 
    <!--Estilos-->
    <link href='http://localhost/blog/assets/css/style.css' rel='stylesheet' type='text/css' />
</head>
<body>
    <div class="show_entries">
    <!--Inserta la vista que contiene el menu principal-->
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
                } else {
                    $edit   = ' ';
                    $delete = ' ';
                }
                ?> 

                <h2 class="tituloShowEntries">
                    <?=anchor(base_url().'index.php/blog/view/'.$entry->id,$entry->title,'style="text-decoration: none; color:black;"')?>
                </h2>
                <div class="imagenEntradas"><?php echo'<img src="'.$entry->image.'" />' ?> </div>
                <p><?=$entry->content?></p>
                Autor: <?=$entry->author?><br />
                Fecha: <?=$entry->date?>
                <h3>
                    <?=anchor(base_url().'index.php/blog/edit/'.$entry->id, '<img  src="http://localhost/blog/assets/images/edit.png">')?>
                    <?=anchor(base_url().'index.php/blog/delete/'.$entry->id,'<img  src="http://localhost/blog/assets/images/delete.png">')?>
                    <?=anchor(base_url().'index.php/blog/view/'.$entry->id,'<img  src="http://localhost/blog/assets/images/comment.png">')?>
                </h3>
                <hr class="style13"/>
            <?php endforeach; ?>
        <?php else : ?>
            <h1>No tienes entradas</h1>
        </div>
    <?php endif; ?>
</body>
</html>