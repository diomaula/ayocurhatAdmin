
{{-- sidebar --}}
<nav class="navbar fixed-top position-sticky" style="background-color: #F4FBFF ">
    
    
    {{-- header --}}
        <div class="container">
          
          <!-- navbar kiri -->
          <div class="nav-left">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="logo">
              <img src="images/logo_biru.png" />
            </div>
          </div>
    
          <!-- tengah -->
         
    
          <!-- kanan -->
          <div class="nav-Right">
            <div class="search-box">
              <img src="images/search.png" />
              <input type="text" placeholder="search" />
            </div>
            <div class="nav-user-icon online">
              <img src="images/Simple Avatar.png" />
            </div>
          </div>
    
          <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="background-color: #1d9de7">
            <div class="offcanvas-header">
              <img src="images/Logo_putih.png" width="50 px" />
              <button type="button" class="navbar-toggler" data-bs-dismiss="offcanvas" aria-label="Close">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
            <div class="offcanvas-body" style="background-color: #1d9de7">
              <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                <li class="nav-item">
                  <div class="publicCurhat">
                    <img src="images/home-icon.png" />
                    <a class="nav-link active" aria-current="page" href="index">Public curhat</a>
                  </div>
                </li>
    
                <li class="nav-item">
                  <div class="PrivatCurhat">
                    <img src="images/pengaduan.png" />
                    <a class="nav-link active" aria-current="page" href="DaftarPengaduan">Pengaduan</a>
                  </div>
                </li>
    
                <li class="nav-item">
                  <div class="Rules">
                    <img src="images/rules-icon.png" />
                    <a class="nav-link active" aria-current="page" href="rules">Rules</a>
                  </div>
                </li>
    
                <li class="nav-item">
                  <div class="Profile">
                    <img src="images/profile-icon.png" />
                    <a class="nav-link active" aria-current="page" href="#">Profile</a>
                  </div>
                </li>
                <li class="nav-item">
                  <div class="Profile">
                    <img src="images/logout-icon.png" />
                    <a class="nav-link active" aria-current="page" href="#">Logout</a>
                  </div>
                </li>
    
                <!-- <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li> -->
              </ul>
            </div>
          </div>
        </div>
      </nav>
{{-- sidebar end --}}
