#include <stdio.h>

int main(){
	int n;
	printf("masukan bilangan: ");
	scanf("%d", &n);
	
	if(n > 50){
		n -= 25;
	} else {
		n += 10;
	}
	printf("nilai akhir : %d\n", n);
	
	return 0;
}
