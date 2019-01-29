-- dropdb dbbkd -U ti1
-- createdb dbbkd -U ti1
-- psql dbbkd -U ti1

drop table if exists prodi;
drop table if exists dosen;
drop table if exists pengajaran;
drop table if exists matkul;
drop table if exists penelitian;
drop table if exists pkm;
drop table if exists jabatan_struktural;
drop table if exists jenis_jabatan;
drop table if exists kontak;

create table prodi(
    id serial primary key,
    kode varchar(2),
    nama varchar(45),
    nidn_kaprodi varchar(10),
    nama_kaprodi varchar(45)
);

create table dosen(
    nidn varchar(10) primary key,
    nama varchar(45),
    tmp_lahir varchar(45),
    tgl_lahir date,
    gender char(1),
    prodi_id int references prodi(id),
    user_id int
);

create table matkul(
    id serial primary key,
    semestermk int,
    kodemk varchar(10),
    namamk varchar(45),
    sks int
);

create table pengajaran(
    matkul_id int references matkul(id),
    nidn varchar(10) references dosen(nidn),
    semester int,
    status smallint default 0
);

create table penelitian(
    id serial primary key,
    semester int,
    judul varchar(100),
    deskripsi text,
    sks int,
    rencana_publikasi varchar(100),
    status smallint default 0,
    nidn varchar(10) references dosen(nidn)
);

create table pkm(
    id serial primary key,
    semester int,
    judul varchar(100),
    lokasi varchar(100),
    sks int,
    status smallint default 0,
    nidn varchar(10) references dosen(nidn)
);

create table jenis_jabatan(
    id serial primary key,
    nama varchar(100),
    beban_sks int
);

create table jabatan_struktural(
    id serial primary key,
    semester int,
    sks int,
    status smallint default 0,
    jenis_jabatan_id int references jenis_jabatan(id),
    nidn varchar(10) references dosen(nidn)
);

create table kontak(
    id serial primary key,
    nama varchar(100),
    email varchar(100),
    subjek varchar(100),
    komentar text
);

insert into prodi values
(1,'TI','Teknik Informatika','0110217001','Pak Rio'),
(2,'SI','Sistem Infromasi','0110217002','Bu Amalia');

insert into dosen values
('0110217003','Pak Hendrasas','Jakarta','1961-01-03','L',1,3),
('0110217004','Pak Yahya','Jakarta','1961-02-04','L',1,4),
('0110217005','Bu Maisarah','Bogor','1962-03-05','P',2,5),
('0110217006','Bu Ichasani','Bogor','1962-04-06','P',2,6),
('0110217007','Pak Rio','Depok','1963-05-07','L',1,7),
('0110217008','Pak Teguh','Depok','1963-06-08','L',1,8),
('0110217009','Pak Ahad','Tangerang','1964-07-09','L',1,9),
('0110217010','Pak Sapto','Tangerang','1964-08-10','L',1,10),
('0110217011','Pak Indra','Bekasi','1965-09-11','L',1,11),
('0110217012','Pak Edo','Bekasi','1965-10-12','L',1,12),
('0110217013','Pak Tanjung','Surabaya','1966-11-13','L',1,13),
('0110217014','Pak Ode','Surabaya','1966-12-14','L',1,14),
('0110217015','Bu Khusna','Bandung','1967-01-15','P',2,15),
('0110217016','Bu Yessy','Bandung','1967-02-16','P',2,16),
('0110217017','Bu Yekti','Semarang','1968-03-17','P',2,17),
('0110217018','Pak Suhendi','Semarang','1968-04-18','L',2,18),
('0110217019','Pak Hilmi','Sumedang','1969-05-19','L',1,19),
('0110217020','Pak Rojul','Sumedang','1969-06-20','L',1,20);

-- Sumber : http://kelembagaan.ristekdikti.go.id/wp-content/uploads/2016/11/SK-DirjenDiktiN048-EWMP.pdf

insert into jenis_jabatan values
(1,'Rektor',12),
(2,'Pembantu Rektor',10),
(3,'Dekan',10),
(4,'Ketua Lembaga',8),
(5,'Sekretaris Lembaga',6),
(6,'Kepala UPT',8),
(7,'Pembantu Dekan',6),
(8,'Ketua Jurusan',6),
(9,'Sekretaris Jurusan',4),
(10,'Kepala Pusat',6),
(11,'Sekretaris Pusat',4),
(12,'Kepala Laboratorium',4),
(13,'Kepala Balai',4),
(14,'Sekretaris Senat Universitas',4),
(15,'Sekretaris Senat Fakultas',4),
(16,'Ketua Program Studi',4);

