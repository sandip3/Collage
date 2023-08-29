tuple = ('yogin', 'jay', 23, 'apple', 'python', 53)
print('tuple =', tuple)

print('tuple[3] =', tuple[3])
print('tuple[-4] =', tuple[-4])
print('type(tuple) =', type(tuple))
print('len(tuple) =', len(tuple))
print('Reverse of tuple =', tuple[::-1])

t1 = ('jay', 'yogin', 56)
print('t1 =', t1)
t2 = ('parth', 78, 'apple')
print('t2 =', t2)

t3 = t1+t2
print('after (t3=t1+t2) then t3 =', t3)
t3 = t1, t2
print('after (t3=t1,t2) then t3 =', t3)
