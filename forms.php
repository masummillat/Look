<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/forms.css">
   

  
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="images/1.jpg" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                    <li class="active">
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                   
                   
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Product Detail input
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Forms
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    

                        <form role="form" action="forms.php" method="POST">
                            <div class="col-lg-6">
                            <div class="form-group">
                                <label>Product Id</label>
                                <input class="form-control" name="check_list[]"required>
                                <p class="help-block">Input product id here.</p>
                            </div>

                            <div class="form-group">
                                <label>Product Title</label>
                                <input class="form-control" name="check_list[]" placeholder="Enter Title" required>
                            </div>
                            

                            <div class="form-group">
                            	<label>Product simple description</label><br>
                            	<input type="text" name="check_list[]" placeholder="simple description" required>
                            </div>

                            

                            <div class="form-group">
                                <label>Old Price</label><br>
                                <input type="text" name="check_list[]" placeholder="300">
                                <span><input type="checkbox"></span>
                            </div>

                            <div class="form-group">
                                <label>New Price</label><br>
                                <input type="text" name="check_list[]" placeholder="300">
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <input type="file" name="check_list[]">
                            </div>
                            <div class="form-group">
                                <label>Product Info</label>
                                <input type="file" name="check_list[]">
                            </div>


                           

                          </div>

                           <div class="col-lg-6">
                                <div class="row">    
                                <div class="col-xs-12 col-md-6  col-sm-8 "> 
                                    <label>Image 1</label> 
                                    <!-- image-preview-filename input [CUT FROM HERE]-->
                                    <div class="input-group image-preview">
                                        <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                                        <span class="input-group-btn">
                                            <!-- image-preview-clear button -->
                                            <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                                <span class="glyphicon glyphicon-remove"></span> Clear
                                            </button>
                                            <!-- image-preview-input -->
                                            <div class="form-group btn btn-default image-preview-input">
                                                <span class="glyphicon glyphicon-folder-open"></span>
                                                <span class="image-preview-input-title">Browse</span>
                                                <input type="file" accept="image/png, image/jpeg, image/gif" name="check_list[]"/> <!-- rename it -->
                                            </div>
                                        </span>
                                    </div><!-- /input-group image-preview [TO HERE]--> 
                                </div>
                                
                                 <!--                               
                                <div class="col-xs-12 col-md-6  col-sm-8 "> 
                                <label>Image 2:</label> 
                                    
                                    <div class="input-group image-preview">
                                        <input type="text" class="form-control image-preview-filename" disabled="disabled"> 
                                        <span class="input-group-btn">
                                           
                                            <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                                <span class="glyphicon glyphicon-remove"></span> Clear
                                            </button>
                                         
                                            <div class="form-group btn btn-default image-preview-input">
                                                <span class="glyphicon glyphicon-folder-open"></span>
                                                <span class="image-preview-input-title">Browse</span>
                                                <input type="file" accept="image/png, image/jpeg, image/gif" name="check_list[]"/> 
                                            </div>
                                        </span>
                                    </div>
                                    
                                </div>
                                <br>
                                <br>
                                
                                <div class="col-xs-12 col-md-6  col-sm-8 ">  
                                <label>Image 3:</label>
                                    
                                    <div class="input-group image-preview">
                                        <input type="text" class="form-control image-preview-filename" disabled="disabled"> 
                                        <span class="input-group-btn">
                                           
                                            <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                                <span class="glyphicon glyphicon-remove"></span> Clear
                                            </button>
                                            
                                            <div class="form-group btn btn-default image-preview-input">
                                                <span class="glyphicon glyphicon-folder-open"></span>
                                                <span class="image-preview-input-title">Browse</span>
                                                <input type="file" accept="image/png, image/jpeg, image/gif" name="check_list[]"/> 
                                            </div>
                                        </span>
                                    </div>
                                </div>
                                -->

                            </div>
                            
                            <div class="form-group">
                                <label>Quantity</label>
                                <input class="form-control" name="check_list[]" required>
                                <p class="help-block">Input Quantity</p>
                            </div>
                                <div class="form-group">
                                <label>Categories</label>
                                <div class="checkbox">
                                    <label>
                                        <input name="category_list[]" type="checkbox" value="Men"><i class="fa fa-male">&nbsp;Men</i>
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="category_listcategory_listcategory_list[]" type="checkbox" value="Women"><i class="fa fa-female">&nbsp;Women</i>
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="category_listcategory_list[]" type="checkbox" value="Phone & Tablets"><i class="fa fa-mobile">&nbsp;Phone & Tablets</i>
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="category_list[]" type="checkbox" value="Tv,Audio & Gaming"><i class="fa fa-television">&nbsp;Tv,Audio & Gaming</i>
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="category_list[]" type="checkbox" value="Sports & Fitness"><i class="fa fa-futbol-o">&nbsp;Sports & Fitness</i>
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="category_list[]" type="checkbox" value="Baby & Toys"><i class="fa fa-child">&nbsp;Baby & Toys</i>
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input name="category_list[]" type="checkbox" value="Computing"><i class="fa fa-laptop">&nbsp;Computing</i>
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input name="category_list[]" type="checkbox" value=""><i class="fa fa-bolt">&nbsp;Others..</i>
                                    </label>
                                </div>
                            </div>
                           </div>

                            <button type="submit" name ="submit" class="btn btn-default">Submit Button</button>
                            <button type="reset" class="btn btn-default">Reset Button</button>
                        
                        </form>
                        
                        <?php
                            

                            if(isset($_POST['submit'])){//to run PHP script on submit

                                //takeing input of  categories here.......
                            $list="Others";
                            foreach ($_POST['category_list'] as $key => $c) {
                                $list=$list.$c;
                            }   
	                            if(!empty($_POST['check_list'])){
	                            // Loop to store and display values of individual checked checkbox.
		                            
	                        
                            
                            

                            $PId= $_POST['check_list'][0];
                            $PTitle= $_POST['check_list'][1];
                            $SimDesc= $_POST['check_list'][2];
                            $OldPrice= $_POST['check_list'][3];
                            $NewPrice= $_POST['check_list'][4];
                            $Description= $_POST['check_list'][5];
                            $Product_info= $_POST['check_list'][6];
                            $Image1= $_POST['check_list'][7];
                            $Image2= $_POST['check_list'][8]="";
                            $Image3= $_POST['check_list'][9]="";
                            $Quantity= $_POST['check_list'][10];
                            $Categories = $list;

                            $target_dir = "FLookWear/uploads/";
                            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                            $uploadOk = 1;
                            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                            


                           $servername = "localhost";
                            $username = "root";
                            $password = "";


                            //Create connection
                            $dbhandel = mysql_connect($servername,$username,$password) or die("Unable to connect to server");
                            echo "server connected";
                            $dbSelect = mysql_select_db("FLookWear") or die("Unable to connect to the database");
                            echo "Database is connected";

                            $sql = "insert into Product (PId,PTitle,SimDesc,OldPrice,NewPrice,Description,Product_info,Image1,Image2,Image3,Quantity,Categories) 
                                    values('$PId','$PTitle','$SimDesc','$OldPrice','$NewPrice','$Description','$Product_info','$Image1','$Image2','$Image3','$Quantity','$Categories')";

                           $query = mysql_query($sql,$dbhandel);
                            if (!$query) {
                                echo "could not enter data".mysql_error();
                            }




                                }
                            }



                         ?>










                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

      <script type="text/javascript">
        $(document).on('click', '#close-preview', function(){ 
        $('.image-preview').popover('hide');
        // Hover befor close the preview
        $('.image-preview').hover(
            function () {
               $('.image-preview').popover('show');
            }, 
             function () {
               $('.image-preview').popover('hide');
            }
        );    
    });

    $(function() {
        // Create the close button
        var closebtn = $('<button/>', {
            type:"button",
            text: 'x',
            id: 'close-preview',
            style: 'font-size: initial;',
        });
        closebtn.attr("class","close pull-right");
        // Set the popover default content
        $('.image-preview').popover({
            trigger:'manual',
            html:true,
            title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
            content: "There's no image",
            placement:'bottom'
        });
        // Clear event
        $('.image-preview-clear').click(function(){
            $('.image-preview').attr("data-content","").popover('hide');
            $('.image-preview-filename').val("");
            $('.image-preview-clear').hide();
            $('.image-preview-input input:file').val("");
            $(".image-preview-input-title").text("Browse"); 
        }); 
        // Create the preview image
        $(".image-preview-input input:file").change(function (){     
            var img = $('<img/>', {
                id: 'dynamic',
                width:250,
                height:200
            });      
            var file = this.files[0];
            var reader = new FileReader();
            // Set preview image into the popover data-content
            reader.onload = function (e) {
                $(".image-preview-input-title").text("Change");
                $(".image-preview-clear").show();
                $(".image-preview-filename").val(file.name);            
                img.attr('src', e.target.result);
                $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
            }        
            reader.readAsDataURL(file);
        });  
    });
    </script>

</body>

</html>
