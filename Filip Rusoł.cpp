// ConsoleApplication5.cpp : Ten plik zawiera funkcję „main”. W nim rozpoczyna się i kończy wykonywanie programu.
//

#include "pch.h"
#include <time.h>
#include <conio.h>
#include <iostream>
#include <string>
#include <windows.h>

using namespace std;
class Data {
private:
	int dzien;
	int miesiac;
	int rok;
	int kat, tak;
	string tekst;
public:
	Data() {
		SYSTEMTIME st;
		GetLocalTime(&st);
		dzien = st.wDay;
		miesiac = st.wMonth;
		rok = st.wYear;
		kat= st.wDay;
		tak = st.wMonth;
	};

	Data(int r, int m, int d) {
		r = rok;
		d = dzien;
		m = miesiac;
	};
	void wpisz() {
		cout << "pisz powiadomienie" << endl;
		cin >> tekst;
	}
	void wypisz() {
		cout << dzien << "." << miesiac << "." << rok << " " << tekst;
	}
	void zmiana(int dni) {
		dzien = dzien + dni;
	
		if (dzien > 31) {
			dzien = dzien - 31;
			miesiac++;
		}
	}
	void powrot() {
		dzien = kat;
		miesiac = tak;
	}

};
int main()
{
	Data ds;
	Data *dr = new Data(10, 10, 2018);
	ds.wpisz();
	ds.zmiana(15);
	ds.wypisz();
	ds.powrot();
	cout << endl;
	ds.zmiana(28);
	ds.wypisz();
}

