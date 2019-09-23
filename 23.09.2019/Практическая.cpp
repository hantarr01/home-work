#include<iostream> 
#include <cmath> 
using namespace std; 

int main(){ //Константа – ускорение свободного падения и число pi: 
setlocale(LC_ALL, "Russian");
const double g=9.8;
 //Начальные и расчетные параметры задачи //(скорость, угол и время полета): 
 double S,H,T; //Момент времени и координаты: 
 double U; //Ввод параметров:
  cout<<"Введите высоту H = "; 
  cin>>H;
  cout<<"Введите скорость U = "; 
  cin>>U; 
   T= sqrt(2*H/g);
    cout<<"Время T = "<<T<<": "; 
	S = U*T;
	cout<<"Расстояние S = "<<S<<":";
	    return 0;
	}
