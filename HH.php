<div id="myModalA" class="modal fade"  role="dialog">
   <div class="modal-dialog modal-lg">
     <div class="modal-content">
       <div class="modal-header" style="border-bottom: 1px solid #000000;">
         <h4 class="heda-text" style="float: left;">Bank Account</h4>
       </div>
       <div class="modal-body aa">
         <?php
           $queryac ="SELECT * FROM accountinfor";
           $resultac =mysqli_query($conn,$queryac);
          ?>
          <table class="table table-bordered table-sm">
            <thead>
              <tr>
                <th>Company</th>
                <th>Bank Name</th>
                <th>Account No</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       </div>
     </div>
   </div>
 </div>
