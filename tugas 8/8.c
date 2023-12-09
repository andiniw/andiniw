#include <stdio.h>
#include <stdlib.h>
#include <string.h>
  
#define MAX_SIZE 6

int main() {
    void **A = malloc(MAX_SIZE * sizeof(void*));
    char input[200];

    printf("Masukkan data (akhiri dengan 999):\nNOTE : Jika data ingin kosong pada baris ke N ketikan NULL\n");

    int i = 0;
    int skipped = 0;

    while (1) {
        if (scanf("%s", input) != 1) {
            skipped++;
            continue;
        }

        if (strcmp(input, "999") == 0) {
            break;
        }

        if (strcmp(input, "NULL") == 0) {
            A[i] = malloc(strlen("NULL") + 1);
            strcpy((char*)A[i], "NULL");
        } else {
            int value = atoi(input);
            if (value > 9 || (value == 0 && strcmp(input, "0") == 0)) {
                A[i] = malloc(sizeof(int));
                *(int*)A[i] = value;
                i++;
            }
             
        }

        if (i + skipped >= MAX_SIZE) {
            void* temp = realloc(A, (MAX_SIZE + 5) * sizeof(void*));
            if (temp == NULL) {
                fprintf(stderr, "Gagal mengalokasikan memori.\n");
                exit(EXIT_FAILURE);
            }
            A = temp;
        }
    }

    printf("Hasil output:\n");
    int j;
    for (j = 0; j < i; ++j) {
        if (A[j] == NULL || strcmp((char*)A[j], "NULL") == 0) {
            printf("NULL ADALAH INDEX KE %d\n", j + skipped);
        } else {
            printf("%d ADALAH INDEX KE %d\n", *(int*)A[j], j + skipped);
        }

        free(A[j]);
    }

    free(A);

    return 0;
}

