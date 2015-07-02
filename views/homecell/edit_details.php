<?php
require_once('class_breadcrumbs.php');
$bc = new breadcrumbs();
$bc->crumbs();
echo $bc->breadcrumbs;

?>


<h4>Edit Homecell Details</h4>


<div class="panel panel-info" >
   <div class="panel-heading normal-font"><i class="fa fa-briefcase fa-fw"></i>&emsp;Homecell Details</div>
   <div class="panel-body">
      <div class="row">
         <div class="col-md-10">

            <!-- PAGE TITLE -->
            <div ng-controller="formController as formCtrl">

             <!-- SHOW ERROR/SUCCESS MESSAGES -->
             <div id="successMsg" class="alert alert-success " style="display:none;"></div>
             <div id="errorMsg" class="alert alert-danger" style="display:none;" ></div>

             <?php

             require 'class_form.php';



             $ng1 ="ng";

             $fm = new oneColForm();
             $fm->create_form('addHomecell', '');
            
             $fm->create_textField('hc_name', 'text', 'hc_name', 'Homecell Name:', $val="Sammy");
            // $fm->create_textArea('desc', 'text', 'desc', 'Description:', $val="");
             $fm->create_textArea('hc_desc', '', 'hc_desc', 'Description:', '');
             $fm->create_button('submit', 'submit', 'Submit');
             echo $fm->formText;

             ?>

                   </div>

               </div>
               <br />
           </div>

       </div>
   </div>



</div>
<br>
