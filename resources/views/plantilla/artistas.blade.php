<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Artistas -@yield('name')</title>
</head>
<body>
    
    <center>
    <table border=1>
        <tr>
            <td colspan=2><center><b> @yield('title_table')  </b</center></td>
        </tr>

        
        <tr>
        @for($i=1; $i<count($artista); $i++) 
            <td><b>{{$art_table}} x {{$i}}   </b></td>
            <td> {{$art_table * $i}} </td>
        </tr>
        

        <tr>
            <td colspan=2><center><b> @yield('title_footer') </b</center></td>
        </tr>
    </table>
    </center>
    
</body>
</html>