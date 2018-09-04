<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Canciones -@yield('name') </title>
</head>
<body>
    
    <center>
    <table border=1 width="50%">
        <tr>
            <td colspan=2><center><b> @yield('title_table')  </b</center></td>
        </tr>

        <tr>
        @for($i=1; $i<=10; $i++) 
            <td> ##### </td>
            
        </tr>

        <tr>
            <td colspan=2><center><b> @yield('title_footer') </b</center></td>
        </tr>
    </table>
    </center>
    
</body>
</html>