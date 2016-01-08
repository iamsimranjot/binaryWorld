#include<stdio.h>
#include<conio.h>
#include<math.h>
int main(int argc, char* argv[])
{
    int n, k, c;
    printf("Enter an integer in decimal number system\n");
    scanf("%d", &n);

    printf("%d in binary number system is:\n", n);
    for (c = 4; c >= 0; c--)
    {
        k = n >> c;
        if (k & 1)
            printf("1");
        else
            printf("0");
    }
    printf("\n\n");
    printf("%d's complement is:\n", n);
    for (c = 4; c >= 0; c--)
    {
        k = n >> c;
        if (k & 1)
            printf("0");
        else
            printf("1");
    }
    getch();
    return 0;
}