insert into jabatan_struktural values
(default,20161,2,1,1,'0110217003'),
(default,20161,3,default,2,'0110217004'),
(default,20162,2,1,3,'0110217005'),
(default,20162,3,default,4,'0110217006'),
(default,20171,2,1,5,'0110217007'),
(default,20171,3,default,6,'0110217008'),
(default,20172,2,1,7,'0110217009'),
(default,20172,3,default,8,'0110217010'),
(default,20181,2,1,9,'0110217011'),
(default,20181,3,default,10,'0110217012'),
(default,20182,2,1,11,'0110217013'),
(default,20182,3,default,12,'0110217014'),
(default,20191,2,1,13,'0110217015'),
(default,20191,3,default,14,'0110217016'),
(default,20192,2,1,15,'0110217017'),
(default,20192,3,default,16,'0110217018');

insert into matkul values
(1,1,'NF11001','Pendidikan Agama Islam',2),
(2,1,'NF11002','Matematika Dasar',2),
(3,1,'NF11003','Bahasa Indonesia',2),
(4,1,'IE11001','Dasar Dasar Pemrograman',3),
(5,1,'IE11003','Pengantar Teknologi Informasi',2),
(6,1,'IE11004','Pengantar Open Source dan Aplikasi',3),
(7,1,'IE11006','Organisasi dan Arsitektur Komputer',3),
(8,1,'IE11007','Matematika Diskrit',3),
(9,2,'NF21001','Pembentukan Karakter',2),
(10,2,'NF12002','Pancasila dan Pendidikan Kewarnegaraan',3),
(11,2,'NF12003','Bahasa Inggris',2),
(12,2,'IE12001','Basis Data I',3),
(13,2,'IE12003','Sistem Operasi',2),
(14,2,'IE12004','Jaringan Komputer',3),
(15,2,'IE12005','Struktur Data dan Algoritma',3),
(16,2,'NF21003','Statistik dan Probabilitas',3),
(17,3,'IE21001','Pemrograman Web',2),
(18,3,'IE21002','Pemrograman Berorientasi Objek',3),
(19,4,'IE22002','Rekayasa Perangkat Lunak',3),
(20,4,'TI22004','Analisis Numerik',3),
(21,5,'TI31001','Komputasi Paralel',3),
(22,5,'TI31004','Pemrograman Mobile',3),
(23,6,'TI32001','Pengolahan Citra',3),
(24,6,'TI31002','Big Data',3),
(25,7,'NF41001','Etika Profesi',2),
(26,7,'IE41001','Keamanan Sistem Informasi',2),
(27,7,'NF40001','Tugas Akhir I',2),
(28,8,'NF40002','Tugas Akhir II',4);

insert into pengajaran values
(1,'0110217008',20131,1),
(2,'0110217008',20131,default),
(3,'0110217009',20132,1),
(4,'0110217009',20132,default),
(5,'0110217010',20141,1),
(6,'0110217010',20141,default),
(7,'0110217011',20142,1),
(8,'0110217011',20142,default),
(9,'0110217012',20151,1),
(10,'0110217012',20151,default),
(11,'0110217013',20152,1),
(12,'0110217013',20152,default),
(13,'0110217014',20161,1),
(14,'0110217014',20161,default),
(15,'0110217015',20162,1),
(16,'0110217015',20162,default),
(17,'0110217016',20171,1),
(18,'0110217016',20171,default),
(19,'0110217017',20172,1),
(20,'0110217017',20172,default),
(21,'0110217018',20181,1),
(22,'0110217018',20181,default),
(23,'0110217019',20182,1),
(24,'0110217019',20182,default),
(25,'0110217020',20191,1),
(26,'0110217020',20191,default),
(27,'0110217003',20192,1),
(28,'0110217003',20192,default);

