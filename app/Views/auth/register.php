<html>

<head>
    <title>LAPORIN | Register</title>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('image/saint.png'); ?>" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
</head>

<body class="gradient-bg">









    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="shadow-lg card bg-dark text-white mb-5" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center ">

                            <?php
                            $session = session();
                            $error = $session->getFlashdata('error');
                            ?>

                            <?php if ($error) { ?>
                                <p style="color:red">Terjadi Kesalahan:
                                <ul>
                                    <?php foreach ($error as $e) { ?>
                                        <li><?php echo $e ?></li>
                                    <?php } ?>
                                </ul>
                                </p>
                            <?php } ?>

                            <form method="post" action="/auth/valid_register">

                                <div class="mb-md-5 mt-md-4 pb-5">

                                    <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
                                    <p class="text-white-50 mb-5">Please register your username and password!</p>

                                    <div class="form-outline form-white mb-4 text-start">
                                        <label class="form-label" for="typeEmailX">Username</label>
                                        <input type="text" name="username" autocomplete="off" class="form-control form-control-lg" />
                                    </div>

                                    <div class="form-outline form-white mb-4 text-start">
                                        <label class="form-label" for="typePasswordX">Password</label>
                                        <input type="password" name="password" autocomplete="off" class="form-control form-control-lg" />
                                    </div>

                                    <div class="form-outline form-white mb-4 text-start">
                                        <label class="form-label" for="typePasswordX">Confirm Password</label>
                                        <input type="password" name="confirm" autocomplete="off" class="form-control form-control-lg" />
                                    </div>

                                    <!-- <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p> -->

                                    <button class="btn btn-outline-light btn-lg px-5 text-center" type="submit" name="login">Register</button>

                                </div>
                            </form>

                            <div>
                                <p class="mb-0">Already have an account? <a href="/auth/login" class="text-white-50 fw-bold">Login</a>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>