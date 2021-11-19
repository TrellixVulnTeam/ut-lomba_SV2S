<div class="min-vh-100 p-head">
    <div class="container-xxl px-md-5 form-container b-radius-28">
        <div class="d-flex position-relative h-100">
            <div class="w-50 bg-white border border-3 border-white b-radius-28 position-absolute start-0 bottom-0 top-0">
                <section class="form-section px-5 h-100 d-flex flex-column justify-content-center align-items-start">
                    <div class="mb-4">
                        <div class="mb-3 bg-lighter-danger color-danger font-w-600 b-radius-6 p-3 py-2">
                            Kamu sudah 3x gagal memasukkan password, coba lagi dalam ..
                        </div>
                        <p class="text-center font-w-600 w-100">3 menit 2 detik</p>
                    </div>
                    <p class="brand mb-4">Masuk</p>

                    <input class="auth-input mb-4" type="text" placeholder="Email">

                    <div class="position-relative w-100">
                        <input class="auth-input error mb-4" id="auth-password" type="password" placeholder="Password">
                        <span class="position-absolute end-0 pt-2 font-w-600 togglePassword" toggle="#auth-password">Lihat</span>
                    </div>


                    <a href="#" class="font-w-600 my-3 ps-2">Forgot your password</a>
                    <button type="submit" class="auth-btn mt-3">Masuk</button>
                    <p class="text-center w-100 mt-3">Belum punya akun ? <a href="<?= site_url('sign-up') ?>" class="font-w-600">Daftar</a></p>
                </section>
            </div>
            <div class="auth-img ms-auto">
                <img src="<?= site_url() ?>assets/src/img/login-image.png" alt="">
            </div>
        </div>
    </div>
</div>