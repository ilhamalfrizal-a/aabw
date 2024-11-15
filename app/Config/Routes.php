<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/klasifikasi', 'Klasifikasi::index');
$routes->get('klasifikasi/new', 'Klasifikasi::new');
$routes->post('/klasifikasi', 'Klasifikasi::store');
$routes->post('klasifikasi', 'Klasifikasi::create');
$routes->get('klasifikasi/edit/(:num)', 'Klasifikasi::edit/$1');
$routes->put('/klasifikasi/edit/(:any)', 'Klasifikasi::update/$1');
$routes->delete('/klasifikasi/(:any)', 'Klasifikasi::destroy/$1');

// routes pos neraca
$routes->get('/posneraca/new', 'Posneraca::new');
$routes->get('/posneraca/(:segment)/new', 'Posneraca::edit/$1');
$routes->resource('posneraca');
$routes->post('/posneraca', 'Posneraca::create');
$routes->post('/posneraca/(:any)', 'Posneraca::delete/$1');

// routes setup satuan
$routes->get('/satuan/new', 'Satuan::new');
$routes->get('/satuan/(:segment)/new', 'Satuan::edit/$1');
$routes->resource('satuan');
$routes->post('/satuan', 'Satuan::create');
$routes->post('/satuan/(:any)', 'Satuan::delete/$1');
$routes->put('/satuan/(:segment)/edit', 'Satuan::edit/$1');

// routes setup kelompok
$routes->get('/kelompok/new', 'Kelompok::new');
$routes->get('/kelompok/(:segment)/new', 'Kelompok::edit/$1');
$routes->resource('kelompok');
$routes->post('/kelompok', 'Kelompok::create');
$routes->post('/kelompok/(:any)', 'Kelompok::delete/$1');
$routes->put('/kelompok/(:segment)/edit', 'Kelompok::edit/$1'); 

// routes setup lokasi
$routes->get('/lokasi/new', 'Lokasi::new');
$routes->get('/lokasi/(:segment)/new', 'Lokasi::edit/$1');
$routes->resource('lokasi');
$routes->post('/lokasi', 'Lokasi::create');
$routes->post('/lokasi/(:any)', 'Lokasi::delete/$1');
$routes->put('/lokasi/(:segment)/edit', 'Lokasi::edit/$1');
$routes->get('lokasi', 'Lokasi::index');

// routes setup group
$routes->get('/group/new', 'Group::new');
$routes->get('/group/(:segment)/new', 'Group::edit/$1');
$routes->resource('group');
$routes->post('/group', 'Group::create');
$routes->post('/group/(:any)', 'Group::delete/$1');
$routes->put('/group/(:segment)/edit', 'Group::edit/$1');
$routes->get('group', 'Group::index');

// routes setup stock
$routes->get('/stock/new', 'Stock::new');
$routes->get('/stock/(:segment)/new', 'Stock::edit/$1');
$routes->resource('stock');
$routes->post('/stock', 'Stock::create');
$routes->post('/stock/(:any)', 'Stock::delete/$1');
$routes->put('/stock/(:segment)/edit', 'Stock::edit/$1');
$routes->get('stock', 'Stock::index');

// routes setup harga
$routes->get('/harga/new', 'Harga::new');
$routes->get('/harga/(:segment)/new', 'Harga::edit/$1');
$routes->resource('harga');
$routes->post('/harga', 'Harga::create');
$routes->post('/harga/(:any)', 'Harga::delete/$1');
$routes->put('/harga/(:segment)/edit', 'Harga::edit/$1');
$routes->get('harga', 'Harga::index');

//routes interface
$routes->get('/antarmuka/new', 'Antarmuka::new');
$routes->get('/antarmuka/(:segment)/new', 'Antarmuka::edit/$1');
$routes->resource('antarmuka');
$routes->post('/antarmuka', 'Antarmuka::create');
$routes->post('/antarmuka/(:any)', 'Antarmuka::delete/$1');
$routes->put('/antarmuka/(:segment)/edit', 'Antarmuka::edit/$1');
$routes->get('antarmuka', 'Antarmuka::index');

//routes periode
$routes->get('/periode/new', 'Periode::new');
$routes->get('/periode/(:segment)/new', 'Periode::edit/$1');
$routes->resource('periode');
$routes->post('/periode', 'Periode::create');
$routes->post('/periode/(:any)', 'Periode::delete/$1');
$routes->put('/periode/(:segment)/edit', 'Periode::edit/$1');
$routes->get('periode', 'Periode::index');

