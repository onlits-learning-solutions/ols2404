#include <stdio.h>

int *sort(int arr[], int n, int *resultN);

int main(int argc, char const *argv[])
{
    int resultN;
    int arr[] = {12, 99, 3, 58, 21};
    sort(arr, 5, &resultN);
    printf("Sorted array:\n %d \n", resultN);
    for (int i = 0; i < resultN; i++)
    {
        printf("%d\n", arr[i]);
    }
    return 0;
}

int *sort(int arr[], int n, int *resultN)
{
    *resultN = 0;
    for (int i = 0; i < n - 1; i++)
    {
        for (int j = i + 1; j < n; j++)
        {
            if (arr[i] > arr[j])
            {
                int t = arr[i];
                arr[i] = arr[j];
                arr[j] = t;
            }
        }
        *resultN++;
    }
    return arr;
}
