#include <stdio.h>

int main()
{
	float d,r,phi,v;
	d = 15;
	r = d/2;
	phi = 3.14;
	v = r *  phi * 4/3;
	
	printf("Diameter = %f", d);
	printf("\nJari-jari = %f", r);
	printf("\nVolume = %f", v);
	return 0;
}
