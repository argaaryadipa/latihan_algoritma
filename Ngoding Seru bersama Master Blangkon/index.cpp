#include <iostream>
#include <cstdio>
#include <string>

using namespace std;

int main() {
    
    int A, B, C, K, big, small;
    cin >> A >> B >> C >> K;
        
    big = max(A, max(B,C));
    small = min(A, min(B,C));

    if (K == 1) {
        cout << small << " " << A+B+C-big-small << " " << big;
    } else {
        cout << big << " " << A+B+C-big-small << " " << small;
    }

    cout << endl;
    return 0;

}