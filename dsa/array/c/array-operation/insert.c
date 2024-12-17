/*
 Array Insertion Module
*/

#include "array.h"

void insertMenu(int *arr, int *size)
{
    int ch;
    printf("\n\narr - insertMenu(): %p\n\n", arr);
    while (1)
    {
        printf("\nINSERT MENU\n");
        printf("1. Insert at the end\n");
        printf("Enter choice [0 to exit]: ");
        scanf("%d", &ch);
        switch (ch)
        {
        case 0:
            return;
            break;
        case 1:
            insertEnd(arr, size);
            break;
        default:
            printf("Invalid option!\n");
            break;
        }
    }
}
void insertEnd(int *arr, int *size)
{
    printf("\n\narr - insertEnd(): %p\n\n", arr);
}