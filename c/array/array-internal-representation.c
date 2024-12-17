#include <stdio.h>
int main(int argc, char const *argv[])
{
    int arr[5] = {10, 20, 30, 40, 50};
    printf("arr: %p\n", arr);
    printf("&arr: %p\n", &arr);
    printf("sizeof(arr): %ld bytes\n", sizeof(arr));
    for (int i = 0; i < 5; i++)
        printf("arr[%d]: %d\n", i, arr[i]);

    for (int i = 0; i < 5; i++)
        printf("&arr[%d]: %p\n", i, &arr[i]);
    return 0;
}
