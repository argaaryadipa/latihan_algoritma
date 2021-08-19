#include <iostream>

using namespace std;

int main()
{
    int s, n, d, i;

    cin >> s; cin >> n; cin >> d;

    int j = 0;
    for (i = s; j < n; i = i + d) {
        cout << i << endl;
        j++;
    }
    return 0;
}