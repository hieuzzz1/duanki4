<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Dự án 1</title>
    <link rel="stylesheet" href="../Giaodien/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href=".../img/style.css">
    <link rel="stylesheet" href="../assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/owlcarousel/assets/owl.theme.default.min.css">
    <script src="../assets/vendors/jquery.min.js"></script>
    <script src="../assets/owlcarousel/owl.carousel.js"></script>
    <link rel="stylesheet" href="../img/style.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/boosted@5.2.3/dist/js/boosted.bundle.min.js" integrity="sha384-MANW37RG4MpFWPMCcNZBnvSobOkBpIGlbBkEzTtD4FbbOzJXbW8TddND1ak2lfsB" crossorigin="anonymous"></script> -->
</head>

<body>
    <div id="scrollToTopBtn" onclick="scrollToTop()"><i class="fa-solid fa-arrow-up"></i></div>
    <style>
        .thai{
            background-color: #ff9f96;
            height: 70px;
            
            
        }
        a{
            text-decoration: none;
            line-height: 45px;
            margin-left: 5px;
        }
        
        body{
            margin-top: 20px;
        }
        #scrollToTopBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #DC3545;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        

        #scrollToTopBtn:hover {
            background-color: #ff9f96;
        }
    </style>
    
    <!-- header -->
    <section class="myheader mymainmenu thai">
        <div class="container paddingg">
            <div class="row">
                <!-- logo -->
                <div class="col-md-2" style="min-height: 70px; margin-top: 10px;">
                    <a href="index.php"><img src="../img/logo/logo_duan1HT.png" style="max-width: 100%; height: 50px;"
                            class="img-fluid" alt=""></a>
                </div>
                <!-- search -->
                <div class="col-md-6">
                    <form class="css input-group mb-3 mt-2 pt-2">
                        <input type="text" class="form-control search" placeholder="Tìm kiếm sản phẩm"
                            aria-label="Tìm kiếm sản phẩm" aria-describedby="basic-addon2">
                        <button class="input-group-text" type="submit" id="basic-addon2"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                        <style>
                            .search input[type=text] {
                                width: 100px !important;

                            }
                        </style>
                    </form>
                </div>
                <!-- support -->
                <div class="col-md-4 mt-2">
                    <div class="row">
                        <div class="col">
                            <div class="row ps-5">
                                <div class="col-2 ps-2">
                                    <div class="fs-3 text-danger">
                                        <i class="fa-solid fa-house"></i>
                                    </div>
                                </div>
                                <div class="col-10 ps-3 trangchu">
                                    <a href="../index.php">Trang chủ</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row pe-6">
                                <div class="col-2">
                                    <div class="fs-3 text-danger">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-10">
                                    <a href="">Xin Chào Admin</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
       
                




                </div>
            </div>
        </div>
    </section>

