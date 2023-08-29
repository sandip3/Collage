# *
# * *
# * * *
# * * * *
# * * * * *

# n = int(input("Enter the number of rows :"))

# for i in range(0, n):
#     for j in range(0, i + 1):
#         print("* ", end=" ")
#     print()

# 1
# 1 2
# 1 2 3
# 1 2 3 4
# 1 2 3 4 5

# a = int(input("Enter the number of rows: "))

# for i in range(1, a+1):
#     for j in range(1, i + 1):
#        print(j, end=' ')
#     print("")

# 1
# 2 3
# 4 5 6
# 7 8 9 10
# 11 12 13 14 15

a = int(input("Enter number of rows : "))
num = 1
for i in range(1, a+1):
    for j in range(1, i+1):
        print(num, end=" ")
        num += 1
    print()
