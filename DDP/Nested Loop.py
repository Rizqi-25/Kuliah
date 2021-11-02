# Nested Loop 

# For
# Setiga siku-siku Normal
for i in range(5):
    for j in range(i+1):
        print('#', end=' ')
    print('') 

# Segitiga siku-siku terbalik
q = 7
for i in range(0, q):
    for j in range(0, q-1):
        print('*', end='')
    q -= 1
    print('')

# Segitiga Sama kaki
t = 8
s = t - 1 #untuk spasi
for i in range(0, t):
    for j in range(0, s):
        print(' ', end='')
    s -= 1
    for j in range(0, i + 1): #cetak Bintangnya
        print('* ', end='')
    print('')
# # While

jarak = ''
baris = 1
# Looping barisnya
while baris <= 5:
    kol = baris
    # Looping Kolom
    while kol > 0:
        jarak += '%'
        kol -= 1
    jarak += "\n"
    baris += 1
print (jarak)
