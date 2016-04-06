<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>View Entries</title> 
    <link href='http://localhost/blog/css/style.css' rel='stylesheet' type='text/css' />
    <link href='http://localhost/blog/css/styleTables.css' rel='stylesheet' type='text/css' />
    <link rel="shortcut icon" type="image/ico" href="http://localhost/blog/images/favicon.ico"/>

    <!--<link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">-->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/dataTables.jqueryui.min.css">-->

    <style type="text/css" class="init">

    </style>


    <script type="text/javascript" src="/media/js/site.js?_=f612d6bab9a5a365a52445c40dd6b8c1">
    </script>
    <script type="text/javascript" src="/media/js/dynamic.php?comments-page=examples%2Fstyling%2FjqueryUI.html" async>
    </script>
    <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.0.min.js">
    </script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js">
    </script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.11/js/dataTables.jqueryui.min.js">
    </script>
    <script type="text/javascript" language="javascript" src="../resources/demo.js">
    </script>
    <script type="text/javascript" class="init">

        $(document).ready(function() {
            $('#usuarios').DataTable();
        } );

    </script>

 <script type="text/javascript" class="init">

        $(document).ready(function() {
            $('#comentarios').DataTable();
        } );

    </script>
     <script type="text/javascript" class="init">

        $(document).ready(function() {
            $('#entradas').DataTable();
        } );

    </script>
</head>
<body>

    <div class="show_entries">
        <?php include('menu.php');?>
        <br/>
        <br/>
        <h1>Usuarios</h1>
        <table id="usuarios" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>username</th>
                    <th>password Hash MD5</th>                    
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>username</th>
                    <th>password Hash MD5</th>
                </tr>
            </tfoot>
            <tbody>
                <?php if (!empty($user_datatables)) : ?>
                    <?php foreach($user_datatables as $userx) : ?>
                        <tr>
                            <td> <?=$userx->id?></td>
                            <td> <?=$userx->name?></td>
                            <td> <?=$userx->username?></td>
                            <td> <?=$userx->password?></td>                
                        </tr>
                    <?php endforeach; ?>

                <?php else : ?>
                    <h1 class="empty_entries">No existen usuarios,crea uno!</h1>
                <?php endif; ?>

            </tbody>
        </table>   
        <hr class="style13"/>  


    </div>
    <div class="show_entries">
    <h1>Comentarios</h1>
       
        <table id="comentarios" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>id_blog</th>
                    <th>Autor</th>
                    <th>comentario</th>                    
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>id</th>
                    <th>id_blog</th>
                    <th>Autor</th>
                    <th>comentario</th>
                </tr>
            </tfoot>
            <tbody>
                <?php if (!empty($comments_datatables)) : ?>
                    <?php foreach($comments_datatables as $commentX) : ?>
                        <tr>
                            <td> <?=$commentX->id?></td>
                            <td> <?=$commentX->id_blog?></td>
                            <td> <?=$commentX->author?></td>
                            <td> <?=$commentX->comment?></td>                
                        </tr>
                    <?php endforeach; ?>

                <?php else : ?>
                    <h1 class="empty_entries">No existen comentarios,escribe uno!</h1>
                <?php endif; ?>

            </tbody>
        </table>   
        <hr class="style13"/>  


    </div>
     <div class="show_entries">
    <h1>Entradas</h1>
       
        <table id="entradas" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>permalink</th>
                    <th>Autor</th>
                    <th>título</th>   
                    <th>contenido</th> 
                    <th>fecha</th> 
                    <th>tags</th>                  
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>id</th>
                    <th>permalink</th>
                    <th>Autor</th>
                    <th>título</th>   
                    <th>contenido</th> 
                    <th>fecha</th> 
                    <th>tags</th> 
                </tr>
            </tfoot>
            <tbody>
                <?php if (!empty($entries_datatables)) : ?>
                    <?php foreach($entries_datatables as $entriesX) : ?>
                        <tr>
                            <td> <?=$entriesX->id?></td>
                            <td> <?=$entriesX->permalink?></td>
                            <td> <?=$entriesX->author?></td>
                            <td> <?=$entriesX->title?></td>    
                            <td> <?=$entriesX->content?></td>
                            <td> <?=$entriesX->date?></td>
                            <td> <?=$entriesX->tags?></td>            
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <h1 class="empty_entries">No existen comentarios,escribe uno!</h1>
                <?php endif; ?>

            </tbody>
        </table>   
        <hr class="style13"/>  


    </div>


</body>
</html>