//routes setup buku besar
$routes->get('/setupbuku/new', 'Setupbuku::new');
$routes->get('/setupbuku/(:segment)/new', 'Setupbuku::edit/$1');
$routes->resource('setupbuku');
$routes->post('/setupbuku', 'Setupbuku::create');
$routes->post('/setupbuku/(:any)', 'Setupbuku::delete/$1');
$routes->put('/setupbuku/(:segment)/edit', 'Setupbuku::edit/$1');
$routes->get('setupbuku', 'Setupbuku::index');

//routes setup biaya
$routes->get('/setupbiaya/new', 'Setupbiaya::new');
$routes->get('/setupbiaya/(:segment)/new', 'Setupbiaya::edit/$1');
$routes->resource('setupbiaya');
$routes->post('/setupbiaya', 'Setupbiaya::create');
$routes->post('/setupbiaya/(:any)', 'Setupbiaya::delete/$1');
$routes->put('/setupbiaya/(:segment)/edit', 'Setupbiaya::edit/$1');
$routes->get('setupbiaya', 'Setupbiaya::index');

//routes setup bank
$routes->get('/setupbank/new', 'Setupbank::new');
$routes->get('/setupbank/(:segment)/new', 'Setupbank::edit/$1');
$routes->resource('setupbank');
$routes->post('/setupbank', 'Setupbank::create');
$routes->post('/setupbank/(:any)', 'Setupbank::delete/$1');
$routes->put('/setupbank/(:segment)/edit', 'Setupbank::edit/$1');
$routes->get('setupbank', 'Setupbank::index');

//routes salesman
$routes->get('/setupsalesman/new', 'Setupsalesman::new');
$routes->get('/setupsalesman/(:segment)/new', 'Setupsalesman::edit/$1');
$routes->resource('setupsalesman');
$routes->post('/setupsalesman', 'Setupsalesman::create');
$routes->post('/setupsalesman/(:any)', 'Setupsalesman::delete/$1');
$routes->put('/setupsalesman/(:segment)/edit', 'Setupsalesman::edit/$1');
$routes->get('setupsalesman', 'Setupsalesman::index');

//routes setupsupplier
$routes->get('/setupsupplier/new', 'SetupSupplier::new');
$routes->get('/setupsupplier/(:segment)/new', 'SetupSupplier::edit/$1');
$routes->resource('setupsupplier');
$routes->post('/setupsupplier', 'SetupSupplier::create');
$routes->post('/setupsupplier/(:any)', 'SetupSupplier::delete/$1');
$routes->put('/setupsupplier/(:segment)/edit', 'SetupSupplier::edit/$1');
$routes->get('setupsupplier', 'SetupSupplier::index');

//routes Kelompokproduksi
$routes->get('/kelompokproduksi/new', 'Kelompokproduksi::new');
$routes->get('/kelompokproduksi/(:segment)/new', 'Kelompokproduksi::edit/$1');
$routes->resource('kelompokproduksi');
$routes->post('/kelompokproduksi', 'Kelompokproduksi::create');
$routes->post('/kelompokproduksi/(:any)', 'Kelompokproduksi::delete/$1');
$routes->put('/kelompokproduksi/(:segment)/edit', 'Kelompokproduksi::edit/$1');
$routes->get('kelompokproduksi', 'Kelompokproduksi::index');

//routes setupuser
$routes->get('/setupuser/new', 'Setupuser::new');
$routes->get('/setupuser/(:segment)/new', 'Setupuser::edit/$1');
$routes->resource('setupuser');
$routes->post('/setupuser', 'Setupuser::create');
$routes->post('/setupuser/(:any)', 'Setupuser::delete/$1');
$routes->put('/setupuser/(:segment)/edit', 'Setupuser::edit/$1');
$routes->get('setupuser', 'Setupuser::index');

//routes setuppelanggan
$routes->get('/setuppelanggan/new', 'Setuppelanggan::new');
$routes->get('/setuppelanggan/(:segment)/new', 'Setuppelanggan::edit/$1');
$routes->resource('setuppelanggan');
$routes->post('/setuppelanggan', 'Setuppelanggan::create');
$routes->post('/setuppelanggan/(:any)', 'Setuppelanggan::delete/$1');
$routes->put('/setuppelanggan/(:segment)/edit', 'Setuppelanggan::edit/$1');
$routes->get('setuppelanggan', 'Setuppelanggan::index');

