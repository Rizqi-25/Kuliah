import math
class SegitigaSiku2():
    a = 0
    t = 0
    luas = 0
    keliling = 0
    
    # Konstruktor Alas dan Tinggi
    def __init__(self, a, t):
        self.a = a
        self.t = t

    # Method Rumus Menghitung Luas dan Keliling
    def Luas(self):
        self.luas = 0.5 * self.a * self.t

    def Keliling(self):
        sisi_miring = self.a**2 + self.t**2
        sisi_miring = math.sqrt(sisi_miring)
        self.keliling = self.a + self.t + sisi_miring
        self.sisi_miring = sisi_miring
    
    # Cetak
    def cetak(self):
        print(" Alas Segitiga: ", self.a,
        "\n Tinggi Segitiga: ", self.t,
        "\n Sisi Miring: ", self.sisi_miring,
        "\n Luas Segitiga Siku-siku: ", self.luas,
        "\n Keliling Segitiga Siku-siku: ", self.keliling
        )