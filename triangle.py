size = 6
space = 0

for row in range(1, size):
	for space in range(size-row):
		print(' ', end='')
	for column in range(1, row+1):
		if row == size-1:
			print('* ', end='')
		else:
			if column == 1 or column == row:
				print('* ', end='')
			else:
				print('  ', end='')
	print()