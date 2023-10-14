#include <stdio.h>
int main(){
	
	//Deklarasi variable 
	int bilangan;
	
	//Meminta input bilangan dari pengguna 
	printf("masukan sebuah bilangan bulat postif: ");
	scanf("%d" , &bilangan)
	
	//Memeriksa apakah bilangan positif atau tidak 
	
	//Memeriksa apakah bilangan genap atau ganjil 
	if(bilangan % 2 == 0){ 
	printf("GENAP\n");
	}else{
	printf("GANJIL\n");
	}
	
	return 0;	
}
