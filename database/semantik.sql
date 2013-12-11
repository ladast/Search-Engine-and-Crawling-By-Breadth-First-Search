-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 24. Mei 2013 jam 15:27
-- Versi Server: 5.1.33
-- Versi PHP: 5.2.9-2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `semantik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(1) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `isi_about` text NOT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `judul`, `isi_about`, `url`) VALUES
(1, 'Web Semantik', 'Web Semantik dalam terminologi yang sederhana adalah suatu cara untuk menguraikan berbagai hal/masalah dimana mesin dapat memahaminya. Memahami adalah suatu kondisi yang sangat diperlukan oleh semantic web. Memahami maksudnya &nbsp;adalah dengan memberikan beberapa pernyataan logik maka mesin dapat menyimpulkan suatu pernyataan yang dipetakan.', 'http://localhost/search5/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `file_upload`
--

CREATE TABLE IF NOT EXISTS `file_upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(200) NOT NULL,
  `nama_file` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `file_upload`
--

INSERT INTO `file_upload` (`id`, `judul`, `nama_file`) VALUES
(1, 'http://www.owl-ontologies.com/Ontology1364957607.owl', '19ta.owl'),
(2, 'll', '26foaf.rdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE IF NOT EXISTS `konten` (
  `id_konten` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_input` datetime NOT NULL,
  `judul_konten` varchar(200) NOT NULL,
  `isi_konten` longtext NOT NULL,
  `url_file` varchar(50) NOT NULL,
  `nama_file` varchar(200) NOT NULL,
  `tipe_file` varchar(10) NOT NULL,
  `tanggal_update` datetime NOT NULL,
  `klik` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_konten`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id_konten`, `tanggal_input`, `judul_konten`, `isi_konten`, `url_file`, `nama_file`, `tipe_file`, `tanggal_update`, `klik`) VALUES
(1, '2013-05-24 13:50:46', 'Ahok Janji Tidak Ada Lagi Warga DKI Tanpa Identitas', 'Ahok Janji Tidak Ada Lagi Warga DKI Tanpa Identitas\r\n\r\nVIVANews - Wakil Gubernur DKI Jakarta Basuki T Purnama, Jumat 24 Mei 2013 mengakui, akta nikah masih menjadi sumber masalah identitas warga yang tinggal di Ibu Kota. Banyak pernikahan yang tidak dicatat sehingga menciptakan pasangan nikah siri. Akhirnya, anak pasangan nikah siri pun sulit mendapat akta lahir.\r\n\r\n"Saya sudah tegaskan kepada Biro Pendidikan dan Mental Spiritual (Dikmental). Ke depan saya janji tidak ada lagi warga Jakarta tidak punya identitas," katanya usai menghadiri pernikahan massal di Gang Musholla Nomor 68 Kelurahan Gedong, Kecamatan Pasar Rebo, Condet Jakarta Timur.\r\n\r\nAhok mengaku miris dengan kondisi warga Ibu kota tanpa identitas. "Ke depan, kami tidak ingin ada orang yang tidak punya KTP, tidak punya KK, tidak punya akte lahir, termasuk surat nikah," katanya.\r\n\r\nMantan Bupati Belitung Timur ini mengakui, banyak kendala untuk merealisasikan ini. Salah satunya, kesadaran hukum di masyarakat masih rendah. Dia mengungkapkan, banyak peristiwa hukum perkawinan yang tidak dicatatkan hingga terjadi nikah siri. Selain itu, birokrasi juga masih terlalu panjang untuk mengurus dokumen ini. \r\n\r\nDia menegaskan, identitas merupakan hak dasar semua warga dan Pemerintah melanggar HAM berat jika tidak memenuhi hak warga itu.\r\n\r\n"Saya siapkan perubahan sistem baru. Ke depan tidak akan ada lagi orang miskin terus pasrah nggak bisa buat akte pernikahan. Tahun ini akan kita anggarkan untuk itu," katanya.\r\n\r\nAkta kelahiran merupakan hak dasar warga untuk mendapatkan berbagai fasilitas dari negara. Dari sistem ini pemerintah menghitung dan menyalurkan berbagai fasilitas yang menjadi hak warga, seperti pendidikan, hak atas jaminan kesehatan dan jaminan sosial lainnya. (umi)\r\n\r\n', 'http://localhost/search5/file/19data1.txt', '19data1.txt', '', '0000-00-00 00:00:00', 0),
(2, '2013-05-24 13:52:03', 'Pemprov DKI Segera Buatkan KTP untuk Warga Tanah Merah', 'VIVAnews - Gubernur DKI Jakarta Joko Widodo mendatangi kawasan Tanah Merah, Jakarta Utara. Jokowi, sapaannya, meninjau kawasan sengketa tersebut dan menjanjikan pembuatan Kartu Tanda Penduduk (KTP) warga di daerah itu.\r\n\r\n"Semua masyarakat biar dengar, masalah pembentukan RT, RW serta KTP untuk Tanah Merah dan Kampung Beting segera diproses. Tapi kan butuh waktu. Tapi yang paling penting saya sudah perintah ke Pak Wali Kota agar ini segera diproses dan dilaksanakan," kata Jokowi di Tanah Merah, Jakarta Utara, Selasa, 6 November 2012.\r\n\r\n"Jadi ini pembentukan RT, RW dan pemberian KTP itu akan diproses oleh Pak Wali Kota. Tapi itu jangan dikaitkan dengan masalah sengketa. Maslaah sengketa ini akan kita proses dengan Pertamina. Jadi ini akan beda-beda. Kami akan tetap bantu agar segera bisa diselesaikan," jelas Jokowi.\r\n\r\nWali Kota Jakarta Utara, Bambang Sugiyono, mengatakan di Tanah Merah pernah terjadi kebakaran hebat akibat adanya depo yang terbakar pada 2009, sehingga dalam pemberian KTP ada hambatan.\r\n\r\n"Yang jelas RT dan RW akan dibentuk di sini. Tetapi ada persyaratan bahwa zona pengaman harus dibangun, sehingga jika terjadi kebakaran tidak mengganggu masyarakat," terangnya.\r\n\r\nLegalitas Administrasi\r\n\r\nMenurut Bambang pemberian KTP dan pembentukan RT-RW bukan merupakan hak kepemilikan lahan, tapi untuk legalitas administrasi kependudukan. Maka, dengan KTP dan RT/RW yang jelas, masyarakat setempat nanti bisa mengurus akte kelahiran dan sebagainya.\r\n\r\n"Soal masalah lahan, yang tadi disampaikan oleh Pak Gubernur akan bicara dengan Pertamina, makanya apabila sudah bertemu nanti ini ada persyaratan. Pertama, tidak menuntut masalah kepemilikan tanah dan juga yang lainnya yang akan berakibat hukum. Kecuali itu sesuai dengan hukum," kata Bambang.\r\n\r\nApabila warga Tanah Merah membutuhkan Puskesmas, Posyandu, atau tempat yang sifatnya sosial kemasyarakatan, Pemprov DKI akan menyiapkannya. Namun, Bambang menuturkan, jika harus dibangun jalan dan sebagainya, lahannya masih belum jelas dan masih sengketa, sehingga itu tidak akan dilakukan.\r\n\r\n"Tapi prinsipnya, Pak Gubernur sudah memberikan ijin untuk dibentuk RT/RW dan pemberian KTP. Karena syarat pemberian KTP harus ada RT/RW," katanya.', 'http://localhost/search5/file/92data2.txt', '92data2.txt', '', '0000-00-00 00:00:00', 0),
(3, '2013-05-24 13:55:36', '7 Alasan Mengapa Final Liga Champions 2012/2013 Seru untuk Disimak', '7 Alasan Mengapa Final Liga Champions 2012/2013 Seru untuk Disimak\r\n\r\nAkhirnya saat yang dinanti-nantikan penggila sepak bola akan datang tidak lama lagi. Sebuah pertandingan akbar yang digadang-gadangkan sebagai event terbesar di dunia persepakbolaan, yaitu final Liga Champions Eropa atau UEFA Champions League Final akan digelar pada tanggal 25 Mei 2012 di Wembley Stadium, London Inggris.\r\n\r\nPara penggila sepak bola seakan dikejutkan dengan hasil final Liga Champions yang mempertemukan dua klub raksasa Jerman yaitu Borussia Dortmund dan Bayern Munchen . Ajang pertandingan final Liga Champions Eropa yang berupa all German final ini merupakan yang pertama kali dan cukup menyita perhatian dunia persepakbolaan. Namun banyak pula pihak yang tidak terkejut akan hasil ini, karena mereka telah mengamati perkembangan kedua klub ini yang semakin baik dari tahun ke tahun dan meyakini peluang kedua tim untuk menjuarai Liga Champions Eropa sangat terbuka lebar.\r\n\r\nKedua klub ini berhasil melanggeng ke final dengan mengalahkan kedua tim raksasa Spanyol yang awalnya dijagokan untuk tampil di final, yaitu Barcelona dan Real Madrid. Bayern Munchen berhasil menghancurkan Barcelona dengan agregat 7-0 sementara Borussia Dortmund harus puas dengan hasil tipis agregat 4-3 melawan Real Madrid.\r\n', 'http://localhost/search5/file/43data3.txt', '43data3.txt', '', '0000-00-00 00:00:00', 0),
(4, '2013-05-24 13:57:15', 'Jokowi Jadi Rebutan Partai, Apa Kata PDIP?', 'VIVAnews - Gubernur DKI Jakarta, Joko Widodo atau yang lebih dikenal dengan nama Jokowi, jadi rebutan partai-partai untuk dijadikan calon presiden pada Pemilu 2014 mendatang. Padahal, saat ini, Jokowi masih menjadi kader PDIP.\r\n\r\nPopularitas Jokowi, menurut sejumlah survei, memang terus melesat. Ini menjadi daya tarik bagi partai lain untuk mengusung mantan Walikota Solo itu menjadi Capres tahun 2014 mendatang.\r\n\r\nPDIP sendiri tak mau ambil pusing atas rayuan partai lain yang ingin meminang Jokowi. Menurut Ketua DPP PDIP, Ribka Tjiptaning, partai akan serahkan semua kepada partai.\r\n\r\n"Itu kewenangan partai biarlah orang ngomong apa. Tapi kan kader PDI Perjuangan," kata Ribka di Gedung DPR, Kamis, 23 Mei 2013.\r\n\r\nRibka yakin jika Jokowi dapat menilai apa tujuan partai lain menawarinya. "Jokowi bukan orang bodoh. Merayu ada yang tulus atau menjorokkan," ujar dia.\r\n\r\nBeberapa partai pernah mengatakan keinginannya untuk mencalonkan Jokowi baik jadi presiden atau calon wakil presiden. (ren)\r\n', 'http://localhost/search5/file/42data4.txt', '42data4.txt', '', '2013-05-24 13:59:18', 0),
(5, '2013-05-24 14:02:53', 'Polwan Cantik Jadi DPO, Sang Ayah yang Kapolsek Tak Ada di Kantor', 'VIVAnews - Polwan cantik yang sehari-hari bertugas di Polres Mojokerto, Jawa Timur, Briptu Rani Indahyuni Nugrahaeni, menjadi buron dan masuk Daftar Pencarian Orang (DPO) Polres tempatnya berdinas. Hal ini dilakukan karena Briptu Rani dianggap desersi atau meninggalkan kewajiban dinas sebagai polwan.\r\n\r\nOrangtua Briptu Rani, yang merupakan Kapolsek di Polsekta Cibeunying Kaler, Bandung, Komisaris Polisi Maedi Suti belum bisa dimintai komentar atas kasus yang menimpa putrinya itu.\r\n\r\nSaat VIVAnews mencoba menemuinya di Mapolsek Cibeunying Kaler, Kamis 23 Mei 2013, ruangan kapolsek Cibeunying Kaler tampak kosong. Petugas piket di Mapolsek setempat, Briptu Dadan menyatakan bahwa kapolsek sejak kemarin tidak berada di kantor.\r\n\r\n"Sejak kemarin memang tidak ada di kantor, ke kantor sebentar, lalu pergi lagi," ujar Briptu Dadan.\r\n\r\nBriptu Rani dikabarkan menjadi korban bullying seniornya. Salah satu penyebabnya adalah gaya hidup Rani yang mencolok.\r\n\r\nSebelumnya, paman Rani, Syariefuddin membantah pemberitaan terkait keponakannya yang selama ini beredar di masyarakat. Menurut Syarief, Rani telah menjadi korban pelecehan seksual atasannya. \r\n\r\nSelain itu, ia pun menuturkan, Rani menjadi korban bullying seniornya di Polres Mojokerto. "Dia merasa tertekan dengan ulah kapolres juga, karena sering memanggil dia di luar jam-jam tugas," kata dia.\r\n\r\nBahkan, Syariefuddin membeberkan, ada satu kejadian yang membuat Rani sakit hati. Pada suatu hari, saat Rani tengah mengukur baju dinas dengan tukang jahit di sebuah ruangan, ada kapolres beserta wakil-wakilnya. Akhirnya, kapolres sendiri yang mengambil alih mengukur baju Rani. \r\n\r\n"Ini kan tidak pantas. Masa seorang kapolres mengukur baju Rani sambil menjamah-jamah," ungkapnya.\r\n\r\nKeberadaan Rani, menurut pamannya, ada di sebuah rumah di Jakarta. Saat ini, kondisi Rani sedang mengalami depresi berat, sehingga harus didampingi dokter ahli jiwa.', 'http://localhost/search5/file/43data5.txt', '43data5.txt', '', '0000-00-00 00:00:00', 0),
(6, '2013-05-24 14:04:12', 'Ibunda Briptu Rani: Anak Saya Bukan Pelacur!', 'VIVAnews - Briptu Rani Indahyuni Nugrahaeni, Polwan cantik yang bertugas di Polres Mojokerto telah menghilang selama tiga bulan dan masuk dalam Daftar Pencarian Orang (DPO) Polres tempatnya bekerja. Rani diduga menghilang karena stres, akibat dilecehkan atasannya. \r\n\r\nKepada VIVAnews, ibunda Briptu Rani mengatakan putrinya kerap diminta untuk menemani tamu-tamu atasannya. Telepon genggam Blackberry milik Rani dirampas jika menolak perintah atasannya, yang tak lain adalah Kapolres Mojokerto.\r\n\r\n"Usai menemani tamu-tamu tersebut karaoke dan makan malam, Briptu Rani selalu diminta oknum Kapolres kembali ke markas untuk mengambil BB (Blackberry) yang disita Kapolres, agar Briptu Rani mau menjalankan perintah atasannya," ujar Raya Boru Situmeang, saat ditemui di kediamannya, di Jalan Negla Manah, Bandung, Jawa Barat, Jumat 24 Mei 2013.\r\n\r\n"Pelecehan dilakukan oknum atasannya, yakni dengan menggelitik kaki Briptu Rani dengan kaki sang oknum atasannya. Selain itu saat pengukuran baju dinas Polres, sang oknum atasan langsung mengukur baju layaknya tukang jahit ke badan Briptu Rani, sambil dipegang-pegang," tutur Raya.\r\n\r\nRaya mengisahkan cerita putrinya ini dengan terbata-bata. Kesedihan dan kekecewaan terpancar jelas dari raut wajahnya.\r\n\r\nMenurut Raya, selama ini Briptu Rani selalu menuruti perintah atasannya sesuai dengan tugasnya sebagai Polwan. Namun lama kelamaan Briptu Rani menolak dengan melakukan tindakan kabur dari kesatuannya, karena tidak kuat dengan perintah atasan yang dilakukan diluar kedinasan.\r\n\r\n"Awalnya memang menganggap sebagai sebuah perintah tugas, namun lama kelamaan, hal-hal seperti ini dianggap jadi kebiasaan. Sehingga Briptu Rani wajib memenuhi perintah atasannya tersebut," papar Raya.\r\n\r\nSebagai keluarga besar Polri, dirinya menyayangkan sikap oknum atasan Rani yang sudah keterlaluan memperlakukan bawahan.\r\n\r\nAtas kejadian ini, seluruh keluarganya mengalami tekanan karena pemberitaan miring ini. "Saya berharap ada keadilan terhadap anak kami."', 'http://localhost/search5/file/3data6.txt', '3data6.txt', '', '2013-05-24 14:07:46', 0),
(7, '2013-05-24 14:08:47', 'Ibunda: Briptu Rani Diperlakukan Tak Senonoh oleh Atasannya', 'VIVAnews – Briptu Rani Indahyuni Nugrahaeni, polisi wanita Polres Mojokerto Jawa Timur, dimasukkan Daftar Pencarian Orang (DPO) dan dinyatakan buron oleh instansi tempatnya bekerja karena sudah hampir tiga bulan tidak masuk kantor.\r\n\r\nNamun ibunda Briptu Rani menyatakan anak gadisnya tidak mangkir dari tugas. “Anak saya itu depresi berat. Dia sedang dalam penyembuhan di Jakarta,” kata Raya Boru Situmeang di kediamannya, Bandung, kepada VIVAnews, Jumat 24 Mei 2013.\r\n\r\nRaya mengatakan Rani depresi karena diperlakukan tak senonoh oleh atasannya, yaitu seorang Kapolres di Jawa Tengah beserta sejumlah perwira di sana. “Oknum Kapolres di sana memberi tugas pada anak saya bukan sebagai anggota polwan atau Polri biasa. Anak saya malah disuruh menemani karaoke tamu-tamu dia hingga larut malam,” ujar ibunda Rani.\r\n\r\nMenurut Raya, Rani diperintah berganti pakaian dengan baju bebas ketika menemani tamu-tamu atasannya itu. “Masa tugas polwan menemani tamu pimpinan malam-malam?” dia mempertanyakan.\r\n\r\nRaya mengatakan anaknya semakin stres ketika foto-foto pribadinya yang tak seharusnya dipublikasikan, ternyata menyebar di dunia maya. “Dia tidak kuat menahan malu, lalu kabur dari kesatuannya karena tidak kuat dengan olokan serta cacian, usai ramai diberitakan di dunia maya,” ujar Raya.\r\n\r\nPropam Polda Jatim telah membentuk tim khusus untuk mencari Briptu Rani. “Tim ini akan menguak jati diri polisi wanita itu, termasuk rekam jejaknya selama menjadi anggota polisi di Polres Mojokerto,” kata Kepala Sub Bidang Penerangan Masyarakat Bidang Humas Polda Jawa Timur, Ajun Komisaris Besar Pol. Suhartoyo.\r\n\r\nTim itu juga akan menyelidiki tuduhan pelecehan seksual itu. “Kami masih mencari keterangan dari saksi-saksi beserta bukti-buktinya,” ujar Suhartoyo.', 'http://localhost/search5/file/63data7.txt', '63data7.txt', '', '0000-00-00 00:00:00', 0),
(8, '2013-05-24 14:19:08', ' Polwan yang Diduga Stres Masih Dicari Propam Polda Jawa Timur', 'VIVAnews - Propam Polda Jatim menerjunkan tim khusus untuk mencari Briptu Rani Indahyuni Nugrahaeni, yang sudah tiga bulan menghilang. Pencarian dilakukan setelah Polda Jatim menerima laporan menyangkut hilangnya anggota Polres Mojokerto, Jawa Timur itu. Hal itu disampaikan Kepala Subbidang Penerangan Masyarakat Bidang Humas Polda Jatim, Ajun Komisaris Besar Polisi Suhartoyo, Kamis 23 Mei 2013.\r\n\r\n"Tim juga akan menguak jati diri polisi wanita itu, termasuk track recordnya selama menjadi anggota polisi di Polres Mojokerto," kata Suhartoyo. Saat ditanya siapa saja yang sudah diperiksa di Polres Mojokerto, dan bagaimana hasilnya? Suhartoyo belum mengetahuinya. "Belum, karena masih dalam proses," katanya.\r\n\r\nSoal beredarnya foto syur Briptu Rani di media sosial, Polda Jatim mengaku masih menyelidikinya. "Termasuk ungkapan ada pelecehan seksual, penggelapan uang dan sebagainya itu, juga masih dilakukan pencarian keterangan serta bukti-buktinya," katanya. \r\n\r\nPaman Rani, Syariefuddin, membantah keras sejumlah pemberitaan yang selama ini beredar. Dia menegaskan bahwa keponakannya itu adalah korban pelecehan seksual atasannya. Rani juga, kata sang paman, menjadi korban bullying seniornya. "Dia merasa tertekan karena sering dipanggil atasan di luar jam-jam tugas," kata sang paman.', 'http://localhost/search5/file/27data8.txt', '27data8.txt', '', '0000-00-00 00:00:00', 0),
(9, '2013-05-24 14:20:11', 'Polda Jatim Cari Polisi Cantik yang Diduga Stres', 'VIVAnews - Briptu Rani Indahyuni Nugrahaeni, anggota Polres Mojokerto, Jawa Timur sudah tiga bulan ini tidak berdinas. Polwan berparas cantik itu lantas masuk dalam Daftar Pencarian Orang (DPO) dan sedang diburu tim dari Propam Polda Jawa Timur. \r\n\r\nRani menghilang diduga setelah mengalami pelecehan seksual yang dilakukan atasanya. Tapi, Propam mencari Rani juga karena kasus lain. Selain kasus disersi, Rani diduga melakukan penggelapan uang dan terkait peredaran foto syur dirinya di media sosial. \r\n\r\nHingga kini keluarga Rani belum banyak komentar mengenai kasus ini. Orang tua Rani yang merupakan Kapolsek Cibeunying Kaler, Bandung, Komisaris Polisi Maedi Suti, juga tidak mau memberikan penjelasan.\r\n\r\nPaman Rani, Syariefuddin membantah pemberitaan terkait keponakannya yang selama ini beredar di masyarakat. Menurut Syarief, Rani telah menjadi korban pelecehan seksual atasannya. Selain itu, ia menuturkan bahwa Rani menjadi korban bullying seniornya di Polres Mojokerto. \r\n\r\n"Dia merasa tertekan dengan ulah kapolres juga, karena sering memanggil dia di luar jam-jam tugas," kata dia.\r\n\r\nMenurut keterangan Asisbid Penmas Polda Jatim, Ajun Komisaris Besar Suhartoyo, sejak kemarin tim Propam Polda Jatim diberangkatkan ke Mojokerto untuk melakukan pulbaket atau pengumpulan bahan dan keterangan terkait persoalan yang dialamli Briptu Rani.\r\n\r\n"Tim selain melakukan pengumpulan data dan informasi, termasuk juga informasi dari internal Polres Mojokerto serta pihak-pihak lain yang diduga terlibat persoalan itu," katanya Kamis, 23 Mei 2013. (ren)\r\n', 'http://localhost/search5/file/75data9.txt', '75data9.txt', '', '0000-00-00 00:00:00', 0),
(10, '2013-05-24 14:21:29', 'Joko Widodo', 'Ir. H. Joko Widodo (lahir di Surakarta, 21 Juni 1961; umur 51 tahun),[3] atau yang lebih akrab dipanggil Jokowi, adalah Gubernur DKI Jakarta terhitung sejak tanggal 15 Oktober 2012. Ia merupakan gubernur ke-17 yang memimpin ibu kota Indonesia.\r\nSebelumnya, Jokowi menjabat Wali Kota Surakarta (Solo) selama dua periode, 2005-2010 dan 2010-2015, namun baru 2 tahun menjalani periode keduanya, ia mendapat amanat dari warga Jakarta untuk memimpin Ibukota Negara. Dalam masa jabatannya di Solo, ia didampingi F.X. Hadi Rudyatmo sebagai wakil walikota. Ia dicalonkan Partai Demokrasi Indonesia Perjuangan.[4]\r\n\r\nMasa kecil [sunting]\r\n\r\nJoko Widodo lahir dari pasangan Noto Mihardjo dan Sujiatmi Notomiharjo.[5] Dengan kesulitan hidup yang dialami, ia terpaksa berdagang, mengojek payung, dan jadi kuli panggul untuk mencari sendiri keperluan sekolah dan uang jajan. Saat anak-anak lain ke sekolah dengan sepeda, ia memilih untuk tetap berjalan kaki. Mewarisi keahlian bertukang kayu dari ayahnya, ia mulai pekerjaan menggergaji di umur 12 tahun.[6][7] Penggusuran yang dialaminya sebanyak tiga kali di masa kecil mempengaruhi cara berpikirnya dan kepemimpinannya kelak setelah menjadi Walikota Surakarta saat harus menertibkan pemukiman warga.[8]\r\nMasa kuliah dan berwirausaha [sunting]\r\n\r\nDengan performa akademis yang dimiliki, ia diterima di Jurusan Kehutanan, Fakultas Kehutanan Universitas Gajah Mada. Kesempatan ini dimanfaatkannya untuk belajar struktur kayu, pemanfaatan, dan teknologinya.[9]\r\nSelepas kuliah, ia bekerja di BUMN, namun tak lama memutuskan keluar dan memulai usaha dengan menjaminkan rumah kecil satu-satunya, dan akhirnya berkembang sehingga membawanya bertemu Micl Romaknan, yang akhirnya memberinya panggilan yang populer hingga kini, Jokowi. Dengan kejujuran dan kerja kerasnya, ia mendapat kepercayaan dan bisa berkeliling Eropa yang membuka matanya. Pengaturan kota yang baik di Eropa menjadi inspirasinya untuk diterapkan di Solo dan menginspirasinya untuk memasuki dunia politik. Ia ingin menerapkan kepemimpinan manusiawi dan mewujudkan kota yang bersahabat untuk penghuninya.[10]\r\nKarier politik [sunting]\r\n\r\nWali kota Surakarta [sunting]\r\nDengan berbagai pengalaman di masa muda, ia mengembangkan Solo yang buruk penataannya dan berbagai penolakan masyarakat untuk ditertibkan. Di bawah kepemimpinannya, Solo mengalami perubahan dan menjadi kajian di universitas luar negeri.[11]\r\nRebranding Solo [sunting]\r\nBranding untuk kota Solo dilakukan dengan menyetujui slogan Kota Solo yaitu "Solo: The Spirit of Java". Langkah yang dilakukannya cukup progresif untuk ukuran kota-kota di Jawa: ia mampu merelokasi pedagang barang bekas di Taman Banjarsari hampir tanpa gejolak untuk merevitalisasi fungsi lahan hijau terbuka, memberi syarat pada investor untuk mau memikirkan kepentingan publik, melakukan komunikasi langsung rutin dan terbuka (disiarkan oleh televisi lokal) dengan masyarakat. Taman Balekambang, yang terlantar semenjak ditinggalkan oleh pengelolanya, dijadikannya taman. Jokowi juga tak segan menampik investor yang tidak setuju dengan prinsip kepemimpinannya.[12] Sebagai tindak lanjut branding ia mengajukan Surakarta untuk menjadi anggota Organisasi Kota-kota Warisan Dunia dan diterima pada tahun 2006. Langkahnya berlanjut dengan keberhasilan Surakarta menjadi tuan rumah Konferensi organisasi tersebut pada bulan Oktober 2008 ini. Pada tahun 2007 Surakarta juga telah menjadi tuan rumah Festival Musik Dunia (FMD) yang diadakan di kompleks Benteng Vastenburg yang terancam digusur untuk dijadikan pusat bisnis dan perbelanjaan. FMD pada tahun 2008 diselenggarakan di komplek Istana Mangkunegaran.\r\nMendamaikan Keraton Surakarta [sunting]\r\nPada tanggal 11 Juni 2004, Paku Buwono XII wafat tanpa sempat menunjuk permaisuri maupun putera mahkota, sehingga terjadi pertentangan antara kedua putranya, Sampeyan Dalem Ingkang Sinuwun Kanjeng Susuhunan (SDISKS) Paku Buwono XIII dan Kanjeng Gusti Pangeran Haryo (KGPH) Panembahan Agung Tedjowulan. Selama tujuh tahun ada dua raja yang ditunjuk oleh kedua pihak di dalam satu Keraton.[13]\r\nKonflik ini akhirnya mendorong campur tangan pemerintah Republik Indonesia dengan menawarkan dualisme kepemimpinan, dengan Paku Buwono XIII sebagai Raja dan KGPH Panembahan Agung Tedjowulan sebagai wakil atau Mahapatih. Penandatanganan kesepahaman ini didukung oleh empat perwakilan menteri, yaitu Menteri Dalam Negeri, Menteri Pendidikan dan Kebudayaan, Menteri Pekerjaan Umum serta Menteri Pariwisata dan Ekonomi Kreatif. Namun konflik belum selesai karena beberapa keluarga keraton masih menolak penyatuan ini.[14]\r\nPuncaknya adalah penolakan atas Raja dan Mahapatih untuk memasuki Keraton pada tanggal 25 Mei 2012. Keduanya dicegat di pintu utama Keraton di Korikamandoengan.[15] Jokowi akhirnya berperan menyatukan kembali perpecahan ini setelah delapan bulan menemui satu per satu pihak keraton yang terlibat dalam pertentangan.[16] Pada tanggal 4 Juni 2012 akhirnya Ketua DPR Marzuki Alie menyatakan berakhirnya konflik Keraton Surakarta yang didukung oleh pernyataan kesediaan melepas gelar oleh Panembahan Agung Tedjowulan, serta kesiapan kedua keluarga untuk melakukan rekonsiliasi.[17]\r\nPenghargaan [sunting]\r\nAtas prestasinya, oleh Majalah Tempo, Joko Widodo terpilih menjadi salah satu dari "10 Tokoh 2008".[18] Kebetulan di majalah yang sama pula, Basuki Tjahaja Purnama, atau akrab dengan panggilan Ahok pernah terpilih pula dalam "10 Tokoh 2006" atas jasanya memperbaiki layanan kesehatan dan pendidikan di Belitung Timur. Ahok kemudian akan menjadi pendampingnya di Pilgub DKI tahun 2012.[19]\r\nPada tanggal 12 Agustus 2011, ia juga mendapat penghargaan Bintang Jasa Utama untuk prestasinya sebagai kepala daerah mengabdikan diri kepada rakyat.[20] Bintang Jasa Utama ini adalah penghargaan tertinggi yang diberikan kepada warga negara sipil. [21]\r\nGubernur Jakarta [sunting]\r\n\r\n\r\nSuasana di posko pemenangan Jokowi di Jalan Borobudur 22\r\nLihat pula: Pemilihan Gubernur dan Wakil Gubernur Jakarta, 2012\r\nJokowi diminta secara pribadi oleh Jusuf Kalla untuk mencalonkan diri sebagai Gubernur DKI Jakarta[22] pada Pilgub DKI tahun 2012. Karena merupakan kader PDI Perjuangan, maka Jusuf Kalla meminta dukungan dari Megawati Soekarnoputri, yang awalnya terlihat masih ragu. Sebagai wakil, Basuki T Purnama yang saat itu menjadi anggota DPR dicalonkan mendampingi Jokowi dengan pindah ke Gerindra karena Golkar telah sepakat mendukung Alex Noerdin sebagai Calon Gubernur.[23]\r\nPasangan ini awalnya tidak diunggulkan. Hal ini terlihat dari klaim calon petahana yang diperkuat oleh Lingkaran Survei Indonesia bahwa pasangan Fauzi Bowo dan Nachrowi Ramli akan memenangkan pilkada dalam satu putaran.[24] Selain itu, PKS yang meraup lebih dari 42 persen suara untuk Adang Daradjatun di pilkada 2007 juga mengusung Hidayat Nur Wahid yang sudah dikenal rakyat sebagai Ketua MPR RI periode 2004-2009. Dibandingkan dengan partai lainnya, PDIP dan Gerindra hanya mendapat masing-masing hanya 11 dan 6 kursi dari total 94 kursi, jika dibandingkan dengan 32 kursi milik Partai Demokrat untuk Fauzi Bowo, serta 18 Kursi milik PKS untuk Hidayat Nur Wahid.[25] Namun LP3ES sudah memprediksi bahwa Jokowi dan Fauzi Bowo akan bertemu di putaran dua.[26]\r\nHitung cepat yang dilakukan sejumlah lembaga survei pada hari pemilihan, 11 Juli 2012 dan sehari setelah itu, memperlihatkan Jokowi memimpin, dengan Fauzi Bowo di posisi kedua.[27] Pasangan ini berbalik diunggulkan memenangi pemilukada DKI 2012 karena kedekatan Jokowi dengan Hidayat Nur Wahid saat pilkada Walikota Solo 2010[28] serta pendukung Faisal Basri dan Alex Noerdin dari hasil survei cenderung beralih kepadanya.[29]\r\nPilkada 2012 putaran kedua [sunting]\r\nJokowi berusaha menghubungi dan mengunjungi seluruh calon,[30] termasuk Fauzi Bowo,[31] namun hanya berhasil bersilaturahmi dengan Hidayat Nur Wahid[32] dan memunculkan spekulasi adanya koalisi di putaran kedua.[33] Setelahnya, Fauzi Bowo juga bertemu dengan Hidayat Nur Wahid.\r\nNamun keadaan berbalik setelah partai-partai pendukung calon lainnya di putaran pertama, malah menyatakan dukungan kepada Fauzi Bowo.[34] Hubungan Jokowi dengan PKS juga memburuk dengan adanya tudingan bahwa tim sukses Jokowi memunculkan isu mahar politik Rp50 miliar.[35] PKS meminta isu ini dihentikan,[36] sementara tim sukses Jokowi menolak tudingan menyebutkan angka imbalan tersebut.[37] Kondisi kehilangan potensi dukungan dari partai-partai besar diklaim Jokowi sebagai fenomena "Koalisi Rakyat melawan Koalisi Partai".[38] Klaim ini dibantah pihak Partai Demokrat karena PDI Perjuangan dan Gerindra tetap merupakan partai politik yang mendukung Jokowi, tidak seperti Faisal Basri dan Hendrardji yang merupakan calon independen.[39] Jokowi akhirnya mendapat dukungan dari tokoh-tokoh penting seperti Misbakhun dari PKS,[40] Jusuf Kalla dari Partai Golkar,[41] Indra J Piliang dari Partai Golkar,[42] serta Romo Heri yang merupakan adik ipar Fauzi Bowo.[43]\r\nPertarungan politik juga merambah ke dunia media sosial dengan peluncuran Jasmev,[44] pembentukan media center,[45] serta pemanfaatan media baru dalam kampanye politik seperti Youtube.[46] Pihak Fauzi Bowo menyatakan juga ikut turun ke media sosial, namun mengakui kelebihan tim sukses dan pendukung Jokowi di kanal ini.[47]\r\nPutaran kedua juga diwarnai berbagai tudingan kampanye hitam, yang antara lain berkisar dalam isu SARA,[48] isu kebakaran yang disengaja,[49] korupsi,[50] dan politik transaksional.[51]\r\nMenjelang putaran kedua, berbagai survei kembali bermunculan yang memprediksi kemenangan Jokowi, antara lain 36,74% melawan 29,47% oleh SSSG,[52] 72,48% melawan 27,52% oleh INES,[53] 45,13% melawan 37,53% dalam survei elektabilitas oleh IndoBarometer,[54] 45,6% melawan 44,7% oleh Lembaga Survei Indonesia.[55]\r\nSetelah pemungutan suara putaran kedua, hasil penghitungan cepat Lembaga Survei Indonesia memperlihatkan pasangan Jokowi - Ahok sebagai pemenang dengan 53,81%. Sementara rivalnya, Fauzi Bowo - Nachrowi Ramli mendapat 46,19%.[56] Hasil serupa juga diperoleh oleh Quick Count IndoBarometer 54.24% melawan 45.76%,[57] dan lima stasiun TV.[58] Perkiraan sementara oleh metode Quick Count diperkuat oleh Real Count PDI Perjuangan dengan hasil 54,02% melawan 45,98%,[59] Cyrus Network sebesar 54,72% melawan 45,25%.[60] Dan akhirnya pada 29 September 2012, KPUD DKI Jakarta menetapkan pasangan Jokowi - Ahok sebagai gubernur dan wakil gubernur DKI yang baru untuk masa bakti 2012-2017 menggantikan Fauzi Bowo - Prijanto.[61][62]\r\nPasca Pilkada 2012 [sunting]\r\nSetelah resmi menang di perhitungan suara, Jokowi masih diterpa isu upaya menghalangi pengunduran dirinya oleh DPRD Surakarta., namun dibantah oleh DPRD.[63] Menteri Dalam Negeri Gamawan Fauzi juga menyatakan akan turun tangan jika masalah ini terjadi,[64] karena pengangkatan Jokowi sebagai Gubernur DKI Jakarta tidak dianggap melanggar aturan mana pun jika pada saat mendaftar sebagai Calon Gubernur sudah menyatakan siap mengundurkan diri dari jabatan sebelumnya jika terpilih, dan benar-benar mengundurkan diri setelah terpilih.[65] Namun setelahnya, DPR merencanakan perubahan terhadap Undang-Undang No 34 tahun 2004, sehingga setalah Jokowi, kepala daerah yang mencalonkan diri di daerah lain, harus terlebih dahulu mengundurkan diri dari jabatannya pada saat mendaftarkan diri sebagai calon.[66]\r\nAtas alasan administrasi terkait pengunduran diri sebagai Walikota Surakarta dan masa jabatan Fauzi Bowo yang belum berakhir, pelantikan Jokowi tertunda[67] dari jadwal awal 7 Oktober 2012 menjadi 15 Oktober 2012.[68] Acara pelantikan diwarnai perdebatan mengenai biaya karena adanya pernyataan Jokowi yang menginginkan biaya pelantikan yang sederhana.[69] DPRD kemudian menurunkan biaya pelantikan menjadi Rp 550 juta, dari awalnya dianggarkan Rp 1,05Miliar dalam Perubahan ABPD. Acara pelantikan juga diramaikan oleh pedagang kaki lima yang menggratiskan dagangannya.[70]\r\nSehari usai pelantikan, Jokowi langsung dijadwalkan melakukan kunjungan ke masyarakat.[71]\r\nProtes serikat buruh atas UMP [sunting]\r\nSelanjutnya, pada 24 Oktober 2012 yang lalu, terjadi unjuk rasa di Balaikota yang dilakukan sekumpulan buruh dari Konfederasi Serikat Pekerja Seluruh Indonesia. .[72] Awalnya buruh menuntut kenaikan UMP menjadi Rp 2,79Juta, yang ditanggapi ajakan dialog oleh Basuki Tjahaja Purnama dengan perwakilan buruh. Akhirnya disepakati penggunaan angka survei Kecukupan Hidup Layak bulan terakhir, dari sebelumnya yang dirata-rata dari data Februari 2012 hingga Oktober 2012,[73] serta berbagai poin lainnya sehingga menjadi 13 kesepakatan. [74]\r\nJokowi kemudian menyerahkan penghitungan UMP yang layak kepada Dewan Pengupahan yang awalnya memunculkan rekomendasi angka Rp1,9Juta. Namun sidang ini diganggu oleh tindakan buruh yang memanggil kembali perwakilannya, sehingga angka ini baru mewakili kepentingan pengusaha. [75]. Akhirnya disepakati oleh berbagai pihak bahwa Upah Minimum Provinsi sebesar Rp 2,2Juta yang kemudian ditetapkan oleh Dewan Pengupahan. [76]\r\nJokowi melakukan berbagai konsultasi, termasuk dengan Menakertrans Muhaimin Iskandar, Gubernur Banten, dan Gubernur Jawa Barat untuk menentukan UMP yang tepat bagi buruh di DKI Jakarta agar tidak mengalami ketimpangan dengan daerah penyangga, namun masih layak untuk dinikmati pekerja. [77]\r\nPenetapan UMP oleh Jokowi masih menunggu adanya kesepakatan Pengusaha dan Buruh, dan ditambahi alasan "Menunggu Hari Baik". Sehingga hingga 18 November 2012, UMP yang berlaku masih sebesar Rp 1,5Juta.[78]', 'http://localhost/search5/file/68data1.txt', '68data1.txt', '', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ta_g2t`
--

CREATE TABLE IF NOT EXISTS `ta_g2t` (
  `g` mediumint(8) unsigned NOT NULL,
  `t` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `gt` (`g`,`t`),
  KEY `tg` (`t`,`g`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci DELAY_KEY_WRITE=1;

--
-- Dumping data untuk tabel `ta_g2t`
--

INSERT INTO `ta_g2t` (`g`, `t`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(1, 37),
(1, 38),
(1, 39),
(1, 40),
(1, 41),
(1, 42),
(1, 43),
(1, 44),
(1, 45),
(1, 46),
(1, 47),
(1, 48),
(1, 49),
(1, 50),
(1, 51),
(1, 52),
(1, 53),
(1, 54),
(1, 55),
(1, 56),
(1, 57),
(1, 58),
(1, 59),
(1, 60),
(1, 61),
(1, 62),
(1, 63),
(1, 64),
(1, 65),
(1, 66),
(1, 67),
(1, 68),
(1, 69),
(1, 70),
(1, 71),
(1, 72),
(1, 73),
(1, 74),
(1, 75),
(1, 76),
(1, 77),
(1, 78),
(1, 79),
(1, 80),
(1, 81),
(1, 82),
(1, 83),
(1, 84),
(1, 85),
(1, 86),
(1, 87),
(1, 88),
(1, 89),
(1, 90),
(1, 91),
(1, 92),
(1, 93),
(1, 94),
(1, 95),
(1, 96),
(1, 97),
(1, 98),
(1, 99),
(1, 100),
(1, 101),
(1, 102),
(1, 103),
(1, 104),
(1, 105),
(1, 106),
(1, 107),
(1, 108),
(1, 109),
(1, 110),
(1, 111),
(1, 112),
(1, 113),
(1, 114),
(1, 115),
(1, 116),
(1, 117),
(1, 118),
(1, 119),
(1, 120),
(1, 121),
(1, 122),
(1, 123),
(1, 124),
(1, 125),
(1, 126),
(1, 127),
(1, 128),
(1, 129),
(1, 130),
(1, 131),
(1, 132),
(1, 133),
(1, 134),
(1, 135),
(1, 136),
(1, 137),
(1, 138),
(1, 139),
(1, 140),
(1, 141),
(1, 142),
(1, 143),
(1, 144),
(1, 145),
(1, 146),
(1, 147),
(1, 148),
(1, 149),
(1, 150),
(1, 151),
(1, 152),
(1, 153),
(1, 154),
(1, 155),
(1, 156),
(1, 157),
(1, 158),
(1, 159),
(1, 160),
(1, 161),
(1, 162),
(1, 163),
(1, 164),
(1, 165),
(1, 166),
(1, 167),
(1, 168),
(1, 169),
(1, 170),
(1, 171),
(1, 172),
(1, 173),
(1, 174),
(1, 175),
(1, 176),
(1, 177),
(1, 178),
(1, 179),
(1, 180),
(1, 181),
(1, 182),
(1, 183),
(1, 184),
(1, 185);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ta_id2val`
--

CREATE TABLE IF NOT EXISTS `ta_id2val` (
  `id` mediumint(8) unsigned NOT NULL,
  `misc` tinyint(1) NOT NULL DEFAULT '0',
  `val` text COLLATE utf8_unicode_ci NOT NULL,
  `val_type` tinyint(1) NOT NULL DEFAULT '0',
  UNIQUE KEY `id` (`id`,`val_type`),
  KEY `v` (`val`(64))
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci DELAY_KEY_WRITE=1;

--
-- Dumping data untuk tabel `ta_id2val`
--

INSERT INTO `ta_id2val` (`id`, `misc`, `val`, `val_type`) VALUES
(1, 0, 'http://localhost/search/file/19ta.owl', 0),
(3, 0, 'http://www.w3.org/1999/02/22-rdf-syntax-ns#type', 0),
(5, 0, '', 2),
(8, 0, 'http://www.w3.org/2000/01/rdf-schema#subClassOf', 0),
(10, 0, 'http://www.w3.org/2000/01/rdf-schema#label', 0),
(12, 0, 'http://www.w3.org/2001/XMLSchema#string', 0),
(23, 0, 'http://www.w3.org/2002/07/owl#unionOf', 0),
(25, 0, 'http://www.w3.org/1999/02/22-rdf-syntax-ns#first', 0),
(27, 0, 'http://www.w3.org/1999/02/22-rdf-syntax-ns#rest', 0),
(43, 0, 'http://www.w3.org/2000/01/rdf-schema#range', 0),
(45, 0, 'http://www.w3.org/2000/01/rdf-schema#domain', 0),
(84, 0, 'http://www.owl-ontologies.com/Ontology1364957607.owl#namaOrang', 0),
(56, 0, 'http://www.owl-ontologies.com/Ontology1364957607.owl#tanggalterbitArtikel', 0),
(68, 0, 'http://www.owl-ontologies.com/Ontology1364957607.owl#memilikikonten', 0),
(98, 0, 'http://www.owl-ontologies.com/Ontology1364957607.owl#judulArtikel', 0),
(79, 0, 'http://www.owl-ontologies.com/Ontology1364957607.owl#namaTeknologi', 0),
(61, 0, 'http://www.owl-ontologies.com/Ontology1364957607.owl#judulBerita', 0),
(40, 0, 'http://www.owl-ontologies.com/Ontology1364957607.owl#tanggalterbitBerita', 0),
(49, 0, 'http://www.owl-ontologies.com/Ontology1364957607.owl#namaProduk', 0),
(74, 0, 'http://www.owl-ontologies.com/Ontology1364957607.owl#namaKonten', 0),
(93, 0, 'http://www.owl-ontologies.com/Ontology1364957607.owl#tanggalPaten', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ta_o2val`
--

CREATE TABLE IF NOT EXISTS `ta_o2val` (
  `id` mediumint(8) unsigned NOT NULL,
  `misc` tinyint(1) NOT NULL DEFAULT '0',
  `val_hash` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `val` text COLLATE utf8_unicode_ci NOT NULL,
  UNIQUE KEY `id` (`id`),
  KEY `vh` (`val_hash`),
  KEY `v` (`val`(64))
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci DELAY_KEY_WRITE=1;

--
-- Dumping data untuk tabel `ta_o2val`
--

INSERT INTO `ta_o2val` (`id`, `misc`, `val_hash`, `val`) VALUES
(4, 0, '996223817', 'http://www.w3.org/2002/07/owl#Ontology'),
(7, 0, '519519641', 'http://www.w3.org/2002/07/owl#Class'),
(9, 0, '1782201138', 'http://www.owl-ontologies.com/Ontology1364957607.owl#Author'),
(11, 0, '883034996', 'Editor'),
(14, 0, '1663845503', 'Paten'),
(15, 0, '359658603', 'http://www.owl-ontologies.com/Ontology1364957607.owl#Orang'),
(16, 0, '1174151682', 'Author'),
(17, 0, '1140178089', 'Orang'),
(19, 0, '1695700175', 'Produk'),
(21, 0, '1431734141', 'Berita'),
(24, 0, '1711227852', '_:b1077752083_arc3333b2'),
(26, 0, '1460664187', 'http://www.w3.org/2002/07/owl#Thing'),
(28, 0, '1858143849', '_:b926548357_arc3333b3'),
(20, 0, '2056298061', 'http://www.owl-ontologies.com/Ontology1364957607.owl#Berita'),
(29, 0, '1148967621', 'http://www.w3.org/1999/02/22-rdf-syntax-ns#nil'),
(31, 0, '1463709396', 'Pegawai'),
(33, 0, '1804232111', 'Artikel'),
(35, 0, '736516900', 'Kolumnis'),
(37, 0, '1016265504', 'Peneliti'),
(39, 0, '583476072', 'Teknologi'),
(41, 0, '586787043', 'http://www.w3.org/2002/07/owl#FunctionalProperty'),
(42, 0, '1412315730', 'http://www.w3.org/2002/07/owl#DatatypeProperty'),
(12, 0, '1798598540', 'http://www.w3.org/2001/XMLSchema#string'),
(44, 0, '1545311075', 'tanggalterbitBerita'),
(46, 0, '23857027', '_:b1453419482_arc3333b4'),
(47, 0, '122019055', '_:b564550480_arc3333b5'),
(48, 0, '1990812161', '_:b1196487946_arc3333b6'),
(50, 0, '716976635', 'namaProduk'),
(51, 0, '441110284', '_:b811058588_arc3333b7'),
(52, 0, '1515299355', '_:b1595353075_arc3333b8'),
(53, 0, '601268305', '_:b672143205_arc3333b9'),
(18, 0, '1255427583', 'http://www.owl-ontologies.com/Ontology1364957607.owl#Produk'),
(55, 0, '1318956071', 'memilikiteknologi'),
(57, 0, '1853090344', 'tanggalterbitArtikel'),
(58, 0, '1569262838', '_:b1527312397_arc3333b10'),
(59, 0, '1920431562', '_:b739229851_arc3333b11'),
(60, 0, '1649599959', '_:b1257860831_arc3333b12'),
(32, 0, '1300009754', 'http://www.owl-ontologies.com/Ontology1364957607.owl#Artikel'),
(62, 0, '2078179681', 'judulBerita'),
(63, 0, '1256750036', '_:b1040080457_arc3333b13'),
(64, 0, '463474934', '_:b1550136340_arc3333b14'),
(65, 0, '611192583', '_:b727843970_arc3333b15'),
(67, 0, '500257787', 'namaPaten'),
(69, 0, '2062292165', '_:b1301588680_arc3333b16'),
(70, 0, '452543601', '_:b982751826_arc3333b17'),
(71, 0, '1384181066', '_:b1439922239_arc3333b18'),
(72, 0, '320404968', '_:b584337577_arc3333b19'),
(73, 0, '1891581827', 'memilikikonten'),
(75, 0, '1173336667', 'namaKonten'),
(76, 0, '206266754', '_:b1881514958_arc3333b20'),
(77, 0, '802762753', '_:b119706456_arc3333b21'),
(78, 0, '1563056232', '_:b1641299230_arc3333b22'),
(13, 0, '901123261', 'http://www.owl-ontologies.com/Ontology1364957607.owl#Paten'),
(80, 0, '940600878', '_:b382930316_arc3333b23'),
(81, 0, '1098407377', '_:b2001233879_arc3333b24'),
(82, 0, '2069603416', '_:b5199681_arc3333b25'),
(38, 0, '274003898', 'http://www.owl-ontologies.com/Ontology1364957607.owl#Teknologi'),
(83, 0, '691876788', 'namaTeknologi'),
(85, 0, '1023978285', 'namaOrang'),
(86, 0, '1075256153', '_:b1723463941_arc3333b26'),
(87, 0, '462188440', '_:b297716115_arc3333b27'),
(88, 0, '1669214091', '_:b2130586620_arc3333b28'),
(90, 0, '393817810', 'menerbitkan'),
(92, 0, '406894869', 'memilikiProduk'),
(94, 0, '651103753', '_:b167320426_arc3333b29'),
(95, 0, '1124981975', '_:b1765708431_arc3333b30'),
(96, 0, '362361719', '_:b507093529_arc3333b31'),
(97, 0, '389578500', 'tanggalPaten'),
(99, 0, '627020034', 'judulArtikel'),
(100, 0, '782068005', '_:b2026835037_arc3333b32'),
(101, 0, '1161645493', '_:b264781003_arc3333b33'),
(102, 0, '1088363126', '_:b1850955414_arc3333b34'),
(6, 0, '459543108', 'http://www.owl-ontologies.com/Ontology1364957607.owl#Editor'),
(104, 0, '1329879277', 'Adril'),
(106, 0, '815974149', '2000-12-12'),
(107, 0, '1331565466', 'kks s  ds dsfdsf dsjfjsd dsfsd'),
(108, 0, '1122611188', 'Pernikahan Dini'),
(34, 0, '1865684265', 'http://www.owl-ontologies.com/Ontology1364957607.owl#Kolumnis'),
(110, 0, '1952935064', 'Soni'),
(112, 0, '1054526540', 'Wireless'),
(114, 0, '444631636', 'Indonesia kalah lawan Malaysia'),
(115, 0, '1944124150', 'Indonesia Kalah'),
(116, 0, '1518324783', '2011-12-12'),
(118, 0, '594384070', 'Aspire 4920'),
(30, 0, '1908971617', 'http://www.owl-ontologies.com/Ontology1364957607.owl#Pegawai'),
(120, 0, '735014700', 'Agus'),
(122, 0, '1434652576', 'Handphone'),
(36, 0, '2017506581', 'http://www.owl-ontologies.com/Ontology1364957607.owl#Peneliti'),
(124, 0, '849205763', 'Joko');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ta_s2val`
--

CREATE TABLE IF NOT EXISTS `ta_s2val` (
  `id` mediumint(8) unsigned NOT NULL,
  `misc` tinyint(1) NOT NULL DEFAULT '0',
  `val_hash` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `val` text COLLATE utf8_unicode_ci NOT NULL,
  UNIQUE KEY `id` (`id`),
  KEY `vh` (`val_hash`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci DELAY_KEY_WRITE=1;

--
-- Dumping data untuk tabel `ta_s2val`
--

INSERT INTO `ta_s2val` (`id`, `misc`, `val_hash`, `val`) VALUES
(2, 0, '1951147763', 'http://www.owl-ontologies.com/Ontology1364957607.owl'),
(6, 0, '459543108', 'http://www.owl-ontologies.com/Ontology1364957607.owl#Editor'),
(9, 0, '1782201138', 'http://www.owl-ontologies.com/Ontology1364957607.owl#Author'),
(13, 0, '901123261', 'http://www.owl-ontologies.com/Ontology1364957607.owl#Paten'),
(15, 0, '359658603', 'http://www.owl-ontologies.com/Ontology1364957607.owl#Orang'),
(18, 0, '1255427583', 'http://www.owl-ontologies.com/Ontology1364957607.owl#Produk'),
(20, 0, '2056298061', 'http://www.owl-ontologies.com/Ontology1364957607.owl#Berita'),
(22, 0, '501765002', '_:b650878807_arc3333b1'),
(24, 0, '1711227852', '_:b1077752083_arc3333b2'),
(28, 0, '1858143849', '_:b926548357_arc3333b3'),
(30, 0, '1908971617', 'http://www.owl-ontologies.com/Ontology1364957607.owl#Pegawai'),
(32, 0, '1300009754', 'http://www.owl-ontologies.com/Ontology1364957607.owl#Artikel'),
(34, 0, '1865684265', 'http://www.owl-ontologies.com/Ontology1364957607.owl#Kolumnis'),
(36, 0, '2017506581', 'http://www.owl-ontologies.com/Ontology1364957607.owl#Peneliti'),
(38, 0, '274003898', 'http://www.owl-ontologies.com/Ontology1364957607.owl#Teknologi'),
(40, 0, '1033443151', 'http://www.owl-ontologies.com/Ontology1364957607.owl#tanggalterbitBerita'),
(46, 0, '23857027', '_:b1453419482_arc3333b4'),
(47, 0, '122019055', '_:b564550480_arc3333b5'),
(48, 0, '1990812161', '_:b1196487946_arc3333b6'),
(49, 0, '15655884', 'http://www.owl-ontologies.com/Ontology1364957607.owl#namaProduk'),
(51, 0, '441110284', '_:b811058588_arc3333b7'),
(52, 0, '1515299355', '_:b1595353075_arc3333b8'),
(53, 0, '601268305', '_:b672143205_arc3333b9'),
(54, 0, '1455900449', 'http://www.owl-ontologies.com/Ontology1364957607.owl#memilikiteknologi'),
(56, 0, '1556743233', 'http://www.owl-ontologies.com/Ontology1364957607.owl#tanggalterbitArtikel'),
(58, 0, '1569262838', '_:b1527312397_arc3333b10'),
(59, 0, '1920431562', '_:b739229851_arc3333b11'),
(60, 0, '1649599959', '_:b1257860831_arc3333b12'),
(61, 0, '1892741997', 'http://www.owl-ontologies.com/Ontology1364957607.owl#judulBerita'),
(63, 0, '1256750036', '_:b1040080457_arc3333b13'),
(64, 0, '463474934', '_:b1550136340_arc3333b14'),
(65, 0, '611192583', '_:b727843970_arc3333b15'),
(66, 0, '792889127', 'http://www.owl-ontologies.com/Ontology1364957607.owl#namaPaten'),
(68, 0, '2095779681', 'http://www.owl-ontologies.com/Ontology1364957607.owl#memilikikonten'),
(69, 0, '2062292165', '_:b1301588680_arc3333b16'),
(70, 0, '452543601', '_:b982751826_arc3333b17'),
(71, 0, '1384181066', '_:b1439922239_arc3333b18'),
(72, 0, '320404968', '_:b584337577_arc3333b19'),
(74, 0, '1874681964', 'http://www.owl-ontologies.com/Ontology1364957607.owl#namaKonten'),
(76, 0, '206266754', '_:b1881514958_arc3333b20'),
(77, 0, '802762753', '_:b119706456_arc3333b21'),
(78, 0, '1563056232', '_:b1641299230_arc3333b22'),
(79, 0, '998467490', 'http://www.owl-ontologies.com/Ontology1364957607.owl#namaTeknologi'),
(80, 0, '940600878', '_:b382930316_arc3333b23'),
(81, 0, '1098407377', '_:b2001233879_arc3333b24'),
(82, 0, '2069603416', '_:b5199681_arc3333b25'),
(84, 0, '261849073', 'http://www.owl-ontologies.com/Ontology1364957607.owl#namaOrang'),
(86, 0, '1075256153', '_:b1723463941_arc3333b26'),
(87, 0, '462188440', '_:b297716115_arc3333b27'),
(88, 0, '1669214091', '_:b2130586620_arc3333b28'),
(89, 0, '477584606', 'http://www.owl-ontologies.com/Ontology1364957607.owl#menerbitkan'),
(91, 0, '336890359', 'http://www.owl-ontologies.com/Ontology1364957607.owl#memilikiProduk'),
(93, 0, '512048475', 'http://www.owl-ontologies.com/Ontology1364957607.owl#tanggalPaten'),
(94, 0, '651103753', '_:b167320426_arc3333b29'),
(95, 0, '1124981975', '_:b1765708431_arc3333b30'),
(96, 0, '362361719', '_:b507093529_arc3333b31'),
(98, 0, '753062747', 'http://www.owl-ontologies.com/Ontology1364957607.owl#judulArtikel'),
(100, 0, '782068005', '_:b2026835037_arc3333b32'),
(101, 0, '1161645493', '_:b264781003_arc3333b33'),
(102, 0, '1088363126', '_:b1850955414_arc3333b34'),
(103, 0, '25540940', 'http://www.owl-ontologies.com/TA_Class4'),
(105, 0, '115899731', 'http://www.owl-ontologies.com/TA_Class0'),
(109, 0, '1988266462', 'http://www.owl-ontologies.com/TA_Class5'),
(111, 0, '137622881', 'http://www.owl-ontologies.com/TA_Class8'),
(113, 0, '1911508421', 'http://www.owl-ontologies.com/TA_Class1'),
(117, 0, '1735595790', 'http://www.owl-ontologies.com/TA_Class7'),
(119, 0, '387572609', 'http://www.owl-ontologies.com/TA_Class2'),
(121, 0, '276047768', 'http://www.owl-ontologies.com/TA_Class6'),
(123, 0, '1612632855', 'http://www.owl-ontologies.com/TA_Class3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ta_setting`
--

CREATE TABLE IF NOT EXISTS `ta_setting` (
  `k` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `val` text COLLATE utf8_unicode_ci NOT NULL,
  UNIQUE KEY `k` (`k`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci DELAY_KEY_WRITE=1;

--
-- Dumping data untuk tabel `ta_setting`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `ta_triple`
--

CREATE TABLE IF NOT EXISTS `ta_triple` (
  `t` mediumint(8) unsigned NOT NULL,
  `s` mediumint(8) unsigned NOT NULL,
  `p` mediumint(8) unsigned NOT NULL,
  `o` mediumint(8) unsigned NOT NULL,
  `o_lang_dt` mediumint(8) unsigned NOT NULL,
  `o_comp` char(35) COLLATE utf8_unicode_ci NOT NULL,
  `s_type` tinyint(1) NOT NULL DEFAULT '0',
  `o_type` tinyint(1) NOT NULL DEFAULT '0',
  `misc` tinyint(1) NOT NULL DEFAULT '0',
  UNIQUE KEY `t` (`t`),
  KEY `sp` (`s`,`p`),
  KEY `os` (`o`,`s`),
  KEY `po` (`p`,`o`),
  KEY `misc` (`misc`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci DELAY_KEY_WRITE=1;

--
-- Dumping data untuk tabel `ta_triple`
--

INSERT INTO `ta_triple` (`t`, `s`, `p`, `o`, `o_lang_dt`, `o_comp`, `s_type`, `o_type`, `misc`) VALUES
(1, 2, 3, 4, 5, 'http://www.w3.org-2/07/owl#Ontology', 0, 0, 0),
(2, 6, 3, 7, 5, 'http://www.w3.org/2002/07/owl#Class', 0, 0, 0),
(3, 6, 8, 9, 5, 'http://www.owl-on-957607.owl#Author', 0, 0, 0),
(4, 9, 3, 7, 5, 'http://www.w3.org/2002/07/owl#Class', 0, 0, 0),
(5, 6, 10, 11, 12, 'Editor', 0, 2, 0),
(6, 13, 3, 7, 5, 'http://www.w3.org/2002/07/owl#Class', 0, 0, 0),
(7, 13, 10, 14, 12, 'Paten', 0, 2, 0),
(8, 9, 8, 15, 5, 'http://www.owl-on-4957607.owl#Orang', 0, 0, 0),
(9, 15, 3, 7, 5, 'http://www.w3.org/2002/07/owl#Class', 0, 0, 0),
(10, 9, 10, 16, 12, 'Author', 0, 2, 0),
(11, 15, 10, 17, 12, 'Orang', 0, 2, 0),
(12, 18, 3, 7, 5, 'http://www.w3.org/2002/07/owl#Class', 0, 0, 0),
(13, 18, 10, 19, 12, 'Produk', 0, 2, 0),
(14, 20, 3, 7, 5, 'http://www.w3.org/2002/07/owl#Class', 0, 0, 0),
(15, 20, 10, 21, 12, 'Berita', 0, 2, 0),
(16, 22, 3, 7, 5, 'http://www.w3.org/2002/07/owl#Class', 1, 0, 0),
(17, 22, 23, 24, 5, '_:b1077752083_arc3333b2', 1, 1, 0),
(18, 24, 25, 26, 5, 'http://www.w3.org/2002/07/owl#Thing', 1, 0, 0),
(19, 24, 27, 28, 5, '_:b926548357_arc3333b3', 1, 1, 0),
(20, 28, 25, 20, 5, 'http://www.owl-on-957607.owl#Berita', 1, 0, 0),
(21, 28, 27, 29, 5, 'http://www.w3.org-rdf-syntax-ns#nil', 1, 0, 0),
(22, 30, 3, 7, 5, 'http://www.w3.org/2002/07/owl#Class', 0, 0, 0),
(23, 30, 10, 31, 12, 'Pegawai', 0, 2, 0),
(24, 30, 8, 15, 5, 'http://www.owl-on-4957607.owl#Orang', 0, 0, 0),
(25, 32, 3, 7, 5, 'http://www.w3.org/2002/07/owl#Class', 0, 0, 0),
(26, 32, 10, 33, 12, 'Artikel', 0, 2, 0),
(27, 34, 3, 7, 5, 'http://www.w3.org/2002/07/owl#Class', 0, 0, 0),
(28, 34, 8, 9, 5, 'http://www.owl-on-957607.owl#Author', 0, 0, 0),
(29, 34, 10, 35, 12, 'Kolumnis', 0, 2, 0),
(30, 36, 3, 7, 5, 'http://www.w3.org/2002/07/owl#Class', 0, 0, 0),
(31, 36, 8, 15, 5, 'http://www.owl-on-4957607.owl#Orang', 0, 0, 0),
(32, 36, 10, 37, 12, 'Peneliti', 0, 2, 0),
(33, 38, 3, 7, 5, 'http://www.w3.org/2002/07/owl#Class', 0, 0, 0),
(34, 38, 10, 39, 12, 'Teknologi', 0, 2, 0),
(35, 40, 3, 41, 5, 'http://www.w3.org-unctionalProperty', 0, 0, 0),
(36, 40, 3, 42, 5, 'http://www.w3.org-#DatatypeProperty', 0, 0, 0),
(37, 40, 43, 12, 5, 'http://www.w3.org-/XMLSchema#string', 0, 0, 0),
(38, 40, 10, 44, 12, 'tanggalterbitBerita', 0, 2, 0),
(39, 40, 45, 46, 5, '_:b1453419482_arc3333b4', 0, 1, 0),
(40, 46, 3, 7, 5, 'http://www.w3.org/2002/07/owl#Class', 1, 0, 0),
(41, 46, 23, 47, 5, '_:b564550480_arc3333b5', 1, 1, 0),
(42, 47, 25, 26, 5, 'http://www.w3.org/2002/07/owl#Thing', 1, 0, 0),
(43, 47, 27, 48, 5, '_:b1196487946_arc3333b6', 1, 1, 0),
(44, 48, 25, 20, 5, 'http://www.owl-on-957607.owl#Berita', 1, 0, 0),
(45, 48, 27, 29, 5, 'http://www.w3.org-rdf-syntax-ns#nil', 1, 0, 0),
(46, 49, 3, 41, 5, 'http://www.w3.org-unctionalProperty', 0, 0, 0),
(47, 49, 3, 42, 5, 'http://www.w3.org-#DatatypeProperty', 0, 0, 0),
(48, 49, 10, 50, 12, 'namaProduk', 0, 2, 0),
(49, 49, 45, 51, 5, '_:b811058588_arc3333b7', 0, 1, 0),
(50, 51, 3, 7, 5, 'http://www.w3.org/2002/07/owl#Class', 1, 0, 0),
(51, 51, 23, 52, 5, '_:b1595353075_arc3333b8', 1, 1, 0),
(52, 52, 25, 26, 5, 'http://www.w3.org/2002/07/owl#Thing', 1, 0, 0),
(53, 52, 27, 53, 5, '_:b672143205_arc3333b9', 1, 1, 0),
(54, 53, 25, 18, 5, 'http://www.owl-on-957607.owl#Produk', 1, 0, 0),
(55, 53, 27, 29, 5, 'http://www.w3.org-rdf-syntax-ns#nil', 1, 0, 0),
(56, 49, 43, 12, 5, 'http://www.w3.org-/XMLSchema#string', 0, 0, 0),
(57, 54, 3, 41, 5, 'http://www.w3.org-unctionalProperty', 0, 0, 0),
(58, 54, 3, 42, 5, 'http://www.w3.org-#DatatypeProperty', 0, 0, 0),
(59, 54, 10, 55, 12, 'memilikiteknologi', 0, 2, 0),
(60, 54, 43, 12, 5, 'http://www.w3.org-/XMLSchema#string', 0, 0, 0),
(61, 56, 3, 41, 5, 'http://www.w3.org-unctionalProperty', 0, 0, 0),
(62, 56, 10, 57, 12, 'tanggalterbitArtikel', 0, 2, 0),
(63, 56, 45, 58, 5, '_:b1527312397_arc3333b10', 0, 1, 0),
(64, 58, 3, 7, 5, 'http://www.w3.org/2002/07/owl#Class', 1, 0, 0),
(65, 58, 23, 59, 5, '_:b739229851_arc3333b11', 1, 1, 0),
(66, 59, 25, 26, 5, 'http://www.w3.org/2002/07/owl#Thing', 1, 0, 0),
(67, 59, 27, 60, 5, '_:b1257860831_arc3333b12', 1, 1, 0),
(68, 60, 25, 32, 5, 'http://www.owl-on-57607.owl#Artikel', 1, 0, 0),
(69, 60, 27, 29, 5, 'http://www.w3.org-rdf-syntax-ns#nil', 1, 0, 0),
(70, 56, 43, 12, 5, 'http://www.w3.org-/XMLSchema#string', 0, 0, 0),
(71, 56, 3, 42, 5, 'http://www.w3.org-#DatatypeProperty', 0, 0, 0),
(72, 61, 3, 41, 5, 'http://www.w3.org-unctionalProperty', 0, 0, 0),
(73, 61, 10, 62, 12, 'judulBerita', 0, 2, 0),
(74, 61, 43, 12, 5, 'http://www.w3.org-/XMLSchema#string', 0, 0, 0),
(75, 61, 3, 42, 5, 'http://www.w3.org-#DatatypeProperty', 0, 0, 0),
(76, 61, 45, 63, 5, '_:b1040080457_arc3333b13', 0, 1, 0),
(77, 63, 3, 7, 5, 'http://www.w3.org/2002/07/owl#Class', 1, 0, 0),
(78, 63, 23, 64, 5, '_:b1550136340_arc3333b14', 1, 1, 0),
(79, 64, 25, 26, 5, 'http://www.w3.org/2002/07/owl#Thing', 1, 0, 0),
(80, 64, 27, 65, 5, '_:b727843970_arc3333b15', 1, 1, 0),
(81, 65, 25, 20, 5, 'http://www.owl-on-957607.owl#Berita', 1, 0, 0),
(82, 65, 27, 29, 5, 'http://www.w3.org-rdf-syntax-ns#nil', 1, 0, 0),
(83, 66, 3, 41, 5, 'http://www.w3.org-unctionalProperty', 0, 0, 0),
(84, 66, 43, 12, 5, 'http://www.w3.org-/XMLSchema#string', 0, 0, 0),
(85, 66, 3, 42, 5, 'http://www.w3.org-#DatatypeProperty', 0, 0, 0),
(86, 66, 10, 67, 12, 'namaPaten', 0, 2, 0),
(87, 68, 3, 41, 5, 'http://www.w3.org-unctionalProperty', 0, 0, 0),
(88, 68, 45, 69, 5, '_:b1301588680_arc3333b16', 0, 1, 0),
(89, 69, 3, 7, 5, 'http://www.w3.org/2002/07/owl#Class', 1, 0, 0),
(90, 69, 23, 70, 5, '_:b982751826_arc3333b17', 1, 1, 0),
(91, 70, 25, 26, 5, 'http://www.w3.org/2002/07/owl#Thing', 1, 0, 0),
(92, 70, 27, 71, 5, '_:b1439922239_arc3333b18', 1, 1, 0),
(93, 71, 25, 20, 5, 'http://www.owl-on-957607.owl#Berita', 1, 0, 0),
(94, 71, 27, 72, 5, '_:b584337577_arc3333b19', 1, 1, 0),
(95, 72, 25, 32, 5, 'http://www.owl-on-57607.owl#Artikel', 1, 0, 0),
(96, 72, 27, 29, 5, 'http://www.w3.org-rdf-syntax-ns#nil', 1, 0, 0),
(97, 68, 43, 12, 5, 'http://www.w3.org-/XMLSchema#string', 0, 0, 0),
(98, 68, 3, 42, 5, 'http://www.w3.org-#DatatypeProperty', 0, 0, 0),
(99, 68, 10, 73, 12, 'memilikikonten', 0, 2, 0),
(100, 74, 3, 41, 5, 'http://www.w3.org-unctionalProperty', 0, 0, 0),
(101, 74, 10, 75, 12, 'namaKonten', 0, 2, 0),
(102, 74, 43, 12, 5, 'http://www.w3.org-/XMLSchema#string', 0, 0, 0),
(103, 74, 45, 76, 5, '_:b1881514958_arc3333b20', 0, 1, 0),
(104, 76, 3, 7, 5, 'http://www.w3.org/2002/07/owl#Class', 1, 0, 0),
(105, 76, 23, 77, 5, '_:b119706456_arc3333b21', 1, 1, 0),
(106, 77, 25, 26, 5, 'http://www.w3.org/2002/07/owl#Thing', 1, 0, 0),
(107, 77, 27, 78, 5, '_:b1641299230_arc3333b22', 1, 1, 0),
(108, 78, 25, 13, 5, 'http://www.owl-on-4957607.owl#Paten', 1, 0, 0),
(109, 78, 27, 29, 5, 'http://www.w3.org-rdf-syntax-ns#nil', 1, 0, 0),
(110, 74, 3, 42, 5, 'http://www.w3.org-#DatatypeProperty', 0, 0, 0),
(111, 79, 3, 41, 5, 'http://www.w3.org-unctionalProperty', 0, 0, 0),
(112, 79, 43, 12, 5, 'http://www.w3.org-/XMLSchema#string', 0, 0, 0),
(113, 79, 3, 42, 5, 'http://www.w3.org-#DatatypeProperty', 0, 0, 0),
(114, 79, 45, 80, 5, '_:b382930316_arc3333b23', 0, 1, 0),
(115, 80, 3, 7, 5, 'http://www.w3.org/2002/07/owl#Class', 1, 0, 0),
(116, 80, 23, 81, 5, '_:b2001233879_arc3333b24', 1, 1, 0),
(117, 81, 25, 26, 5, 'http://www.w3.org/2002/07/owl#Thing', 1, 0, 0),
(118, 81, 27, 82, 5, '_:b5199681_arc3333b25', 1, 1, 0),
(119, 82, 25, 38, 5, 'http://www.owl-on-607.owl#Teknologi', 1, 0, 0),
(120, 82, 27, 29, 5, 'http://www.w3.org-rdf-syntax-ns#nil', 1, 0, 0),
(121, 79, 10, 83, 12, 'namaTeknologi', 0, 2, 0),
(122, 84, 3, 41, 5, 'http://www.w3.org-unctionalProperty', 0, 0, 0),
(123, 84, 10, 85, 12, 'namaOrang', 0, 2, 0),
(124, 84, 45, 86, 5, '_:b1723463941_arc3333b26', 0, 1, 0),
(125, 86, 3, 7, 5, 'http://www.w3.org/2002/07/owl#Class', 1, 0, 0),
(126, 86, 23, 87, 5, '_:b297716115_arc3333b27', 1, 1, 0),
(127, 87, 25, 26, 5, 'http://www.w3.org/2002/07/owl#Thing', 1, 0, 0),
(128, 87, 27, 88, 5, '_:b2130586620_arc3333b28', 1, 1, 0),
(129, 88, 25, 15, 5, 'http://www.owl-on-4957607.owl#Orang', 1, 0, 0),
(130, 88, 27, 29, 5, 'http://www.w3.org-rdf-syntax-ns#nil', 1, 0, 0),
(131, 84, 3, 42, 5, 'http://www.w3.org-#DatatypeProperty', 0, 0, 0),
(132, 84, 43, 12, 5, 'http://www.w3.org-/XMLSchema#string', 0, 0, 0),
(133, 89, 3, 41, 5, 'http://www.w3.org-unctionalProperty', 0, 0, 0),
(134, 89, 43, 12, 5, 'http://www.w3.org-/XMLSchema#string', 0, 0, 0),
(135, 89, 10, 90, 12, 'menerbitkan', 0, 2, 0),
(136, 89, 3, 42, 5, 'http://www.w3.org-#DatatypeProperty', 0, 0, 0),
(137, 91, 3, 41, 5, 'http://www.w3.org-unctionalProperty', 0, 0, 0),
(138, 91, 3, 42, 5, 'http://www.w3.org-#DatatypeProperty', 0, 0, 0),
(139, 91, 43, 12, 5, 'http://www.w3.org-/XMLSchema#string', 0, 0, 0),
(140, 91, 10, 92, 12, 'memilikiProduk', 0, 2, 0),
(141, 93, 3, 41, 5, 'http://www.w3.org-unctionalProperty', 0, 0, 0),
(142, 93, 45, 94, 5, '_:b167320426_arc3333b29', 0, 1, 0),
(143, 94, 3, 7, 5, 'http://www.w3.org/2002/07/owl#Class', 1, 0, 0),
(144, 94, 23, 95, 5, '_:b1765708431_arc3333b30', 1, 1, 0),
(145, 95, 25, 26, 5, 'http://www.w3.org/2002/07/owl#Thing', 1, 0, 0),
(146, 95, 27, 96, 5, '_:b507093529_arc3333b31', 1, 1, 0),
(147, 96, 25, 13, 5, 'http://www.owl-on-4957607.owl#Paten', 1, 0, 0),
(148, 96, 27, 29, 5, 'http://www.w3.org-rdf-syntax-ns#nil', 1, 0, 0),
(149, 93, 43, 12, 5, 'http://www.w3.org-/XMLSchema#string', 0, 0, 0),
(150, 93, 10, 97, 12, 'tanggalPaten', 0, 2, 0),
(151, 93, 3, 42, 5, 'http://www.w3.org-#DatatypeProperty', 0, 0, 0),
(152, 98, 3, 41, 5, 'http://www.w3.org-unctionalProperty', 0, 0, 0),
(153, 98, 43, 12, 5, 'http://www.w3.org-/XMLSchema#string', 0, 0, 0),
(154, 98, 10, 99, 12, 'judulArtikel', 0, 2, 0),
(155, 98, 3, 42, 5, 'http://www.w3.org-#DatatypeProperty', 0, 0, 0),
(156, 98, 45, 100, 5, '_:b2026835037_arc3333b32', 0, 1, 0),
(157, 100, 3, 7, 5, 'http://www.w3.org/2002/07/owl#Class', 1, 0, 0),
(158, 100, 23, 101, 5, '_:b264781003_arc3333b33', 1, 1, 0),
(159, 101, 25, 26, 5, 'http://www.w3.org/2002/07/owl#Thing', 1, 0, 0),
(160, 101, 27, 102, 5, '_:b1850955414_arc3333b34', 1, 1, 0),
(161, 102, 25, 32, 5, 'http://www.owl-on-57607.owl#Artikel', 1, 0, 0),
(162, 102, 27, 29, 5, 'http://www.w3.org-rdf-syntax-ns#nil', 1, 0, 0),
(163, 103, 3, 6, 5, 'http://www.owl-on-957607.owl#Editor', 0, 0, 0),
(164, 103, 84, 104, 12, 'Adril', 0, 2, 0),
(165, 105, 3, 32, 5, 'http://www.owl-on-57607.owl#Artikel', 0, 0, 0),
(166, 105, 56, 106, 12, '2000-12-12', 0, 2, 0),
(167, 105, 68, 107, 12, 'kks-s-ds-dsfdsf-dsjfjsd-dsfsd', 0, 2, 0),
(168, 105, 98, 108, 12, 'Pernikahan-Dini', 0, 2, 0),
(169, 109, 3, 34, 5, 'http://www.owl-on-7607.owl#Kolumnis', 0, 0, 0),
(170, 109, 84, 110, 12, 'Soni', 0, 2, 0),
(171, 111, 3, 38, 5, 'http://www.owl-on-607.owl#Teknologi', 0, 0, 0),
(172, 111, 79, 112, 12, 'Wireless', 0, 2, 0),
(173, 113, 3, 20, 5, 'http://www.owl-on-957607.owl#Berita', 0, 0, 0),
(174, 113, 68, 114, 12, 'Indonesia-kalah-lawan-Malaysia', 0, 2, 0),
(175, 113, 61, 115, 12, 'Indonesia-Kalah', 0, 2, 0),
(176, 113, 40, 116, 12, '2011-12-12', 0, 2, 0),
(177, 117, 3, 18, 5, 'http://www.owl-on-957607.owl#Produk', 0, 0, 0),
(178, 117, 49, 118, 12, 'Aspire-4920', 0, 2, 0),
(179, 119, 3, 30, 5, 'http://www.owl-on-57607.owl#Pegawai', 0, 0, 0),
(180, 119, 84, 120, 12, 'Agus', 0, 2, 0),
(181, 121, 3, 13, 5, 'http://www.owl-on-4957607.owl#Paten', 0, 0, 0),
(182, 121, 74, 122, 12, 'Handphone', 0, 2, 0),
(183, 121, 93, 116, 12, '2011-12-12', 0, 2, 0),
(184, 123, 3, 36, 5, 'http://www.owl-on-7607.owl#Peneliti', 0, 0, 0),
(185, 123, 84, 124, 12, 'Joko', 0, 2, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`uid`, `username`, `password`, `name`, `email`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'admin@admin.com'),
(4, 'siru', '8ac64a83772781124be01b75b61a848b', 'Wongsiru', 'ff');
