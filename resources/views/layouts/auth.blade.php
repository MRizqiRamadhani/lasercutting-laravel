   {{-- login modal --}}
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="authentication-modalLabel">Login</h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   <form class="space-y-4" action="#">
                       <div class="mb-3">
                           <label for="email" class="form-label">Email</label>
                           <input type="email" class="form-control" id="email" name="email"
                               placeholder="nama@gmail.com" required>
                       </div>
                       <div class="mb-3">
                           <label for="password" class="form-label">Password</label>
                           <input type="password" class="form-control" id="password" name="password"
                               placeholder="••••••••" required>
                       </div>
                       <div class="d-flex justify-content-between align-items-center mb-3">
                           <div class="form-check">
                               <input class="form-check-input" type="checkbox" value="" id="remember" required>
                               <label class="form-check-label" for="remember">
                                   Remember me
                               </label>
                           </div>
                           <a href="#" class="text-sm text-decoration-none text-muted">Lost Password?</a>
                       </div>

                       <button type="submit" class="btn btn-primary w-100">Login</button>

                       <div class="text-center mt-3">
                           Belum punya akun? <a href="#" class="text-decoration-none text-muted"
                               data-bs-toggle="modal" data-bs-target="#exampleModal2">Buat Akun</a>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
   {{-- end-modal login --}}

   {{-- modal register --}}
   <div class="modal fade" id="exampleModal2" tabindex="-1" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="authentication-modalLabel">Register</h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                   <form class="space-y-4" action="#">

                       <div class="mb-3">
                           <label for="name" class="form-label">Nama</label>
                           <input type="text" class="form-control" id="name" name="name"
                               placeholder="Nama anda" required>
                       </div>
                       <div class="mb-3">
                           <label for="email" class="form-label">Email</label>
                           <input type="email" class="form-control" id="email" name="email"
                               placeholder="nama@gmail.com" required>
                       </div>
                       <div class="mb-3">
                           <label for="password" class="form-label">Password</label>
                           <input type="password" class="form-control" id="password" name="password"
                               placeholder="••••••••" required>
                       </div>
                       <div class="mb-3">
                           <label for="no-telepon" class="form-label">No Telepon</label>
                           <input type="text" class="form-control" id="no-telepon" name="no-telepon"
                               placeholder="+62" required>
                       </div>
                       <div class="d-flex justify-content-between align-items-center mb-3">
                           <div class="form-check">
                               <input class="form-check-input" type="checkbox" value="" id="remember"
                                   required>
                               <label class="form-check-label" for="remember">
                                   Remember me
                               </label>
                           </div>
                           <a href="#" class="text-sm text-decoration-none text-muted">Lost Password?</a>
                       </div>

                       <button type="submit" class="btn btn-primary w-100">Register</button>

                       <div class="text-center mt-3">
                           Sudah punya akun? <a href="#" class="text-decoration-none text-muted"
                               data-bs-dismiss="modal">Masuk</a>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
   {{-- end-modal register --}}
