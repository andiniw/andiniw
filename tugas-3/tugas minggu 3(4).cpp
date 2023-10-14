#include <stdio.h>

int main() {
	int bilangan;
	
	//input bilangan bulat positif 
	printf("masukan bilangan bulat positif:");
	scanf("%d",& bilangan);
	
	//periksa apakah bilangan ganjil atau genap
	if (bilangan %2==0){
		printf("GENAP\n");
	}
	return 0;
}

