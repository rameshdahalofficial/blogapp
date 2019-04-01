<?php include("partial/header.php"); ?>
        <section class="py-5 main-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-3">
                        <h1 class="text-dark text-center">Login</h1>
                        <hr class="mb-5" />
                        <div class="card">
                            <div class="card-body">
                                <form type="post" action="./admin/admin.php" autocomplete="off">
                                    <div class="form-group">
                                        <label class="font-weight-bold" for=""
                                            >Username or Emaill Address</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="username"
                                            placeholder=""
                                        />
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-bold" for=""
                                            >Password</label
                                        >
                                        <input
                                            type="password"
                                            class="form-control"
                                            name="password"
                                        />
                                    </div>
                                    <input
                                      
                                        type="submit"
                                        id="sendlogin"
                                        class="btn btn-primary"
                                    >
                                      
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include("partial/footer.php"); ?>