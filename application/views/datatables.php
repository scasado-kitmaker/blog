<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>View Entries</title> 
    <link href='http://localhost/blog/css/style.css' rel='stylesheet' type='text/css' />
    <link rel="shortcut icon" type="image/ico" href="http://localhost/blog/images/favicon.ico"/>
  <link rel="stylesheet" type="text/css" href="/media/css/site-examples.css?_=d9c2c842fd3bd3ec7e90423dc6c620c1">
    <link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/dataTables.jqueryui.min.css">
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
            $('#example').DataTable();
        } );

    </script>

</head>
<body>

    <div class="show_entries">
        <?php include('menu.php');?>
        <br/>
        <br/>

        <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>username</th>
                    <th>password</th>                    
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>username</th>
                    <th>password</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>                
                </tr>
                <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                </tr>
                
            </tbody>
        </table>        

    </div>

</body>
</html>