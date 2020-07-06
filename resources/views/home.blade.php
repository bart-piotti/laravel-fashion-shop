<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

            <table style="width:60%; margin: auto;">
              <tr>
                <th>Marca</th>
                <th>Taglia</th>
                <th>Prezzo</th>
              </tr>
              @foreach ($data as $vestito)
              <tr>
                <td>{{$vestito->Marca}}</td>
                <td>{{$vestito->Taglia}}</td>
                <td>{{$vestito->Prezzo . '$'}}</td>
              </tr>
              @endforeach
            </table>
    </body>
</html>
