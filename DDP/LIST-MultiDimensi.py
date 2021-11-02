#List Multi Dimensi(Lebih dari 1 Dimensi)
list_makanan = [
    ['Salad buah', 'Salad sayur', 'Asinan'],
    ['Ayam goreng', 'Ayam Geprek', 'Ayam bakar'],
    ['Nasi Putih', 'Nasi Uduk', 'Nasi Goreng']
]
print('----Cetak Per Item----')
print(list_makanan[0][2])
print(list_makanan[1][1])
print(list_makanan[2][0])
print('----Cetak menggunakan NestedLoop----')
for menu in list_makanan:
    for makanan in menu:
        print(makanan)