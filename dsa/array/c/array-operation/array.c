/*
 Array Operations Driver Module
*/
#include "array.h"

int main(void)
{
    int arr[MAX], size = 0, ch;
    printf("\n\narr - main(): %p\n\n", arr);
    printf("ARRAY OPERATIONS\n");
    while (1)
    {
        printf("\nMain Menu\n");
        printf("1. Display\n");
        printf("2. Insert\n");
        printf("Enter choice [0 for exit]: ");
        scanf("%d", &ch);
        switch (ch)
        {
        case 0:
            printf("Bye!\n");
            return 0;
            break;
        case 1:
            display(arr, size);
            break;
        case 2:
            insertMenu(arr, &size);
            break;
        default:
            printf("Invalid option!\n");
            break;
        }
    }
}
