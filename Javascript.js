// -> Perulangan while
// var ulang = true;
// while (ulang === true) {
//     console.log("Hello World");
//     ulang = confirm("Lagi ?");
// }
// ------------------------------------
// -> Pop up pengisian / input
// prompt("Silahkan isi : ");

// -> Pop up pemberitahuan
// alert('Anda sudah masuk');

// -> Pop up konfirmasi
// confirm('Apakah sudah selesai ?');
// ------------------------------------
// -> Pengulangan while
// var noAngkot = 1;
// var jmlAngkot = 10;
// while (noAngkot <= jmlAngkot) {
//     console.log("Angkot No. " + noAngkot + " beroperasi dengan baik");
//     noAngkot++;
// }
// ------------------------------------
// -> Pengulangan for
// var jmlAngkot = 10;
// var angkotBeroperasi = 6;
// var noAngkot = 1;
// while (noAngkot <= angkotBeroperasi) {
//     console.log("Angkot No. " + noAngkot + " beroperasi dengan baik");
//     noAngkot++;
// }
// for (noAngkot = angkotBeroperasi + 1; noAngkot <= jmlAngkot; noAngkot++) {
//     console.log("Angkot No. " + noAngkot + " sedang tidak beroperasi");
// }
// ------------------------------------
// -> Pengulangan if
// var angka = 5;
// if (angka % 2 === 0) {
//     alert(angka + ' adalah bilangan GENAP');
// } else {
//     alert(angka + ' adalah bilangan GANJIL');
// }

// var jmlAngkot = 10;
// var angkotBeroperasi = 6;
// for (noAngkot = 1; noAngkot <= jmlAngkot; noAngkot++) {
//     if (noAngkot <= 6){
//         console.log("Angkot No. " + noAngkot + " beroperasi dengan baik");
//     }else {
//     console.log("Angkot No. " + noAngkot + " sedang tidak beroperasi");
//     }
// }
// ------------------------------------
// -> Pengulangan else if
// var angka = prompt('Masukkan angka : ');
// if (angka % 2 === 0) {
//     alert(angka + ' adalah bilangan GENAP');
// } else if (angka % 2 === 1){
//     alert(angka + ' adalah bilangan GANJIL');
// } else {
//     alert('yang dimasukkan bukan angka');
// }

// var jmlAngkot = 10;
// var angkotBeroperasi = 6;
// for (noAngkot = 1; noAngkot <= jmlAngkot; noAngkot++) {
//     if (noAngkot <= 6 && noAngkot !== 5) {
//         console.log("Angkot No. " + noAngkot + " beroperasi dengan baik");
//     } else if (noAngkot === 5 || noAngkot === 8 || noAngkot === 10){
//         console.log("Angkot No. " + noAngkot + " sedang lembur");
//     } else {
//         console.log("Angkot No. " + noAngkot + " sedang tidak beroperasi");
//     }
// }
// ------------------------------------
// -> Switch Case
// var item = prompt('Masukkan makanan / minuman : \n (cth : Nasi, Daging, Susu, Hamburger, Softdrink)');
// switch (item) {
//     case 'Nasi':
//         alert('Makanan sehat');
//         break;
//     case 'Daging':
//         alert('Makanan sehat');
//         break;
//     case 'Susu':
//         alert('Minuman sehat');
//         break;
//     case 'Hamburger':
//         alert('Makanan tidak sehat');
//         break;
//     case 'Softdrink':
//         alert('Minuman tidak sehat');
//         break;
//     default:
//         alert('Yang anda masukkan salah');
//         break;
// }
// ------------------------------------
// -> Pengkondisian bersarang
// var s = '';
// for (i = 0; i < 10; i++) {
//     for (j = 0; j < i; j++) {
//         s += ' * ';
//     }
//     s += '\n';
// }
// console.log(s);
// ------------------------------------
// -> Permainan Javascript
// var ulang = true;
// while (ulang) {
//     var player = prompt('Pilih : gajah, semut, orang');

//     var comp = Math.random();
//     if (comp < 0.34) {
//         comp = 'gajah';
//     } else if (comp >= 0.34 && comp < 0.67){
//         comp = 'orang';
//     } else {
//         comp = 'semut';
//     }

//     var hasil = '';

