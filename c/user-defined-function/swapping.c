#include <stdio.h>

void swap(int *a, int *b);

int main(int argc, char const *argv[])
{
    int a = 10, b = 20;
    swap(&a, &b);
    printf("The values of a and b after swapping are %d and %d, respectively.\n", a, b);
    return 0;
}

void swap(int *a, int *b)
{
    int t = *a;
    *a = *b;
    *b = t;
}