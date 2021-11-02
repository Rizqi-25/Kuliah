#TUGAS DDP 1 MUHAMMAD RIZQI NIM : 0110221267 TI11

pegawai = ["Ahmad", "Alex"]
gaji_pokok = [4000000, 6000000]
anak1 = 2
anak2 = 5
agama1 = "Islam"
agama2 = "Kristen Protestan"

tunjangan_jabatan = [number * 0.20 for number in gaji_pokok]
tunjangan_keluarga1 = gaji_pokok
#Tunjangan Pegawai Ahmad
if (anak1 > 0 and anak1 <= 2):
    tunjangan_keluarga1 = [number * 0.10 for number in gaji_pokok]
elif(anak1 > 2):
    tunjangan_keluarga1 = [number * 0.20 for  number in gaji_pokok]
else:
    tunjangan_keluarga1 = [number * 0 for number in gaji_pokok]

#Tunjangan Pegawai Alex
if (anak2 > 0 and anak1 <= 2):
    tunjangan_keluarga2 = [number * 0.10 for number in gaji_pokok]
elif(anak2 > 2):
    tunjangan_keluarga2 = [number * 0.20 for  number in gaji_pokok]
else:
    tunjangan_keluarga2 = [number * 0 for number in gaji_pokok]

#Perhitungan Gaji kotor
jumlah_gaji_kotor1 = gaji_pokok[0] + tunjangan_jabatan[0] + tunjangan_keluarga1[0]
jumlah_gaji_kotor2 = gaji_pokok[1] + tunjangan_jabatan[1] + tunjangan_keluarga2[1]

#Perhitungan Zakat Profesi

zakat_profesi1 = (0, 0.025)[agama1 == "Islam" and jumlah_gaji_kotor1 >= 6000000]*jumlah_gaji_kotor1
zakat_profesi2 = (0, 0.025)[agama2 == "Islam" and jumlah_gaji_kotor2 >= 6000000]*jumlah_gaji_kotor2

#Perhitungan Gaji Bersih

gaji_bersih1 = jumlah_gaji_kotor1 - zakat_profesi1
gaji_bersih2 = jumlah_gaji_kotor2 - zakat_profesi2

#Output Hasil
print("SLIP GAJI PT. XYZ")
print('='*20)
print("Nama Pegawai \t\t:", pegawai[0],
       "\n Agama \t\t\t:", agama1,
       "\n Jumlah Anak \t\t:", anak1,
       "\n Gaji Pokok \t\t:", gaji_pokok[0],
       "\n Tunjangan Jabatan \t:", tunjangan_jabatan[0],
       "\n Tunjangan Keluarga \t:", tunjangan_keluarga1[0],
       "\n Gaji Kotor \t\t:", jumlah_gaji_kotor1,
       "\n Zakat Profesi \t\t:", zakat_profesi1,
       "\n Take Home Pay \t\t:", gaji_bersih1
)

print("SLIP GAJI PT. XYZ")
print('='*20)
print("Nama Pegawai \t\t:", pegawai[1],
       "\n Agama \t\t\t:", agama2,
       "\n Jumlah Anak \t\t:", anak2,
       "\n Gaji Pokok \t\t:", gaji_pokok[1],
       "\n Tunjangan Jabatan \t:", tunjangan_jabatan[1],
       "\n Tunjangan Keluarga \t:", tunjangan_keluarga1[1],
       "\n Gaji Kotor \t\t:", jumlah_gaji_kotor1,
       "\n Zakat Profesi \t\t:", zakat_profesi2,
       "\n Take Home Pay \t\t:", gaji_bersih2
)
