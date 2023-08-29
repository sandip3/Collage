n = int(input("Enter number of terms: "))
a = 0
b = 1
# starting two values of fibonacci series
i = 0

if n <= 0:
    print("Please enter a positive integer")
elif n == 1:
    print("Fibonacci sequence upto", n, ":")
    print(a)
else:
    print("Fibonacci sequence:")
    while (i < n):
        print(a)
        c = a + b  
        a = b
        b = c
        i += 1
