-- dropdb dbbkd -U ti1
-- createdb dbbkd -U ti1
-- psql dbbkd -U ti1

drop table if exists prodi;
create table prodi(
    id serial primary key,
    kode varchar(2),
    nama varchar(45),
    nidn_kaprodi varchar(10),
    nama_kaprodi varchar(45)
);

drop table if exists dosen;
create table dosen(
    nidn varchar(10) primary key,
    nama varchar(45),
    tmp_lahir varchar(45),
    tgl_lahir date,
    gender char(1),
    prodi_id int references prodi(id),
    user_id int
);

drop table if exists pengajaran;
create table pengajaran(
    id serial primary key,
    semester int,
    kodemk varchar(10),
    namamk varchar(45),
    sks int,
    nidn varchar(10) references dosen(nidn),
    status smallint default 0
);

drop table if exists penelitian;
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

drop table if exists pkm;
create table pkm(
    id serial primary key,
    semester int,
    judul varchar(100),
    lokasi varchar(100),
    sks int,
    status smallint default 0,
    nidn varchar(10) references dosen(nidn)
);

drop table if exists jabatan_struktural;
drop table if exists jenis_jabatan;
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
(default,1,2,default,1,'0110217003'),
(default,2,3,default,2,'0110217004'),
(default,3,4,default,3,'0110217005'),
(default,4,5,default,4,'0110217006'),
(default,5,6,default,5,'0110217007');

insert into pengajaran values
(default,1,'IE11006','Organisasi dan Arsitektur Komputer',3,'0110217008',1),
(default,1,'NF11001','Pendidikan Agama Islam',2,'0110217009',default),
(default,1,'NF11003','Bahasa Indonesia',3,'0110217010',1),
(default,1,'IE11001','Dasar Dasar Pemrograman',3,'0110217011',default),
(default,2,'IE12001','Basis Data I',3,'0110217012',1);

insert into penelitian values
(default,2,'Analisa Karakter','Karakter adalah watak, sifat, akhlak ataupun kepribadian yang membedakan seorang individu dengan individu lainnya. Atau karakter dapat di katakan juga sebagai keadaan yang sebenarnya dari dalam diri seorang individu, yang membedakan antara dirinya dengan individu lain.',2,'2013',1,'0110217013'),
(default,2,'Analisa Bahasa Inggris','Bahasa Inggris adalah bahasa ibu ketiga yang paling banyak dituturkan di seluruh dunia, setelah bahasa Mandarin dan bahasa Spanyol. Bahasa Inggris juga digunakan sebagai bahasa kedua dan bahasa resmi oleh Uni Eropa, Negara Persemakmuran, dan Perserikatan Bangsa-Bangsa, serta beragam organisasi lainnya.',2,'2014',default,'0110217014'),
(default,2,'Analisa Statistik','Statistika adalah ilmu yang mempelajari bagaimana merencanakan, mengumpulkan, menganalisis, menginterpretasi, dan mempresentasikan data.',2,'2015',1,'0110217015'),
(default,3,'Analisa Kreatif','Kreatif adalah memiliki daya cipata, mempunyai kemampuan untuk mencipatakan,atau mampu menciptakan sesuatu yang baru, baik berupa gagasan maupun kenyataan yang relatif berbeda dengan apa yang telah ada sebelumnya.',2,'2016',default,'0110217016'),
(default,3,'Analisa Penelitian','Penelitian adalah suatu usaha atau cara yang sistematis untuk menyelidiki masalah tertentu dengan tujuan mencari jawaban dari masalah yang diteliti dilakukan secara ilmiah.',2,'2017',1,'0110217017');

insert into pkm values
(default,3,'Pemanfaatan Cobit','Jakarta Utara',3,1,'0110217018'),
(default,3,'Pemanfaatan Java','Jakarta Timur',3,default,'0110217019'),
(default,3,'Pemanfaatan Web','Jakarta Selatan',2,1,'0110217020'),
(default,1,'Pemanfaatan Open Source','Jakarta Barat',3,default,'0110217003'),
(default,1,'Pemanfaatan Matematika','Jakarta Pusat',2,1,'0110217004');