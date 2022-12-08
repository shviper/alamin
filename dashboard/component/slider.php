      <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
          <div class="sb-sidenav-menu">
            <div class="nav">
              <div class="sb-sidenav-menu-heading">Core</div>
              <a class="nav-link" href="../index.php">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-tachometer-alt"></i>
                </div>
                Dashboard
              </a>
              <a class="nav-link" href="../site/admin.php">
                <div class="sb-nav-link-icon">
                  <i class="fa-solid fa-address-book"></i>
                </div>
                Admin Contact
              </a>
              <div class="sb-sidenav-menu-heading">User Control</div>

<?php
if ($_SESSION["who"] == 1) {
  
  echo '    
                <a
                class="nav-link collapsed"
                href="#"
                data-bs-toggle="collapse"
                data-bs-target="#collapseLayouts"
                aria-expanded="false"
                aria-controls="collapseLayouts"
              >
                <div class="sb-nav-link-icon">
                  <i class="fas fa-columns"></i>
                </div>
                User
                <div class="sb-sidenav-collapse-arrow">
                  <i class="fas fa-angle-down"></i>
                </div>
              </a>
            <div
                class="collapse"
                id="collapseLayouts"
                aria-labelledby="headingOne"
                data-bs-parent="#sidenavAccordion"
              >
                <nav class="sb-sidenav-menu-nested nav">
                  <a class="nav-link" href="../user/register.php"
                    >Add User</a
                  >
                  <a class="nav-link" href="../user/userList.php"
                    >User List</a
                  >
                </nav>
              </div>';
}
?>
              <a
                class="nav-link collapsed"
                href="#"
                data-bs-toggle="collapse"
                data-bs-target="#collapsePages"
                aria-expanded="false"
                aria-controls="collapsePages"
              >
                <div class="sb-nav-link-icon">
                  <i class="fas fa-book-open"></i>
                </div>
                Website
                <div class="sb-sidenav-collapse-arrow">
                  <i class="fas fa-angle-down"></i>
                </div>
              </a>
              
              <div
                class="collapse"
                id="collapsePages"
                aria-labelledby="headingTwo"
                data-bs-parent="#sidenavAccordion"
              >
                <nav
                  class="sb-sidenav-menu-nested nav accordion"
                  id="sidenavAccordionPages"
                >
                <a class="nav-link" href="../site/list.php">
                Website List
                 </a>
                  <a
                    class="nav-link collapsed"
                    href="./site/list.php"
                    data-bs-toggle="collapse"
                    data-bs-target="#pagesCollapseAuth"
                    aria-expanded="false"
                    aria-controls="pagesCollapseAuth"
                  >
                    Phising Site Info
                    <div class="sb-sidenav-collapse-arrow">
                      <i class="fas fa-angle-down"></i>
                    </div>
                  </a>
                  <div
                    class="collapse"
                    id="pagesCollapseAuth"
                    aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordionPages"
                  >
                    <nav class="sb-sidenav-menu-nested nav">
                      <a class="nav-link" href="../info/eroticmonkey.php">Eroticmonkey</a>
                      <a class="nav-link" href="../info/tryst.php">Tryst</a>
                      <a class="nav-link" href="../info/slixa.php">Slixa</a>
                      <a class="nav-link" href="../info/skiplhagames.php">Skiplhagames</a>
                    </nav>
                  </div>

                </nav>
                
              </div>
              
           
            </div>
          </div>
          <div class="sb-sidenav-footer">
            <div class="small">Logged in Control panel</div>

          </div>
        </nav>
      </div>
      