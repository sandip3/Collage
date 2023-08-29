# creating an empty tuple.
tuple = ()
print("This is Empty tuple: ", tuple)
print("This is Lenght: ", len(tuple))
print("\n")

# creating a list of tuple.

Animal = ("panda", "zebra", 10 , True, False , "monkey", "panda")

print("This is value stored in Animal Variable: ", Animal)
print("This is Lenght : ", len(Animal))
print("\n")

print(type(Animal)," is type of this variable ")
print("\n")

print("Access 1st index in Animal tuple", Animal[1])
print("Access Last index in Animal tuple", Animal[-1])
print("\n")

print("Access Frist index's Frist word in Animal tuple", Animal[0][0])
print("\n")

print("Access Frist index's last word in Animal tuple", Animal[0][-1])
print("\n")
