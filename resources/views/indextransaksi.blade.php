<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Transaksi</title>
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
    }

    .container-tabel-transaksi {
        width: 80%;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        color: #333;
        text-align: center;
        padding: 20px 0;
    }

    .transaksi-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .transaksi-table thead tr {
        background-color: #000;
        color: white;
    }

    .transaksi-table th,
    .transaksi-table td {
        border: 1px solid #ddd;
        padding: 15px;
        text-align: left;
        white-space: nowrap;
    }

    .transaksi-table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    
    .transaksi-table th:last-child, .transaksi-table td:last-child {
    width: 1%; /* Atur lebar kolom aksi menjadi minimum */
}

    .transaksi-table tbody tr:hover {
        background-color: #ddd;
    }
    /* Tambahkan gaya untuk tombol */
    .btn {
        padding: 10px 20px;
        color: white;
        border: none;
        cursor: pointer;
        margin-right: 10px;
    }

    .btn-primary {
        background-color: #007bff;
    }

    .btn-danger {
        background-color: #dc3545;
    }

    .btn i {
        margin-right: 5px;
    }
</style>

    </style>
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <span class="navbar-toggle" type="text" data-toggle="collapse" data-target="#custom-collapse">Toggle navigation</span>
            <a class="navbar-brand" >UangQu</a>
          </div>

          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/#home">Home</a></li>
              <li><a class="section-scroll" href="/#services">Services</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="main">
        <section class="module bg-dark-30 about-page-header" data-background="assets/images/service.jpg">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h1 class="module-title font-alt mb-0">Transaksi</h1>
              </div>
            </div>
          </div>
        </section>
        <section class="module">
    <div class="container-tabel-transaksi">
        <!-- Search form -->
        <h1>Data Transaksi</h1>
        <form id="searchForm">
            <input type="text" id="searchInput" placeholder="Search transactions...">
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
        <a href="/createtransaksi" class="btn btn-primary">Buat Transaksi</a>
        <table class="transaksi-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Tanggal</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="transactionTable">
                <!-- Data transaksi akan ditampilkan di sini -->
            </tbody>
        </table>
    </div>
</section>

        <footer class="footer bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <p class="copyright font-alt">&copy; 2017&nbsp;<a href="index.html">TitaN</a>, All Rights Reserved</p>
              </div>
              <div class="col-sm-6">
                <div class="footer-social-links"><a href="https://www.facebook.com/themefisher"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a><a href="#"><i class="fa fa-vimeo"></i></a></div>
              </div>
            </div>
          </div>
          <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
        </footer>
      </div>
    </main>

    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/dist/wow.js"></script>
    <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/lib/smoothscroll.js"></script>
    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
    // Metode DELETE
    function deleteTransaction(id) {
        fetch(`http://127.0.0.1:8000/api/transactions/${id}`, {
            method: 'DELETE'
        })
        .then(response => response.json())
        .then(data => {
            console.log('Success:', data);
            // Refresh tabel setelah penghapusan
            location.reload();
        })
        .catch((error) => {
            console.error('Error:', error);
        });
    }

    // Metode PUT
    function updateTransaction(id, updatedData) {
        fetch(`http://127.0.0.1:8000/api/transactions/${id}`, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(updatedData),
        })
        .then(response => response.json())
        .then(data => {
            console.log('Success:', data);
            // Arahkan pengguna kembali ke indextransaksi.blade.php setelah pembaruan berhasil
            window.location.href = '/indextransaksi';
        })
        .catch((error) => {
            console.error('Error:', error);
        });
    }

    // Fetch data based on search input
    document.getElementById('searchForm').addEventListener('submit', function(event) {
        event.preventDefault();
        let searchQuery = document.getElementById('searchInput').value;
        fetch(`http://127.0.0.1:8000/api/transactions?search=${searchQuery}`)
            .then(response => response.json())
            .then(data => populateTable(data))
            .catch(error => console.error('Error:', error));
    });

    // Fetch all data initially and when search input is empty
    fetch('http://127.0.0.1:8000/api/transactions')
        .then(response => response.json())
        .then(data => populateTable(data))
        .catch(error => console.error('Error:', error));

    // Function to populate the table with data
    function populateTable(data) {
        let table = document.getElementById('transactionTable');
        // Clear the table first
        table.innerHTML = '';
        data.data.forEach(item => {
            let row = table.insertRow();
            row.insertCell(0).innerHTML = item.id;
            row.insertCell(1).innerHTML = item.category;
            row.insertCell(2).innerHTML = item.description;
            row.insertCell(3).innerHTML = item.date;
            row.insertCell(4).innerHTML = item.amount;
            let actions = row.insertCell(5);
            actions.innerHTML = `<a href="/edittransaksi/${item.id}" class="btn btn-primary"><i class="fas fa-edit"></i> Perbarui</a> <button onclick="deleteTransaction(${item.id})" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>`;
        });
    }
</script>
  </body>
</html>
