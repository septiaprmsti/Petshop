<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>website ketty petshop</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><img src="imgpetshop/logo cat and dog.png" /></div>
            <div class="Menu tampil">
                <ul>
                    <li><a href="" class="menuItem">Home</a></li>
                    <li><a href="data-produk.php" class="menuItem">Product</a></li>
                    <li><a href="add-pemesanan.php" class="menuItem">Form Pemesanan</a></li>
                    <li><a href="../logout.php" class="menuItem">Logout</a></li>
                    <li><a href="data-pemesanan.php" class="menuItem">Pemesanan</a></li>
                </ul>
            </div>
            <button class="hamburger-menu" onclick="displayMenu()">
                <i class="fa-solid fa-bars icon-bars"></i>
                <i class="fa-solid fa-xmark icon-close"></i>
            </button>
        </div>
    </nav>


    <header>
        <div class="header-opacity"></div>
        <div class="header-jumbotrom">
            <h4>Pet food shop</h4>
            <h5>WELLCOME TO<br />KETTY PETSHOP</h5>
            <p>Pusat Kebutuhan hewan peliharaan terlengkap </p>
            <a href="" class="button button-xl">SHOP MORE</a>
        </div>
    </header>

    <section id="statistic">
        <div class="wrapper">
            <div>
                <p><i class="fa-solid fa-money-bills"></i></p>
                <small>Harga Terjangkau</small>
            </div>
            <div>
                <p><i class="fa-solid fa-thumbs-up"></i></p>
                <small>Terpercaya</small>
            </div>
            <div>
                <p><i class="fa-solid fa-cart-shopping"></i></p>
                <small>Terlengkap</small>
            </div>
            <div>
                <p><i class="fa-solid fa-check"></i></p>
                <small>Berkualitas</small>
            </div>
        </div>
    </section>

    <section class="Product" id="Product">
        <div class="wrapper">
            <h4>Product</h4>
            <p>Petshop Terlengkap di Denpasar</p>
        </div>
        <div class="product-container">
            <div class="box">
                <img src="imgpetshop/whiskas.png" alt="">
                <h5>Whiskas kucing dewasa</h5>
                <div class="content">
                    <span>$3,90</span>
                    <a href="#">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="imgpetshop/meo.png" alt="">
                <h5>Meo kucing dewasa</h5>
                <div class="content">
                    <span>$3,00</span>
                    <a href="#">add to cart</a>
                </div>
            </div>
            <div class="box">
                <img src="imgpetshop/pedigree.png" alt="">
                <h5>Pedigree anak anjing</h5>
                <div class="content">
                    <span>$5,20</span>
                    <a href="#">add to cart</a>
                </div>
            </div>
        </div>
    </section>

    <section id="tentang-kami">
        <div class="wrapper">
            <p>Tentang Kami</p>
            <div>
                <div class="foto"><img src="imgpetshop/petshop.jpg" alt=""></div>
                <div class="desc">
                    <p>KettyPetshop merupakan petshop terlengkap dan terbaik di daerah Denpaar, tepatnya berada Jl. Monang maning No.304C, Denpasar Barat, Bali Indonesia 16423. Kini Anda tidak perlu khawatir dan bingung dalam mengurusi peliharaan Anda, karena kami menyediakan berbagai macam kebutuhan hewan peliharaan Anda. Dengan pekerja yang profesional dan berpengalaman di bidangnya masing-masing, kami mampu melayani Anda dengan semestinya. HalloPets sudah berpengalaman dalam mengatasi semua masalah yang Ada</p>
                    <div class="social">
                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-brands fa-tiktok"></i></a>
                        <a href=""><i class="fa-brands fa-youtube"></i></a>
                        <a href=""><i class="fa-solid fa-location-dot"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Service">
        <div class="wrapper">
            <h4>Service</h4>
            <p>Layanan KettyPetshop Terlengkap di Denpasar</p>

            <div class="grid">
                <div class="item">
                    <img src="imgpetshop/salon.jpg" />
                    <div class="item-detail">
                        <p>KettyPetshop memberikan layanan berupa Grooming dimana istilah grooming adalah perawatan atau dandan bagi hewan peliharaan. grooming pada anjing dan kucing sangat diperlukan agar nantinya badan hewan tersebut selalu bersih dan terjaga agar tidak terjangkit penyakit yang serius. Grooming menjadi salah satu pelayanan yang ada di KettyPetshop </p>
                        <div>
                            <small><i class="fa-solid fa-clock">50 jam</i>
                            </small>
                            <a href="" class="buttom"><i class="fa-solid fa-cart-shopping"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid">
                <div class="item">
                    <img src="imgpetshop/photoshop.jpg" />
                    <div class="item-detail">
                        <p>KettyPetshop memberikan layanan seperti Photoshoot, dimana anda dapat mengabadikan momen untuk hewan peliharaan anda. Tidak mudah untuk mendapatkan momen pada saat hewan peliharaan Anda sedang photo shoot, namun dengan pekerja yang sudah ahli dalam bidangnya. Maka Anda tidak perlu khawatir lagi dengan hal itu. Karena anjing dan kucing biasanya lebih mudah untuk di ambil gambarnya dibandingkan dengan hewan peliharaan yang lainnya. Dengan sedikit usaha yang dibuat oleh photographer profesional, maka akan mendapatkan hasil yang maksimal.</p>
                        <div>
                            <small><i class="fa-solid fa-clock">50 jam</i>
                            </small>
                            <a href="" class="buttom"><i class="fa-solid fa-cart-shopping"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="wrapper">&copy; 2023 KettyPetshop Denpasar Indonesia</div>
    </footer>
    <script src="js/main.js"></script>
</body>

</html>