//     if (player == comp) {
//         hasil = 'SERI !';
//     } else if (player == 'gajah'){
//         // if (comp == 'orang') { // Tidak menggunakan ternary
//         //     hasil = 'Menang';
//         // } else {
//         //     hasil == 'Kalah';
//         // }
//         hasil = (comp == 'orang') ? 'Menang' : 'Kalah'; // Menggunakan ternary
//     } else if (player == 'orang'){
//         // if (comp == 'gajah') { // Tidak menggunakan ternary
//         //     hasil = 'Kalah';
//         // } else {
//         //     hasil = 'Menang';
//         // }
//         hasil = (comp == 'gajah') ? 'Kalah' : 'Menang'; // Menggunakan ternary
//     } else if (player == 'semut'){
//         // if (comp == 'orang') { // Tidak menggunakan ternary
//         //     hasil = 'Kalah';
//         // } else {
//         //     hasil = 'Menang';
//         // }
//         hasil = (comp == 'orang') ? 'Kalah' : 'Menang'; // Menggunakan ternary
//     } else{
//         hasil = 'Tidak ada dalam pilihan';
//     }

//     alert('Player memilih ' + player + ' dan computer memilih ' + comp + '\nMaka hasilnya = ' + hasil);

//     ulang = confirm('Ulangi lagi ?');
// }
//     alert('Permainan selesai');
// ------------------------------------
// -> Pemanggilan isi variable nama
// var nama = 'Muhammad Rizky Choerul';
// console.log(nama.charAt(5));
// ------------------------------------
// -> Angka matematika secara random
// var bilangan = Math.random();
// console.log(bilangan);
// ------------------------------------
// -> Function
// function VolumeKubus(a, b) {
//     var total, VolumeA, VolumeB;
    
//     VolumeA = a * a * a;
//     VolumeB = b * b * b;

//     total = VolumeA + VolumeB;
    
//     return total;
// }
// alert(VolumeKubus(8, 3));
// alert(VolumeKubus(10, 10));
// ------------------------------------
// -> Parameter dan Argument
// function tambah(a, b) {
//     return a + b;
// }

// function kali(a, b) {
//     return a * b;
// }
// var a = parseInt(prompt('Masukkan angka pertama : '));
// var b = parseInt(prompt('Masukkan angka kedua : '));
// var hasil = kali(tambah(1,2), tambah(3,4));
// console.log(hasil);
// ------------------------------------
// -> Arguments
// function tambah() {
//     var hasil = 0;
//     for (var i = 0; i < arguments.length; i++) {
//         hasil += arguments[i];        
//     }
//     return hasil;
// }
// var coba = tambah(1,2,3);
// console.log(coba);
// ------------------------------------
// -> Refactory
// function VolumeKubus(a, b) {
//     total = a * a * a + b * b * b;
//     return total;
// }
// alert(VolumeKubus(8, 3));
// ------------------------------------
// -> Recursif
// for (var i = 10; i >= 1; i--) {
//     console.log(i);
// }

// function tampilAngka(n) {
//     if (n === 0) {
//         return;
//     }
//     console.log(n);
//     return tampilAngka(n-1);
// }

// tampilAngka(10);

// function faktorial(n) {
//     if (n === 0) {
//         return 1;
//     }
//     return n * faktorial(n-1);
// }
// ------------------------------------
// -> Declaration & Expression
// declaration('Rizky');
// function declaration(nama) {
//     alert('Halo ' + nama);
// }

// function expression(nama) {
//     alert('Halo ' + nama);
// }
// expression('Rizky');
// ------------------------------------
// -> Menipulasi array

// -> 1. Menambah isi array
// var arr = [];
// arr[0] = "Rizky";
// arr[1] = "Aldy";
// arr[2] = "Azril";
// console.log(arr);

// -> 2. Menghapus isi array
// var arr = [
//     "Rizky",
//     "Aldy",
//     "Azril"
// ];
// arr[1] = undefined;
// console.log(arr);

// -> 3. Menampilkan isi array
// var arr = [
//     "Rizky",
//     "Aldy",
//     "Azril",
//     "Ivan"
// ];
// for (var i = 0; i < arr.length; i++) {
//     console.log("Mahasiswa ke - " + [i] + " : " + arr[i]);
// }
// ------------------------------------
// -> Method array
var arr = [
    "Rizky",
    "Aldy",
    "Azril",
    "Ivan"
];
// -> 1. Join
// console.log(arr.join());

// -> 2. Push
// arr.push('Gunawan');
// console.log(arr.join());

// -> 3. Pop
// arr.pop();
// console.log(arr.join());

// -> 4. Unshift
// arr.unshift('Rifky');
// console.log(arr.join());

// -> 5. Shift
arr.shift();
console.log(arr.join());