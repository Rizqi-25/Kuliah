nilai = {'Smit':50, 'Sarah':80, 'Rizqi':90, 'Sidiq':78}
print("Data nilai : ",nilai)

#cetak nilai saja
print("\n-----------Cetak valuenya saja-----------\n")
for skor in nilai.values():
    print("Data Nilai :" ,skor)


#cetak nama saja
print("\n-----------cetak key saja----------\n")
for nama in nilai.keys():
    print("Data Nilai :",nama)


#cetak key dan valu secara bersamaan
print("\n-----------cetak key dan value-----------")

for nama,skor in nilai.items():
    print("Nama Siswa : %s \t Nilai : %i" % (nama,skor))