insert into penelitian values
(default,20161,'Analisa Pemrograman','Pemrograman adalah proses menulis, menguji dan memperbaiki (debug), dan memelihara kode yang membangun suatu program komputer. Kode ini ditulis dalam berbagai bahasa pemrograman.',2,'2012',1,'0110217019'),
(default,20161,'Analisa Teknologi','Teknologi adalah keseluruhan sarana untuk menyediakan barang-barang yang diperlukan bagi kelangsungan dan kenyamanan hidup manusia. Penggunaan teknologi oleh manusia diawali dengan pengubahan sumber daya alam menjadi alat-alat sederhana.',2,'2012',default,'0110217020'),
(default,20162,'Analisa Karakter','Karakter adalah watak, sifat, akhlak ataupun kepribadian yang membedakan seorang individu dengan individu lainnya. Atau karakter dapat di katakan juga sebagai keadaan yang sebenarnya dari dalam diri seorang individu, yang membedakan antara dirinya dengan individu lain.',3,'2013',1,'0110217013'),
(default,20162,'Analisa Bahasa Inggris','Bahasa Inggris adalah bahasa ibu ketiga yang paling banyak dituturkan di seluruh dunia, setelah bahasa Mandarin dan bahasa Spanyol. Bahasa Inggris juga digunakan sebagai bahasa kedua dan bahasa resmi oleh Uni Eropa, Negara Persemakmuran, dan Perserikatan Bangsa-Bangsa, serta beragam organisasi lainnya.',3,'2013',default,'0110217014'),
(default,20171,'Analisa Kreatif','Kreatif adalah memiliki daya cipata, mempunyai kemampuan untuk mencipatakan,atau mampu menciptakan sesuatu yang baru, baik berupa gagasan maupun kenyataan yang relatif berbeda dengan apa yang telah ada sebelumnya.',2,'2014',1,'0110217015'),
(default,20171,'Analisa Penelitian','Penelitian adalah suatu usaha atau cara yang sistematis untuk menyelidiki masalah tertentu dengan tujuan mencari jawaban dari masalah yang diteliti dilakukan secara ilmiah.',2,'2014',default,'0110217016'),
(default,20172,'Analisa Website','Website adalah suatu halaman web yang saling berhubungan yang umumnya berada pada peladen yang sama berisikan kumpulan informasi yang disediakan secara perorangan, kelompok, atau organisasi.',3,'2015',1,'0110217017'),
(default,20172,'Analisa Objek','Pemrograman Berorientasi Obyek. OOP/PBO merupakan paradigma pemrograman yang popular saat ini yang telah menggantikan teknik pemrograman berbasis prosedur.',3,'2015',default,'0110217018'),
(default,20181,'Analisa Rekayasa','Rekayasa perangkat lunak adalah satu bidang profesi yang mendalami cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembanganan perangkat lunak dan manajemen kualitas.',2,'2016',1,'0110217003'),
(default,20181,'Analisa Numerik','numerik adalah sebuah simbol atau kumpulan dari simbol yang merepresentasikan sebuah bilangan.',2,'2016',default,'0110217004'),
(default,20182,'Analisa Komputasi','Komputasi adalah algoritma yang digunakan untuk menemukan suatu cara dalam memecahkan masalah dari sebuah data input. Data input disini adalah sebuah masukan yang berasal dari luar lingkungan sistem.',3,'2017',1,'0110217017'),
(default,20182,'Analisa Mobile','Mobile adalah kata sifat yang berarti dapat bergerak atau dapat digerakkan dengan bebas dan mudah.',3,'2017',default,'0110217018'),
(default,20191,'Analisa Citra','Citra adalah kombinasi antara titik, garis, bidang, dan warna untuk menciptakan suatu imitasi dari suatu objek–biasanya objek fisik atau manusia.',2,'2018',1,'0110217019'),
(default,20191,'Analisa Big Data','Big Data adalah istilah umum untuk segala kumpulan himpunan data dalam jumlah yang sangat besar dan kompleks sehingga menjadikannya sulit untuk ditangani atau di proses jika hanya menggunakan manajemen basis data biasa atau aplikasi pemroses data tradisional.',2,'2018',default,'0110217020'),
(default,20192,'Analisa Cloud','Cloud adalah metafora dari internet, sebagaimana awan yang sering digambarkan di diagram jaringan komputer. Sebagaimana awan dalam diagram jaringan komputer tersebut, awan (cloud) dalam Cloud Computing juga merupakan abstraksi dari infrastruktur kompleks yang disembunyikannya.',3,'2019',1,'0110217005'),
(default,20192,'Analisa Sistem','Sistem adalah sekelompok komponen dan elemen yang digabungkan menjadi satu untuk mencapai tujuan tertentu.',3,'2019',default,'0110217006');

insert into pkm values
(default,20161,'Pemanfaatan Cobit','Jakarta',2,1,'0110217018'),
(default,20161,'Pemanfaatan Java','Jakarta',2,default,'0110217019'),
(default,20162,'Pemanfaatan Web','Bogor',3,1,'0110217020'),
(default,20162,'Pemanfaatan Open Source','Bogor',3,default,'0110217003'),
(default,20171,'Pemanfaatan Matematika','Depok',2,1,'0110217004'),
(default,20171,'Pemanfaatan Bahasa','Depok',2,default,'0110217005'),
(default,20172,'Pemanfaatan Pemrograman','Tangerang',3,1,'0110217006'),
(default,20172,'Pemanfaatan Teknologi','Tangerang',3,default,'0110217007'),
(default,20181,'Pemanfaatan Informasi','Bekasi',2,1,'0110217008'),
(default,20181,'Pemanfaatan Arsitektur','Bekasi',2,default,'0110217009'),
(default,20182,'Pemanfaatan Diskrit','Bandung',3,1,'0110217010'),
(default,20182,'Pemanfaatan Sistem Operasi','Bandung',3,default,'0110217003'),
(default,20191,'Pemanfaatan Basis Data','Surabaya',2,1,'0110217004'),
(default,20191,'Pemanfaatan Penelitian','Surabaya',2,default,'0110217011'),
(default,20192,'Pemanfaatan Warehouse','Semarang',3,1,'0110217012'),
(default,20192,'Pemanfaatan Otomata','Semarang',3,default,'0110217013');