<?php
require_once('class_breadcrumbs.php');
$bc = new breadcrumbs();
$bc->crumbs();
echo $bc->breadcrumbs;

?>


<h4>View Homecells</h4>


<div class="panel panel-info" >
   <div class="panel-heading normal-font"><i class="fa fa-briefcase fa-fw"></i>&emsp;Homecells</div>
   <div class="panel-body">
      <div class="row">
         <div class="col-md-10">
            
            <form class="form-inline">
                <div class="form-group">
                    <label >Search</label>&nbsp;&emsp;
                    <input type="text" ng-model="search" class="form-control" placeholder="Search">
                </div>
            </form>
            <br />
             <!-- SHOW ERROR/SUCCESS MESSAGES -->
             <div id="successMsg" class="alert alert-success " style="display:none;"></div>
             <div id="errorMsg" class="alert alert-danger" style="display:none;" ></div>

             <!--<div ng-init="homecell_list()"> -->
             <list-homecell>
                <table class="table table-striped table-bordered">
                  <thead>
                      <tr>
                        <th ng-click="sort('hcID')">ID&emsp;
                          <span class="glyphicon sort-icon" ng-show="sortKey=='hcID'" ></span>
                        </th>
                        <th ng-click="sort('hcName')">Homecell Name&emsp;
                            <span class="glyphicon sort-icon" ng-show="sortKey=='hcName'"></span>
                        </th>
                        <th ng-click="sort('hcDesctiption')">Homecell Description&emsp;
                            <span class="glyphicon sort-icon" ng-show="sortKey=='hcDescription'"></span>
                        </th>
                      </tr>
                  </thead>
                  <!--<tr ng-repeat="item in pagedItems|orderBy:sortKey:reverse|filter:search"> -->
                  <tr dir-paginate="item in pagedItems|orderBy:sortKey:reverse|filter:search|itemsPerPage:5">
                  
                    <td width="50"> {{item.hcID}} </td>
                    <td width="150"> {{item.hcName }} </td>
                    <td width="200"> {{item.hcDescription }} </td>
                  </tr> 
                </table>

                <dir-pagination-controls  max-size="5"  direction-links="true" boundary-links="true" >
                </dir-pagination-controls>
             
             </list-homecell>
               <table>
                 <tr >
                   <td>
                     
                   </td>
                 </tr>
               </table>
             </div>

           </div>
        <br />
       </div>

       </div>
   </div>



</div>
<br>
