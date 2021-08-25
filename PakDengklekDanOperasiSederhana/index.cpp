#include <iostream>

using namespace std;

int main() {
    int x,y;
    cin>>x>>y;

    if (x == 0 && y == 0)
    {
        cout<<"Jangan input angka 0";
    } else {
        // Penjumlahan
        int tambah = x + y;
        cout<<tambah<<"\n";

        // Pengurangan
        int kurang = x - y;
        cout<<kurang<<"\n";

        // Perkalian
        int kali = x * y;
        cout<<kali<<"\n";

        // Pembagian
        int bagi = x / y;
        cout<<bagi<<"\n";

        // Modulus
        int modul = x % y;
        cout<<modul<<"\n";
    }
}