#include <stdio.h>

int main() {
    char A[10] = {'S', 'T', 'T', 'M', 'A', 'N', 'D', 'A', 'L', 'A'};
    char C;
    int count = 0;

    printf("Masukkan karakter: ");
    scanf("%c", & C);  

    printf("Karakter yang sama:\n");
    for (int i = 0; i < 10; i++) {
        if ("%c", A[i]) {
            count++;
        }
    }

    if (count > 0) {
        printf("ADA\n");
    } else {
        printf("TIDAK ADA\n");
    }

    return 0;
}
