#include <stdio.h>
#include <math.h>

int main(){
	
	double panjang_alas,tinggi,sisi_miring;
	
	printf("masukan panjang alas (dalam cm):");
	scanf("%lf", &panjang_alas);
	
	printf("masukan tinggi (dalam cm):");
	scanf("%lf",&tinggi);
	
	sisi_miring = sqrt(pow(panjang_alas,2)+pow(tinggi,2));
	
	printf("panjang sisi miring segitiga adalah: %.2f cm/n ",sisi_miring);
	
	return 0;																																																																																																																
}
