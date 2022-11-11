CREATE DATABASE fakultas;

CREATE TABLE jurusan (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    kode CHAR(4) NOT NULL,
    nama VARCHAR(50) NOT NULL
);

CREATE TABLE mahasiswa (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_jurusan INTEGER NOT NULL,
    nim CHAR(8) NOT NULL,
    nama VARCHAR(50) NOT NULL,
    jenis_kelamin enum('laki-laki', 'perempuan') NOT NULL,
    tempat_lahir VARCHAR(50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    alamat VARCHAR(255) NOT NULL,
    FOREIGN KEY (id_jurusan) REFERENCES jurusan(id)
);

-- masukin data jurusan
insert into jurusan (1,administrasi publik) values ('APBL','Administrasi Publik');
insert into jurusan (2,Pendidikan Teknik Informatika) values ('PTIF','Pendidikan Teknik Informatika');

-- masukin data mahasiswa
insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat)
values (1,'2022000', 'IAmanda', 'perempun', 'Malang', '2001-02-14', 'Malang');
insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat)
values (1,'20220001', 'Farul', 'laki-laki', 'Malang', '2001-11-06', 'Surabaya');

-- update data mahasiswa
update mahasiswa set id_jurusan = "2" where id = 2;

-- delete data mahasiswa
delete from mahasiswa where id=2;