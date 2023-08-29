a = input(("Enter a string:"))
a = a.casefold()
if (a == a[::-1]):
    print("The string is a palindrome")
else:
    print("The string is not a palindrome")
