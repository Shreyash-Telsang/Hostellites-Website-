


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>hostellars</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
        <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h1 class="m-0 text-primary text-uppercase">hostellars</h1>
                    </a>
                </div>
                <div class="col-lg-9">
                    
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="index.html" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">hostellars</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <!-- <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="index.html" class="nav-item nav-link active">Home</a>
                                <a href="about.html" class="nav-item nav-link">About</a>
                                <a href="service.html" class="nav-item nav-link">Services</a>
                                <a href="room.html" class="nav-item nav-link">Rooms</a>
                               
                                <a href="contact.html" class="nav-item nav-link">Contact</a>
                            </div>
                            
                        </div> -->
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Choose your Choice</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">Get the Best for you.</h1>
                                <a href="login.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Login/Sign up as user</a>
                                <a href="r_login.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Login/Sign up as rector</a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Choose your Choice</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">Get the Best for you.</h1>
                                <a href="login2.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Login/Sign up</a>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Booking Start -->
        <!-- <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="bg-white shadow" style="padding: 35px;">
                    <div class="row g-2">
                        <div class="col-md-10">
                            <div class="row g-2">
                                <div class="col-md-3">
                                    
                                </div>
                                
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option selected>No. of seats</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option selected>City</option>
                                        <option value="Achalpur">Achalpur</option>
    <option value="Ahiri">Ahiri</option>
    <option value="Ahmadnagar">Ahmadnagar</option>
    <option value="Ahmadpur">Ahmadpur</option>
    <option value="Airoli">Airoli</option>
    <option value="Ajra">Ajra</option>
    <option value="Akalkot">Akalkot</option>
    <option value="Akola">Akola</option>
    <option value="Akot">Akot</option>
    <option value="Alandi">Alandi</option>
    <option value="Alibag">Alibag</option>
    <option value="Allapalli">Allapalli</option>
    <option value="Amalner">Amalner</option>
    <option value="Amarnath">Amarnath</option>
    <option value="Ambad">Ambad</option>
    <option value="Ambajogai">Ambajogai</option>
    <option value="Amravati">Amravati</option>
    <option value="Amravati Division">Amravati Division</option>
    <option value="Anjangaon">Anjangaon</option>
    <option value="Anshing">Anshing</option>
    <option value="Arangaon">Arangaon</option>
    <option value="Artist Village">Artist Village</option>
    <option value="Arvi">Arvi</option>
    <option value="Ashta">Ashta</option>
    <option value="Ashti">Ashti</option>
    <option value="Aurangabad">Aurangabad</option>
    <option value="Ausa">Ausa</option>
    <option value="Badlapur">Badlapur</option>
    <option value="Balapur">Balapur</option>
    <option value="Ballalpur">Ballalpur</option>
    <option value="Baramati">Baramati</option>
    <option value="Barsi">Barsi</option>
    <option value="Basmat">Basmat</option>
    <option value="Beed">Beed</option>
    <option value="Bhandara">Bhandara</option>
    <option value="Bhayandar">Bhayandar</option>
    <option value="Bhigvan">Bhigvan</option>
    <option value="Bhiwandi">Bhiwandi</option>
    <option value="Bhor">Bhor</option>
    <option value="Bhudgaon">Bhudgaon</option>
    <option value="Bhum">Bhum</option>
    <option value="Bhusaval">Bhusaval</option>
    <option value="Bid">Bid</option>
    <option value="Biloli">Biloli</option>
    <option value="Boisar">Boisar</option>
    <option value="Borivli">Borivli</option>
    <option value="Buldana">Buldana</option>
    <option value="Chakan">Chakan</option>
    <option value="Chalisgaon">Chalisgaon</option>
    <option value="Chanda">Chanda</option>
    <option value="Chandor">Chandor</option>
    <option value="Chandrapur">Chandrapur</option>
    <option value="Chandur">Chandur</option>
    <option value="Chandur Bazar">Chandur Bazar</option>
    <option value="Chicholi">Chicholi</option>
    <option value="Chikhli">Chikhli</option>
    <option value="Chinchani">Chinchani</option>
    <option value="Chiplun">Chiplun</option>
    <option value="Chopda">Chopda</option>
    <option value="Dabhol">Dabhol</option>
    <option value="Dahanu">Dahanu</option>
    <option value="Darwha">Darwha</option>
    <option value="Daryapur">Daryapur</option>
    <option value="Dattapur">Dattapur</option>
    <option value="Daulatabad">Daulatabad</option>
    <option value="Daund">Daund</option>
    <option value="Dehu">Dehu</option>
    <option value="Deolali">Deolali</option>
    <option value="Deoli">Deoli</option>
    <option value="Deulgaon Raja">Deulgaon Raja</option>
    <option value="Dharangaon">Dharangaon</option>
    <option value="Dharmabad">Dharmabad</option>
    <option value="Dharur">Dharur</option>
    <option value="Dhule">Dhule</option>
    <option value="Dhulia">Dhulia</option>
    <option value="Diglur">Diglur</option>
    <option value="Digras">Digras</option>
    <option value="Dombivli">Dombivli</option>
    <option value="Dondaicha">Dondaicha</option>
    <option value="Dudhani">Dudhani</option>
    <option value="Durgapur">Durgapur</option>
    <option value="Erandol">Erandol</option>
    <option value="Faizpur">Faizpur</option>
    <option value="Gadchiroli">Gadchiroli</option>
    <option value="Gadhinglaj">Gadhinglaj</option>
    <option value="Gangakher">Gangakher</option>
    <option value="Gangapur">Gangapur</option>
    <option value="Gevrai">Gevrai</option>
    <option value="Ghatanji">Ghatanji</option>
    <option value="Ghoti Budrukh">Ghoti Budrukh</option>
    <option value="Ghugus">Ghugus</option>
    <option value="Gondiya">Gondiya</option>
    <option value="Goregaon">Goregaon</option>
    <option value="Guhagar">Guhagar</option>
    <option value="Hadgaon">Hadgaon</option>
    <option value="Harnai">Harnai</option>
    <option value="Hinganghat">Hinganghat</option>
    <option value="Hingoli">Hingoli</option>
    <option value="Hirapur Hamesha">Hirapur Hamesha</option>
    <option value="Ichalkaranji">Ichalkaranji</option>
    <option value="Igatpuri">Igatpuri</option>
    <option value="Indapur">Indapur</option>
    <option value="Jaisingpur">Jaisingpur</option>
    <option value="Jalgaon">Jalgaon</option>
    <option value="Jalgaon Jamod">Jalgaon Jamod</option>
    <option value="Jalna">Jalna</option>
    <option value="Jawhar">Jawhar</option>
    <option value="Jejuri">Jejuri</option>
    <option value="Jintur">Jintur</option>
    <option value="Junnar">Junnar</option>
    <option value="Kagal">Kagal</option>
    <option value="Kalamb">Kalamb</option>
    <option value="Kalamnuri">Kalamnuri</option>
    <option value="Kalas">Kalas</option>
    <option value="Kalmeshwar">Kalmeshwar</option>
    <option value="Kalundri">Kalundri</option>
    <option value="Kalyan">Kalyan</option>
    <option value="Kamthi">Kamthi</option>
    <option value="Kandri">Kandri</option>
    <option value="Kankauli">Kankauli</option>
    <option value="Kannad">Kannad</option>
    <option value="Karad">Karad</option>
    <option value="Karanja">Karanja</option>
    <option value="Karjat">Karjat</option>
    <option value="Karmala">Karmala</option>
    <option value="Kati">Kati</option>
    <option value="Katol">Katol</option>
    <option value="Khadki">Khadki</option>
    <option value="Khamgaon">Khamgaon</option>
    <option value="Khapa">Khapa</option>
    <option value="Kharakvasla">Kharakvasla</option>
    <option value="Khed">Khed</option>
    <option value="Khetia">Khetia</option>
    <option value="Khopoli">Khopoli</option>
    <option value="Khuldabad">Khuldabad</option>
    <option value="Kinwat">Kinwat</option>
    <option value="Kodoli">Kodoli</option>
    <option value="Kolhapur">Kolhapur</option>
    <option value="Kondalwadi">Kondalwadi</option>
    <option value="Kopargaon">Kopargaon</option>
    <option value="Koradi">Koradi</option>
    <option value="Koregaon">Koregaon</option>
    <option value="Koynanagar">Koynanagar</option>
    <option value="Kudal">Kudal</option>
    <option value="Kurandvad">Kurandvad</option>
    <option value="Kurduvadi">Kurduvadi</option>
    <option value="Lanja">Lanja</option>
    <option value="Lasalgaon">Lasalgaon</option>
    <option value="Latur">Latur</option>
    <option value="Lohogaon">Lohogaon</option>
    <option value="Lonar">Lonar</option>
    <option value="Lonavla">Lonavla</option>
    <option value="Mahabaleshwar">Mahabaleshwar</option>
    <option value="Mahad">Mahad</option>
    <option value="Maindargi">Maindargi</option>
    <option value="Majalgaon">Majalgaon</option>
    <option value="Makhjan">Makhjan</option>
    <option value="Malegaon">Malegaon</option>
    <option value="Malkapur">Malkapur</option>
    <option value="Malvan">Malvan</option>
    <option value="Manchar">Manchar</option>
    <option value="Mangrul Pir">Mangrul Pir</option>
    <option value="Manmad">Manmad</option>
    <option value="Manor">Manor</option>
    <option value="Mansar">Mansar</option>
    <option value="Manwat">Manwat</option>
    <option value="Matheran">Matheran</option>
    <option value="Mehekar">Mehekar</option>
    <option value="Mhasla">Mhasla</option>
    <option value="Mhasvad">Mhasvad</option>
    <option value="Mohpa">Mohpa</option>
    <option value="Moram">Moram</option>
    <option value="Morsi">Morsi</option>
    <option value="Mowad">Mowad</option>
    <option value="Mudkhed">Mudkhed</option>
    <option value="Mukher">Mukher</option>
    <option value="Mul">Mul</option>
    <option value="Mumbai">Mumbai</option>
    <option value="Mumbai Suburban">Mumbai Suburban</option>
    <option value="Murbad">Murbad</option>
    <option value="Murgud">Murgud</option>
    <option value="Murtajapur">Murtajapur</option>
    <option value="Murud">Murud</option>
    <option value="Nagothana">Nagothana</option>
    <option value="Nagpur">Nagpur</option>
    <option value="Nagpur Division">Nagpur Division</option>
    <option value="Naldurg">Naldurg</option>
    <option value="Nanded">Nanded</option>
    <option value="Nandgaon">Nandgaon</option>
    <option value="Nandura Buzurg">Nandura Buzurg</option>
    <option value="Nandurbar">Nandurbar</option>
    <option value="Nashik">Nashik</option>
    <option value="Nashik Division">Nashik Division</option>
    <option value="Navi Mumbai">Navi Mumbai</option>
    <option value="Neral">Neral</option>
    <option value="Nilanga">Nilanga</option>
    <option value="Nipani">Nipani</option>
    <option value="Osmanabad">Osmanabad</option>
    <option value="Ozar">Ozar</option>
    <option value="Pachora">Pachora</option>
    <option value="Paithan">Paithan</option>
    <option value="Palghar">Palghar</option>
    <option value="Panchgani">Panchgani</option>
    <option value="Pandharpur">Pandharpur</option>
    <option value="Panhala">Panhala</option>
    <option value="Panvel">Panvel</option>
    <option value="Parbhani">Parbhani</option>
    <option value="Parli Vaijnath">Parli Vaijnath</option>
    <option value="Parola">Parola</option>
    <option value="Partur">Partur</option>
    <option value="Patan">Patan</option>
    <option value="Pathardi">Pathardi</option>
    <option value="Pathri">Pathri</option>
    <option value="Patur">Patur</option>
    <option value="Pawni">Pawni</option>
    <option value="Pen">Pen</option>
    <option value="Phaltan">Phaltan</option>
    <option value="Pimpri">Pimpri</option>
    <option value="Pipri">Pipri</option>
    <option value="Powai">Powai</option>
    <option value="Pulgaon">Pulgaon</option>
    <option value="Pune">Pune</option>
    <option value="Pune Division">Pune Division</option>
    <option value="Purna">Purna</option>
    <option value="Pusad">Pusad</option>
    <option value="Rahimatpur">Rahimatpur</option>
    <option value="Rahuri">Rahuri</option>
    <option value="Raigarh">Raigarh</option>
    <option value="Rajapur">Rajapur</option>
    <option value="Rajgurunagar">Rajgurunagar</option>
    <option value="Rajur">Rajur</option>
    <option value="Rajura">Rajura</option>
    <option value="Ramtek">Ramtek</option>
    <option value="Ratnagiri">Ratnagiri</option>
    <option value="Raver">Raver</option>
    <option value="Revadanda">Revadanda</option>
    <option value="Risod">Risod</option>
    <option value="Roha">Roha</option>
    <option value="Sangamner">Sangamner</option>
    <option value="Sangli">Sangli</option>
    <option value="Sangola">Sangola</option>
    <option value="Saoner">Saoner</option>
    <option value="Sasvad">Sasvad</option>
    <option value="Satana">Satana</option>
    <option value="Satara">Satara</option>
    <option value="Satara Division">Satara Division</option>
    <option value="Savantvadi">Savantvadi</option>
    <option value="Savda">Savda</option>
    <option value="Selu">Selu</option>
    <option value="Shahada">Shahada</option>
    <option value="Shahapur">Shahapur</option>
    <option value="Shegaon">Shegaon</option>
    <option value="Shiraguppi">Shiraguppi</option>
    <option value="Shirdi">Shirdi</option>
    <option value="Shirgaon">Shirgaon</option>
    <option value="Shirpur">Shirpur</option>
    <option value="Shirwal">Shirwal</option>
    <option value="Shivaji Nagar">Shivaji Nagar</option>
    <option value="Shrigonda">Shrigonda</option>
    <option value="Sillod">Sillod</option>
    <option value="Sindhudurg">Sindhudurg</option>
    <option value="Sindi">Sindi</option>
    <option value="Sinnar">Sinnar</option>
    <option value="Sirur">Sirur</option>
    <option value="Solapur">Solapur</option>
    <option value="Sonegaon">Sonegaon</option>
    <option value="Soygaon">Soygaon</option>
    <option value="Srivardhan">Srivardhan</option>
    <option value="Surgana">Surgana</option>
    <option value="Talegaon Dabhade">Talegaon Dabhade</option>
    <option value="Taloda">Taloda</option>
    <option value="Tarapur">Tarapur</option>
    <option value="Tasgaon">Tasgaon</option>
    <option value="Telhara">Telhara</option>
    <option value="Thane">Thane</option>
    <option value="Trimbak">Trimbak</option>
    <option value="Tuljapur">Tuljapur</option>
    <option value="Tumsar">Tumsar</option>
    <option value="Udgir">Udgir</option>
    <option value="Ulhasnagar">Ulhasnagar</option>
    <option value="Umarga">Umarga</option>
    <option value="Umarkhed">Umarkhed</option>
    <option value="Umred">Umred</option>
    <option value="Uran">Uran</option>
    <option value="Vada">Vada</option>
    <option value="Vaijapur">Vaijapur</option>
    <option value="Varangaon">Varangaon</option>
    <option value="Vasind">Vasind</option>
    <option value="Vengurla">Vengurla</option>
    <option value="Virar">Virar</option>
    <option value="Vite">Vite</option>
    <option value="Wadgaon">Wadgaon</option>
    <option value="Wai">Wai</option>
    <option value="Wani">Wani</option>
    <option value="Wardha">Wardha</option>
    <option value="Warora">Warora</option>
    <option value="Warud">Warud</option>
    <option value="Washim">Washim</option>
    <option value="Yaval">Yaval</option>
    <option value="Yavatmal">Yavatmal</option>
    <option value="Yeola">Yeola</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <a href="booking.html"><button class="btn btn-primary w-100">Submit</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Booking End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h6 class="section-title text-start text-primary text-uppercase">About Us</h6>
                        <h1 class="mb-4">Welcome to <span class="text-primary text-uppercase">hostellars</span></h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <div class="row g-3 pb-4">
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">1000</h2>
                                        <p class="mb-0">Rooms</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">98</h2>
                                        <p class="mb-0">Buildings</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="">Explore More</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img\about1.jpeg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img\about2.webp">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img\about4.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img\about3.webp">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Room Start -->
        <!-- <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Rooms</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Rooms</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img\rooms1.webp" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Rs.12,000/month</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Stanza Fareham House</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img\rooms2.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Rs.15,000/month</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Vidyaniketan</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/rooms3.webp" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Rs.10,000/month</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Suman Girls hostel</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <p class="text-body mb-3">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Room End -->


        
        

        


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Services</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Services</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-hotel fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Rooms & Appartment</h5>
                            <p class="text-body mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-utensils fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Food & mess</h5>
                            <p class="text-body mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-spa fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Sports and Common area</h5>
                            <p class="text-body mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        </a>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="service-item rounded" href="">
                            <div class="service-icon bg-transparent border rounded p-1">
                                <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                    <i class="fa fa-glass-cheers fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Event & Party</h5>
                            <p class="text-body mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Service End -->


        

        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Team</h6>
                    <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Mates</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/sidd.png" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href="https://instagram.com/being.sid25?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Siddhant Telgote</h5>
                                <small>Designer</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/ashu.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href="https://instagram.com/_.ashu_thakre._?igshid=ZDdkNTZiNTM="><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Ashutosh Thakre</h5>
                                <small>Programmer</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/shreyash.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href="https://instagram.com/shreyash__t?igshid=ZDdkNTZiNTM="><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">shreyash Telsang</h5>
                                <small>Group head and programmer</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/nayana.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href="https://instagram.com/nayanathakur4?igshid=ZDdkNTZiNTM="><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Nayana Thakur</h5>
                                <small>Frontend developer</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <br><br><br><br><br><br><br><br>
        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="bg-primary rounded p-4">
                            <a href="index.html"><h1 class="text-white text-uppercase mb-3">hostellars</h1></a>
                            <p class="text-white mb-0">
								Download <a class="text-dark fw-medium" href="https://htmlcodex.com/hotel-html-template-pro">hostellars – Premium Version</a>, build a professional website for your hotel business and grab the attention of new visitors upon your site’s launch.
							</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h6 class="section-title text-start text-primary text-uppercase mb-4">Contact</h6>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Upper Indira Nagar, Bibewadi, Pune</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 9856234566</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>abs@xyz.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="row gy-5 g-4">
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Company</h6>
                                <a class="btn btn-link" href="">About Us</a>
                                <a class="btn btn-link" href="">Contact Us</a>
                                <a class="btn btn-link" href="">Privacy Policy</a>
                            </div>
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Services</h6>
                                <a class="btn btn-link" href="">Food </a>
                                <a class="btn btn-link" href=""> Laundry</a>
                                <a class="btn btn-link" href="">Sport Area</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">hostellars</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="#">Ashutosh Thakre</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Help</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>