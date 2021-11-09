# print("-----------perkalian-----------------")
# angka = float(input("Masukkan angka:"))
# hasil = 5 * angka
# print("Perkalian 5 x",angka,"=",hasil)
# print("Perkalian 5 x %.2f = %.2f"%(angka,hasil))

# print("----------banyak input----------")
# nama = input("Nama:")
# gender = str(input("Jenis kelamin:"))
# umur = int(input("Umur:"))
# beratBadan = float(input("Berat badan:"))

# print("Nama\t\t: %s"
#       "\nJenis kelamin\t: %s"
#       "\nUmur\t\t: %i Tahun"
#       "\nBerat badan\t: %.2f Kg" % (nama, gender, umur, beratBadan)
#       )

print("----------luas bidang------------")

print("Pilih Bidang:"
    "\n1.Lingkaran"
    "\n2.Segitiga"
    "\n3.Persegi Panjang")
pilihan = int(input("Pilih No. Bidang:"))
if(pilihan == 1):
    bidang = "Lingkaran"
    jari2 = float(input("Masukkan jari2:"))
    luas = 22/7 * jari2 *jari2
    print("Bidang %s dengan jari2 %.2f luasnya = %.2f"
    %(bidang, jari2, luas))

elif(pilihan == 2):
    bidang = "Segitiga"
    alas = float(input("Masukan Alas:"))
    tinggi = float(input("Masukan Tinggi:"))
    luas = 0.5 * alas * tinggi
    print("Bidang %s dengan alas %.2f dan %.2f luasnya = %.2f"
        %(bidang,alas,tinggi,luas))

elif(pilihan == 3):
    bidang = "Persegi Panjang"
    p = float(input("Masukkan Panjang:"))
    l = float(input("Masukkan Lebar:"))
    luas = p * l
    print("Bidang %s dengan panjang %.2f dan lebar %.2f luasnya = %.2f"
        %(bidang, p, l, luas))
else: print("No. Bidang yang Anda pilih tidak ada")
    