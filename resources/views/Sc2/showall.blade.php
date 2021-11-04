<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>SHOW ALL</title>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
</head>
<body >
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
    <!-- <a href="" class="btn btn-info"><i class="fa fa-sign-out" aria-hidden="true"></i> Deconnecter</a> -->
</nav>
  
{!! csrf_field() !!}
                 
 <div class="container" style="border:black;">
                    <div class="row" >
                      

                            
                            <?php
                            foreach($tableauname as $fichier){
                        ?> 
                        <!--div style="display:none"-->
                              <div class="col col-lg-6 mt-5 mb-5 text-center">
                                
                                <label for="file1" style="font-weight:bold;">Nom Fichier Agence <i class="fa fa-file-word-o fa-2x" aria-hidden="true"></i> :</label>
                                <a href="{{ url('/show-agence') }}"><input type="text" id="f1" value="<?php echo $fichier[0];?>"style="border-radius:5px;border:none;font-weight: bold;color:#1B9CFC" ></a>
                                <!-- <a type="text" id="f1" style="border-radius:5px;border:none;font-weight: bold;" href="{{ url('/show-agence') }}" ><?php echo $fichier[0];?></a> -->
                              </div>
                              <div class="col col-lg-6 mt-5 mb-5 text-center">
                                <label for="file2" style="font-weight:bold;" style="border-radius:10px;margin-left:20px;">Nom Fichier Sc2 <i class="fa fa-file-word-o fa-2x" aria-hidden="true"></i> :</label>
                               <a href="{{ url('/show-sc2') }}"><input type="text" id="f2" value="<?php echo $fichier[1];?>" style="border-radius:5px;border:none;font-weight: bold;color:#1B9CFC""> </a> 
                                <!-- <a type="text" id="f1" style="border-radius:5px;border:none;font-weight: bold;" href="{{ url('/show-sc2') }}" ><?php echo $fichier[1];?></a> -->
                              </div> 
                                                   
                      

                            <?php
                            }
                        ?>
                        
                    
                <div class="d-grid gap-2 col-6 mx-auto mb-5 text-center">
                  <button class="btn btn-outline-primary" onclick="do_traitement()"><i class="fa fa-hourglass-start fa-2x" aria-hidden="true"></i> Traitement avec un fichier Sc2 vs Agence</button>
                </div>
                </div>
                <h1>pour telecharger le fichier : </h1>
                     <hr style="background-color: black;">          
                <Table class="table table-5 mt-5">
                    <thead>
                        <tr class="table-secondary">
                            <td scope="col">Nom Fichier</td>
                            <td scope="col">Supprimer</td>
                            <td scope="col">Download</td>
                        </tr>
                    </thead>
                    <tbody>
                                
                    <?php
                        $i = 0;
                        foreach($tableauname1 as $fichier){
                            $i++;
                            if($i<=5){
                               
                            ?>
                                <tr>
                                    <td><input class="file_name" name="nom_fichier" style="border:none;color: black;font-size: medium;font-weight: bolder;" size="60" value="<?php echo $fichier[0]; ?> "/></td>
                                    <td><input type="button" class="iSuppbutton btn btn-danger delete" onclick="do_supp22();"  value="Supprimer"></td>
                                    <td><input type="button" class="btn btn-warning" onclick="do_down_22();" value="download" /></td>
                                </tr>
                                <?php
                                 
                            }
                        }
                    ?>
                    </tbody>
                </Table>
                <hr style="background-color: black;"> 
            <div class="row">
                <div class="col-lg-6 text-center">
                
                    <form method="get" action="Table_fichier">
                    <?php
                            foreach($tableauname as $fichier){
                        ?> 
                            <input type="text" id="f1_1" style="display: none;" value="<?php echo $fichier[0];?>">
                            <input type="text" id="f1_2" style="display: none;" value="<?php echo $fichier[1];?>">
                        <?php
                            }
                        ?> 
                        <a class="btn btn-primary" href="{{ url('/Table_fichier') }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Voir des fichiers uniques plus anciens</a>
                    </form>
                </div>
                <div class="col-lg-6 text-center">
                    <form method="get" action="Table_fichier_2">
                        <?php
                            foreach($tableauname as $fichier){
                        ?> 
                            <input type="text" id="f2_1" style="display: none;" value="<?php echo $fichier[0];?>">
                            <input type="text" id="f2_2" style="display: none;" value="<?php echo $fichier[1];?>">
                        <?php
                            }
                        ?> 
                        <a class="btn btn-primary" href="{{ url('/Table_fichier_2') }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Voir des fichiers doubles plus anciens</a>
                    </form>
                    
                </div>
               
            </div>
            <hr style="background-color: dimgray;">
                <a class="btn btn-outline-secondary  mt-5 ml-3 mb-3" href="{{ url('/show-sc2') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour à la page précédente</a>
                <!-- <table border="1">
                    <?php
                    
                foreach($tableauname as $fichier){ // 6 et 7
                    ?>
                <tr>
                        <td valign="top">
                
                        </td>
                    </tr>
                    <?php
                    
             }
                    ?>
                </table> -->
                <script src="http://code.jquery.com/jquery.js"></script>
          
   
                <script>
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': "{{ csrf_token() }}"
                        }
                        });
                 //$(document).ready(function(){

                    function do_supp(){
                        $( ".table-1" ).on('click', 'input[type="button"]', function(e){
                            //var colValue= $(this).dataItem($(e.currentTarget).closest("tr"));
                            //console.log(colValue);
                            var value_of_file = $(this).closest("tr").find(".file_name");
                            var nom_fichier  = value_of_file[0]['defaultValue'];
                            // console.log(nom_fichier);
                            $(this).closest('tr').remove();

                            var data = { value : nom_fichier };
                        //    //url = "{{url('office/service/requirement/rule_delete/')}}" + "/" +id;
                        //    //console.log(url);

                            //window.location.href = "{{ route('show-all-prescription') }}";
                            jQuery.ajax({
                                url:"{{ url('show-all-prescription') }}",
                                type: 'GET',
                                data: data,
                                success:function(msg){
                                //    console.log('success');
                                //    console.log(msg);
                                }
                            });
                         });
                    }

                    function do_down(){
                        $(".table-1").on('click', 'input[type="button"]', function(e){
                            //var colValue= $(this).dataItem($(e.currentTarget).closest("tr"));
                            //console.log(colValue);
                            var value_of_file = $(this).closest("tr").find(".file_name");
                            var nom_fichier  = value_of_file[0]['defaultValue'];
                            //console.log(nom_fichier);
            
                            var data = { value : nom_fichier };
                            
                            jQuery.ajax({
                                url:"{{ url('downloadf') }}",
                                type: 'GET',
                                data: data,
                                success:function(msg){
                                   //console.log('success');
                                   //console.log(msg);
                                  
                                   download(""+msg+"", ""+nom_fichier+"");
                                   
                                }
                            });
                         });
                    }

                    function do_supp22(){
                        $( ".table-5" ).on('click', 'input[type="button"]', function(e){
                            //var colValue= $(this).dataItem($(e.currentTarget).closest("tr"));
                            //console.log(colValue);
                            var value_of_file = $(this).closest("tr").find(".file_name");
                            var nom_fichier  = value_of_file[0]['defaultValue'];
                            // console.log(nom_fichier);
                            $(this).closest('tr').remove();

                            var data = { value : nom_fichier };
                        //    //url = "{{url('office/service/requirement/rule_delete/')}}" + "/" +id;
                        //    //console.log(url);

                            //window.location.href = "{{ route('show-all-prescription') }}";
                            jQuery.ajax({
                                url:"{{ url('show-all-prescription') }}",
                                type: 'GET',
                                data: data,
                                success:function(msg){
                                //    console.log('success');
                                //    console.log(msg);
                                }
                            });
                         });
                    }

                    function do_down_22(){
                        $(".table-5").on('click', 'input[type="button"]', function(e){
                            //var colValue= $(this).dataItem($(e.currentTarget).closest("tr"));
                            //console.log(colValue);
                            var value_of_file = $(this).closest("tr").find(".file_name");
                            var nom_fichier  = value_of_file[0]['defaultValue'];
                            //console.log(nom_fichier);
            
                            var data = { value : nom_fichier };
                            
                            jQuery.ajax({
                                url:"{{ url('downloadf') }}",
                                type: 'GET',
                                data: data,
                                success:function(msg){
                                   //console.log('success');
                                   //console.log(msg);
                                  
                                   download(""+msg+"", ""+nom_fichier+"");
                                   
                                }
                            });
                         });
                    }

                    function download(fileUrl, fileName) {
                        var text = fileUrl;
                        // console.log('*text : '+text);
                        console.log('*fileName : '+encodeURIComponent(fileName));
                        var element = document.createElement('a');
                        //element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
                        element.setAttribute('href', 'data:text/csv;charset=utf-8,' + encodeURIComponent(text));
                        element.setAttribute('download', fileName.trim());

                        element.style.display = 'none';
                        document.body.appendChild(element);

                        element.click();

                        document.body.removeChild(element);


                        
                        
                        

                        //------------------------------

                        // var a = document.createElement("a");
                        // a.href = fileUrl;
                        // console.log('*'+fileUrl);
                        // console.log('*'+fileName);
                        // a.setAttribute("download", fileName);
                        
                        // a.click();

                        //-------------------------------

                    }

                    function do_supp_2(){
                        $( ".table-2" ).on('click', 'input[type="button"]', function(e){
                            //var colValue= $(this).dataItem($(e.currentTarget).closest("tr"));
                            //console.log(colValue);
                            var value_of_file = $(this).closest("tr").find(".file_name");
                            // console.log(value_of_file);
                            var nom_fichier  = value_of_file[0]['defaultValue'];
                            // console.log(nom_fichier);
                            $(this).closest('tr').remove();

                            var data = { value : nom_fichier };
                            jQuery.ajax({
                                url:"{{ url('delete-2') }}",
                                type: 'GET',
                                data: data,
                                success:function(msg){
                                //    console.log('success');
                                //    console.log(msg);
                                }
                            });
                         });
                    }
                    function do_down_2(){
                        $(".table-2").on('click', 'input[type="button"]', function(e){
                            //var colValue= $(this).dataItem($(e.currentTarget).closest("tr"));
                            //console.log(colValue);
                            var value_of_file = $(this).closest("tr").find(".file_name");
                            //console.log(value_of_file);
                            var nom_fichier  = value_of_file[0]['defaultValue'];
                            console.log(nom_fichier);

                            var data = { value : nom_fichier };
                            jQuery.ajax({
                                url:"{{ url('downloadf2') }}",
                                type: 'GET',
                                data: data,
                                success:function(msg){
                                //    console.log('success');
                                //    console.log(msg);
                                   download(""+msg+"", ""+nom_fichier+"");
                                }
                            });
                         });
                    }

                    function do_traitement(){
                        var fichier_1 = document.getElementById("f1").value;
                        var fichier_2 = document.getElementById("f2").value;
                        var nom_fichier = fichier_1+"||"+fichier_2;
                        console.log(nom_fichier);
                        var data = { value : nom_fichier };
                        
                        jQuery.ajax({
                            url:"{{ url('doTraitement') }}",
                            type: 'GET',
                            data: data,
                            success:function(msg){
                                console.log('success');
                                //location.reload();
                                $(document).ajaxStop(function(){
                                    window.location.reload();
                                });
                            }
                        });
                    }

                        
                    //});
                </script>
</body>

<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>