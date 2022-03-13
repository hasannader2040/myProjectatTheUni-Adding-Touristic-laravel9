// Insertion Sort
#include <stdio.h>
void Insertion_Sort(int a[], int length)
{
	// two loops the first one to go to each elements of the numbers
	// and the second one to shift to right position and to go to the suitable place of it

	int temp, whole;
	for (int i = 1; i < length; i++) // it will start form 1 when it puck up it
	{
		temp = a[i];	   // it will get it out for temporary to compare it with the others
		whole = whole - 1; // becuase it will start form right to left and it will subtract a number of elements of the index
		// and as long as they are subtracting
		while (whole > 0 && a[whole - 1] > temp)
		{
			a[whole] = a[whole - 1]; // to shift to from right to left position and to go to the suitable place of it
			whole = whole - 1;		 // to fix it and make it much better again (to update it )
		}
		a{whole} = temp;
	}
}
int main()
{
	int a[] = {8, 4, 9, 5, 7, 6, 3, 2};
	Insertion_Sort{a, 8}; // the size of it or the length of it
	for (int i = 1; i < 8; i++)
		printf("a[%d] = %d \n", i a[i]);
	return 0;
}