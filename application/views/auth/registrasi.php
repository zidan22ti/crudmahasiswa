<div class="container">
    <div class="cad o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Buat Akun</h1>
                        </div>
                        <form class="user" method="POST" action="<?= base_url('auth/registrasi'); ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" value="<?= set_value('nama') ?>" id="nama" name="nama" placeholder="Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" value="<?= set_value('email') ?>" id="email" name="email" placeholder="email">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" value="<?= set_value('password1') ?>" id="password1" name="password1" placeholder="Password">
                                </div>

                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" value="<?= set_value('password2') ?>" id="password2" name="password2" placeholder="UlangiPassword">
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Daftar Akun
                                </button>
                            </div>
                        </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?=base_url('auth');?>" >Sudah Punya Akun? Login!</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>