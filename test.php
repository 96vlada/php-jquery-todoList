 <?php
    require(dirname(__FILE__, 2) . '/scripts/crud/selectAll.php');
    ?>

 <ul id="main-ul" class="list-group">
     <li class="list-group-item bg-primary text-white">Cras justo odio</li>

     <?php
        foreach ($jova_select_all as $jova_select) {
        ?>

         <div class="parent">
             <li class="list-group-item d-flex flex-column flex-sm-column flex-md-row flex-lg-row flex-xl-row justify-content-between align-items-center">
                 <h6><b><?php echo $jova_select['Item']; ?></b></h6>
                 <div class="mt-2 mt-sm-2 mt-md-0 mt-lg-0 mt-xl-0">
                     <button class="btn btn-info edit-button">Edit</button>
                     <button class="btn btn-danger">Delete</button>
                 </div>
             </li>
             <li class="list-group-item bg-light edit-form">
                 <?php
                    include(dirname(__FILE__) . "/formEdit.php");
                    ?>
             </li>
         </div>

     <?php
        }
        ?>

 </ul>