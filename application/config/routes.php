<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'CPage/landingPage';

//user
$route['landingPage']       = 'CPage/landingPage';
$route['halaman/(:any)']    = 'CPage/halaman/$1';
$route['halamanDetail/(:any)/(:any)'] = 'CPage/halamanDetail/$1/$2';
//admin
$route['admin'] = 'admin';

//HalamanAdmin
$route['halamanAdmin/(:any)'] 		 = 'CPage/halamanAdmin/$1';
$route['admin']              = 'CLogin/admin';
$route['lupaPassword']       = 'CLogin/lupaPassword';
$route['AdminDashboard']     = 'CPage/AdminDashboard';
$route['AdminArtikel']       = 'CPage/AdminArtikel';
$route['AOrganisasi']        = 'CPage/AdminOrganisasi';
$route['AVisiMisi']          = 'CPage/AdminVisiMisi';
$route['AWargaNegara']       = 'CPage/AdminWargaNegara';
$route['AProdukHukum']       = 'CPage/AdminProdukHukum';
$route['AUser']              = 'CPage/AdminUser';

//formAdmin
$route['formAdminArtikel']              = 'CPage/formAdminArtikel';
$route['formAdminArtikel/(:any)']       = 'CPage/formAdminArtikelEdit/$1';
$route['formAdminOrganisasi']           = 'CPage/formAdminOrganisasi';
$route['formAdminOrganisasi/(:any)']    = 'CPage/formAdminOrganisasiEdit/$1';
$route['formAdminProdukHukum']          = 'CPage/formAdminProdukHukum';
$route['formAdminProdukHukum/(:any)']   = 'CPage/formAdminProdukHukumEdit/$1';
$route['formAdminVisiMisi/(:any)']      = 'CPage/formAdminVisiMisi/$1';
$route['formAdminWargaNegara']          = 'CPage/formAdminWargaNegara';
$route['formAdminWargaNegara/(:any)']   = 'CPage/formAdminWargaNegaraEdit/$1';
$route['formAdminUser']                 = 'CPage/formAdminUser';
$route['formAdminUser/(:any)']          = 'CPage/formAdminUserEdit/$1';
$route['formAdminCarousel']             = 'CPage/formAdminCarousel';

//proses
$route['ProsesLogin']               = 'CLogin/prosesLogin';
$route['ProsesLupaPassword']        = 'CLogin/prosesLupaPassword';
$route['ProsesPasswordBaru']        = 'CLogin/prosesPasswordBaru';
$route['Logout']                    = 'CLogin/prosesLogOut';


//Proses Artikel
$route['tambahDataArtikel']         = 'CProses/tambahDataArtikel';
$route['updateDataArtikel/(:any)']  = 'CProses/updateDataArtikel/$1';
$route['hapusArtikel/(:any)']       = 'CProses/hapusArtikel/$1';
$route['editArtikel/(:any)']        = 'CProses/editArtikel/$1';

//Proses Organisasi
$route['tambahDataOrganisasi']          = 'CProses/tambahDataOrganisasi';
$route['hapusData/(:any)']              = 'CProses/hapusData/$1';
$route['editData/(:any)']               = 'CProses/editData/$1';
$route['updateDataOrganisasi/(:any)']   = 'CProses/updateDataOrganisasi/$1';

//Proses Visi Misi
$route['editDataVM/(:any)']         = 'CProses/editDataVM/$1';
$route['updateDataVM/(:any)']       = 'CProses/updateDataVM/$1';

//Proses Warga Negara
$route['tambahDataWargaNegara']         = 'CProses/tambahDataWargaNegara';
$route['hapusDataWarga/(:any)']         = 'CProses/hapusDataWarga/$1';
$route['editDataWarga/(:any)']          = 'CProses/editDataWarga/$1';
$route['updateDataWargaNegara/(:any)']  = 'CProses/updateDataWargaNegara/$1';

//Proses Produk Hukum
$route['tambahProdukHukum']             = 'CProses/tambahProdukHukum';
$route['hapusDataHukum/(:any)']         = 'CProses/hapusDataHukum/$1';
$route['editDataHukum/(:any)']          = 'CProses/editDataHukum/$1';
$route['updateDataHukum/(:any)']        = 'CProses/updateDataHukum/$1';
$route['downloadFile/(:any)']        	= 'CProses/downloadFile/$1';
//Proses user
$route['tambahUser']                    = 'CProses/tambahUser';
$route['hapusUser/(:any)']              = 'CProses/hapusUser/$1';
$route['editUser/(:any)']               = 'CProses/editUser/$1';
$route['updateUser/(:any)']             = 'CProses/updateUser/$1';

//Proses Carousel
$route['tambahDataCarousel']                = 'CProses/tambahCarousel';
$route['hapusCarousel/(:any)']              = 'CProses/hapusCarousel/$1';


$route['updateWarga']               = 'CLogin/updateDataWarga';
$route['updateLaki']                = 'CLogin/updateDataLaki';
$route['updateWanita']              = 'CLogin/updateDataWanita';
$route['updateLahir']               = 'CLogin/updateDataLahir';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
