class Lingkaran():
    PHI = 3.14
    r = 0
    luas = 0
    keliling = 0
    
    # Konstruktor jari2
    def __init__(self, r):
        self.r = r

    # Method Rumus Menghitung Luas dan Keliling
    def Luas(self):
        self.luas = self.PHI * self.r * self.r

    def Keliling(self):
        self.keliling = self.PHI * self.r * 2
    
    # Cetak
    def cetak(self):
        print(" Jari-jari lingkaran: ", self.r,
        "\n Luas Lingkaran: ", self.luas,
        "\n Keliling Lingakaran: ", self.keliling
        )