
<?php
//print_r("test !");
//print_r($tableauname);
?>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    </head>
<body>
         <?php
            //include('C:\wamp64\www\laravel-new\laravel8auth\resources\views\navigation-menu.blade.php');
        ?>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: black;">
    <!-- Container wrapper -->
    <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand me-2" href="">
        <img
            src="/images/log4.png"
            height="80"
            alt=""
            loading="lazy"
            style="margin-top: -1px;"
        />
        </a>

        <!-- Toggle button -->
        <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarButtonsExample"
        aria-controls="navbarButtonsExample"
        aria-expanded="false"
        aria-label="Toggle navigation"
        >
        <i class="fas fa-bars"></i>
        </button>
        <!-- <a class="btn btn-info" href="http://127.0.0.1:8000/logout" >Log Out</a>
        
        <a href="" class="btn btn-info" href="http://127.0.0.1:8000/logout" onclick="event.preventDefault();
                            this.closest('form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i> Deconnecter</a> -->
    </nav>

<div class="container ">
    <div class="panel panel-primary mt-2">
     
      <div class="panel-body">
   
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        @endif
  
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
  
        <form action="{{ route('file.upload.post2') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
  
                <div class="col-md-6">
                    <input type="file" name="file" class="form-control">
                </div>
   
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
   
            </div>
        </form>
  
      </div>
        <table class="table table-success table-striped table-bordered border-primary">
        <thead class="thead-dark">
                <tr class="table-secondary">
                
                <th>Nom Fichier</th>
                <th>Ajouter</th>
               
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($tableauname as $fichier){
                ?>
                    <tr>
                    
                    <td class="row-value"><?php echo $fichier[0]; ?></td>
                    <!-- <?php echo $fichier[1]; ?> -->
                    <td>
                         <input class="checkbox" type="radio" name="ch[]" id="exampleRadios1" onclick="myFunction()" value="<?php echo $fichier[1]; ?>" >
                           
                           
                     </div></td>
                     
                    </tr>
                    

                <?php
                    }
                ?>
            </tbody>
            </table>
            <form method="get" action="show-sc2">
                <input type="text" name="nom_fichier" value="" id="tt1"/>
                <!--a href="" name="valider" class="btn btn-primary">valider</a-->
                <input type="submit" value="valider" class="btn btn-primary">
                </form>
            </div>
        <script>
            //document.getElementById("exampleRadios1").addEventListener("change", myFunction);

            function myFunction() {
                //const Allrows = document.querySelectorAll("tr");
                //console.log(Allrows);
                $('table #exampleRadios1:checked').each(function () {
                    var rowValue = $(this).closest('tr').find('td.row-value').text();
                    var rowValue2 = $(this).closest('tr').find('td.row-value2').text();
                    //values.push(rowValue);
                    console.log(rowValue);
                    if(rowValue2 != ''){
                        document.getElementById('tt1').value=rowValue2+';'+rowValue;
                    }else{
                        document.getElementById('tt1').value=rowValue;
                    }
                    
                });
            }
        </script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
