<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Tables Doublons</title>
  </head>
  <body >
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
    <!-- <a href="" class="btn btn-info"><i class="fa fa-sign-out" aria-hidden="true"></i> Deconnecter</a> -->
</nav>

   <div class="container">
       <section>
   

       <table class="table table-2  mt-5">
                         <thead class="thead-dark">
                                <tr>
                               
                                <th scope="col">Nom fichier</th>
                                <th scope="col">Télécharger</th>
                                <th scope="col">Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                foreach($tableauname1 as $fichier){
                                      
                                    ?>
                                        <tr>
                                            <td><input class="file_name" name="nom_fichier" style="border:none;color: black;font-size: medium;font-weight: bolder;" size="60" value="<?php echo $fichier[0]; ?> "/></td>
                                            <td><input type="button" class="iSuppbutton btn btn-danger delete" onclick="do_supp_2();"  value="Supprimer"></td>
                                            <td><input type="button" class="btn btn-warning" onclick="do_down_2();" value="télécharger" /></td>
                                        </tr>
                                        <?php
                                }
                            ?>
                              
                                <!--tr>
                                
                                <td>Unique-base_cdd_sc2.csv_By_fichier_agence.csv2_04-10-2021.csv </td>
                                <td><a class="btn btn-warning" href=""><i class="fa fa-download" aria-hidden="true"></i> télécharger</a></td>
                                <td><a class="btn btn-danger" href=""><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</a></td>
                                </tr>
                                <tr>
                                
                                <td>Unique-base_cdd_sc2.csv_By_fichier_agence.csv2_04-10-2021.csv </td>
                                <td><a class="btn btn-warning" href=""><i class="fa fa-download" aria-hidden="true"></i> télécharger</a></td>
                                <td><a class="btn btn-danger" href=""><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</a></td>
                                </tr>
                                <tr>
                                
                                <td>Unique-base_cdd_sc2.csv_By_fichier_agence.csv2_04-10-2021.csv </td>
                                <td><a class="btn btn-warning" href=""><i class="fa fa-download" aria-hidden="true"></i> télécharger</a></td>
                                <td><a class="btn btn-danger" href=""><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</a></td>
                                </tr>
                                <tr>
                                
                                <td>Unique-base_cdd_sc2.csv_By_fichier_agence.csv2_04-10-2021.csv </td>
                                <td><a class="btn btn-warning" href=""><i class="fa fa-download" aria-hidden="true"></i> télécharger</a></td>
                                <td><a class="btn btn-danger" href=""><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</a></td>
                                </tr>
                                <tr>
                                
                                <td>Unique-base_cdd_sc2.csv_By_fichier_agence.csv2_04-10-2021.csv </td>
                                <td><a class="btn btn-warning" href=""><i class="fa fa-download" aria-hidden="true"></i> télécharger</a></td>
                                <td><a class="btn btn-danger" href=""><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</a></td>
                                </tr>
                                <tr>
                                
                                <td>Unique-base_cdd_sc2.csv_By_fichier_agence.csv2_04-10-2021.csv </td>
                                <td><a class="btn btn-warning" href=""><i class="fa fa-download" aria-hidden="true"></i> télécharger</a></td>
                                <td><a class="btn btn-danger" href=""><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</a></td>
                                </tr>
                                <tr>
                                
                                <td>Unique-base_cdd_sc2.csv_By_fichier_agence.csv2_04-10-2021.csv </td>
                                <td><a class="btn btn-warning" href=""><i class="fa fa-download" aria-hidden="true"></i> télécharger</a></td>
                                <td><a class="btn btn-danger" href=""><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</a></td>
                                </tr>
                                <tr>
                                
                                <td>Unique-base_cdd_sc2.csv_By_fichier_agence.csv2_04-10-2021.csv </td>
                                <td><a class="btn btn-warning" href=""><i class="fa fa-download" aria-hidden="true"></i> télécharger</a></td>
                                <td><a class="btn btn-danger" href=""><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</a></td>
                                </tr>
                                <tr>
                                
                                <td>Unique-base_cdd_sc2.csv_By_fichier_agence.csv2_04-10-2021.csv </td>
                                <td><a class="btn btn-warning" href=""><i class="fa fa-download" aria-hidden="true"></i> télécharger</a></td>
                                <td><a class="btn btn-danger" href=""><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</a></td>
                                </tr-->
                            </tbody>
                    </table>
                    <hr style="background-color: black;">  
                    <a class="btn btn-outline-secondary" href="" onclick="window.history.go(-1); return false;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour à la page précédente</a>

       </section>
   </div>

   <script src="http://code.jquery.com/jquery.js"></script>
          
   
                <script>
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': "{{ csrf_token() }}"
                        }
                        });
                 //$(document).ready(function(){


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

                        
                    //});
                </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>