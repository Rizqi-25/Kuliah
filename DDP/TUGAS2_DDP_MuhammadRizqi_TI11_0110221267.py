#Tugas DDP2 I/O 

print("-" * 8, "Toko Online", "-" * 8)

pembeli = input("Masukkan Nama Anda:")

print("Barang Yang Dijual:"
    "\n1.Kipas Angin = 1000000"
    "\n2.TV = 2000000"
    "\n3.Mesin Cuci = 3000000"
    "\n4.AC = 4000000"
    "\n5.Kulkas = 5000000")

pilihan = int(input("Pilih No. Barang:"))
if(pilihan == 1):
    barang = "Kipas Angin"
    harga = 1000000
    jumlah = int(input("Mau Beli Berapa:"))
    totalHarga = harga * jumlah
    if(jumlah >= 1 ):
        diskon = totalHarga * 0.05
    else:
        diskon = 0

elif(pilihan == 2):
    barang = "TV"
    harga = 2000000
    jumlah = int(input("Mau Beli Berapa:"))
    totalHarga = harga * jumlah
    if(jumlah >= 1 ):
        diskon = totalHarga * 0.05
    else:
        diskon = 0

elif(pilihan == 3):
    barang = "Mesin Cuci"
    harga = 3000000
    jumlah = int(input("Mau Beli Berapa:"))
    totalHarga = harga * jumlah
    if(jumlah >= 1 ):
        diskon = totalHarga * 0.05
    else:
        diskon = 0

elif(pilihan == 4):
    barang = "AC"
    harga = 4000000
    jumlah = int(input("Mau Beli Berapa:"))
    totalHarga = harga * jumlah
    if(jumlah >= 3 ):
        diskon = totalHarga * 0.10
    elif(jumlah >= 1 ):
        diskon = totalHarga * 0.05
    else:
        diskon = 0

elif(pilihan == 5):
    barang = "Kulkas"
    harga = 5000000
    jumlah = int(input("Mau Beli Berapa:"))
    totalHarga = harga * jumlah
    if(jumlah >= 5 ):
        diskon = totalHarga * 0.20
    elif(jumlah >= 1 ):
        diskon = totalHarga * 0.05
    else:
        diskon = 0

ppn = (totalHarga-diskon)*0.10
hargaBersih = (totalHarga-diskon)+ppn
hargaKotor = totalHarga

print(
    "Nama Pelanggan: %s"
    "\nProduk Pilihan: %s"
    "\nHarga Produk: %i"
    "\nJumlah Barang: %i"
    "\nHarga Kotor: %i"
    "\nDiskon: %i"
    "\nPPN: %i"
    "\nHarga Bersih: %i"
    %(pembeli, barang, harga, jumlah, hargaKotor, diskon, ppn, hargaBersih))

    
