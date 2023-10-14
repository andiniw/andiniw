#include <stdio.h>

int main () {
	float celcius, fahrenhit,reamur;
	
	printf("masukan suhu dalam celcius: ");
	scanf("%f", &celcius);
	
	fahrenhit = (celcius * 9/5) + 32;
	reamur = (celcius * 4/5);
	
	printf("suhu dalam fahrenhit: %.2f derajat fahrenhit\n", fahrenhit);
	printf("suhu dalam reamur: %2f derajat reamur\n", reamur);
	
	return 0;
}
