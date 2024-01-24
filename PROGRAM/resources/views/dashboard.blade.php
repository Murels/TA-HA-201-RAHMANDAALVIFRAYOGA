<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <p>Selamat Datang, {{$isi_session}}</p>
    <button id="btn_logout">Logout</button>
    <!-- kode js -->
    <script>
        // deklarasi variabel komponen
        let btn_logout = document.querySelector("#btn_logout");
        // event untuk "btn_logout"
        btn_logout.addEventListener("click", function(){
            // alihkan ke halaman logout
            location.href = "{{url('logout')}}";
        });
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Monitoring Dashboard</title>
    <!-- Tambahkan stylesheet CSS sesuai kebutuhan -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <h1>Health Monitoring Dashboard</h1>
    </header>

    <section id="oxygen-saturation">
        <h2>Oxygen Saturation</h2>
        <!-- Tambahkan elemen HTML untuk grafik Saturasi Oksigen -->
        <div id="oxygen-saturation-chart"></div>
    </section>

    <section id="heart-rate">
        <h2>Heart Rate</h2>
        <!-- Tambahkan elemen HTML untuk grafik Detak Jantung -->
        <div id="heart-rate-chart"></div>
    </section>

    <section id="body-temperature">
        <h2>Body Temperature</h2>
        <!-- Tambahkan elemen HTML untuk grafik Suhu Tubuh -->
        <div id="body-temperature-chart"></div>
    </section>

    <section id="date-picker">
        <h2>Select Date Range</h2>
        <!-- Tambahkan elemen HTML untuk Date Picker Range -->
        <input type="date" id="start-date" name="start-date">
        <input type="date" id="end-date" name="end-date">
    </section>

    <section id="selected-device-data">
        <h2>Selected Device Data</h2>
        <!-- Tambahkan elemen HTML untuk menampilkan data alat yang dipilih -->
        <div id="selected-device-data-output"></div>
    </section>

    <footer>
        <p>&copy; 2024 Health Monitoring Dashboard</p>
    </footer>

    <!-- Tambahkan script JavaScript dan Plotly untuk grafik interaktif -->
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <script src="dashboard.js"></script>
</body>
</html>
