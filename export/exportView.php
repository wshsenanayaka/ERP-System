<!-- nexgenITs Admin dashbord All right reseverd.-->

<?php include('../include/check.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>

   <?php include('../include/head.php') ?>
   
   <style type="text/css">
     .abtn
     {
      margin-left: 15px;
     }
    /* .column-left{ float: left; width: 33%; }
    .column-right{ float: right; width: 33%; }
    .column-center{ display: inline-block; width: 33%; }*/
    .abtn
    {
      float: right;
    }

    /* snackbar css strat */
    #snackbar {
        visibility: hidden;
        min-width: 250px;
        margin-left: -125px;
        background-color: #333;
        color: #fff;
        text-align: center;
        border-radius: 2px;
        padding: 16px;
        position: fixed;
        z-index: 1;
        left: 50%;
        bottom: 30px;
        font-size: 17px;
        }
        
        #snackbar.show {
        visibility: visible;
        -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
        animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }
        
        @-webkit-keyframes fadein {
        from {bottom: 0; opacity: 0;}
        to {bottom: 30px; opacity: 1;}
        }
        
        @keyframes fadein {
        from {bottom: 0; opacity: 0;}
        to {bottom: 30px; opacity: 1;}
        }
        
        @-webkit-keyframes fadeout {
        from {bottom: 30px; opacity: 1;}
        to {bottom: 0; opacity: 0;}
        }
        
        @keyframes fadeout {
        from {bottom: 30px; opacity: 1;}
        to {bottom: 0; opacity: 0;}
        }
        /* snackbar css end */

   </style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
   <?php include('../include/nav.php') ?>
  <div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Export Items</a>
     </li>
    </ol>
     <div class="abtn">
         <input type="submit" value="Add item" onclick="window.location='exportOperation';" class="btn btn-primary btn-sm" />
     </div>
     <div>
       <input type="text" name="search_text" id="search_text" placeholder="Search by Any Field " class="form-control  form-control-sm" />
       <br>
       <div id="result">

       </div>
     </div>

     <?php include('../include/footer.php') ?>

    <?php include('../include/modal.php') ?> 

  </div>
</body>

</html>
<script type="text/javascript">
  $(document).ready(function() {
    var max_fields      = 9; //maximum input boxes allowed
   // var wrapper         = $(".input_fields_wrap"); //Fields wrapper
   // var add_button      = $(".add_field_button"); //Add button ID

    var x = 1; //initlal text box count
    $("#add_button").click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $("#add_list").append('<div><input type="text" name="name[]" class="form-control form-control-sm"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });

    $("#add_list").on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>



<script>
$(document).ready(function(){

 load_data();

    function load_data(query)
    {
        $.ajax({
        url:"./exportTable.php",
        method:"POST",
        data:{query:query},
          success:function(data)
          {
            $('#result').html(data);
          }
        });
    }

 $('#search_text').keyup(function(){
      var search = $(this).val();
      if(search != '')
        {
          load_data(search);
        }
        else
        {
          load_data();
        }
    });
});
</script>
