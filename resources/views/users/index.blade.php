<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
        <div class="col-sm-12">
                        <form method="post" action="{{route('registrar')}}">
                        <form method="post" action="">
                        <center> <input type="submit" class="btn btn-info" value="Exportar Documentos"> </center>
                        @csrf
                        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline collapsed" role="grid" aria-describedby="example2_info">
                           <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">Acta</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column descending" aria-sort="ascending">
                                    PDF</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column descending" aria-sort="ascending">
                                    WORD</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                  <tr role="row" class="odd">
                    <td class="dtr-control">Acta 1</td>
                    <td class="sorting_1">  
                      <center>
                      <input type="checkbox" class="case" name="pdf[]" style="margin-top:15px;"   value="{{1}}"> 
                      </center>
                    </td>
                    <td>
                     <center>
                      <input type="checkbox" class="case" name="word[]" style="margin-top:15px;"   value="{{1}}">
                      </center>
                    </td>
                    <td>  <center><a href="" class="btn btn-info">Exportar</a></center></td>
                  </tr>
                  <tr role="row" class="odd">
                    <td class="dtr-control">Acta 2</td>
                    <td class="sorting_1">  
                      <center>
                      <input type="checkbox" class="case" name="pdf[]" style="margin-top:15px;"   value="{{2}}"> 
                      </center>
                    </td>
                    <td>
                     <center>
                      <input type="checkbox" class="case" name="word[]" style="margin-top:15px;"   value="{{2}}">
                      </center>
                    </td>
                    <td>  <center><a href="" class="btn btn-info">Exportar</a></center></td>
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr><th rowspan="1" colspan="1">Acta</th><th rowspan="1" colspan="1">PDF</th><th rowspan="1" colspan="1">WORD</th><th></th></tr>
                  </tfoot>
                  </table>
                  </form>
               </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>