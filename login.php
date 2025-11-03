<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Aplikasi Stok Barang Salon</title>
    <link rel="shortcut icon" href="<?= base_url('assets/img/favicon.ico'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <style>
        /* Pastikan body memiliki tinggi penuh dan menggunakan Flexbox */
        body {
            font-family: 'Roboto', sans-serif;
            color: #fff;
            background: linear-gradient(45deg, #6C63AC, #3F4D8C);
            height: 100vh; /* Pastikan body memiliki tinggi penuh */
            display: flex;
            align-items: center; /* Vertikal center */
            justify-content: center; /* Horizontal center */
            margin: 0;
            flex-direction: column;
        }

        .login {
            width: 120px;
            height: 120px;
            margin-bottom: 20px;
            border-radius: 50%; /* Membuat logo berbentuk bulat */
            object-fit: cover; /* Menjaga proporsi gambar saat dibulatkan */
        }

        .login h3 {
            font-size: 24px;
            font-weight: 700;
            margin-top: 10px;
        }

        .jumbotron {
            background: rgba(100%, 100%, 100%, 0.1);
            color: #555;
            text-align: center;
        }

        .jumbotron label {
            color: #fff;
        }

        .jumbotron .text-center p {
            font-size: 14px;
            color: #ddd;
            margin-top: 10px;
        }

        .btn-warning {
            background: #b307b3;
            border-color: #b307b3;
        }

        .btn-warning:hover {
            background: #cf1ecf;
            border-color: #cf1ecf;
        }

        .form-group input {
            border-radius: 20px;
            padding: 12px 20px;
            background-color: #fff;
            color: #333;
            width: 100%;
            margin-top: 10px;
            border: 2px solid #ddd;
            transition: border 0.3s;
        }

        .form-group input:focus {
            outline: none;
            border-color: #6A679E;
        }

        .error-message {
            font-size: 13px;
        }

        .form-group button {
            background: #b307b3;
            border-radius: 20px;
            padding: 12px 30px;
            width: 100%;
            border: none;
            color: #fff;
            font-weight: bold;
            transition: background 0.3s;
        }

        .form-group button:hover {
            background: #cf1ecf;
        }

        /* Form wrapper tanpa responsivitas */
        .login-form-wrapper {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 40px;
            width: 400px; /* Ukuran tetap */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 0 auto; /* Untuk memastikan konten tetap di tengah */
        }

        footer {
            font-size: 12px;
            color: #ddd;
            text-align: center;
            margin-top: 20px;
        }

        footer a {
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-12 col-sm-12 text-center">
                <img src="<?= base_url('assets/img/logo_bisnis.jpg'); ?>" class="login" alt="Logo" />
                <h3>Aplikasi Stok Salon</h3>
                <p>Created by Junita Purba (11250132)</p>
                
                <?php
                if ($this->session->flashdata('alert')) {
                    echo '<div class="alert alert-danger" role="alert">
                        ' . $this->session->flashdata('alert') . '
                      </div>';
                }
                ?>
            </div>
            <div class="col-md-6 col-sm-12">
                <!-- Login Form Wrapper tanpa responsivitas -->
                <div class="login-form-wrapper">
                    <?= form_open(); ?>
                    <div class="form-group">
                        <label for="username"><i class="fa fa-user"></i> Username</label>
                        <input type="text" class="form-control <?= (form_error('username')) ? 'is-invalid' : ''; ?>" name="username" id="username" placeholder="Username" autocomplete="off" value="<?= set_value('username'); ?>">
                        <div class="invalid-feedback">
                            <?= form_error('username', '<p class="error-message">', '</p>'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password"><i class="fa fa-lock"></i> Password</label>
                        <input type="password" class="form-control <?= (form_error('password')) ? 'is-invalid' : ''; ?>" id="password" placeholder="Password" autocomplete="off" name="password">
                        <div class="invalid-feedback">
                            <?= form_error('password', '<p class="error-message">', '</p>'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="submit" value="submit" class="btn btn-warning text-white">Sign In <i class="fa fa-sign-in"></i></button>
                    </div>

                    <?= form_close(); ?>
                </div>
                <!-- End Login Form Wrapper -->
                <footer>
                    <p>&copy; <script>document.write(new Date().getFullYear());</script> All rights reserved</p>
                </footer>
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/popper.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>

</html>
