#include <iostream>

using namespace std;

int main() 
{

	int nilai;
	cout<< "Nilai : ";
	cin>>nilai;
	
	
	if	(nilai >= 0 & nilai <= 100) {
		cout<< "Ya" << endl;
	} else {
		cout<<"Tidak" << endl;
		
	}
	return 0;
}