//routes setuppiutang
$routes->get('/setuppiutang/new', 'Setuppiutang::new');
$routes->get('/setuppiutang/(:segment)/new', 'Setuppiutang::edit/$1');
$routes->resource('setuppiutang');
$routes->post('/setuppiutang', 'Setuppiutang::create');
$routes->post('/setuppiutang/(:any)', 'Setuppiutang::delete/$1');
$routes->put('/setuppiutang/(:segment)/edit', 'Setuppiutang::edit/$1');
$routes->get('setuppiutang', 'Setuppiutang::index');

//routes pindahlokasi
$routes->get('/pindahlokasi/new', 'PindahLokasi::new');
$routes->get('/pindahlokasi/(:segment)/new', 'PindahLokasi::edit/$1');
$routes->resource('pindahlokasi');
$routes->post('/pindahlokasi', 'PindahLokasi::create');
$routes->post('/pindahlokasi/(:any)', 'PindahLokasi::delete/$1');
// $routes->put('/pindahlokasi/(:segment)/edit', 'PindahLokasi::edit/$1');
$routes->get('pindahlokasi', 'PindahLokasi::index');
$routes->get('pindahlokasi/printPDF/(:num)', 'PindahLokasi::printPDF/$1');
$routes->get('PindahLokasi/printPDF/(:num)', 'PindahLokasi::printPDF/$1');
$routes->get('pindahlokasi/printPDF', 'PindahLokasi::printPDF');
$routes->get('PindahLokasi/printPDF', 'PindahLokasi::printPDF');
$routes->put('/pindahlokasi/(:segment)', 'PindahLokasi::update/$1', ['filter' => 'role:admin']);
$routes->put('/pindahlokasi/(:segment)/edit', 'PindahLokasi::edit/$1', ['filter' => 'role:admin']);

//routes bahansablon
$routes->get('/bahansablon/new', 'BahanSablon::new');
// $routes->get('/bahansablon/(:segment)/new', 'BahanSablon::edit/$1');
$routes->resource('bahansablon');
$routes->post('/bahansablon', 'BahanSablon::create');
$routes->post('/bahansablon/(:any)', 'BahanSablon::delete/$1');
// $routes->put('/bahansablon/(:segment)/edit', 'BahanSablon::edit/$1');
$routes->get('bahansablon', 'BahanSablon::index');
$routes->get('bahansablon/printPDF/(:num)', 'BahanSablon::printPDF/$1');
$routes->get('BahanSablon/printPDF/(:num)', 'BahanSablon::printPDF/$1');
$routes->get('bahansablon/printPDF', 'BahanSablon::printPDF');
$routes->get('BahanSablon/printPDF', 'BahanSablon::printPDF');
$routes->put('/bahansablon/(:segment)', 'BahanSablon::update/$1', ['filter' => 'role:admin']);
$routes->put('/bahansablon/(:segment)/edit', 'BahanSablon::edit/$1', ['filter' => 'role:admin']);

// Routes untuk hasilsablon
$routes->resource('hasilsablon'); // Untuk route dasar seperti index, show, new, create, update, delete
// $routes->get('hasilsablon/edit/(:num)', 'HasilSablon::edit/$1'); // Form edit
// $routes->post('hasilsablon/update/(:num)', 'HasilSablon::update/$1', ['filter' => 'role:admin']); // Aksi update
$routes->delete('hasilsablon/(:num)', 'HasilSablon::delete/$1'); // Route delete
$routes->get('hasilsablon/printPDF/(:num)', 'HasilSablon::printPDF/$1'); // Print dengan ID
$routes->get('hasilsablon/printPDF', 'HasilSablon::printPDF'); // Print tanpa ID
// $routes->get('hasilsablon/edit/(:num)', 'HasilSablon::edit/$1');
$routes->put('/hasilsablon/(:segment)', 'HasilSablon::update/$1', ['filter' => 'role:admin']);
$routes->put('/hasilsablon/(:segment)/edit', 'HasilSablon::edit/$1', ['filter' => 'role:admin']);

