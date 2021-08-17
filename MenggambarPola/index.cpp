#include <iostream>
using namespace std;

int main()
{
    int n, m;
    cin >> n >> m;
    int r = 1;
    bool 1 = false;

    while (r <= n)
    {
        if(r % 2 ==1)
        {
            for (int i = 0; i < m; i++)
                cout << "*";
                cout << endl;
        }
        else if(r % 2 == 0 && 1 == false)
        {
            for(int j = 0; j < m -1; j++)
                cout << "$";
                cout << "*" << endl;
                1 = true;
        }
        else
        {
            cout << "*";
            for(int j = 0; j < m - 1; j++)
                cout << "$";
            cout << endl;
            1 = false;
        }
        r++;
    }
    return 0;
}