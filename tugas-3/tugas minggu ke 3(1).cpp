#include <stdio.h>
#include <math.h>

int main() {
	double panjang_alas ,tinggi ,luas, keliling;
	
	printf("masukan panjang alas (dalam cm): ");
	scanf("%lf", &panjang_alas);
	printf("masukan tinggi (dalam cm): ");
	scanf("%lf", &tinggi);
	
	luas = 0,5 *panjang_alas * tinggi;
	
	double sisi_miring = sqrt(pow(panjang_alas,2)+pow(tinggi,2));
	keliling =panjang_alas + tinggi + sisi_miring;
	
	printf("luas segitiga: %.2lf cm^2\n", luas);
	printf("keliling segitiga; %.2lf cm\n", keliling);
	
	return 0;
}