//routes hasil produksi
$routes->get('/hasilproduksi/new', 'HasilProduksi::new');
$routes->get('/hasilproduksi/(:segment)/new', 'HasilProduksi::edit/$1');
$routes->resource('hasilproduksi');
$routes->post('/hasilproduksi', 'HasilProduksi::create');
$routes->post('/hasilproduksi/(:any)', 'HasilProduksi::delete/$1');
$routes->put('/hasilsablon/(:segment)', 'HasilSablon::update/$1');
$routes->put('/hasilproduksi/(:segment)/edit', 'HasilProduksi::edit/$1');
$routes->get('hasilproduksi', 'HasilProduksi::index');
$routes->get('hasilproduksi/printPDF/(:num)', 'HasilProduksi::printPDF/$1');
$routes->get('HasilProduksi/printPDF/(:num)', 'HasilProduksi::printPDF/$1');
$routes->get('hasilproduksi/printPDF', 'HasilProduksi::printPDF');
$routes->get('HasilProduksi/printPDF', 'HasilProduksi::printPDF');

//routes pemakaianbahan
$routes->get('/pemakaianbahan/new', 'PemakaianBahan::new'); 
// $routes->get('/pemakaianbahan/(:segment)/new', 'PemakaianBahan::edit/$1');
$routes->resource('pemakaianbahan');
$routes->post('/pemakaianbahan', 'PemakaianBahan::create');
$routes->post('/pemakaianbahan/(:any)', 'PemakaianBahan::delete/$1');
// $routes->put('/pemakaianbahan/(:segment)/edit', 'PemakaianBahan::edit/$1');
$routes->get('pemakaianbahan', 'PemakaianBahan::index');
$routes->get('pemakaianbahan/printPDF/(:num)', 'PemakaianBahan::printPDF/$1');
$routes->get('PemakaianBahan/printPDF/(:num)', 'PemakaianBahan::printPDF/$1');
$routes->get('pemakaianbahan/printPDF', 'PemakaianBahan::printPDF');
$routes->get('PemakaianBahan/printPDF', 'PemakaianBahan::printPDF');
$routes->put('/pemakaianbahan/(:segment)', 'PemakaianBahan::update/$1', ['filter' => 'role:admin']);
$routes->put('/pemakaianbahan/(:segment)/edit', 'PemakaianBahan::edit/$1', ['filter' => 'role:admin']);

//routes t_utangusaha
$routes->get('/tutangusaha/new', 'TutangUsaha::new');
// $routes->get('/tutangusaha/(:segment)/new', 'TutangUsaha::edit/$1');
$routes->resource('tutangusaha');
$routes->post('/tutangusaha', 'TutangUsaha::create');
$routes->post('/tutangusaha/(:any)', 'TutangUsaha::delete/$1');
// $routes->put('/tutangusaha/(:segment)/edit', 'TutangUsaha::edit/$1');
$routes->get('tutangusaha', 'TutangUsaha::index');
$routes->get('tutangusaha/printPDF/(:num)', 'TutangUsaha::printPDF/$1');
$routes->get('TutangUsaha/printPDF/(:num)', 'TutangUsaha::printPDF/$1');
$routes->get('tutangusaha/printPDF', 'TutangUsaha::printPDF');
$routes->get('TutangUsaha/printPDF', 'TutangUsaha::printPDF');
$routes->put('/tutangusaha/(:segment)', 'TutangUsaha::update/$1', ['filter' => 'role:admin']);
$routes->put('/tutangusaha/(:segment)/edit', 'TutangUsaha::edit/$1', ['filter' => 'role:admin']);

//routes lunassalesman
$routes->get('/lunassalesman/new', 'LunasSalesman::new');   
// $routes->get('/lunassalesman/(:segment)/new', 'LunasSalesman::edit/$1');    
$routes->resource('lunassalesman');
$routes->post('/lunassalesman', 'LunasSalesman::create');
$routes->post('/lunassalesman/(:any)', 'LunasSalesman::delete/$1');
// $routes->put('/lunassalesman/(:segment)/edit', 'LunasSalesman::edit/$1');
$routes->get('lunassalesman', 'LunasSalesman::index');
$routes->get('lunassalesman/printPDF/(:num)', 'LunasSalesman::printPDF/$1');
$routes->get('LunasSalesman/printPDF/(:num)', 'LunasSalesman::printPDF/$1');
$routes->get('lunassalesman/printPDF', 'LunasSalesman::printPDF');
$routes->get('LunasSalesman/printPDF', 'LunasSalesman::printPDF');
$routes->put('/lunassalesman/(:segment)', 'LunasSalesman::update/$1', ['filter' => 'role:admin']);
$routes->put('/lunassalesman/(:segment)/edit', 'LunasSalesman::edit/$1', ['filter' => 'role:admin']);

