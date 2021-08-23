#include <iostream>

using namespace std;

int main() {
    int baris, angka_penyusun;
    char char_penyusun;

    cin >> baris >> char_penyusun >> angka_penyusun;
    
    for (int bawah = 1; bawah <= baris; bawah++)
    {
        for (int samping = 1; samping < baris; samping++)
        {
            if (bawah == samping || bawah + samping == baris + 1)
            {
                cout << angka_penyusun;
            } else {
                cout << char_penyusun;
            }
            cout << endl;
        }   
    }
}