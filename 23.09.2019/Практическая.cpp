#include<iostream> 
#include <cmath> 
using namespace std; 

int main(){ //��������� � ��������� ���������� ������� � ����� pi: 
setlocale(LC_ALL, "Russian");
const double g=9.8;
 //��������� � ��������� ��������� ������ //(��������, ���� � ����� ������): 
 double S,H,T; //������ ������� � ����������: 
 double U; //���� ����������:
  cout<<"������� ������ H = "; 
  cin>>H;
  cout<<"������� �������� U = "; 
  cin>>U; 
   T= sqrt(2*H/g);
    cout<<"����� T = "<<T<<": "; 
	S = U*T;
	cout<<"���������� S = "<<S<<":";
	    return 0;
	}