//routes pelunasanhutang
$routes->get('/pelunasanhutang/new', 'PelunasanHutang::new');
// $routes->get('/pelunasanhutang/(:segment)/new', 'PelunasanHutang::edit/$1');
$routes->resource('pelunasanhutang');
$routes->post('/pelunasanhutang', 'PelunasanHutang::create');
$routes->post('/pelunasanhutang/(:any)', 'PelunasanHutang::delete/$1');
// $routes->put('/pelunasanhutang/(:segment)/edit', 'PelunasanHutang::edit/$1');
$routes->get('pelunasanhutang', 'PelunasanHutang::index');
$routes->get('pelunasanhutang/printPDF/(:num)', 'PelunasanHutang::printPDF/$1');
$routes->get('PelunasanHutang/printPDF/(:num)', 'PelunasanHutang::printPDF/$1');
$routes->get('pelunasanhutang/printPDF', 'PelunasanHutang::printPDF');
$routes->get('PelunasanHutang/printPDF', 'PelunasanHutang::printPDF');
$routes->put('/pelunasanHutang/(:segment)', 'PelunasanHutang::update/$1', ['filter' => 'role:admin']);
$routes->put('/pelunasanhutang/(:segment)/edit', 'PelunasanHutang::edit/$1', ['filter' => 'role:admin']);

//routes jurnalumum
$routes->get('/jurnalumum/new', 'JurnalUmum::new');
// $routes->get('/jurnalumum/(:segment)/new', 'JurnalUmum::edit/$1');
$routes->resource('jurnalumum');
$routes->post('/jurnalumum', 'JurnalUmum::create');
$routes->post('/jurnalumum/(:any)', 'JurnalUmum::delete/$1');
// $routes->put('/jurnalumum/(:segment)/edit', 'JurnalUmum::edit/$1');
$routes->get('jurnalumum', 'JurnalUmum::index');
$routes->get('jurnalumum/printPDF/(:num)', 'JurnalUmum::printPDF/$1');
$routes->get('JurnalUmum/printPDF/(:num)', 'JurnalUmum::printPDF/$1');
$routes->get('jurnalumum/printPDF', 'JurnalUmum::printPDF');
$routes->get('JurnalUmum/printPDF', 'JurnalUmum::printPDF');
$routes->put('/jurnalumum/(:segment)', 'JurnalUmum::update/$1', ['filter' => 'role:admin']);
$routes->put('/jurnalumum/(:segment)/edit', 'JurnalUmum::edit/$1', ['filter' => 'role:admin']);

//routes mutasikasbank
$routes->get('/mutasikasbank/new', 'MutasiKasBank::new');
// $routes->get('/mutasikasbank/(:segment)/new', 'MutasiKasBank::edit/$1');
$routes->resource('mutasikasbank');
$routes->post('/mutasikasbank', 'MutasiKasBank::create');
$routes->post('/mutasikasbank/(:any)', 'MutasiKasBank::delete/$1');
// $routes->put('/mutasikasbank/(:segment)/edit', 'MutasiKasBank::edit/$1');
$routes->get('mutasikasbank', 'MutasiKasBank::index');
$routes->get('mutasikasbank/printPDF/(:num)', 'MutasiKasBank::printPDF/$1');
$routes->get('MutasiKasBank/printPDF/(:num)', 'MutasiKasBank::printPDF/$1');
$routes->get('mutasikasbank/printPDF', 'MutasiKasBank::printPDF');
$routes->get('MutasiKasBank/printPDF', 'MutasiKasBank::printPDF');
$routes->put('/mutasiKasBank/(:segment)', 'MutasiKasBank::update/$1', ['filter' => 'role:admin']);
$routes->put('/mutasiKasBank/(:segment)/edit', 'MutasiKasBank::edit/$1', ['filter' => 'role:admin']);

