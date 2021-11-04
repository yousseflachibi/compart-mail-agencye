
<?php
//print_r("test !");
//print_r($tableauname); fehal lowal
?>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: black;">
  <!-- Container wrapper -->
  <div class="container">
    <!-- Navbar brand -->
    <a class="navbar-brand me-2" href="">
      <img
        src="/images/log4.png"
        height="60"
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
    <a href="" class="btn btn-info"><i class="fa fa-sign-out" aria-hidden="true"></i> Deconnecter</a>
</nav>
        <div class="container mt-2">
            <div class="panel panel-primary">
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
  
        <form action="{{ route('file.upload.post') }}" method="POST" enctype="multipart/form-data">
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
                
                <th scope="col">Nom Fichier</th>
                <th scope="col">Ajouter</th>
                
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
                           
                              <?php 
                                    @$ch = $_POST["ch"];
                                   
                                     @$valider = $_POST["valider"];
                                    
                                      if(isset($valider)){
                                        echo "vous avez coché les cases suivantes :<br> />";
                                         echo @implode("-",$ch);
                                    }

                              
                              
                              ?>
                           
                     </div></td>
                     <td class="row-value2" style="display:none"><?php echo $fichier[2]; ?></td>
                     
                    </tr>
                    <?php
                    }
                ?>
                
            </tbody>
            </table>
            <?php
                    
                    //foreach($tableauname as $fichier){
                      
                ?>
            <div style="background-color:white;display: block;">
               <hr>
                 <span style="color:blue;font-size: medium;font-weight: bold;">Vous avez choisie : <?php echo $fichier[2]; ?></span>
                <hr>
            </div>
            <?php
                    //}
                ?>
 
      
           
               <form method="get" action="show-all">
                <input type="text" name="nom_fichier" value="" id="tt1"/>
                <!--a href="" name="valider" class="btn btn-primary">valider</a-->
                <input type="submit" value="valider" class="btn btn-primary">
                </form>
            </div>
            <a class="btn btn-outline-secondary" href="{{ url('/show-agence') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour à la page précédente</a>
            <!-- <a type="button" href="{{ url('/show-agence') }}" class="btn btn-primary mt-5"> Retour à la page précedent</a> -->

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
                        document.getElementById('tt1').value=rowValue2+'||'+rowValue;
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
