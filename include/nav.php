
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="../content/home">Bhoomitech</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Home">
          <a class="nav-link" href="../content/home" id="home">
            <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text">Home</span>
          </a>
        </li>
        <?php if ($email =="userhr" || $email =="admin@gmail.com" || $email=="hrm"): ?>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="HRM">
            <!-- <a class="nav-link nav-link-collapse" data-toggle="collapse" href="#collapseHRM" data-parent="#exampleAccordion" aria-expanded="true"> -->
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseHRM" data-parent="#exampleAccordion" id="hrm">
              <i class="fa fa-fw fa-users"></i>
              <span class="nav-link-text">HRM</span>
            </a>
              <ul class="sidenav-second-level collapse" id="collapseHRM">
              <!-- <ul class="sidenav-second-level collapse in show" id="collapseHRM" aria-expanded="true" style=""> -->
                <li>
                  <a href="../employee/employee">Employee</a>
                </li>
                <li>
                  <a href="../ESP/esp">Employee Salary Particulars</a>
                </li>
                <li>
                  <a href="../EP/ep">Employee Payroll</a>
                </li>
                 <li>
                  <a href="../SP/sp">Salary Payments</a>
                </li>
                <li>
                  <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseHRM2">Report</a>
                  <ul class="sidenav-third-level collapse" id="collapseHRM2">
                    <li>
                      <a href="../employee-report/employee-report">Employee Report</a>
                    </li>
                    <li>
                      <a href="../employee-payroll-report/employee-payroll-report">Employee Payroll Report</a>
                    </li>
                    <li>
                      <a href="../salary-payments-report/salary-payments-report">Salary Payments Report</a>
                    </li>
                  </ul>
                </li>
              </ul>
        </li>
        <?php else: ?>

        <?php endif ?>

        <?php if ($email =="userinv" || $email =="admin@gmail.com"): ?>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Inventory">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMultiInv" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-file"></i>
              <span class="nav-link-text">Inventory</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseMultiInv">
              <li>
                <a href="../Item/addchecklistitem">Create New Item</a>
              </li>
              <li>
                <a href="../supplier/addnewsupplier">Add New Supplier</a>
              </li>
              <li>
                <a href="../customer/aRegisterNewCustomer">Register New Customer</a>
              </li>
              <li>
                <a href="../goodEntity/addnewgoodentry">Create New Good Entity</a>
              </li>
              <li>
                <a href="../purchaseOrder/aCreateNewPurchaseOrder">Create New Purchase Order</a>
              </li>
              <li>
                <a href="../AOD/aCreateNewAOD">Create New AOD</a>
              </li>
              <li>
                <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMultiInv2">Report</a>
                <ul class="sidenav-third-level collapse" id="collapseMultiInv2">
                  <li>
                <a href="../supplied-items/supplied-items">Supplied Items</a>
              </li>
              <li>
                <a href="../stock-category/stock-category">Stock by Category</a>
              </li>
                </ul>
              </li>
            </ul>
          </li>
        <?php else: ?>

        <?php endif ?>

        <?php if ($email =="admin@gmail.com"): ?>

          <li class="nav-item" data-toggle="tooltip">
            <a class="nav-link" href="../export/exportView" id="exportView">
              <i class="fa fa-fw fa-folder"></i>
              <span class="nav-link-text">Export</span>
            </a>
          </li>
        <?php else: ?>

        <?php endif ?>

       <?php if ($email =="admin@gmail.com"): ?>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Settings">
          <a class="nav-link" href="../settings/settings">
            <i class="fa fa-fw fa-cog"></i>
            <span class="nav-link-text">Settings</span>
          </a>
        </li>
        <?php else: ?>

        <?php endif ?>
        <?php if ($email =="admin@gmail.com" || $email=="hrm"): ?>
        <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Report">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseReport" data-parent="#exampleAccordion">
            <i class="fa fa-file-text-o"></i>
            <span class="nav-link-text" style="margin-left:5px;">Report</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseReport">
            <li>
              <a href="employee-report">Employee Report</a>
            </li>
            <li>
              <a href="supplied-items">Supplied Items</a>
            </li>
            <li>
              <a href="stock-category">Stock by Category</a>
            </li>
          </ul>
        </li> -->
      <?php else: ?>

      <?php endif ?>
        <?php if ($email =="userm"): ?>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Inventory" id="navmenu3">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Inventory</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="aCreateNewAOD">Create New AOD</a>
            </li>
          </ul>
        </li>
        <?php else: ?>

        <?php endif ?>

      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">

       <!--  <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li> -->
        <div class="admin">
        <?php
           echo $email;
        ?>
        </div>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->


  <script type="text/javascript">

      $("#hrm").click(function(){

        //alert("ppp");
         $("#hrm").removeClass("collapsed");

         $("#hrm").attr("aria-expanded","true");
    });

  </script>