//routes kaskecil
$routes->get('/kaskecil/new', 'KasKecil::new');
// $routes->get('/kaskecil/(:segment)/new', 'KasKecil::edit/$1');
$routes->resource('kaskecil');
$routes->post('/kaskecil', 'KasKecil::create');
$routes->post('/kaskecil/(:any)', 'KasKecil::delete/$1');
// $routes->put('/kaskecil/(:segment)/edit', 'KasKecil::edit/$1');
$routes->get('kaskecil', 'KasKecil::index');
$routes->get('kaskecil/printPDF/(:num)', 'KasKecil::printPDF/$1');
$routes->get('KasKecil/printPDF/(:num)', 'KasKecil::printPDF/$1');
$routes->get('kaskecil/printPDF', 'KasKecil::printPDF');
$routes->get('KasKecil/printPDF', 'KasKecil::printPDF');
$routes->put('/kaskecil/(:segment)', 'KasKecil::update/$1', ['filter' => 'role:admin']);
$routes->put('/kaskecil/(:segment)/edit', 'KasKecil::edit/$1', ['filter' => 'role:admin']);    

//routes stockopname
$routes->get('/stockopname/new', 'StockOpname::new');
// $routes->get('/stockopname/(:segment)/new', 'StockOpname::edit/$1');
$routes->resource('stockopname');
$routes->post('/stockopname', 'StockOpname::create');
$routes->post('/stockopname/(:any)', 'StockOpname::delete/$1');
// $routes->put('/stockopname/(:segment)/edit', 'StockOpname::edit/$1');
$routes->get('stockopname', 'StockOpname::index');
$routes->get('stockopname/printPDF/(:num)', 'StockOpname::printPDF/$1');
$routes->get('StockOpname/printPDF/(:num)', 'StockOpname::printPDF/$1');
$routes->get('stockopname/printPDF', 'StockOpname::printPDF');
$routes->get('StockOpname/printPDF', 'StockOpname::printPDF');
$routes->put('/stockopname/(:segment)', 'StockOpname::update/$1', ['filter' => 'role:admin']);
$routes->put('/stokopname/(:segment)/edit', 'StockOpname::edit/$1', ['filter' => 'role:admin']);  

//routes posting dan tutup buku
$routes->get('/transaksi/posting', 'TransaksiController::posting');
$routes->get('/transaksi/tutup_buku', 'TransaksiController::tutupBuku');
$routes->post('/transaksi/posting/proses', 'TransaksiController::prosesPosting');
$routes->post('/transaksi/tutup_buku/proses', 'TransaksiController::prosesTutupBuku');
$routes->post('/transaksi/tutup-buku/proses', 'TransaksiController::prosesTutupBuku');

//routes untuk user
$routes->get('/user', 'User::index', ['filter' => 'role:admin']);
$routes->get('/user/index', 'User::index', ['filter' => 'role:admin']);
$routes->get('/user/edit/(:num)', 'User::edit/$1');
$routes->post('/user/update/(:num)', 'User::update/$1'); // Hanya menggunakan POST untuk update

//routes untuk tutupbuku
$routes->get('closebook', 'TutupBukuController::index');
    
// Route untuk menampilkan halaman closeBook
$routes->get('accounting/closeBook', 'Accounting::index');

// Route untuk menjalankan proses penutupan periode
$routes->post('accounting/closeBook/closePeriod', 'Accounting::closePeriod');

//routes untuk pembelian
$routes->get('/pembelian/new', 'Pembelian::new'); 
$routes->resource('pembelian');
$routes->post('/pembelian', 'Pembelian::create');
$routes->post('/pembelian/(:any)', 'Pembelian::delete/$1');
$routes->get('pembelian', 'Pembelian::index');
$routes->get('pembelian/printPDF/(:num)', 'Pembelian::printPDF/$1');
$routes->get('Pembelian/printPDF/(:num)', 'Pembelian::printPDF/$1');
$routes->get('pembelian/printPDF', 'Pembelian::printPDF');
$routes->get('Pembelian/printPDF', 'Pembelian::printPDF');
$routes->put('/pembelian/(:segment)', 'Pembelian::update/$1', ['filter' => 'role:admin']);
$routes->put('/pembelian/(:segment)/edit', 'Pembelian::edit/$1', ['filter' => 'role:admin']);

