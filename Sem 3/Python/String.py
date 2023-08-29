# single quotation.
s = 'hellopython'
print("This is value stored in s: ", s)

# double quotation.
s = "hello python"
print("This is value stored in s: ", s)

# multi quotation.
s = '''hello python'''
print("This is value stored in s: ", s)

print("This is Length of s: ", len(s))
print("\n")

print("This is value stored in [Frist] index in s: ", s[0])
print("This is value stored in [Last] index in s: ", s[-1])
print("\n")

print("This is value stored in [1 to 4] index in s: ", s[:4])
print("This is value stored in s, except [1 to 4] index: ", s[4:])
print("This is value stored in [Last-4] index in s: ", s[-4:])
print("\n")

print("This is value stored in s, except [Last-there] index: ", s[:-3])
print("This is value stored in [1 to 4] indexes with 'except [1 to 4] index' (whole String): ", s[:4] + s[4:])
print("\n")

print("This is a reverse string in which value is Displayed in [-3] every sequence: ", s[::-3])
print("\n")

print("This is the reverse string in s: ", s[::-1])
