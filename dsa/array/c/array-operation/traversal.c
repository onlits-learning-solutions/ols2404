/*
 Array Traversal Module
 Displays the content of the array
*/
#include "array.h"

void display(int *arr, int size)
{
    if (size == 0)
    {
        printf("Array Empty!\n");
    }
    else
    {
        printf("The array contains following values:\n");
        for (int i = 0; i < size; i++)
        {
            printf("%d\n", arr[i]);
        }
    }
}