//routes untuk returpembelian
$routes->get('/returpembelian/new', 'ReturPembelian::new'); 
$routes->resource('returpembelian');
$routes->post('/returpembelian', 'ReturPembelian::create');
$routes->post('/returpembelian/(:any)', 'ReturPembelian::delete/$1');
$routes->get('returpembelian', 'ReturPembelian::index');
$routes->get('returpembelian/printPDF/(:num)', 'ReturPembelian::printPDF/$1');
$routes->get('ReturPembelian/printPDF/(:num)', 'ReturPembelian::printPDF/$1');
$routes->get('returpembelian/printPDF', 'ReturPembelian::printPDF');
$routes->get('ReturPembelian/printPDF', 'ReturPembelian::printPDF');
$routes->put('/returpembelian/(:segment)', 'ReturPembelian::update/$1', ['filter' => 'role:admin']);
$routes->put('/returpembelian/(:segment)/edit', 'ReturPembelian::edit/$1', ['filter' => 'role:admin']);

//routes untuk penjualan
$routes->get('/penjualan/new', 'Penjualan::new'); 
$routes->resource('penjualan');
$routes->post('/penjualan', 'Penjualan::create');
$routes->post('/penjualan/(:any)', 'Penjualan::delete/$1');
$routes->get('penjualan', 'Penjualan::index');
$routes->get('penjualan/printPDF/(:num)', 'Penjualan::printPDF/$1');
$routes->get('Penjualan/printPDF/(:num)', 'Penjualan::printPDF/$1');
$routes->get('penjualan/printPDF', 'Penjualan::printPDF');
$routes->get('Penjualan/printPDF', 'Penjualan::printPDF');
$routes->put('/penjualan/(:segment)', 'Penjualan::update/$1', ['filter' => 'role:admin']);
$routes->put('/penjualan/(:segment)/edit', 'Penjualan::edit/$1', ['filter' => 'role:admin']);

//routes untuk returpenjualan
$routes->get('/returpenjualan/new', 'ReturPenjualan::new'); 
$routes->resource('returpenjualan');
$routes->post('/returpenjualan', 'ReturPenjualan::create');
$routes->post('/returpenjualan/(:any)', 'ReturPenjualan::delete/$1');
$routes->get('returpenjualan', 'ReturPenjualan::index');
$routes->get('returpenjualan/printPDF/(:num)', 'ReturPenjualan::printPDF/$1');
$routes->get('ReturPenjualan/printPDF/(:num)', 'ReturPenjualan::printPDF/$1');
$routes->get('returpenjualan/printPDF', 'ReturPenjualan::printPDF');
$routes->get('ReturPenjualan/printPDF', 'ReturPenjualan::printPDF');
$routes->put('/returpenjualan/(:segment)', 'ReturPenjualan::update/$1', ['filter' => 'role:admin']);
$routes->put('/returpenjualan/(:segment)/edit', 'ReturPenjualan::edit/$1', ['filter' => 'role:admin']);

//routes untuk penyesuaianstock
$routes->get('/penyesuaianstock/new', 'PenyesuaianStock::new'); 
$routes->resource('penyesuaianstock');
$routes->post('/penyesuaianstock', 'PenyesuaianStock::create');
$routes->post('/penyesuaianstock/(:any)', 'PenyesuaianStock::delete/$1');
$routes->get('penyesuaianstock', 'PenyesuaianStock::index');
$routes->get('penyesuaianstock/printPDF/(:num)', 'PenyesuaianStock::printPDF/$1');
$routes->get('PenyesuaianStock/printPDF/(:num)', 'PenyesuaianStock::printPDF/$1');
$routes->get('penyesuaianstock/printPDF', 'PenyesuaianStock::printPDF');
$routes->get('PenyesuaianStock/printPDF', 'PenyesuaianStock::printPDF');
$routes->put('/penyesuaianstock/(:segment)', 'PenyesuaianStock::update/$1', ['filter' => 'role:admin']);
$routes->put('/penyesuaianstock/(:segment)/edit', 'PenyesuaianStock::edit/$1', ['filter' => 'role:admin']);










// $routes->get('/posneraca', 'PosNeraca::index');
// $routes->post('/posneraca/save', 'PosNeraca::save');
// $routes->get('posneraca', 'PosNeraca::index');
// $routes->get('/setup/posneraca', 'PosNeraca::index');