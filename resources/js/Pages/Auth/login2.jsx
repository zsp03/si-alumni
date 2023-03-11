import {} from "react-bootstrap" 
import alumni1 from '../asset/image/alumni1.jpg'
import alumni2 from '../asset/image/alumni2.jpg'
import alumni3 from '../asset/image/alumni3.jpg'

const LoginPage = () => {
    return(
    <section class="login d-flex ">
        <div class="login-left w-50 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-7">
              <div class="header">
                <p>Selamat datang di Portal Alumni</p>
                <h1>Universitas Hasanuddin</h1>
              </div>
              <div class="login-form">
                <label for="email" class="form-label">Email</label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  placeholder="Masukkan Email Anda"
                  required/>
  
                <label for="Password" class="form-label">Sandi</label>
                <input
                  type="Password"
                  class="form-control"
                  id="Password"
                  placeholder="Masukkan Sandi Anda"/>
                <a href="#" class="text-center">Lupa Password</a>
                <button class="signin">Sign In</button>
                <div class="text-center">
                  <span class="d-inline">Don't Have a Accoun?
                      <a href="#" class="buatAkun">Buat Akun</a></span>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="login-right w-50 h-100">
          <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/asset/alumni1.jpg" class="d-block w-100" alt="unhas"/>
                </div>
                <div class="carousel-item">
                  <img src="/asset/alumni2.jpg" class="d-block w-100" alt="unhas"/>
                </div>
                <div class="carousel-item">
                <img src="/asset/alumni3.jpg" class="d-block w-100" alt="unhas"/>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
          </div>
        </div>
  
        
    </section>
    )
}