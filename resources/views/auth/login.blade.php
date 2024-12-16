<div class="authentication-bg min-vh-100">
    <div class="bg-overlay bg-light"></div>
    <div class="container">
        <div class="d-flex flex-column min-vh-100 px-3 pt-4">
            <div class="row justify-content-center my-auto">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5>Selamat Datang</h5>
                                <p class="text-muted">Silahkan Masuk terlebih dahulu</p>
                            </div>
                            <div class="p-2 mt-4">
                                <form class="needs-validation" novalidate action="{{ url('login') }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-5">
                                        <div>
                                            <h5 class="font-size-14 mb-4">Fill the Form</h5>
                                            <div class="d-flex mb-3 flex-row gap-2">
                                                <div class="row g-3 align-items-center">
                                                    <div class="mb-3 row">
                                                        <label for="inputUsername"
                                                            class="col-sm-4 col-form-label">Username</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control"
                                                                id="inputUsername" name="username" required>
                                                        </div>
                                                        <label for="inputPassword"
                                                            class="col-sm-4 col-form-label">Password</label>
                                                        <div class="col-sm-10">
                                                            <input type="password" class="form-control"
                                                                id="inputPassword" name="password" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="container-kasir"></div>
                                    <div class="my-4">
                                        <button class="btn btn-primary w-100 waves-effect waves-light"
                                            type="submit">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div>
    </div><!-- end container -->
</div>
