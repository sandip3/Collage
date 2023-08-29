# num = int(input("Enter a number: "))

# if num <= 1:
#     print(num, "is not a prime number")
# elif num > 1:
#     for i in range(2, num):
#         if (num % i) == 0:
#             flag = True
#             print(num, "is not a prime number")
#             break
#     else:
#         print(num, "is a prime number")

lower = int(input("enter the lower bound: "))
upper = int(input("enter the upper bound: "))
print("\n----------------------------------------------------------\n")
print("Prime numbers between", lower, "and", upper, "are:")
for num in range(lower, upper + 1):
    if num > 1:
        for i in range(2, num):
            if (num % i) == 0:
                break
        else:
            print(num)
