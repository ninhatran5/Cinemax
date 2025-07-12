<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cinemax - Đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="bg-white">

    <!-- Wrapper -->
    <div class="wrapper py-3">
        <div class="container">

            <!-- Header -->
            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between py-2 px-4">
                <img src="../../cinemax/images/logo.png" alt="Logo" height="60" class="mb-3 mb-md-0" />

                <form class="d-flex align-items-center justify-content-end w-100" style="max-width: 650px;">
                    <input type="text" class="form-control form-control-sm me-3" placeholder="Email hoặc SĐT"
                        style="flex: 1.2;">
                    <input type="password" class="form-control form-control-sm me-3" placeholder="Mật khẩu"
                        style="flex: 1.2;">
                    <button class="btn btn-sm btn-primary px-4" style="min-width: 130px; height: 38px;">
                        Đăng Nhập
                    </button>
                </form>
            </div>

            <!-- Thanh ngang phân cách -->
            <hr class="my-4">

            <!-- Main Content -->
            <div class="row justify-content-between">
                <!-- Left -->
                <div class="col-lg-6 mb-4">
                    <h3>Log in with your phone</h3>
                    <p>
                        - No password needed.<br />
                        - If you use Facebook on your phone, you can use your phone to log in here.
                    </p>
                    <button class="btn btn-primary">Log in with your Phone</button>
                </div>

                <!-- Right -->
                <div class="col-lg-5">
                    <div class="login-box bg-white p-4 rounded border">
                        <h3>Create an account</h3>
                        <p>It's free and always will be.</p>
                        <form>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <input type="text" class="form-control" placeholder="First name" />
                                </div>
                                <div class="col-md-6 mb-2">
                                    <input type="text" class="form-control" placeholder="Surname" />
                                </div>
                            </div>
                            <div class="mb-2">
                                <input type="email" class="form-control"
                                    placeholder="Mobile number or email address" />
                            </div>
                            <div class="mb-2">
                                <input type="password" class="form-control" placeholder="New password" />
                            </div>

                            <label>Birthday</label>
                            <div class="row mb-2">
                                <div class="col-4">
                                    <select class="form-select">
                                        <option>1</option>
                                        <option selected>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <select class="form-select">
                                        <option selected>Dec</option>
                                        <option>Jan</option>
                                        <option>Feb</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <select class="form-select">
                                        <option>1990</option>
                                        <option selected>1992</option>
                                        <option>1995</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="me-2"><input type="radio" name="gender" /> Female</label>
                                <label><input type="radio" name="gender" /> Male</label>
                            </div>

                            <button class="btn btn-success w-100">Create an account</button>
                        </form>

                        <small class="d-block text-center mt-3">
                            <a href="#">Create a Page</a> for a celebrity, band or business.
                        </small>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            @include('client.block.footer')
            @include('client.block.footer-bottom')

        </div>
    </div>
</body>

</html>
