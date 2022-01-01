class PersegiPanjang():
    p = 0
    l = 0
    luas = 0
    keliling = 0
    
    # Konstruktor panjang dan lebar
    def __init__(self, p, l):
        self.p = p
        self.l = l

    # Method Rumus Menghitung Luas dan Keliling
    def Luas(self):
        self.luas = self.p * self.l

    def Keliling(self):
        self.keliling = 2 * (self.p + self.l)
    
    # Cetak
    def cetak(self):
        print(" Panjang persegi panjang: ", self.p,
        "\n Lebar persegi panjang", self.l,
        "\n Luas Persergi Panjang: ", self.luas,
        "\n Keliling Persergi Panjang: ", self.keliling
        )